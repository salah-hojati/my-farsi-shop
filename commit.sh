#!/bin/bash
set -e

echo "📦 شروع پشتیبان‌گیری از دیتابیس..."

mkdir -p database

echo "⏳ منتظر آماده شدن دیتابیس..."
until docker-compose -f docker-compose.dev.yml exec db mysql -u root -ppassword -e "SELECT 1;" > /dev/null 2>&1; do
    sleep 5
done

echo "✅ دیتابیس آماده است!"

echo "🗄️ درحال export دیتابیس..."
docker-compose -f docker-compose.dev.yml exec db mysqldump -u root -ppassword \
  --skip-tz-utc \
  --single-transaction \
  --quick \
  wordpress > database/wordpress_backup.sql

# بررسی موفقیت export
if [ ! -s "database/wordpress_backup.sql" ]; then
    echo "❌ خطا در ایجاد پشتیبان!"
    exit 1
fi

# اطلاعات پشتیبان
BACKUP_TABLES=$(grep -c "CREATE TABLE" database/wordpress_backup.sql)
BACKUP_PAGES=$(docker-compose -f docker-compose.dev.yml exec -T db mysql -u root -ppassword wordpress -e "SELECT COUNT(*) FROM wp_posts WHERE post_type = 'page' AND post_status = 'publish';" | tail -1 | tr -d ' ')
BACKUP_SIZE=$(wc -c < database/wordpress_backup.sql | tr -d ' ')

echo "📊 گزارش پشتیبان:"
echo "   - تعداد جدول‌ها: $BACKUP_TABLES"
echo "   - تعداد صفحات: $BACKUP_PAGES"
echo "   - حجم فایل: $((BACKUP_SIZE / 1024)) KB"

echo "🚀 آپلود به GitHub..."
git add .
git commit -m "پشتیبان وردپرس: $(date '+%Y-%m-%d %H:%M:%S') - $BACKUP_PAGES صفحه, $BACKUP_TABLES جدول" || echo "تغییری برای commit وجود ندارد"
git push origin v1

echo "🎉 پشتیبان‌گیری با موفقیت انجام شد!"