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
        $this->view->render('Adnim User', $vars);
    }
}