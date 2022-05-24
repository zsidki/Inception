# base image : debian is used for its small size
FROM debian:buster

RUN apt-get update
RUN apt-get install -y php7.3 php7.3-fpm php7.3-curl php7.3-gd
RUN apt-get install -y php-mysql php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cgi
RUN apt-get install  -y php-curl php-intl php-soap php-xmlrpc

RUN apt-get install -y wget 
RUN apt-get install -y vim 
RUN apt-get install -y curl
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xzvf latest.tar.gz
RUN echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf
RUN mkdir -p /var/run/php

COPY ./tools/wp-config.php ./wordpress/
COPY ./tools/setup.sh .


# todo remove it
COPY ./tools . 


CMD ["sh", "setup.sh"]
