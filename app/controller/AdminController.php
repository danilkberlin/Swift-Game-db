<?php

namespace app\controller;
use app\core\Controller;

class AdminController extends Controller {

    public function loginAction(){
        $this->view->render('Adnim Login');
    }

    public function userAction(){
        $result = $this->model->getUser();
        $vars = [
            'users' => $result,
        ];
        if(isset($_POST['user_id'])) {
            $user_id = $_POST['user_id'];
            $delete = $this->model->deleteUser($user_id);
        }
        $this->view->render('Adnim User', $vars);
    }
}