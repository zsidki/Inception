
# base image : debian is used for its small size
FROM debian:buster


EXPOSE 443 80

#copy everything to docker
#COPY srcs /tmp

#update repo and software package
RUN apt-get update \
&& apt-get upgrade -y\
&& apt-get install -y nginx \
&& apt-get install -y curl \
&& apt-get install openssl -y 
RUN apt install --reinstall php-fpm


RUN apt-get -y install wget


COPY ./tools .

# #phpmyadmin
RUN apt-get -y install php7.3-fpm php7.3-common php7.3-mysql php7.3-gmp php7.3-curl php7.3-intl php7.3-mbstring php7.3-xmlrpc php7.3-gd php7.3-xml php7.3-cli php7.3-zip php7.3-soap php7.3-imap
#RUN tar xf tmp/phpmyadmin.tar.gz && rm -rf phpmyadmin.tar.gz
#RUN mv phpMyAdmin-4.9.4-all-languages/ phpmyadmin
#RUN mv phpmyadmin/ /var/www/html/
RUN mkdir /var/www/html/phpmyadmin
RUN chmod 777 /var/www/html/phpmyadmin \
    && mv index.php /var/www/html/phpmyadmin
RUN mkdir /var/run/php


#install nginx, curl, wget on debian

# #ssl


# #content
# COPY ./*.html /user/share/nginx/html/
ENTRYPOINT [ "bash", "init.sh"]

CMD ["service", "nginx", "start"]

