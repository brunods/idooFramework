<?php

namespace App;

use MF\Init\Bootstrap;

    class Route extends Bootstrap{
        
        protected function initRoutes() {

            $routes['home'] = array(
                'route' => '/',
                'controller' => 'IndexController',
                'action' => 'index'
            );

            $routes['sobre'] = array(
                'route' => '/sobre',
                'controller' => 'IndexController',
                'action' => 'sobre'
            );

            $this->setRoutes($routes);

        }       
    
    }

?>