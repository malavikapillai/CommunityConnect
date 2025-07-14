FROM php:8.1-apache

# Enable Apache rewrite module (optional, for pretty URLs)
RUN a2enmod rewrite

# Copy all project files to Apache web root
COPY . /var/www/html/

# Give permissions (optional)
RUN chown -R www-data:www-data /var/www/html
gi