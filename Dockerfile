FROM php:7.0-apache
ENV PORT 8888
ENTRYPOINT []
CMD sed -i "s/80/8888/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf && docker-php-entrypoint apache2-foreground
