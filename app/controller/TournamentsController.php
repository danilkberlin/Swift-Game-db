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
            $user_name_tournaments = htmlspecialchars($_POST['name']);
            $user_email_tournaments = htmlspecialchars($_POST['email']);
            $user_telephone_tournaments = htmlspecialchars($_POST['telephone']);
            $register_date = date('Y-m-d H:i:s');

            if($user_name == "" || $user_email == "" || $user_telephone == ""){
                echo "<script>alert(Please fill in all fields.)</script>";
                exit;
            }

            $result = $this->model->addTournamentForUserWithoutAccount($user_name_tournaments, $user_email_tournaments, $user_telephone_tournaments, $register_date);
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

    public function accountAction(){
        ob_start();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $fk_user = $_SESSION['user_id'];
            $register_date = date('Y-m-d H:i:s');

            $result = $this->model->addTournamentForUserWithAccount($fk_user, $register_date);

            if ($result) {
                header("Location: /tournaments");
                exit;
            }else {
                echo "<script>alert(Please fill in all fields.)</script>";
                exit;
            }
            ob_end_clean();
        }
    }
    public function liveAction(){
        $this->view->render('Tournaments Live');
    }
}
