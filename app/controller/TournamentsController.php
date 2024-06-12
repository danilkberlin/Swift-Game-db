<?php

namespace app\controller;
use app\core\Controller;

class TournamentsController extends Controller {

    public function showAction(){
        $this->view->render('Tournaments show');
    }

    public function listAction(){
        $this->view->render('Tournaments');
    }

    public function liveAction(){
        $this->view->render('Tournaments Live');
    }
}