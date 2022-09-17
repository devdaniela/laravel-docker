# LARAVEL Docker MySQL Nginx

* Laravel 8.20.1
* PHP 7.4.30
* MySQL 8.0
* Nginx

## Commands:
``` cmd
    cd laravel-docker
    cp src/.env.example src/.env
    docker-compose up -d --build
    docker-compose ps
```

## Commands - Laravel:
```cmd
    docker-compose exec php bash
    composer install
    php artisan key:generate
    php artisan migrate
    php artisan config:cache
    php artisan route:clear
```

* Si todos los contenedores estan con State = Up, entonces abrir desde el navegador:
```
    localhost:8000
```
* Caso contrario ejecutar:
``` cmd
    docker-compose down
    sudo docker-compose up -d --build
```

## Commands - MySQL
Para acceder a la DB ó puedes establecer la conexión en cualquier gestor de base de datos (ver datos en el archivo docker-compose.yml)
```cmd
    docker-compose exec mysql bash
    mysql -u root -p <su password>
```

##
Daniela Romero
@devdaniela 