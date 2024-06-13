<?php

namespace app\controller;
use app\core\Controller;
use app\lib\Db;
use PDO;


class UserController extends Controller {


        
    public function indexAction(){
        ob_start();

        $this->view->render('Log in');


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'];
            $password = $_POST['password'];
    
            try {
                $db = new Db();
                $sql  = "SELECT * FROM `users` WHERE login = :login AND password = :password";
                $result = $db->getConnection()->prepare($sql);
                $result->bindParam(':login', $login, PDO::PARAM_STR);
                $result->bindParam(':password', $password, PDO::PARAM_STR);
                $result->execute();
    
                if ($result->rowCount() > 0) {
                    
                    session_start();
                    $_SESSION['user'] = $login;

                    
                    setcookie('PHPSESSID', session_id(), time() + 3600, '/');

                    header("Location: /");
                    exit;
                } else {
                    echo "<script>alert('Invalid login or password.');</script>";
                }
            } catch (PDOException $e) {
                echo 'Database error: ' . $e->getMessage();
            }
        }
        ob_end_flush();
    }

    public function registerAction(){
        $this->view->render('Sign up');

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
                
                //echo 'Are you registered!';
            } catch (PDOException $e) {
                echo 'Database error: ' . $e->getMessage();
            }
        }
    }

}

