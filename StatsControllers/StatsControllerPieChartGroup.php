<?php

function GetColumnsEventPieChart(){
    return ['Success','Suicide','Attack-Type'];
}
$event_columnsPie=GetColumnsEventPieChart();

function GetColumnsTimePieChart(){
    return ['Year','Month','Extended'];
}
$time_columnsPie=GetColumnsTimePieChart();

function GetColumnsLocationPieChart(){
    return ['Country','Region'];
}
$location_columnsPie=GetColumnsLocationPieChart();

function GetColumnsTargetDetailsPieChart(){
    return ['Target-Type','Target-Nationality'];
}
$target_columnsPie=GetColumnsTargetDetailsPieChart();

function GetColumnsAttackerDetailsPieChart(){
    return ['Claim-Type'];
}
$attacker_columnsPie=GetColumnsAttackerDetailsPieChart();

function GetWeaponDetailsPieChart(){
    return ['Weapon-Subtype'];
}
$weapons_columnsPie=GetWeaponDetailsPieChart();


?>