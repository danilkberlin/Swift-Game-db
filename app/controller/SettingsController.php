<?php

namespace app\controller;
use app\core\Controller;

class SettingsController extends Controller {

    public function profileAction(){
        if(isset($_POST['user_id'])) {
            $user_id = $_POST['user_id'];
            $update_user = $this->model->updateUser($user_id);
        }
        $this->view->render('Your profiel');
    }
}