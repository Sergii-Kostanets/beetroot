include .env

THIS_FILE := $(lastword $(MAKEFILE_LIST))
.PHONY: hello up down start stop del fullrestart zero one reup pull

hello:
	@echo "Testing"
	echo "hello world"

up:
	@echo "Up $(PROJECT_NAME)!"
	docker-compose pull
	docker-compose up -d --build --remove-orphans

down:
	@echo "Down $(PROJECT_NAME)."
	docker-compose down

start:
	@echo "Starting $(PROJECT_NAME)!"
	docker-compose start

stop:
	@echo "Stopping $(PROJECT_NAME)."
	docker-compose stop

reup:
	docker-compose down
	docker-compose up -d --build --remove-orphans

del:
	@echo "Deleting $(PROJECT_NAME)!"
	docker system prune -a

fullreup:
	docker-compose down
	docker system prune -a
	docker-compose pull
	docker-compose up -d --build --remove-orphans

zero:
	export DOCKER_BUILDKIT=0
	export COMPOSE_DOCKER_CLI_BUILD=0

one:
	export DOCKER_BUILDKIT=1
	export COMPOSE_DOCKER_CLI_BUILD=1

pull:
	@echo "Pulling php:8.0-apache:"
	docker pull php:8.0-apache
	@echo "Pulling mysql:5.6:"
	docker pull mysql:5.6
	@echo "Pulling phpmyadmin/phpmyadmin:5.0:"
	docker pull phpmyadmin/phpmyadmin:5.0
	@echo "Pulling traefik:v2.6.1:"
	docker pull traefik:v2.6.1