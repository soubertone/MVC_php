<?php

namespace App\Models;

use PDO;
use MF\Model\Model;

class Info extends Model{

    public function getInfo(){

        $query = 'SELECT titulo, descricao FROM tb_info';
        return $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>