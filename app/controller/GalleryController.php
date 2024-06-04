<?php

namespace app\controller;
use app\core\Controller;

class GalleryController extends Controller {

    public function showAction(){
        $this->view->render('Gallery');
    }

    public function listAction(){
        $this->view->render('Gallery Host');
    }
}