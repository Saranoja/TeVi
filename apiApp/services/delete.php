<?php

require_once '../apiApp/services/query.php';
require_once '../apiApp/models/Attack.php';
header("Content-Type: application/json; charset=UTF-8");


class Delete {
    private $response;

    public function deleteAttack() {
        $attack = new Attack;
        $this->response = $attack->deleteAttack();
        return $this->response;
    }
}
