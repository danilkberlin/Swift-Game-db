<?php

namespace app\model;
use app\core\Model;
use PDO;

class Profile extends Model {

    public function updateUserInformation($user_id, $name, $email, $bio, $pronouns) {
        $db = $this->db->getConnection();
        $sql = "UPDATE users SET user_name = :user_name, email = :email, bio = :bio, pronouns = :pronouns WHERE id = :id";
        $result = $this->db->prepare($sql);
        $result->bindParam(':user_name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':bio', $bio, PDO::PARAM_STR);
        $result->bindParam(':pronouns', $pronouns, PDO::PARAM_STR);
        $result->bindParam(':id', $user_id, PDO::PARAM_INT);
        $result->execute();
        return $result->rowCount();
    }
    public function updateUserDate($user_id, $login, $email, $password){
        $db = $this->db->getConnection();
        $sql = "UPDATE users SET login = :login, email = :email, password = :password WHERE id = :id";
        $result = $this->db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':id', $user_id, PDO::PARAM_INT);
        $result->execute();
        return $result->rowCount();
    }

    public function updateUserFoto($user_id, $icon_foto){
        $db = $this->db->getConnection();
        $sql = "UPDATE users SET icon_foto = :icon_foto WHERE id = :id";
        $result = $this->db->prepare($sql);
        $result->bindParam(':icon_foto', $icon_foto, PDO::PARAM_STR);
        $result->bindParam(':id', $user_id, PDO::PARAM_INT);
        $result->execute();
        return $result->rowCount();
    }

    public function getIconFotoByUserId($user_id){
        $db = $this->db->getConnection();
        $sql = "SELECT icon_foto FROM users WHERE id = :id";
        $result = $this->db->prepare($sql);
        $result->bindParam(':id', $user_id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}