# توقف کامل
docker-compose -f docker-compose.prod.yml down

# حذف volume مشکل‌ساز
docker volume rm my-farsi-shop_db_data

# راه‌اندازی مجدد
docker-compose -f docker-compose.prod.yml up -d

# منتظر بمانیم MariaDB کامل بالا بیاد
sleep 30