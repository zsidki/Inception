
# base image : debian is used for its small size
FROM debian:buster


 EXPOSE 443 80

#copy everything to docker
#COPY srcs /tmp

#update repo and software package
RUN apt-get update \
&& apt-get upgrade -y\
&& apt-get install -y nginx \
&& apt-get install -y curl \
&& apt-get install openssl -y 


RUN apt-get -y install wget

#install nginx, curl, wget on debian

# #ssl
ADD ./tools ./


# #content
# COPY ./*.html /user/share/nginx/html/
RUN bash init.sh

CMD ["service", "nginx", "start"]
