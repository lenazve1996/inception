dependencies:
	bash install_deps.sh

all :
	docker compose -f srcs/docker-compose.yml build
	docker compose -f srcs/docker-compose.yml up -d

clean : 		
	docker compose -f srcs/docker-compose.yml down

fclean : 		clean
	docker volume rm srcs_mariadb
	docker volume rm srcs_wordpress
	rm -rf /home/ayajirob/data



re : 			fclean all

.PHONY: 		all clean fclean re
