# Dockerfile
FROM php:8.2-apache

COPY index.php /var/www/html/
COPY planets.php /var/www/html/
COPY style.css /var/www/html/

EXPOSE 80

