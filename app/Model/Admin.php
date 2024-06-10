<?php

namespace app\model;
use app\core\Model;

class Admin extends Model{

    public function getUser(){
        $result = $this->db->row('SELECT id, login, email FROM users');
        return $result;
    }

    public function deleteUser($user_id){
        $result = $this->db->query("DELETE FROM users WHERE id = $user_id");
        return $result;
    }
}