FROM php:7.4-apache-buster
COPY docker-php-entrypoint /usr/local/bin/
COPY src/ /var/www/html
EXPOSE 80