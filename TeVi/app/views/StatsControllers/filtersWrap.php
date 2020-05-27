<?php
include_once "StatsController.php"; 
include_once "StatsFiltersDisplay.php";
include_once "IncrementalField.php";

function DisplayFilters() { 
    global $states;
    global $regions;
    ?>
    <div class="filter">
        <label for="date">Date</label>
        <input type="date" name="date" id="dateOfInfo">
    </div>
    
    <div class="filter">
        <label for="country">Country</label>      
        <select id="country" name="country" class="country-control">
            <?php DisplayFiltersFor($states); ?>
        </select>
    </div>

    <div class="filter">
        <label for="region">Region</label>
        <select id="region" name="region" class="region-control">
            <?php DisplayFiltersFor($regions); ?>
        </select>
    </div>

    <div class="filter">
        <label for="entries">Entries number to show:</label>
        <select id="entry" name="entry" class="entries">
            <?php IncrementalField(1, 80) ?>
        </select>
    </div>

<?php
} ?>