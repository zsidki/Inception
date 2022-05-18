apt-get update 
apt-get install wget -y 
apt-get install php7.3-fpm -y 
apt-get install -y php7.3 php7.3-fpm php7.3-curl php7.3-gd 
apt-get install -y php-mysql php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cgi 
apt-get install  -y php-curl php-intl php-soap php-xmlrpc
echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf
mkdir -p /var/run/php

# mkdir -p /var/www/html \
#     && chmod 777 /var/www/html \
#     && mv ./index.php /var/www/html

# echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf
# mkdir -p /var/run/php

#sed 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 0.0.0.0:9000/' -i /etc/php/7.3/fpm/pool.d/www.conf


# service php7.3-fpm start
# # fi 
# # php-fpm7.3 --nodaemonize

cd /tmp
apt-get install  vim -y
apt-get install curl -y
curl -LO https://wordpress.org/latest.tar.gz
tar xzvf latest.tar.gz
cp /tmp/wordpress/wp-config-sample.php /tmp/wordpress/wp-config.php