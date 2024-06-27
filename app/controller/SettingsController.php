<?php

namespace app\controller;
use app\core\Controller;

class SettingsController extends Controller {

    public function settingsAction(){

        $this->view->render('Settings');
    }
}