<?php

namespace App;

class Router {

    private $routes = [];
    private Database $db;
    public function __construct(array $routes, Database $db){
        $this->routes = $routes;
        $this->db = $db;
    }

    public function dispatch(string $request_uri) {

        if (!empty($this->routes[$request_uri]) && class_exists($this->routes[$request_uri])) {
            $className = $this->routes[$request_uri];
        }else{
            $className = \App\Controllers\NotFound::class;
        }
        $controller = new $className($this->db);
        return $controller->view();
    }
}