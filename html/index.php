<?php

// phpinfo();die;
require_once '../vendor/autoload.php';
require_once '../bootstrap.php';

use App\Router;

$routes = require '../config/routes.php';
$database = new App\Database(getenv('DB_DATABASE'), getenv('DB_ROOT_USER'), getenv('DB_ROOT_PASS'), getenv('DB_DATABASE_NAME'));
$router = new Router($routes, $database);
$request_uri = $_SERVER['REQUEST_URI'];
print $router->dispatch(parse_url($request_uri, PHP_URL_PATH));
?>