<?php

namespace app\model;
use app\core\Model;

class Main extends Model{

    public function getEmail(){
        $result = $this->db->row('SELECT id, email FROM user');
        return $result;
    }
}