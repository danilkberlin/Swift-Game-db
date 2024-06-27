<?php

namespace app\model;
use app\core\Model;
use PDO;


class Save extends Model{

   public function savePost($post_id){
        $result = $this->db->query("INSERT INTO save (fk_id_save) VALUES ('$post_id')");
        return $result;
   }

   public function getPost($user_id){
          $sql = "SELECT * FROM save
               JOIN news ON save.fk_id_save = news.post_id
               JOIN users ON news.fk_user = users.id";
          $result = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
          return $result;
     }

   public function deletePost($save_id){
    $result = $this->db->query("DELETE FROM save WHERE save_id = '$save_id'");
     return $result;
   }
}