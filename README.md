Requisitos: 
- PHP 8.2 o superior
- Composer
- MySQL 8.4 o compatible

instalación:
 compose install
 cp .env.example .env
 php artisan key:generate

 configurar la conexion en el env:
 DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=overskull_db
DB_USERNAME=root
DB_PASSWORD=

Crear previamente la base de datos y establecer la contraseña

Ejecutar:
- artisan migrate
- php artisan serve

URL base
http://127.0.0.1/api

Endpoints
 GET|HEAD        api/categories .................................... categories.index › Api\categoryController@index
  POST            api/categories .................................... categories.store › Api\categoryController@store
  GET|HEAD        api/categories/{category} ........................... categories.show › Api\categoryController@show
  PUT|PATCH       api/categories/{category} ....................... categories.update › Api\categoryController@update
  DELETE          api/categories/{category} ..................... categories.destroy › Api\categoryController@destroy
  GET|HEAD        api/products ......................................... products.index › Api\ProductController@index
  POST            api/products ......................................... products.store › Api\ProductController@store
  GET|HEAD        api/products/{product} ................................. products.show › Api\ProductController@show
  PUT|PATCH       api/products/{product} ............................. products.update › Api\ProductController@update
  DELETE          api/products/{product} ........................... products.destroy › Api\ProductController@destroy

Estructura del proyecto:
.
├── app
│   ├── Http
│   ├── Models
│   └── Providers
├── artisan
├── bootstrap
│   ├── app.php
│   ├── cache
│   └── providers.php
├── composer.json
├── composer.lock
├── config
│   ├── app.php
│   ├── auth.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── sanctum.php
│   ├── services.php
│   └── session.php
├── database
│   ├── database.sqlite
│   ├── factories
│   ├── migrations
│   └── seeders
├── package.json
├── phpunit.xml
├── postcss.config.js
├── public
│   ├── favicon.ico
│   ├── index.php
│   └── robots.txt
├── README.md
├── resources
│   ├── css
│   ├── js
│   └── views
├── routes
│   ├── api.php
│   ├── console.php
│   └── web.php
├── storage
│   ├── app
│   ├── framework
│   └── logs
├── tailwind.config.js
├── tests
│   ├── Feature
│   ├── TestCase.php
│   └── Unit
├── vendor
│   ├── autoload.php
│   ├── bin
│   ├── brick
│   ├── carbonphp
│   ├── composer
│   ├── dflydev
│   ├── doctrine
│   ├── dragonmantank
│   ├── egulias
│   ├── fakerphp
│   ├── filp
│   ├── fruitcake
│   ├── graham-campbell
│   ├── guzzlehttp
│   ├── hamcrest
│   ├── laravel
│   ├── league
│   ├── mockery
│   ├── monolog
│   ├── myclabs
│   ├── nesbot
│   ├── nette
│   ├── nikic
│   ├── nunomaduro
│   ├── phar-io
│   ├── phpoption
│   ├── phpunit
│   ├── psr
│   ├── psy
│   ├── ralouphie
│   ├── ramsey
│   ├── sebastian
│   ├── spatie
│   ├── staabm
│   ├── symfony
│   ├── theseer
│   ├── tijsverkoyen
│   ├── vlucas
│   └── voku
└── vite.config.js

Docker
docker start mysql-dev