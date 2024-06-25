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
                    $user = $result->fetch(PDO::FETCH_ASSOC);

                    session_start();
                    // Get the user information
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['user_name'];
                    $_SESSION['user'] = $user['login'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['bio'] = $user['bio'];
                    $_SESSION['pronouns'] = $user['pronouns'];
                    $_SESSION['icon_foto'] = $user['icon_foto'];


                    
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

    public function signoutAction(){
        setcookie('PHPSESSID', '', time() - 3600, '/');
        session_destroy();
        header("Location: /");
        exit;
    }

    public function registerAction(){
        ob_start(); 
    
        $this->view->render('Sign up');
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $repeatpassword = $_POST['repeatpassword'];
            $email = $_POST['email'];
            $regist_date = date('Y-m-d H:i:s');
            
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                die('<script>alert("Invalid email format");</script>');
            }
    
            if(strlen($login) < 3 || strlen($login) > 30) {
                die('<script>alert("Login must be between 3 and 30 characters");</script>');
            }
    
            if ($password !== $repeatpassword) {
                die('<script>alert("Passwords do not match");</script>');
            }
        
            try {
                $db = new Db();
                $sql  = "INSERT INTO `users` (login, password, email, regist_date) VALUES (:login, :password, :email, :regist_date)"; 
                $result = $db->getConnection()->prepare($sql);
                $result->bindParam(':login', $login, PDO::PARAM_STR);
                $result->bindParam(':password', $password, PDO::PARAM_STR);
                $result->bindParam(':email', $email, PDO::PARAM_STR);
                $result->bindParam(':regist_date', $regist_date, PDO::PARAM_STR);
                
                $result->execute();
                

                header("Location: /user/login");
                exit(); 
            } catch (PDOException $e) {
                echo 'Database error: ' . $e->getMessage();
            }
        }
    }
    

}

