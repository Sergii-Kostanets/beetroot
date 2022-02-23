FROM php:7.2-apache

RUN docker-php-ext-install pdo pdo_mysql

# Указываем рабочую папку
WORKDIR /var/www/html
# Копируем все файлы проекта в контейнер
COPY . /var/www/html
EXPOSE 80