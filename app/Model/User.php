<?php

namespace app\model;
use app\core\Model;
use app\lib\Db;

class User extends Model{

    public function addEmail(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = $_POST['email'];
            $db = new Db();
            if ($db->insertEmail($email)) {
                echo "Email post!";
            } else {
                echo "Error 0000";
            }
        }
    }
}