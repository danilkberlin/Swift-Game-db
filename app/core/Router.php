<?php

namespace app\core;

class Router
{
    protected $routes = [];
    protected $params = [];


    function __construct() {
        echo '<br>' . 'I am class Router.php';
    }

    public function add(){
        //
    }

    public function match () {
        //
    }

    public function run(){
        echo ' run'; 
    }

}