#!/bin/bash
set -e  # Exit on any error

docker-compose -f docker-compose.dev.yml down
docker-compose -f docker-compose.dev.yml up -d
#sudo docker volume rm my-farsi-shop_db_data
#docker-compose -f docker-compose.dev.yml up -d --force-recreate

echo "🎯 Starting deployment - Database synchronization..."

# Load environment variables

    echo "⚠️  No .env.prod file found, using defaults"
    DB_USER="root"
    DB_PASSWORD="password"
    DB_NAME="wordpress"
    DB_HOST="db"
    MYSQL_ROOT_PASSWORD="password"

echo "🎯 Starting deployment - Database synchronization..."
# 🚨 CRITICAL: Wait for MySQL to be fully initialized
echo "⏳ Waiting for MySQL to be ready (this can take 30+ seconds)..."
until docker-compose -f docker-compose.dev.yml exec -T db mysql -u $DB_USER -p$DB_PASSWORD -e "SELECT 1;" > /dev/null 2>&1; do
    echo "MySQL not ready yet... waiting 10 seconds"
    sleep 10
done
echo "✅ MySQL is ready!"

echo "🗄️ Step 2: Importing database to production..."
sudo docker-compose -f docker-compose.dev.yml  exec -T db mysql -u $DB_USER -p$MYSQL_ROOT_PASSWORD $DB_NAME < database/wordpress_backup.sql

echo "🔄 Step 3: Updating WordPress URLs for production environment..."
sudo docker-compose -f docker-compose.dev.yml  exec db mysql -u $DB_USER -p$MYSQL_ROOT_PASSWORD $DB_NAME -e "UPDATE wp_options SET option_value = 'http://127.0.0.1:8000' WHERE option_name IN ('home', 'siteurl');"
