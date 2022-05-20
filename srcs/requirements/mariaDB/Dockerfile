FROM debian:buster

COPY . .

EXPOSE 3306

RUN apt-get update \
&& apt-get install mariadb-server -y 


RUN sh ./tools/setup.sh