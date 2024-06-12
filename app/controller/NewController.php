<?php

namespace app\controller;
use app\core\Controller;

class NewController extends Controller {

    public function showAction(){
        $this->view->render('News show');
    }

    public function listAction(){
        $this->view->render('News');
    }
}