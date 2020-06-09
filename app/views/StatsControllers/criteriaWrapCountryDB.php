<?php
include_once "StatsControllerDB.php";
include_once "StatsDataDisplay.php";

function DisplayCriteriaWrapCountryDB()
{
 
    global $values_country;
?>


    <div class="filter-panel">

        <p> Country </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForCountryDB($values_country,"country[]"); ?>
            </ul>
        </div>
    </div>
<?php
} ?>