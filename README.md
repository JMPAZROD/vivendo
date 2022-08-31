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

- http://localhost/vivendo/public/api/register  
  method: POST  
  Body:  
  {  
    "name": "Juan Rodriguez",  
    "email": "juan@gmail.com",  
    "password": "12345678"  
  }     

- http://localhost/vivendo/public/api/login  
  Method: POST  
  Body:  
  {  
    "email": "juan@gmail.com",  
    "password": "password"  
  }
  Bearer Token: se debe enviar el token que se genera en el register  

- http://localhost/vivendo/public/api/logout  
  Method:GET  
  Bearer Token: se debe enviar el token que se genera en el register  

#### Listado general de proyectos:
- http://localhost/vivendo/public/api/project  
  Method:GET  
  Bearer Token: se debe enviar el token que se genera en el register  
  
- http://localhost/vivendo/public/api/projectList  
  Method:GET  
  Bearer Token: se debe enviar el token que se genera en el register  

#### Proyecto por ciudad:
- http://localhost/vivendo/public/api/projectCity  
  Method:GET  
  Body:  
  {  
    "city_id": 1  
  }  
  Bearer Token: se debe enviar el token que se genera en el register
  
#### Proyecto por categoría:
- http://localhost/vivendo/public/api/projectCategory  
  Method:GET  
  Body:  
  {  
    "category_id": 1  
  }  
  Bearer Token: se debe enviar el token que se genera en el register  

#### Listado de interesados:
- http://localhost/vivendo/public/api/interestedList  
  Method:GET   
  Bearer Token: se debe enviar el token que se genera en el register

#### Registrar un interesado a proyecto:
- http://localhost/vivendo/public/api/interestedStore  
  Method:POST  
  Body:  
  {  
    "name": "juan paz",  
    "email": "jpaz@gmail.com",  
    "phone": "+55555",  
    "city": "cali",  
    "country": "colombia",  
    "project_id": 1  
  }  
  Bearer Token: se debe enviar el token que se genera en el register 





