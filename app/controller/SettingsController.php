<?php

namespace app\controller;
use app\core\Controller;

class SettingsController extends Controller {

    public function profileAction(){
       
        $this->view->render('Your profiel');
    }
}