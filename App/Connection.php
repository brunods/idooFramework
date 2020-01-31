<?php

namespace App;

    class Connection {

        public static function getDb() {
            try {
                
                require_once "../App/Config/database.php";

                $conn = new \PDO(
                    "mysql:host={$host};dbname={$database};charset=utf8",
                    "{$user}",
                    "{$pass}" 
                );
    
                return $conn;
    
            } catch (\PDOException $e) {
                //.. tratar de alguma forma ..//
                return 'ERRO DE CONEXÃO COM O BANCO';
            }
        }
    }
?>