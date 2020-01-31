<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Sobre;

    class IndexController extends Action {
        
        public function index(){
            
            //instância da conexão
            $conn = Connection::getDb();
             //instância do modelo
            $sobre = new Sobre($conn);

            $sobre = $sobre->getSobre();

            $this->view->sobre = $sobre;
            $this->render('index', 'pagina');

        }

        public function sobre(){

            $this->render('sobre', 'pagina');

        }

    }

?>