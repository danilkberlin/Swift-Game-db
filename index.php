<?php 
    session_start();
    require 'app/lib/Dev.php';
    use app\core\Router;
    use app\lib\Db;

    spl_autoload_register(function ($class) {
        $path = str_replace('\\', '/', $class. '.php');
        if (file_exists($path)) {
            require $path;
        }
    });
    echo 'Hallo is\'s index.php';

    

    $router = new Router;
    $db = new Db;
    $router->run();