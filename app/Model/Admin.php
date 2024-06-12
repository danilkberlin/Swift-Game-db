<?php

namespace app\model;
use app\core\Model;

class Admin extends Model{

    public function getUsers(){
        $result = $this->db->row('SELECT id, login, email FROM users');
        return $result;
    }

    public function deleteUserById($user_id){
        $result = $this->db->query("DELETE FROM users WHERE id = $user_id");
        return $result;
    }

    public function getUserById($user_id){
        $result = $this->db->query("SELECT * FROM users WHERE id = $user_id");
        return $result;
    }
}