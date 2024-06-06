<?php

namespace app\controller;
use app\core\Controller;
use app\lib\Db;

class UserController extends Controller {

    public function indexAction(){

        $db = new Db;
        $data = $db->row('SELECT email FROM user');
        
        $this->view->render('User');

        

    }

}
