<?php

namespace app\controller;
use app\core\Controller;

class GalleryController extends Controller {

    public function showAction(){
        $this->view->render('Gallery show');
    }

    public function listAction(){
        $result = $this->model->getGallery();
        $vars = [
            'gallery' => $result,
        ];


        $this->view->render('Gallery', $vars);
    }
}