<?php
include_once "StatsControllerDB.php"; 
include_once "StatsDataDisplay.php";

function DisplayCriteriaWrapDB() { 
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
        <?php DisplayChecksForDB($values_success); ?>
        </ul>
    </div>
    </div>
    

    <div class="filter-panel">
        
        <p> Suicide </p>
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_suicide); ?>
        </ul>
    </div>
    </div>
    <div class="filter-panel">
        
        <p> Attack Type </p>
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_attack_type); ?>
        </ul>
    </div>
    </div>

    <div class="filter-panel">

        <p> Year </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_year); ?>
        </ul>
    </div>
    </div>
     <div class="filter-panel">

        <p> Month </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_month); ?>
        </ul>
    </div>
    </div>
     <div class="filter-panel">

        <p> Day </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_day); ?>
        </ul>
    </div>
    </div>
    

     <div class="filter-panel">
        
        <p> Country </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_country); ?>
        </ul>
    </div>
    </div>
   
     <div class="filter-panel">
        
        <p> Provence </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_provence); ?>
        <?php DisplayChecksForDB($values_provence2); ?>
        <?php DisplayChecksForDB($values_provence3); ?>
        </ul>
    </div>
    </div>
     <div class="filter-panel">
        
        <p> City </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_city); ?>
        <?php DisplayChecksForDB($values_city2); ?>
        <?php DisplayChecksForDB($values_city3); ?>
        <?php DisplayChecksForDB($values_city4); ?>
        <?php DisplayChecksForDB($values_city5); ?>
        <?php DisplayChecksForDB($values_city6); ?>
        <?php DisplayChecksForDB($values_city7); ?>
        <?php DisplayChecksForDB($values_city8); ?>
        <?php DisplayChecksForDB($values_city9); ?>
        <?php DisplayChecksForDB($values_city10); ?>
        <?php DisplayChecksForDB($values_city11); ?>
        <?php DisplayChecksForDB($values_city12); ?>
        <?php DisplayChecksForDB($values_city13); ?>
        <?php DisplayChecksForDB($values_city14); ?>
        <?php DisplayChecksForDB($values_city15); ?>
        <?php DisplayChecksForDB($values_city16); ?>
        <?php DisplayChecksForDB($values_city17); ?>
        <?php DisplayChecksForDB($values_city18); ?>
        <?php DisplayChecksForDB($values_city19); ?>
        <?php DisplayChecksForDB($values_city20); ?>
        <?php DisplayChecksForDB($values_city21); ?>
        <?php DisplayChecksForDB($values_city22); ?>
        <?php DisplayChecksForDB($values_city23); ?>
        <?php DisplayChecksForDB($values_city24); ?>
        <?php DisplayChecksForDB($values_city25); ?>
        <?php DisplayChecksForDB($values_city26); ?>
        <?php DisplayChecksForDB($values_city27); ?>
        <?php DisplayChecksForDB($values_city28); ?>
        </ul>
    </div>
    </div>
   
     <div class="filter-panel">
        
        <p> Group Name </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_group_name); ?>
        <?php DisplayChecksForDB($values_group_name2); ?>
        <?php DisplayChecksForDB($values_group_name3); ?>
        <?php DisplayChecksForDB($values_group_name4); ?>
        <?php DisplayChecksForDB($values_group_name5); ?>
        <?php DisplayChecksForDB($values_group_name6); ?>
        <?php DisplayChecksForDB($values_group_name7); ?>
        </ul>
    </div>
    </div>
     <div class="filter-panel"> 
        
        <p> Group subname </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_group_subname); ?>
        <?php DisplayChecksForDB($values_group_subname2); ?>
        </ul>
    </div>
    </div>
 

    <div class="filter-panel">
        
        <p> Terrorists number </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_group_terrorists_number); ?>
        </ul>
    </div>
    </div>
  
    <div class="filter-panel">

        <p> Claim Mode </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_claim_mode); ?>
        </ul>
    </div>
    </div>
    <div class="filter-panel">
        
        <p> Target type </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_target_type); ?>
        </ul>
    </div>
    </div>
    <div class="filter-panel">
        
        <p> Target subtype </p>
        <div class="list-filter"> 
        <ul>
        <?php DisplayChecksForDB($values_target_subtype); ?>
        </ul>
    </div>
    </div>

    <div class="filter-panel">
        
        <p> Target Nationality </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_target_nationality); ?>
        </ul>
    </div>
    </div>
    <div class="filter-panel">
        
        <p> Weapon Type </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_weapon_type); ?>
        </ul>
    </div>
    </div>
    
    <div class="filter-panel">
        
        <p> Weapon subtype </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_weapon_subtype); ?>
        </ul>
    </div>
    </div>

    <div class="filter-panel">
        
        <p> Total fatalities </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_total_fatalities); ?>
        </ul>
    </div>
    </div>

    <div class="filter-panel">
        
        <p> U.S.Citizens who died </p> 
        <div class="list-filter">
        <ul>
        <?php DisplayChecksForDB($values_us_citizens_who_died); ?>
        </ul>
    </div>
</div>
<?php
} ?>

