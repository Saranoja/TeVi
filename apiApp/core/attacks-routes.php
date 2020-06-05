<?php
//TRE SA MUTAM ASTA DE AICI
class Response {
    static function status($code){
        http_response_code($code);
    }
    static function json($data){
        header('Content-Type: application/json');
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
}

$attacksRoutes = [
    [
        "method" => "GET", //returns all attacks in the db
        //"middlewares" => ["isLoggedIn"],
        "route" => "attacks",
        "handler" => "getAllAttacks"
    ],
    [
        "method" => "GET", //returns the attack with id=event_id
        "middlewares" => ["isLoggedIn","isAdmin"],
        "route" => "attacks/:event_id",
        "handler" => "getAttack"
    ],
    [
        "method" => "POST", //interts a new attack in the db
        // "middlewares" => ["isLoggedIn"],
        "route" => "attacks",
        "handler" => "insertAttack"
    ],
    [
        "method" => "PUT", //updates a row from the db
        // "middlewares" => ["isLoggedIn"],
        "route" => "attacks/:event_id",
        "handler" => "updateAttack"
    ],
    [
        "method" => "DELETE", //deletes a row from the db based on the event_id
        // "middlewares" => ["isLoggedIn"],
        "route" => "attacks/:id",
        "handler" => "deleteAttack"
    ]
];

function getAllAttacks($req){ 
    $controller = 'AttackController';
    require_once '../apiApp/controllers/' . $controller . '.php';
    $controller = new $controller;
    $response = $controller->getAll();
    Response::status($response['status']);
    Response::json($response['body']);
}

function getAttack($req){
    
    //echo $req['params']['event_id'];

    // echo key($req['params']);
    // echo key($req['params']);
    // // echo $req['params']['event_id'];

    // var_dump($req['params']);
    
    
    $controller = 'AttackController';
    require_once '../apiApp/controllers/' . $controller . '.php';
    $controller = new $controller;
    $response = $controller->getAttack($req);
    Response::status($response['status']);
    Response::json($response['body']);
}

function insertAttack($req){
   //demo
    $modifiedPayload = $req['data'];
    $modifiedPayload -> id = uniqid();
    
    Response::status(200);
    Response::json($modifiedPayload);
}

function updateAttack($req){
    Response::status(200);
    Response::json($req['params']);

    $controller = 'AttackController';
    require_once '../apiApp/controllers/' . $controller . '.php';
    $controller = new $controller;
    $response = $controller->updateAttack(/*$req['params']*/);
    Response::status($response['status']);
    Response::json($response['body']);


}

function deleteAttack($req){
    
    $controller = 'AttackController';
    require_once '../apiApp/controllers/' . $controller . '.php';
    $controller = new $controller;
    $response = $controller->deleteAttack(/*$req['params']*/);
    Response::status($response['status']);
    Response::json($response['body']);

}

function isLoggedIn($req){
    /*$allHeaders = getallheaders();
    if(isset($allHeaders['Authorization'])){
        return true;
    }*/

    //if(isset($_COOKIE['admin'])) {
    //         Response::status(200);
    //         Response::json([
    //             "status" => 200,
    //             "reason" => "Access granted"
    //         ]);
    //         return true;
    // }
    // else {
    //     Response::status(401);
    //     Response::json([
    //         "status" => 401,
    //         "reason" => "You can only access if authenticated!"
    //     ]);
    //     return false;
    //}

    return true;
}

function isAdmin($req){
    // if($req['params']['country'] == 'romania'){
    //     return true;
    // }

    // Response::status(403);
    // Response::json([
    //     "status" => 403,
    //     "reason" => "You can only access if admin!"
    // ]);

    // return false;

    return true;
}


// $req['query'][values]