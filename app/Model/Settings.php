<?php

namespace app\model;
use app\core\Model;

class Settings extends Model {

    public function updateUser($user_id){
        $result = $this->db->query("UPDATE users SET login=:login, password=:password, email=:email where id='$user_id'");
        return $result;
    }
}