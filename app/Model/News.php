<?php

namespace app\model;

use app\core\Model;
use PDO;

class News extends Model {

    public function addNews($fk_user, $url_foto, $text, $headline, $date_post) {
        $sql = "INSERT INTO news (fk_user, url_foto, text, headline, date_post) VALUES (:fk_user, :url_foto, :text, :headline, :date_post)";
        $result = $this->db->prepare($sql);
        $result->bindParam(':fk_user', $fk_user, PDO::PARAM_INT);
        $result->bindParam(':url_foto', $url_foto, PDO::PARAM_STR);
        $result->bindParam(':text', $text, PDO::PARAM_STR);
        $result->bindParam(':headline', $headline, PDO::PARAM_STR);
        $result->bindParam(':date_post', $date_post, PDO::PARAM_STR);
        
        if ($result->execute()) {
            return $result->rowCount();
        } else {
            return false;
        }
    }

    public function getNews() {
        $sql = 'SELECT news.url_foto, news.text, news.headline, news.date_post, users.login 
                FROM news 
                JOIN users ON news.fk_user = users.id';
        $result = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}