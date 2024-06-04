<?php

namespace app\controller;
use app\core\Controller;

class TournamentsController extends Controller {

    public function showAction(){
        $this->view->render('Tournaments');
    }

    public function listAction(){
        $this->view->render('Tournaments List');
    }

    public function liveAction(){
        $this->view->render('Tournaments Live');
    }
}