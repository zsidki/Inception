
# base image : debian is used for its small size
FROM debian:buster


EXPOSE 9000


RUN apt-get update \
&& apt-get upgrade -y \
&& apt-get -y install wget \
&& apt-get install php7.3-fpm -y

COPY ./tools .

RUN mkdir -p /var/www/html/phpmyadmin \
    && chmod 777 /var/www/html/phpmyadmin \
    && mv index.php /var/www/html/phpmyadmin



ENTRYPOINT [ "bash", "setup.sh" ]

