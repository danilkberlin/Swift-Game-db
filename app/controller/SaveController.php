<?php

namespace app\controller;
use app\core\Controller;

class SaveController extends Controller {

    public function postAction(){
        if(isset($_POST['post_id'])) {
            $post_id = $_POST['post_id'];
            $result = $this->model->savePost($post_id);

            if($result) {
                header("Location: /new");
                exit;
            }else {
                echo "Error adding news.";
            }
        }
    }

    public function indexAction(){ 
        $user_id = $_SESSION['user_id'];
        $result = $this->model->getPost($user_id);
        $vars = [
            'posts' => $result,
        ];
        $this->view->render('Save', $vars);
    }

    

    public function deleteAction(){
        if(isset($_POST['save_id'])) {
            $save_id = $_POST['save_id'];
            $result = $this->model->deletePost($save_id);
        }
        if (isset($_SERVER['HTTP_REFERER'])) {
            $referrer = $_SERVER['HTTP_REFERER'];
            header("Location: $referrer");
            exit; 
        } else {
            header("Location: /");
            exit;
        }
    }

}