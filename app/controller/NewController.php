<?php

namespace app\controller;
use app\core\Controller;

class NewController extends Controller {

    public function showAction(){
        $this->view->render('News');
    }

    public function listAction(){
        $this->view->render('Newsline');
    }
}