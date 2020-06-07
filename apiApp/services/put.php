<?php

require_once '../apiApp/services/query.php';
require_once '../apiApp/models/Attack.php';
header("Content-Type: application/json; charset=UTF-8");


class Put {
    private $response;

    public function updateAttack($data) {
        $attack = new Attack;
        $this->response = $attack->updateAttack($data);
        return $this->response;
    }
}

?>