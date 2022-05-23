# mv -f wordpress/* /var/www/html
cp -a /wordpress/. /var/www/html/
chown -R www-data:www-data /var/www/html

php-fpm7.3 -F -R
