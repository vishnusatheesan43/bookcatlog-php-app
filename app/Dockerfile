FROM php:8.3-fpm

WORKDIR /var/www/html/

RUN apt-get update && apt-get install -y \
    && docker-php-ext-install pdo_mysql


COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html/  \
    && chmod -R 755 /var/www/html/


EXPOSE 9000
