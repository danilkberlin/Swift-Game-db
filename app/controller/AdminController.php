<?php

namespace app\controller;
use app\core\Controller;

class AdminController extends Controller {

    public function loginAction(){
        $this->view->render('Adnim Login');
    }

    public function userAction(){
        $this->view->render('Adnim User');
    }
}