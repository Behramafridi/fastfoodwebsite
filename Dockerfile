FROM php:8.2-apache

# Install system dependencies and PHP extensions (curl, zip)
RUN apt-get update && apt-get install -y libzip-dev zip unzip git && docker-php-ext-install curl zip

# Install Composer globally
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php composer-setup.php --install-dir=/usr/local/bin --filename=composer && rm composer-setup.php

# Enable Apache rewrite module
RUN a2enmod rewrite

# Configure Apache to allow .htaccess overrides
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Copy application source code
COPY . /var/www/html/

# Install PHP dependencies via Composer
RUN composer install --no-dev --optimize-autoloader

# Expose port 80 (Render will detect this)
EXPOSE 80
