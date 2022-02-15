hello:
	echo "hello world"

up:
	docker-compose up -d --build

down:
	docker-compose down

start:
	docker-compose start

stop:
	docker-compose stop