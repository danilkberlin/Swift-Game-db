<?php

namespace app\controller;
use app\core\Controller;

class AccountController extends Controller {
    public function loginAction(){
        echo '<br>' . 'Login';
    }

    public function registerAction(){
        echo '<br>' . 'Register';
    }
}