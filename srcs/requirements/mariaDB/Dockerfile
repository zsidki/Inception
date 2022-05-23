FROM debian:buster

RUN apt-get update \
&& apt-get install mariadb-server -y 
RUN sed -i 's/127.0.0.1/0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf

COPY ./tools/setup.sh .
# to-do remove it
# COPY ./tools . 

CMD ["sh", "setup.sh"]

