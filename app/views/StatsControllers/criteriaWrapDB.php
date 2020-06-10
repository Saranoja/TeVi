<?php
include_once "StatsControllerDB.php";
include_once "StatsDataDisplay.php";

function DisplayCriteriaWrapDB()
{
    global $values_success;
    global $values_suicide;
    global $values_attack_type;
    global $values_year;
    global $values_month;
    global $values_day;
    global $values_country;
    global $values_provence;
    global $values_provence2;
    global $values_provence3;
    global $values_city;
    global $values_city2;
    global $values_city3;
    global $values_city4;
    global $values_city5;
    global $values_city6;
    global $values_city7;
    global $values_city8;
    global $values_city9;
    global $values_city10;
    global $values_city11;
    global $values_city12;
    global $values_city13;
    global $values_city14;
    global $values_city15;
    global $values_city16;
    global $values_city17;
    global $values_city18;
    global $values_city19;
    global $values_city20;
    global $values_city21;
    global $values_city22;
    global $values_city23;
    global $values_city24;
    global $values_city25;
    global $values_city26;
    global $values_city27;
    global $values_city28;
    global $values_group_name;
    global $values_group_name2;
    global $values_group_name3;
    global $values_group_name4;
    global $values_group_name5;
    global $values_group_name6;
    global $values_group_name7;
    global $values_group_subname;
    global $values_group_subname2;
    global $values_group_terrorists_number;
    global $values_claim_mode;
    global $values_weapon_type;
    global $values_weapon_subtype;
    global $values_total_fatalities;
    global $values_us_citizens_who_died;
    global $values_target_type;
    global $values_target_subtype;
    global $values_target_nationality;
?>

    <div class="filter-panel">

        <p> Success </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_success, "success[]"); ?>
            </ul>
        </div>
    </div>


    <div class="filter-panel">

        <p> Suicide </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_suicide, "suicide[]"); ?>
            </ul>
        </div>
    </div>
    <div class="filter-panel">

        <p> Attack Type </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_attack_type, "attack-type[]"); ?>
            </ul>
        </div>
    </div>

    <div class="filter-panel">

        <p> Year </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_year, "year[]"); ?>
            </ul>
        </div>
    </div>
    <div class="filter-panel">

        <p> Month </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_month, "month[]"); ?>
            </ul>
        </div>
    </div>
    <div class="filter-panel">

        <p> Day </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_day, "day[]"); ?>
            </ul>
        </div>
    </div>


    <div class="filter-panel">

        <p> Country </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_country, "country[]"); ?>
            </ul>
        </div>
    </div>

    <div class="filter-panel">

        <p> Provence </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_provence, "provence[]"); ?>
                <?php DisplayChecksForDB($values_provence2, "provence[]"); ?>
                <?php DisplayChecksForDB($values_provence3, "provence[]"); ?>
            </ul>
        </div>
    </div>
    <div class="filter-panel">

        <p> City </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_city, "city[]"); ?>
                <?php DisplayChecksForDB($values_city2, "city[]"); ?>
                <?php DisplayChecksForDB($values_city3, "city[]"); ?>
                <?php DisplayChecksForDB($values_city4, "city[]"); ?>
                <?php DisplayChecksForDB($values_city5, "city[]"); ?>
                <?php DisplayChecksForDB($values_city6, "city[]"); ?>
                <?php DisplayChecksForDB($values_city7, "city[]"); ?>
                <?php DisplayChecksForDB($values_city8, "city[]"); ?>
                <?php DisplayChecksForDB($values_city9, "city[]"); ?>
                <?php DisplayChecksForDB($values_city10, "city[]"); ?>
                <?php DisplayChecksForDB($values_city11, "city[]"); ?>
                <?php DisplayChecksForDB($values_city12, "city[]"); ?>
                <?php DisplayChecksForDB($values_city13, "city[]"); ?>
                <?php DisplayChecksForDB($values_city14, "city[]"); ?>
                <?php DisplayChecksForDB($values_city15, "city[]"); ?>
                <?php DisplayChecksForDB($values_city16, "city[]"); ?>
                <?php DisplayChecksForDB($values_city17, "city[]"); ?>
                <?php DisplayChecksForDB($values_city18, "city[]"); ?>
                <?php DisplayChecksForDB($values_city19, "city[]"); ?>
                <?php DisplayChecksForDB($values_city20, "city[]"); ?>
                <?php DisplayChecksForDB($values_city21, "city[]"); ?>
                <?php DisplayChecksForDB($values_city22, "city[]"); ?>
                <?php DisplayChecksForDB($values_city23, "city[]"); ?>
                <?php DisplayChecksForDB($values_city24, "city[]"); ?>
                <?php DisplayChecksForDB($values_city25, "city[]"); ?>
                <?php DisplayChecksForDB($values_city26, "city[]"); ?>
                <?php DisplayChecksForDB($values_city27, "city[]"); ?>
                <?php DisplayChecksForDB($values_city28, "city[]"); ?>
            </ul>
        </div>
    </div>

    <div class="filter-panel">

        <p> Group Name </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_group_name, "group-name[]"); ?>
                <?php DisplayChecksForDB($values_group_name2, "group-name[]"); ?>
                <?php DisplayChecksForDB($values_group_name3, "group-name[]"); ?>
                <?php DisplayChecksForDB($values_group_name4, "group-name[]"); ?>
                <?php DisplayChecksForDB($values_group_name5, "group-name[]"); ?>
                <?php DisplayChecksForDB($values_group_name6, "group-name[]"); ?>
                <?php DisplayChecksForDB($values_group_name7, "group-name[]"); ?>
            </ul>
        </div>
    </div>
    <div class="filter-panel">

        <p> Group subname </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_group_subname, "group-subname[]"); ?>
                <?php DisplayChecksForDB($values_group_subname2, "group-subname[]"); ?>
            </ul>
        </div>
    </div>


    <div class="filter-panel">

        <p> Terrorists number </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_group_terrorists_number, "terrorists-number[]"); ?>
            </ul>
        </div>
    </div>

    <div class="filter-panel">

        <p> Claim Mode </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_claim_mode, "claim-mode[]"); ?>
            </ul>
        </div>
    </div>
    <div class="filter-panel">

        <p> Target type </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_target_type, "target-type[]"); ?>
            </ul>
        </div>
    </div>
    <div class="filter-panel">

        <p> Target subtype </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_target_subtype, "target-subtype[]"); ?>
            </ul>
        </div>
    </div>

    <div class="filter-panel">

        <p> Target Nationality </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_target_nationality, "target-nationality[]"); ?>
            </ul>
        </div>
    </div>
    <div class="filter-panel">

        <p> Weapon Type </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_weapon_type, "weapon-type[]"); ?>
            </ul>
        </div>
    </div>

    <div class="filter-panel">

        <p> Weapon subtype </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_weapon_subtype, "weapon-subtype[]"); ?>
            </ul>
        </div>
    </div>

    <div class="filter-panel">

        <p> Total fatalities </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_total_fatalities, "total-fatalities[]"); ?>
            </ul>
        </div>
    </div>

    <div class="filter-panel">

        <p> U.S.Citizens who died </p>
        <div class="list-filter">
            <ul>
                <?php DisplayChecksForDB($values_us_citizens_who_died, "us-citizens-who-died[]"); ?>
            </ul>
        </div>
    </div>
<?php
} ?>