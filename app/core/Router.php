<?php

namespace app\core;

class Router
{
    protected $routes = [];
    protected $params = [];


 
    public function __construct() {
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
            $path = 'app\controller\\'. ucfirst( $this->params['controller']).'Controller';
            if (class_exists($path)){
                $action = $this->params['action']. 'Action';
                if(method_exists($path, $action)){
                    $controller = new $path($this->params);
                    $controller->$action();
                }else{
                    //echo 'Error 404';
                }
                //echo '<br>' . 'Route found';
            }else{
                //echo '<br>' . 'Route not found';
            }
            //echo '<br>' . 'Route found';
        }else{
           // echo '<br>' . 'Route not found';
        };
       // echo ' run'; 
    }

}