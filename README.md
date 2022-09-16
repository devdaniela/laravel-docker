# LARAVEL Docker MySQL Nginx

## Versiones
* Laravel 8.20.1
* php 7.4.30
* MySQL 8.0
* Nginx

## Puertos configurados:
* Nginx 8000->80
* php   9000->80
* MySQL 33069->3306


## Commands - Docker:
``` cmd
    docker-compose up -d
    docker-compose ps
```

## Commands - Laravel:
```cmd
    docker-compose exec php bash
    composer install
    php artisan migrate
    php artisan key:generate
    php artisan config:cache
    php artisan route:clear
```
or
```cmd
    docker-compose exec php php /var/www/html/artisan migrate
```

## Commands - MySQL:
```cmd
    docker-compose exec mysql bash
    mysql -u root -p <su password>
```


* Si todos los contenedores estan con State = Up, entonces abrir desde el navegador:
```
    localhost:8000
```
* Caso contrario ejecutar:
``` cmd
    docker-compose down
    docker-compose up -d --build
```


Daniela Romero
@devdaniela 