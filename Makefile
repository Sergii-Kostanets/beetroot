include .env

THIS_FILE := $(lastword $(MAKEFILE_LIST))
.PHONY: hello up down start stop del fullrestart zero restart

hello:
	@echo "Testing"
	echo "hello world"

up:
	@echo "Up $(PROJECT_NAME)!"
#	docker-compose pull
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

del:
	@echo "Deleting $(PROJECT_NAME)!"
	docker system prune -a

fullrestart:
	docker-compose down
	docker system prune -a
	docker-compose pull
	docker-compose up -d --build --remove-orphans

zero:
	export DOCKER_BUILDKIT=0
	export COMPOSE_DOCKER_CLI_BUILD=0

restart:
	docker-compose down
	docker-compose pull
	docker-compose up -d --build --remove-orphans