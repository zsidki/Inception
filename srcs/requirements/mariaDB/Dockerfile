FROM debian:buster

COPY . .

RUN apt-get update \
&& apt-get install mariadb-server -y 


RUN sh ./tools/setup.sh