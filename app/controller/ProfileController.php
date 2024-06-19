<?php

namespace app\controller;
use app\core\Controller;

class ProfileController extends Controller {

    public function profileAction() {
        ob_start();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = htmlspecialchars($_POST['user_name']);
            $email = htmlspecialchars($_POST['email']);
            $bio = htmlspecialchars($_POST['bio']);
            $pronouns = htmlspecialchars($_POST['pronouns']);

            $result = $this->model->updateUserInformation($user_id, $name, $email, $bio, $pronouns);

            if ($result) {
                header("Location: /profile");
                exit;
            } else {
                echo "Error updating profile.";
            }
            ob_end_clean();
        }
        $user_foto = $this->model->getIconFotoByUserId($_SESSION['user_id']);

        
        $vars = [
            'user_foto' => $user_foto,
        ];

        
        $this->view->render('Your profile', $vars);
    }

    public function changeAction() {
        ob_start();
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $login = htmlspecialchars($_POST['login']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            $user_id = $_SESSION['user_id'];
            $result = $this->model->updateUserDate($user_id, $login, $email, $password);

            if ($result) {
                header("Location: /profile");
                exit;
            }else {
                echo "Error updating profile.";
            }
            ob_end_clean();	
        }
    }

    public function fotoAction() {
        ob_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $icon_foto = htmlspecialchars($_POST['iconFoto']);
            $user_id = $_SESSION['user_id'];
            $result = $this->model->updateUserFoto($user_id, $icon_foto); 

            if (isset($_SERVER['HTTP_REFERER'])) {
                $referrer = $_SERVER['HTTP_REFERER'];
                header("Location: $referrer");
                exit; 
            } else {
                
                header("Location: /");
                exit;
            }
        }
    }
}
