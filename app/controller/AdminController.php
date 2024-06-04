<?php

namespace app\controller;
use app\core\Controller;

class AdminController extends Controller {

    public function loginAction(){
        echo '<br>' . 'Login slide Admin';
    }

    public function userAction(){
        echo '<br>' . 'User slide Admin';
    }
}