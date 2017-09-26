<?php

class Router
{

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function get($uri,$action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function post($uri,$action)
    {
        $this->routes['POST'][$uri] = $action;

    }

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function direct($uri, $requestType) {
        $uri = trim($uri,'/');

        if (! array_key_exists($uri,$this->routes[$requestType])) throw new Exception('No route found');

        $action = explode('@',$this->routes[$requestType][$uri]);

        $controller = $action[0];
        $method = $action[1];

        // Check if class_exists() http://php.net/manual/en/function.class-exists.php
        $controller = new $controller();
        //Same here: method_exists http://php.net/manual/es/function.method-exists.php
        $controller->$method();


    }
}