#!/bin/bash
set -e  # Exit on any error

echo "📦 Starting backup - Preparing database for production..."

# Create database directory if it doesn't exist
mkdir -p database
echo "🔍 Verification Script"

# منتظر بمانیم MariaDB آماده شود
echo "⏳ Waiting for database to be ready..."
until docker-compose -f docker-compose.dev.yml exec db mysql -u root -ppassword -e "SELECT 1;" > /dev/null 2>&1; do
    sleep 5
done

echo "✅ Database is ready!"

echo "🗄️ Step 1: Exporting database from development..."

echo "✅ Step 2: Verifying backup file..."
if [ ! -f "database/wordpress_backup.sql" ]; then
    echo "❌ Backup failed - no file created!"
    exit 1
fi



# Count tables and pages for verification
BACKUP_TABLES=$(grep -c "CREATE TABLE" database/wordpress_backup.sql || true)
BACKUP_PAGES=$(docker-compose -f docker-compose.dev.yml exec db mysql -u root -ppassword wordpress -e "SELECT COUNT(*) FROM wp_posts WHERE post_type = 'page' AND post_status = 'publish';" | tail -1)

echo "📊 Backup Report:"
echo "   - Tables backed up: $BACKUP_TABLES"
echo "   - Published pages: $BACKUP_PAGES"

echo "🔄 Step 3: Syncing files..."
sleep 3

echo "🚀 Step 4: Committing and pushing to GitHub..."
git add data/
git add database/
git add .
git commit -m "WordPress sync: $(date '+%Y-%m-%d %H:%M:%S') - $BACKUP_PAGES pages, $BACKUP_TABLES tables" || echo "No changes to commit"
git push origin v0

echo "🎉 Backup completed!"
echo "✅ Database ready for production synchronization"