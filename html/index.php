<?php
require_once '../vendor/autoload.php';

use App\Router;

$routes = [
    '/' => [
        'title' => 'Homepage',
        'template' => 'homepage',
    ],
    '/posts' => [
        'title' => 'List of posts',
        'template' => 'posts',
    ],
    '/users' => [
        'title' => 'List of users',
        'template' => 'users',
    ],
];

$router = new Router($routes);
$request_uri = $_SERVER['REQUEST_URI'];
print $router->dispatch($request_uri);