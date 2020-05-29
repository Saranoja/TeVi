<?php
/**
 * Class Get
 * @author Calin Irina 
 * */
require_once '../app/services/query.php';
require_once '../app/models/Attack.php';
header("Content-Type: application/json; charset=UTF-8");


class Get {
    private $response;

    public function filter($data) {
        $attack = new Attack;
        $this->response = $attack->filter($data);
        return $this->response;
    }

    public function get($values) {
        $attack = new Attack;
        $this->response = $attack->filter($values);
        return $this->response;
    }
}

/*
json structure: 

$json = '{
    "selectColumns":
        [{
            "column":"country"
        },
        {   
            "column":"year"
        },
        {
            "column":"attack_type"
        }],
    "whereConditions":
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
    "groupByColumns":
        [{
            "column":"country"
        },
        {
            "column":"year"
        }]
}';

*/