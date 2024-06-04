<?php

namespace app\controller;
use app\core\Controller;

class NewController extends Controller {

    public function showAction(){
        echo '<br>' . 'Show slide News';
    }

    public function listAction(){
        echo '<br>' . 'List slide News';
    }
}