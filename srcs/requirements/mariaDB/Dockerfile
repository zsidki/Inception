FROM debian:buster


EXPOSE 3306

RUN apt-get update \
&& apt-get install mariadb-server -y 
RUN sed -i 's/127.0.0.1/0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf


# RUN sh ./tools/setup.sh



COPY ./tools/setup.sh .
# to-do remove it
COPY ./tools . 

CMD ["sh", "setup.sh"]

