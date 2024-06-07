<?php

namespace app\controller;
use app\core\Controller;


class UserController extends Controller {

    public function indexAction(){
        //$result = $this->model->insertEmail();
        $this->view->render('User');
    }
    

}