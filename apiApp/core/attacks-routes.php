<?php

$allRoutes = [
    [
        "method" => "GET", //returns all attacks in the db
        "route" => "/attacks",
        "handler" => "getAllAttacks"
    ],
    [
        "method" => "GET", //returns all attacks with country = value
        "route" => "/attacks/:country",
        "handler" => "getAttackFromCountry"
    ],
    [
        "method" => "GET", //returns all attacks with year = value
        "route" => "/attacks/:year",
        "handler" => "getAttackFromYear"
    ],
    [
        "method" => "POST", //interts a new attack in the db
        "route" => "/attacks",
        "handler" => "insertAttack"
    ],
    [
        "method" => "PUT", //updates a row from the db
        "route" => "/attacks",
        "handler" => "updateAttack"
    ],
    [
        "method" => "DELETE", //deletes a row from the db based on the event_id
        "route" => "/attacks/:id",
        "handler" => "deleteAttack"
    ]
];