<?php

namespace app\controller;
use app\core\Controller;

class TournamentsController extends Controller {

    public function showAction(){
        echo '<br>' . 'Show slide Tournaments';
    }

    public function listAction(){
        echo '<br>' . 'List slide Tournaments';
    }

    public function liveAction(){
        echo '<br>' . 'Live slide Tournaments';
    }
}