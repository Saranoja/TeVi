<?php
include_once "StatsControllerMapChartGroup.php"; 
include_once "StatsDataDisplay.php";

function DisplayCriteriaWrapMapChartGroupBy() { 
    global $event_columnsMap;
    global $time_columnsMap;
    global $location_columnsMap;
    global $attacker_columnsMap;
    global $target_columnsMap;
    global $weapons_columnsMap;
    global $death_columnsMap;

    ?>
   <div class="groupBy-wrapper">
   <div class="event">
        <p> Event </p>
        <?php DisplayRadioButtonsFor($event_columnsMap); ?>
    </div>
    <div class="time">
        <p> Time </p>
        <?php DisplayRadioButtonsFor($time_columnsMap); ?>
    </div>
    <div class="location">
        <p> Location </p>
        <?php DisplayRadioButtonsFor($location_columnsMap); ?>
    </div>
    <div class="attacker">
        <p> Attacker </p>
        <?php DisplayRadioButtonsFor($attacker_columnsMap); ?>
    </div>
    <div class="death">
        <p> Deaths </p>
        <?php DisplayRadioButtonsFor($death_columnsMap); ?>
    </div>
    <div class="target">
        <p> Target </p>
        <?php DisplayRadioButtonsFor($target_columnsMap); ?>
    </div>
    <div class="weapon">
        <p> Weapon details </p>
        <?php DisplayRadioButtonsFor($weapons_columnsMap); ?>
    </div>
    </div>
<?php
} ?>