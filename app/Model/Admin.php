<?php

namespace app\model;
use app\core\Model;

class Admin extends Model{

    public function getUser(){
        $result = $this->db->row('SELECT login, email FROM users');
        return $result;
    }
}