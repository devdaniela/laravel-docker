# LARAVEL Docker MySQL Nginx

* Laravel 8.20.1
* PHP 7.4.30
* MySQL 8.0
* Nginx

<hr>

Este es un proyecto muy sencillo pero sumamente útil, el cúal desarrolle para compartir como se puede integrar Laravel con Docker y MySQL,
estableciendo las configuraciones requeridas en el archivo <i>docker-compose</i> y <i>Dockerfile</i>, como versiones y puertos, además contiene integrado AdminLTE y un pequeño CRUD de usuarios.

Si deseas clonar este proyecto: luego que se complete su descarga debes ejecutar lo siguiente:

## Commands - Docker:
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
* De lo contrario ejecutar:
``` cmd
    docker-compose down
    sudo docker-compose up -d --build
```

<br>

## Commands - MySQL
Podrás acceder a la DB usando el bash ó tambien puedes establecer la conexión en cualquier gestor de base de datos de tu preferencia
(en el archivo docker-compose.yml encontrarás los datos de conexión)
```cmd
    docker-compose exec mysql bash
    mysql -u root -p <su password>
```

<hr>

Daniela Romero
@devdaniela 
