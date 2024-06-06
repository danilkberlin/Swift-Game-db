<?php

namespace app\controller;
use app\core\Controller;
use app\lib\Db;

class MainController extends Controller {

    public function indexAction(){

        $db = new Db;
        $data = $db->row('SELECT email FROM user');
        debug($data);
        $this->view->render('Home');

    }
}