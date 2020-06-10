<?php
include_once "StatsController.php"; 
include_once "StatsDataDisplay.php";

function DisplayCriteriaWrap() { 
    global $event_columns;
    global $time_columns;
    global $location_columns;
    global $attacker_columns;
    global $target_columns;
    global $weapons_columns;
    global $deaths_columns;
    ?>

    <div class="event">
        <p> Event </p>
        <?php DisplayRadioButtonsRadius($event_columns); ?>
    </div>
    <div class="time">
        <p> Time </p>
        <?php DisplayRadioButtonsRadius($time_columns); ?>
    </div>
    <div class="location">
        <p> Location </p>
        <?php DisplayRadioButtonsRadius($location_columns); ?>
    </div>
    <div class="attacker">
        <p> Attacker </p>
        <?php DisplayRadioButtonsRadius($attacker_columns); ?>
    </div>
    <div class="target">
        <p> Target </p>
        <?php DisplayRadioButtonsRadius($target_columns); ?>
    </div>
    <div class="weapon">
        <p> Weapon details </p>
        <?php DisplayRadioButtonsRadius($weapons_columns); ?>
    </div>
<?php
} ?>