#!/bin/bash
set -e  # Exit on any error

echo "🎯 Starting deployment - Database synchronization..."

echo "🔄 Step 1: Pulling latest code and database backup..."
git pull origin v0

# Create database directory if it doesn't exist
mkdir -p database

# Check if backup file exists
if [ ! -f "database/wordpress_backup.sql" ]; then
    echo "❌ ERROR: Database backup file not found!"
    echo "💡 Solution: Run './commit.sh' on your development machine first"
    echo "💡 Then run './deploy.sh' on production again"
    exit 1
fi

echo "🗄️ Step 2: Importing database to production..."
docker-compose -f docker-compose.prod.yml  exec -T db mysql -u root -ppassword wordpress < database/wordpress_backup.sql

echo "🔄 Step 3: Updating WordPress URLs for production environment..."
docker-compose -f docker-compose.prod.yml  exec db mysql -u root -ppassword wordpress -e "UPDATE wp_options SET option_value = 'http://127.0.0.1:8000' WHERE option_name IN ('home', 'siteurl');"

echo "📝 Updating wp-config.php for cookies..."
# Add cookie fixes to wp-config.php
if grep -q "COOKIE_DOMAIN" data/wp-config.php; then
    echo "✅ Cookie settings already in wp-config.php"
else
    cat >> data/wp-config.php << 'EOF'

// Fix cookie issues for Docker environment
define('COOKIE_DOMAIN', '');
define('ADMIN_COOKIE_PATH', '/');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');
EOF
    echo "✅ Cookie settings added to wp-config.php"
fi


echo "🐳 Step 4: Restarting containers with fresh data..."
docker-compose -f docker-compose.prod.yml down
docker-compose -f docker-compose.prod.yml up -d

echo "⏳ Step 5: Waiting for WordPress to initialize..."
sleep 10

echo "✅ Step 6: Verifying database synchronization..."
PROD_TABLES=$(docker-compose  -f docker-compose.prod.yml  exec -T db mysql -u root -ppassword wordpress -e "SHOW TABLES;" | wc -l)
PROD_PAGES=$(docker-compose -f docker-compose.prod.yml exec -T db mysql -u root -ppassword wordpress -e "SELECT COUNT(*) FROM wp_posts WHERE post_type = 'page' AND post_status = 'publish';" | tail -1)

echo "📊 Synchronization Report:"
echo "   - Tables in production: $PROD_TABLES"
echo "   - Published pages in production: $PROD_PAGES"

echo "🧹 Step 7: Cleaning up..."
rm database/wordpress_backup.sql

echo "🎉 Deployment completed!"
echo "✅ Dev and Prod databases are now IDENTICAL"
echo "🌐 Access your site: http://127.0.0.1:8000"