


# base image : debian is used for its small size
FROM debian:buster


EXPOSE 443 80 9000

#copy everything to docker
#COPY srcs /tmp

#update repo and software package
RUN apt-get update \
&& apt-get upgrade -y\
&& apt-get install -y nginx \
&& apt-get install -y curl \
&& apt-get install openssl -y 
# RUN apt install --reinstall php-fpm


RUN apt-get -y install wget


COPY ./tools .

# #phpmyadmin
RUN apt-get install php7.3-fpm -y
#RUN tar xf tmp/phpmyadmin.tar.gz && rm -rf phpmyadmin.tar.gz
#RUN mv phpmyadmin/ /var/www/html/
RUN mkdir /var/www/html/phpmyadmin \
    && chmod 777 /var/www/html/phpmyadmin \
    && mv index.php /var/www/html/phpmyadmin


#install nginx, curl, wget on debian

# #ssl


# #content
# COPY ./*.html /user/share/nginx/html/
RUN  bash init.sh

ENTRYPOINT [ "bash", "setup.sh" ]
