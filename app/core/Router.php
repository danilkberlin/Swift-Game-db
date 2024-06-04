<?php

namespace app\core;

class Router
{
    protected $routes = [];
    protected $params = [];


 
    public function __construct() {
        echo '<br>' . 'I am class Router.php';
        $arr = require 'app/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    public function add($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    public function match() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function run(){
        if ($this->match()) {
            $controller = 'app\controller\\'. ucfirst( $this->params['controller']).'Controller.php';
            if (class_exists($controller)){
                echo '<br>' . 'Route found';
            }else{
                echo '<br>' . 'Route not found';
            }
            //echo '<br>' . 'Route found';
        }else{
           // echo '<br>' . 'Route not found';
        };
       // echo ' run'; 
    }

}