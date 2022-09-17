FROM php:7.4-fpm

# Set working directory
WORKDIR /var/www/html

# Install unzip utility and libs needed by zip PHP extension 
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip

# limpiar cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Cambiando Permisos en el directorio del proyecto
# RUN chown -R www-data:www-data /var/www

# añadir usuario para la aplicacion laravel
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# copiar el contenido del directorio de la aplicacion existente
COPY ./src /var/www/html

#  copiar  aplicacion y establecer permisos
COPY --chown=www:www ./src /var/www/html

# cambiar usuario actual a www
USER www