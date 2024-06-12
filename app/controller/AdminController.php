<?php

namespace app\controller;
use app\core\Controller;

class AdminController extends Controller {

    public function loginAction(){
        $this->view->render('Admin Login');
    }

    public function userAction(){
        $result = $this->model->getUser();
        $vars = [
            'users' => $result,
        ];
        $this->view->render('Admin table', $vars);
    }

    public function deleteAction(){
        if(isset($_POST['user_id'])) {
            $user_id = $_POST['user_id'];
            $delete = $this->model->deleteUser($user_id);
        }
        if (isset($_SERVER['HTTP_REFERER'])) {
            $referrer = $_SERVER['HTTP_REFERER'];
            header("Location: $referrer");
            exit; 
        } else {
            
            header("Location: /");
            exit;
        }
    }

    // userDetailAction zeigt details zu user und du kannst ihn aendern geht auf admin/user/detail

    public function indexAction(){

        $this->view->render('Admin');
    }
}

