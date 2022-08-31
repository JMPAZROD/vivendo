## Configuraciones y ejecución del proyecto

Para este proyecto la mejor opción es utilizar xampp para correr el proyecto se debe hacer una git clone del repositorio o proyecto en el directorio C:\xampp\htdocs de xampp con la rama main y posteriormente prender desde XAMPP Control Panel el Apache y MySQL. Con estos pasos realizados, se puede desde una terminal o git bash ejecutar las migraciones y seeders con el siguiente comando

- php artisan migrate:refresh --seed

## Tecnologías usadas

Para este proyeco esta desarrollado con:
-Laravel 8
-Laravel Sanctum para autenticación por medio de token
-MySQL como motor de base de datos

Para testeo de los Endpoint se usó Postman.

## Endpoint creados

-http://localhost/vivendo/public/api/register

-http://localhost/vivendo/public/api/login

-http://localhost/vivendo/public/api/logout

-http://localhost/vivendo/public/api/infoUser

Listado general de proyectos
-http://localhost/vivendo/public/api/project





