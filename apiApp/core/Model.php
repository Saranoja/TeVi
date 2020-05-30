<?php
/** 
 * @author Calin Irina 
 * */

class Model {
    protected function service($service) {
        require_once '../apiApp/services/' . $service . '.php';
        return new $service;
    }
}