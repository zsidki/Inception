
YML = srcs/docker-compose.yml
DC = docker-compose 
B = -d --build
S = docker system prune
RMI = docker rmi -f wordpress nginx mariadb debian:buster

V = docker volume rm srcs_mariadb_data srcs_wordpress_data
W = docker exec -it wordpress bash
N = docker exec -it nginx bash
M = docker exec -it mysql bash


#  	sudo mkdir -p /home/zsidki/data/wordpress
#  	sudo mkdir -p /home/zsidki/data/mariadb

run:
	@$(DC) -f $(YML) up $(B)

pause:
	@$(DC) -f $(YML) down
	@$(RMI)
	$(S)
	
	@$(V)

n:
	$(N)
w:
	$(W)

m:
	$(M)

push:
	@git add .
	@git commit -m "$(m)"
	@git push -f origin master
