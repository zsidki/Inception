
# base image : debian is used for its small size
FROM debian:buster

EXPOSE 443

RUN apt-get update \
&& apt-get upgrade -y\
&& apt-get install -y nginx \
&& apt-get install -y curl \
&& apt-get install openssl -y 

RUN apt-get -y install wget


ADD ./tools ./

RUN bash init.sh

CMD ["service", "nginx", "start"]
