<?php

namespace app\controller;
use app\core\Controller;

class GalleryController extends Controller {

    public function showAction(){
        echo '<br>' . 'Show slide Gallery';
    }

    public function listAction(){
        echo '<br>' . 'List slide Gallery';
    }
}