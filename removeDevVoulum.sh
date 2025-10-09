# توقف کامل
docker-compose -f docker-compose.dev.yml down

# حذف volume مشکل‌ساز
docker volume rm my-farsi-shop_db_data



# منتظر بمانیم MariaDB کامل بالا بیاد
sleep 30