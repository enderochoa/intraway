Examen PHP - User profile  


Requerimientos

PHP >= 5.5.9
MySQL >= 5.5 o MariaDB >= 10


Instalacion

Instalacion del proyecto
git clone https://github.com/enderochoa/intraway.git intrawaytest

Instalar dependencias del proyecto
composer  install

Creacion de la base de datos
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force

Permisos de escritura para un entorno de desarrollo
chmod -R 777 var/;chmod -R 777 web/images/



Estandares de Codificacion

Testing
Para testing utilizamos PHPUnit

PHP Coding Standard Fixer PHP-CS-Fixer