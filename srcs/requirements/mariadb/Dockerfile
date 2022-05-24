FROM debian:buster

RUN apt-get update \
&& apt-get install -y mariadb-server  
RUN apt-get install -y vim
RUN sed -i 's/127.0.0.1/0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf

COPY ./tools/setup.sh .

CMD ["sh", "setup.sh"]
