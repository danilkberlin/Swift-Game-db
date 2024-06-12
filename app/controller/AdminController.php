<?php

namespace app\controller;
use app\core\Controller;

class AdminController extends Controller {

    public function loginAction(){
        $this->view->render('Admin Login');
    }

    public function deleteAction(){
        $result = $this->model->getUser();
        $vars = [
            'users' => $result,
        ];
        if(isset($_POST['user_id'])) {
            $user_id = $_POST['user_id'];
            $delete = $this->model->deleteUser($user_id);
        }
        $this->view->render('Admin User', $vars);
    }

    // userAction zeigt details zu user und du kannst ihn aendern geht auf admin/user/detail

    public function indexAction(){

        $this->view->render('Admin');
    }
}

