<?php

function GetColumnsEventMapChart(){
    return ['Success','Suicide','Attack-Type'];
}
$event_columnsMap=GetColumnsEventMapChart();

function GetColumnsTimeMapChart(){
    return ['Year','Month','Extended','Duration'];
}
$time_columnsMap=GetColumnsTimeMapChart();

function GetColumnsLocationMapChart(){
    return ['Country','Provence'];
}
$location_columnsMap=GetColumnsLocationMapChart();

function GetColumnsTargetDetailsMapChart(){
    return ['Target-Type','Target-Nationality'];
}
$target_columnsMap=GetColumnsTargetDetailsMapChart();

function GetColumnsAttackerDetailsMapChart(){
    return ['Gun-certain','Claim-Type','Claim-Mode'];
}
$attacker_columnsMap=GetColumnsAttackerDetailsMapChart();

function GetWeaponDetailsMapChart(){
    return ['Weapon-Type','Weapon-Subtype'];
}
$weapons_columnsMap=GetWeaponDetailsMapChart();

function GetDeathsDetailsMapChart(){
    return ['Total-fatalities','U.S.-Citizens-who-died'];
}
$death_columnsMap=GetDeathsDetailsMapChart();

?>