<?php

namespace App\Models;

    class Sobre {
        protected $db;

        public function __construct(\PDO $db) {
            $this->db = $db;
        }

        public function getSobre() {
            //$query = 'select id, texto from sobre';
            //return $this->db->query($query)->fetchAll();
        }
    }

?>