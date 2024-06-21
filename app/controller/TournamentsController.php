<?php

namespace app\controller;
use app\core\Controller;
use PDO;

class TournamentsController extends Controller {

    public function showAction(){
        $this->view->render('Tournaments show');
    }

    public function listAction(){
        ob_start();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $user_name = htmlspecialchars($_POST['name']);
            $user_email = htmlspecialchars($_POST['email']);
            $user_telephone = htmlspecialchars($_POST['telephone']);
            $register_date = date('Y-m-d H:i:s');

            if($user_name == "" || $user_email == "" || $user_telephone == ""){
                echo "<script>alert(Please fill in all fields.)</script>";
                exit;
            }

            $result = $this->model->addTournamentForUserWithoutAccount($user_name, $user_email, $user_telephone, $register_date);
            if ($result) {
                header("Location: /tournaments");
                exit;
            }else {
                echo "<script>alert(Please fill in all fields.)</script>";
                exit;
            }
            ob_end_clean();
        }
        $this->view->render('Tournaments');
    }

    public function liveAction(){
        $this->view->render('Tournaments Live');
    }
}
