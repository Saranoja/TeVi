<?php
/** 
 * @author Calin Irina 
 * */

class Model {
    protected function service($service) {
        require_once '../app/services/' . $service . '.php';
        return new $service;
    }
}