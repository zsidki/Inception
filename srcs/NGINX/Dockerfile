
# base image : debian is used for its small size
FROM debian:buster
# CMD [ "echo", "Hello Zak" ]

RUN apt-get update && \
	apt-get upgrade -y

RUN apt-get install nginx -y

# #docker build --tag <nametage>  <location>

# #config
COPY nginx.conf /etc/nginx/nginx.conf

# #content
# COPY ./*.html /user/share/nginx/html/