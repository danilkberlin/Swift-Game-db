<?php

namespace app\controller;
use app\core\Controller;
use app\lib\Db;
use PDO;


class UserController extends Controller {

        
    public function indexAction(){
        $this->view->render('User');
    }

    public function registerAction(){
        $this->view->render('Register');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $repeatpassword = $_POST['repeatpassword'];
            $email = $_POST['email'];
        
            if ($password !== $repeatpassword) {
                die('Passwords do not match!');
            }
        
            try {
                $db = new Db();
                $sql  = "INSERT INTO `users` (login, password, email) VALUES (:login, :password, :email)";
                $result = $db->getConnection()->prepare($sql);
                $result->bindParam(':login', $login, PDO::PARAM_STR);
                $result->bindParam(':password', $password, PDO::PARAM_STR);
                $result->bindParam(':email', $email, PDO::PARAM_STR);
                $result->execute();
                
                echo 'Are you registered!';
            } catch (PDOException $e) {
                echo 'Database error: ' . $e->getMessage();
            }
        }
    }

}

