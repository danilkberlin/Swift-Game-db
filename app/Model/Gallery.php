<?php

namespace app\model;

use app\core\Model;
use PDO;

class Gallery extends Model {

    public function getGallery() {
        $sql = 'SELECT * FROM gallery';
        $result = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}