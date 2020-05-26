<?php
include_once "StatsController.php"; 
include_once "StatsDataDisplay.php";

function DisplayMobileShrink() { 
    global $event_columns;
    global $time_columns;
    global $location_columns;
    global $attacker_columns;
    global $target_columns;
    global $weapons_columns;
    global $deaths_columns;
    ?>
    <div class="event">
        <button type="button" onclick="col()" class="collapsible"> Event </button>
        <div class="content">
            <?php DisplayChecksFor($event_columns); ?>
        </div>
    </div>
    <div class="time">
        <button type="button" onclick="col()" class="collapsible"> Time </button>
        <div class="content">
            <?php DisplayChecksFor($time_columns); ?>
        </div>
    </div>
    <div class="location">
        <button type="button" onclick="col()" class="collapsible"> Location </button>
        <div class="content">
            <?php DisplayChecksFor($location_columns); ?>
        </div>
    </div>
    <div class="attacker">
        <button type="button" onclick="col()" class="collapsible"> Attacker </button>
        <div class="content">
            <?php DisplayChecksFor($attacker_columns); ?>
        </div>
    </div>
    <div class="target">
        <button type="button" onclick="col()" class="collapsible"> Target </button>
        <div class="content">
            <?php DisplayChecksFor($target_columns); ?>
        </div>
    </div>
    <div class="weapon">
        <button type="button" onclick="col()" class="collapsible"> Weapon details </button>
        <div class="content">
            <?php DisplayChecksFor($weapons_columns); ?>
        </div>
    </div>
    <div class="deaths">
        <button type="button" onclick="col()" class="collapsible"> Deaths </button>
        <div class="content">
            <?php DisplayChecksFor($deaths_columns); ?>
        </div>
    </div>
<?php } ?>