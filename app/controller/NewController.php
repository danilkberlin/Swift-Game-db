<?php


namespace app\controller;

use app\core\Controller;
use app\model\News;

class NewController extends Controller {

    public function showAction(){
        ob_start();
        $this->view->render('Post');
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $fk_user = $_SESSION['user_id']; 

            $headline = htmlspecialchars($_POST['newsTitle']);
            $text = htmlspecialchars($_POST['newsText']);
            $date_post = date('Y-m-d H:i:s');
            $url_foto = htmlspecialchars($_POST['photoUpload']);

            if($headline == "" || $text == "" || $url_foto == ""){
                echo "<script>alert(Please fill in all fields.)</script>";
                exit;
            }
            
            $this->model = new News();
            $result = $this->model->addNews($fk_user, $url_foto, $text, $headline, $date_post);

            if ($result) {
                header("Location: /new");
                exit;
            }else {
                echo "Error adding news.";
            }
            ob_end_clean();
        }
    }

    public function listAction(){
        $this->model = new News();
        $result = $this->model->getNews();
        $vars = [
            'news' => $result,
        ];
        $this->view->render('News', $vars);
    }
}