FROM php:8.2-apache

# Install system dependencies and PHP zip extension
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install zip

# Copy Composer from the official Docker Hub image (faster and more reliable)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Allow Composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER=1

# Enable Apache rewrite module
RUN a2enmod rewrite

# Configure Apache to allow .htaccess overrides
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Copy application source code
COPY . /var/www/html/

WORKDIR /var/www/html

# Install dependencies if composer.json exists
RUN if [ -f composer.json ]; then composer install --no-dev --optimize-autoloader; fi

# Expose port 80 (Render will detect this)
EXPOSE 80

