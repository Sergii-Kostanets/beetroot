FROM php:7.4-apache
# RUN apt-get update \  && apt-get install -y --no-install-recommends git zlib1g-dev libzip-dev zip unzip
RUN docker-php-ext-install pdo_mysql
# Указываем рабочую папку
WORKDIR /var/www/html
# Копируем все файлы проекта в контейнер
COPY . /var/www/html
EXPOSE 80