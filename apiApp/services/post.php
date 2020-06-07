<?php
/**
 * Class Post
 * @author Calin Irina 
 * */
require_once '../apiApp/models/Attack.php';
header("Content-Type: application/json; charset=UTF-8");

class Post {
    private $response;

    public function filter($data) {
        $attack = new Attack;
        $this->response = $attack->filter($data);
        return $this->response;
    }

    public function insert($data) {
        $attack = new Attack;
        $this->response = $attack->insertAttack($data);
        return $this->response;
    }
}

?>