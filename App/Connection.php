<?php

namespace App;

use PDOException;
use PDO;

Class Connection{

    public static function getDb(){
        try{

            $conn = new PDO(
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "root",
                "admin"
            );

            return $conn;

        } catch(PDOException $e) {
            echo "Erro: " . $e->getMessage() . " Código: " . $e->getCode();
        }
    }
}

?>