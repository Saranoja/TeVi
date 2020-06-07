<?php
/**
 * Class Get
 * @author Calin Irina 
 * */
require_once '../apiApp/services/query.php';
require_once '../apiApp/models/Attack.php';
header("Content-Type: application/json; charset=UTF-8");


class Get {
    private $response;

    public function getAll() {
        $attack = new Attack;
        $this->response = $attack->getAll();
        return $this->response;
    }

    public function getAttack($req) {
        $attack = new Attack;
        $this->response = $attack->getAttack($req);
        return $this->response;
    }
}

?>