
# base image : debian is used for its small size
FROM debian:buster


# EXPOSE  80 443 3306

#copy everything to docker
#COPY srcs /tmp

#update repo and software package
RUN apt-get update \
&& apt-get install -y procps \
&& apt-get install nano \
&& apt-get install -y wget \
&& apt-get install  openssl

RUN apt-get -y install wget

#install nginx, curl, wget on debian
RUN apt-get install -y nginx

# #ssl
ADD ./tools ./


# #content
# COPY ./*.html /user/share/nginx/html/
ENTRYPOINT bash init.sh
