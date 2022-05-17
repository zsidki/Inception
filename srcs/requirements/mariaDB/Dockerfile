FROM debian:buster

COPY . .

RUN apt-get update \
&& apt-get install mariadb-server -y \
sed -i s/127.0.0.1/0.0.0.0/ /etc/mysql/mariadb.conf.d/50-server.cnf

