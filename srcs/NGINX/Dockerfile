
# base image : alpine is used for its small size
FROM nginx:alpine
CMD [ "echo", "Hello Zak" ]

#docker build --tag <nametage>  <location>

#config
COPY /app/nginx.conf /etc/nginx/conf.d/default.conf

#content
COPY ./*.html /user/share/nginx/html/