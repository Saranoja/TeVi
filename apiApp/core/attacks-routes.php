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
        "middlewares" => ["isLoggedIn","isAdmin"],
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
        "middlewares" => ["isLoggedIn"],
        "route" => "attacks",
        "handler" => "insertAttack"
    ],
    [
        "method" => "PUT", //updates a row from the db
        "middlewares" => ["isLoggedIn"],
        "route" => "attacks",
        "handler" => "updateAttack"
    ],
    [
        "method" => "DELETE", //deletes a row from the db based on the event_id
        "middlewares" => ["isLoggedIn"],
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
    $allHeaders = getallheaders();
    if(isset($allHeaders['Authorization'])){
        return true;
    }

    Response::status(401);
    Response::json([
        "status" => 401,
        "reason" => "You can only access if authenticated!"
    ]);
    return false;
}

function isAdmin($req){
    if($req['params']['country'] == 'romania'){
        return true;
    }

    Response::status(403);
    Response::json([
        "status" => 403,
        "reason" => "You can only access if admin!"
    ]);

    return false;
}


// $req['query'][values]