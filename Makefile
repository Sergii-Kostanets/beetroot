hello:
	echo "hello world"

up:
	docker-compose up -d --build --remove-orphans

down:
	docker-compose down

start:
	docker-compose start

stop:
	docker-compose stop

del:
	docker system prune -a