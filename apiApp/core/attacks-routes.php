<?php
//TRE SA MUTAM ASTA DE AICI
class Response {
    static function status($code){
        http_response_code($code);
    }
    static function json($data){
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}

$attacksRoutes = [
    [
        "method" => "GET", //returns all attacks in the db
        "middlewares" => ["isLoggedIn"],
        "route" => "attacks",
        "handler" => "getAllAttacks"
    ],
    [
        "method" => "GET", //returns all attacks with country = value
        "middlewares" => ["isLoggedIn"],
        "route" => "attacks/:country",
        "handler" => "getAttackFromCountry"
    ],
    //Cum am banuit, are probleme aici daca e la fel, MOMENTAN!
    // [
    //     "method" => "GET", //returns all attacks with year = value
    //     "route" => "/attacks/:year",
    //     "handler" => "getAttackFromYear"
    // ],
    [
        "method" => "POST", //interts a new attack in the db
        "middlewares" => ["isLoggedIn","isAdmin"],
        "route" => "attacks",
        "handler" => "insertAttack"
    ],
    [
        "method" => "PUT", //updates a row from the db
        "middlewares" => ["isLoggedIn","isAdmin"],
        "route" => "attacks",
        "handler" => "updateAttack"
    ],
    [
        "method" => "DELETE", //deletes a row from the db based on the event_id
        "middlewares" => ["isLoggedIn","isAdmin"],
        "route" => "attacks/:id",
        "handler" => "deleteAttack"
    ]
];

function getAllAttacks($req){
    Response::status(200);
    echo "Get all attacks";
}

function getAttackFromCountry($req){
    Response::status(200);
    Response::json($req['params']);
    
}

function insertAttack($req){
   //demo
    $modifiedPayload = $req['data'];
    $modifiedPayload -> id = uniqid();

    Response::status(200);
    Response::json($modifiedPayload);
}

function updateAttack(){
    //In progres...
}

function deleteAttack(){
    //In progres...
}

function isLoggedIn($req){
    // if(true){
    //     return true;
    // } else{
    //     Response::status(401);
    //     Response::text("You need to be logged in!");
    //     return false;
    // }
    //demo
}
function isAdmin($req,$next){
    //de completat
}


// $req['query'][values]