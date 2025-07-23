# Use the official PHP image with Apache
FROM php:8.1-apache

# Copy app files to web root
COPY . /var/www/html/

# Enable Apache mod_rewrite (optional)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html/

EXPOSE 80

