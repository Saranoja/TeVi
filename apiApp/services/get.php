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

    public function filter($data) {
        $attack = new Attack;
        $this->response = $attack->filter($data);
        return $this->response;
    }

    // public function get() {
    //     $attack = new Attack;
    //     $this->response = $attack->getAll();
    //     return $this->response;
    // }

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




/*
json structure: 

$json = '{
    "select":
        [{
            "column":"country"
        },
        {   
            "column":"year"
        },
        {
            "column":"attack_type"
        }],
    "where":
        [{
            "column":"country",
            "operator":"=",
            "value":"Pakistan"
        },
        {
            "column":"year",
            "operator":">",
            "value":"2005"
        },
        {
            "column":"success",
            "operator":"=",
            "value":"0"
        }],
    "groupBy":
        [{
            "column":"country"
        },
        {
            "column":"year"
        }]
}';

*/