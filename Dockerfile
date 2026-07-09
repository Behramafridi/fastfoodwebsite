FROM php:8.2-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Configure Apache to allow .htaccess overrides
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Copy application source code
COPY . /var/www/html/

# Expose port 80 (Render will detect this)
EXPOSE 80
