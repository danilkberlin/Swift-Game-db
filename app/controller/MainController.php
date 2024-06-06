<?php

namespace app\controller;
use app\core\Controller;

class MainController extends Controller {

    public function indexAction(){
        $result = $this->model->getEmail();
        $this->view->render('Home');
    }

}

