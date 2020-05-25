<?php

/** 
 * @author Calin Irina 
 * */

class Model {
    protected function service($daoservice) {
        require_once '../app/services/daos' . $daoservice . '.php';
        return new $daoservice;
    }
}

?>