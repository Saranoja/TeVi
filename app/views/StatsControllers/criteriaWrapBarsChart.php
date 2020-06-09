<?php
include_once "StatsControllerPieChartGroup.php"; 
include_once "StatsDataDisplay.php";

function DisplayCriteriaWrapBarsChartGroupBy() { 
    global $event_columnsPie;
    global $time_columnsPie;
    global $location_columnsPie;
    global $attacker_columnsPie;
    global $target_columnsPie;
    global $weapons_columnsPie;

    ?>
   <div class="groupBy-wrapper">
   <div class="event">
        <p> Event </p>
        <?php DisplayRadioButtonsFor($event_columnsPie); ?>
    </div>
    <div class="time">
        <p> Time </p>
        <?php DisplayRadioButtonsFor($time_columnsPie); ?>
    </div>
    <div class="location">
        <p> Location </p>
        <?php DisplayRadioButtonsFor($location_columnsPie); ?>
    </div>
    <div class="attacker">
        <p> Attacker </p>
        <?php DisplayRadioButtonsFor($attacker_columnsPie); ?>
    </div>
    <div class="target">
        <p> Target </p>
        <?php DisplayRadioButtonsFor($target_columnsPie); ?>
    </div>
    <div class="weapon">
        <p> Weapon details </p>
        <?php DisplayRadioButtonsFor($weapons_columnsPie); ?>
    </div>
    </div>
<?php
} ?>