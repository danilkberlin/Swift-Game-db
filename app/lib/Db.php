<?php

namespace app\lib;
use PDO;

class Db {

    protected $db;

    public function __construct() {
        $config = require 'app/config/databank.php';
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].'', $config['user'], $config['password']);
    }

    public function query($sql){
        $query = $this->db->query($sql);
        return $query;
    }

    public function row($sql){
        $result = $this->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql){
        $result = $this->query($sql);
        return $result->fetchColumn();
    }

    public function insertEmail($email){
       $result = $this->db->prepare('INSERT INTO user (email) VALUES (:email)');
       $result->bindParam(':email', $email, PDO::PARAM_STR);
       return $result->execute();
    }

}
