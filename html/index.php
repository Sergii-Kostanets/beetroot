<?php
require_once '../vendor/autoload.php';

use App\Router;

$router = new Router();
$request_uri = $_SERVER['REQUEST_URI'];
print $router->dispatch($request_uri);