<?php

$attacksRoutes = [
    [
        "method" => "POST", //performs a query on the db
        "middlewares" => ["isLoggedIn"],
        "route" => "query",
        "handler" => "getQueryResult"
    ],
    [
        "method" => "GET", //returns all attacks in the db
        "middlewares" => ["isLoggedIn"],
        "route" => "attacks",
        "handler" => "getAllAttacks"
    ],
    [
        "method" => "GET", //returns the attack with id=event_id
        "middlewares" => ["isLoggedIn", "isAdmin"],
        "route" => "attacks/:event_id",
        "handler" => "getAttack"
    ],
    [
        "method" => "POST", //inserts a new attack in the db
        "middlewares" => ["isLoggedIn", "isAdmin"],
        "route" => "attacks",
        "handler" => "insertAttack"
    ],
    [
        "method" => "PUT", //updates a row from the db
        "middlewares" => ["isLoggedIn", "isAdmin"],
        "route" => "attacks",
        "handler" => "updateAttack"
    ],
    [
        "method" => "DELETE", //deletes a row from the db based on the event_id
        "middlewares" => ["isLoggedIn", "isAdmin"],
        "route" => "attacks/:event_id",
        "handler" => "deleteAttack"
    ]
];

function getAllAttacks($req)
{
    $controller = 'AttackController';
    require_once '../apiApp/controllers/' . $controller . '.php';
    $controller = new $controller;
    $response = $controller->getAll();
    Response::status($response['status']);
    Response::json($response['body']);
}

function getAttack($req)
{
    $controller = 'AttackController';
    require_once '../apiApp/controllers/' . $controller . '.php';
    $controller = new $controller;
    $response = $controller->getAttack($req);
    Response::status($response['status']);
    Response::json($response['body']);
}

function getQueryResult($req)
{
    $controller = 'Display';
    require_once '../apiApp/controllers/' . $controller . '.php';
    $controller = new $controller;
    $data = $req['data'];
    $response = $controller->default($data);
    Response::status($response['status']);
    Response::json($response['body']);
}

function insertAttack($req)
{
    $controller = 'AttackController';
    require_once '../apiApp/controllers/' . $controller . '.php';
    $controller = new $controller;
    $data = $req['data'];
    $response = $controller->insertAttack($data);
    Response::status($response['status']);
    Response::json($response['body']);
}

function updateAttack($req)
{
    $controller = 'AttackController';
    require_once '../apiApp/controllers/' . $controller . '.php';
    $controller = new $controller;
    $data = $req['data'];
    $response = $controller->updateAttack($data);
    Response::status($response['status']);
    Response::json($response['body']);
}

function deleteAttack($req)
{

    $controller = 'AttackController';
    require_once '../apiApp/controllers/' . $controller . '.php';
    $controller = new $controller;
    $response = $controller->deleteAttack($req['params']);
    Response::status($response['status']);
    Response::json($response['body']);
}

function isLoggedIn($req)
{
    $allHeaders = getallheaders();
    if (isset($allHeaders['Authorization'])) {
        $db = Database::getInstance();
        $connection = $db->getConnection();
        $query = "select token from users where token= '" . $allHeaders['Authorization'] . "'";
        $result = mysqli_query($connection, $query);
        if ($row = mysqli_fetch_assoc($result)) {
            return true;
        } else {
            Response::status(401);
            Response::json("Unauthorized");
            return false;
        }
    } else if (isset($_COOKIE['admin'])) {
        $db = Database::getInstance();
        $connection = $db->getConnection();
        $query = "select token from users where token= '" . $_COOKIE['admin'] . "'";
        $result = mysqli_query($connection, $query);
        if ($row = mysqli_fetch_assoc($result)) {
            return true;
        } else {
            Response::status(401);
            Response::json("Unauthorized");
            return false;
            return false;
        }
    }
    return false;
}

function isAdmin($req)
{
    $adminToken = 'd82494f05d6917ba02f7aaa29689ccb444bb73f20380876cb05d1f37537b7892';

    $allHeaders = getallheaders();

    if (isset($allHeaders['Authorization']) && strcmp($allHeaders['Authorization'], $adminToken) == 0) {
        return true;
    } else if (isset($_COOKIE['admin']) && strcmp($_COOKIE['admin'], $adminToken) == 0) {
        return true;
    } else {
        Response::status(401);
        Response::json("Unauthorized");
        return false;
    }
}