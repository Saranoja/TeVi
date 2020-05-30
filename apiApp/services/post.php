<?php
/**
 * Class Post
 * @author Calin Irina 
 * */
require_once '../apiApp/services/query.php';
require_once '../apiApp/models/Attack.php';
header("Content-Type: application/json; charset=UTF-8");


class Post {
    private $response;

    public function post($data) {
        $attack = new Attack;
        $this->response = $attack->filter($data);
        return $this->response;
    }
}

/*
json structure: 

$json = '{
    "event_id":"",
    "summary":"",
    "success":"",
    "suicide":"",
    "attack_type":"",
    "location":"",
    "year":"",
    "month":"", 
    "day":"",
    "approximate_date":"", 
    "duration":"", 
    "country":"", 
    "country_code":"", 
    "region":"", 
    "provence":"", 
    "city":"", 
    "latitude":"", 
    "longitude":"", 
    "corp":"", 
    "group_name":"",
    "group_subname":"", 
    "motive":"", 
    "gun_certain":"", 
    "terrorists_number":"", 
    "claim":"", 
    "claim_mode":"", 
    "target_type":"", 
    "target_subtype":"",
    "target":"", 
    "target_nationality":"",
    "weapon_type":"", 
    "weapon_subtype":"", 
    "weapon_details":"", 
    "total_fatalities":"", 
    "us_citizens_who_died":""
}';

*/