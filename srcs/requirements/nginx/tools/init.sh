mkdir /etc/nginx/ssl
openssl req -x509 -newkey rsa:4096 -sha256 -days 3650 -nodes -keyout /etc/nginx/ssl/nginx.key -out /etc/nginx/ssl/nginx.crt -subj "/CN=zak.1337.ma"

rm -rf /etc/nginx/sites-enabled/* && \
	mv default /etc/nginx/sites-available/default && \
	ln -fs /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

echo "daemon off;" >> /etc/nginx/nginx.conf