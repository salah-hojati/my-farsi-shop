root

pass AG8GpTvOvnW1Q*RVmY

github token df



sudo chown -R salah:salah /home/salah/shop/my-farsi-shop
sudo chmod -R 755 /home/salah/shop/my-farsi-shop

sudo chown -R salah:salah /home/salah/IdeaProjects/my-farsi-shop
sudo chmod -R 755 /home/salah/IdeaProjects/my-farsi-shop

/home/salah/IdeaProjects/my-farsi-shop




--------
docker-compose -f docker-compose.dev.yml exec db mysql -u root -ppassword

docker-compose -f docker-compose.dev.yml exec db mysql -u root -ppassword wordpress -e "SELECT ID, post_title, post_type FROM wp_posts WHERE post_type = 'page';"

docker-compose -f docker-compose.dev.yml exec db mysql -u root -ppassword wordpress -e "SELECT ID, post_title FROM wp_posts WHERE post_title LIKE '%rtrtretrtret%';"

USE wordpress;
SHOW TABLES;

