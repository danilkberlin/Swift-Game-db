<?php

namespace app\model;
use app\core\Model;
use PDO;

class Tournaments extends Model{

    public function addTournamentForUserWithoutAccount($user_name, $user_email, $user_telephone, $register_date){
        $sql = "INSERT INTO tournaments (user_name, user_email, user_telephone, register_date) VALUES (:user_name, :user_email, :user_telephone, :register_date)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':user_name', $user_name, PDO::PARAM_STR);
        $stmt->bindParam(':user_email', $user_email, PDO::PARAM_STR);
        $stmt->bindParam(':user_telephone', $user_telephone, PDO::PARAM_STR);
        $stmt->bindParam(':register_date', $register_date, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function addTournamentForUserWithAccount($fk_user, $register_date){
        $result = $this->db->query("INSERT INTO tournaments (fk_user, register_date ) VALUES ('$fk_user', '$register_date')");
        return $result;
    }

}