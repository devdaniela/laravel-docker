FROM php:7.4-fpm

# Install extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Cambiando Permisos en el directorio del proyecto
RUN chown -R www-data:www-data /var/www