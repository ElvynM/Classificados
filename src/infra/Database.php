<?php

namespace Classificados\B7web\infra;

session_start();

use PDO;
use PDOException;

class Database
{

    public function getConnection()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=classificados', "root", "");
            return $conn;
        } catch (PDOException $e) {
           echo "erro ".$e->getMessage();
        }
    }

}
