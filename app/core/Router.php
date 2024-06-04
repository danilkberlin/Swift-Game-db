<?php

namespace app\core;

class Router
{
    protected $routes = [];
    protected $params = [];


    function __construct() {
        echo '<br>' . 'I am class Router.php';
        $arr = require 'app/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    public function add($route, $params){
        $route = '#^' .$route. '$#';
        $this->routes[$route] = $params;
    }

    public function match () {
        //
    }

    public function run(){
        echo ' run'; 
    }

}