<?php

namespace app\core;

class View{


    public $path;
    public $route;
    public $layout  = 'default';
    

    public function __construct($route){
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
    }

    public function render($title, $vars = []){
        extract($vars);
        ob_start();
        require 'app/view/'.$this->path.'.php';
        $content = ob_get_clean();
        
        require 'app/view/layouts/'.$this->layout.'.php';
    }
}