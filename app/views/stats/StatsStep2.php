<!DOCTYPE html>
<html lang="en">

<head>
  <title> TeVi - Statistics </title>
  <?php getBaseHead(); ?>
  <link rel="stylesheet" href="../style/StatsStep2.css">
  <script src="../js/mobileMenu.js"></script>
</head>

<body id="whole_body">
  <?php getMenuInfo();
  initModal(); ?>


  <?php
  if (isset($_POST['Result']) || isset($_POST['back-button'])) {
    if (isset($_POST["hopping"])) {
      $radioVal = $_POST["hopping"];
    } else {
      $radioVal = $_POST["chartChoice"];
    }
    if ($radioVal == "Pie") {
  ?>

      <button class="infoButton" id="myBtn"> ? </button>
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <script src="../js/FiltersInfoModal.js"></script>
          <span class="close">&times;</span>
          <h3>Event</h3>
          <p> Success - will display whether a certain attack was successful or not (i.e. 0/1)</p>
          <p> Suicide - will display whether a certain attack was a suicide attempt or not (i.e. 0/1)</p>
          <p> Attack type - will display the type of attack (i.e. Hijacking/Asssassination/Bombing/Explosion)</p>
          <br>
          <h3>Time</h3>
          <p> Year - will display the year in which the attack took place (i.e. 1970-2017) </p>
          <p> Month - will display the month in which the attack took place (i.e. 1-12) </p>
          <p> Duration - will display whether the attack took longer than 24h or not (i.e. 0/1)</p>
          <br>
          <h3>Location</h3>
          <p> Country - will display the country in which the attack took place (i.e. Pakistan/Italy/India/Colombia) </p>
          <p> Region - will display the region code based on 12 regions (i.e. 1-12)</p>
          <br>
          <h3>Attacker</h3>
          <p> Claim mode - will display the way the attackers claimed a certain attack (i.e. Note left at scene/Email/Video)</p>
          <p> Claim - will display whether the attack was claimed or not (i.e. 0/1) </p>
          <br>
          <h3>Target</h3>
          <p> Target type - will display the category for the attack target (i.e. Government (Diplomatic)/Police/Business/Tourists)</p>
          <p> Target subtype - will display the subcategory for the attack target (i.e. Named Civilian/Embassy/Consulate/Electricity) </p>
          <p> Target nationality - will display the nationality of the target (i.e. Belgium/Germany/Japan) </p>
          <br>
          <h3>Weapon</h3>
          <p> Weapon type - will display the category for the used weapon (i.e. Explosive/Chemical/Firearms)</p>
          <p> Weapon subtype - will display the subcategory for the used weapon (i.e. Dynamite/TNT/Poisoning/Handgun/Suffocation) </p>
        </div>
      </div>


      <div class="wrapper">
        <div class="model-hierarchy">
          <img src="../img/HierarchyModel/step2.svg">
        </div>
        <div>
          <form action="../Stats/Step3" method="post" class="check-box" name="check-box">
            <?php DisplayCriteriaWrapPieChartGroupBy(); ?>

            <input type="hidden" class="chartchoice" name="chartChoice" value=<?= $radioVal ?>>
            <button onclick="location.href='../Stats/index'" class="back-button" type="button"></button>
            <button class="next-button" name="GroupFilterSubmit" type="submit"></button>
          </form>
        </div>
      </div>

    <?php
    } else if ($radioVal == "Map") {
    ?>
      <div class="wrapper">
        <div class="model-hierarchy">
          <img src="../img/HierarchyModel/step2.svg">
        </div>
        <div>
          <form action="../Stats/Step3" method="post" class="check-box" name="check-box">
            <h3> You can only view a report for the total fatalities for this visualization type </h3>
            <input type="hidden" class="chartchoice" name="chartChoice" value=<?= $radioVal ?>>
            <button onclick="location.href='../Stats/index'" class="back-button" type="button"></button>
            <button class="next-button" name="GroupFilterSubmit" type="submit"></button>
          </form>
        </div>
      </div>

    <?php  } elseif ($radioVal == "Table") {
    ?>
      <button class="infoButton" id="myBtn"> ? </button>
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Event</h3>
          <p> Success - will display whether a certain attack was successful or not (i.e. 0/1)</p>
          <p> Suicide - will display whether a certain attack was a suicide attempt or not (i.e. 0/1)</p>
          <p> Attack type - will display the type of attack (i.e. Hijacking/Asssassination/Bombing/Explosion)</p>
          <br>
          <h3>Time</h3>
          <p> Year - will display the year in which the attack took place (i.e. 1970-2017) </p>
          <p> Month - will display the month in which the attack took place (i.e. 1-12) </p>
          <p> Day - will display the day in which the attack took place (i.e. 1-31) </p>
          <p> Duration - will display whether the attack took longer than 24h or not (i.e. 0/1)</p>
          <br>
          <h3>Location</h3>
          <p> Country - will display the country in which the attack took place (i.e. Pakistan/Italy/India/Colombia) </p>
          <p> Country code - will display the country code for the country in which the attack took place (i.e. 10-250) </p>
          <p> Region - will display the region code based on 12 regions (i.e. 1-12)</p>
          <p> Provence - will display the provence in which the attack took place (i.e. Kashmir/Diyala/Al Anbar)</p>
          <p> City - will display the city in which the attack took place (i.e. Washington/Baghdad/Teheran)</p>
          <p> Corp - will display the place in which the attack took place (i.e. Army Recruiting Station/Illinois State Police/R.O.T.C.)</p>
          <br>
          <h3>Attacker</h3>
          <p> Group name - will display the name of the group that carried out the attack (i.e. Black Nationalists/Left-Wing Militants/Nara Red Army) </p>
          <p> Group subname - will display additional details about group that carried out the attack (i.e. Rebels/Justice for Armenian Genocide/Assault Brigade Ulrike Meinhof)</p>
          <p> Gun certain - will display wheter the attacker used a gun or not (i.e. 0/1)</p>
          <p> Terrorists number - will display the terrorists number that carried out the attack (i.e. 0-100)</p>
          <p> Claim mode - will display the way the attackers claimed a certain attack (i.e. Note left at scene/Email/Video)</p>
          <p> Claim - will display whether the attack was claimed or not (i.e. 0/1) </p>
          <br>
          <h3>Target</h3>
          <p> Target - will display the specific person, building, installation that was targeted and/or victimized (i.e. Checkpoint/Village/Patrol/Unit)</p>
          <p> Target type - will display the category for the attack target (i.e. Government (Diplomatic)/Police/Business/Tourists)</p>
          <p> Target subtype - will display the subcategory for the attack target (i.e. Named Civilian/Embassy/Consulate/Electricity) </p>
          <p> Target nationality - will display the nationality of the target (i.e. Belgium/Germany/Japan) </p>
          <br>
          <h3>Weapon</h3>
          <p> Weapon type - will display the category for the used weapon (i.e. Explosive/Chemical/Firearms)</p>
          <p> Weapon subtype - will display the subcategory for the used weapon (i.e. Dynamite/TNT/Poisoning/Handgun/Suffocation) </p>
        </div>
        <script src="../js/FiltersInfoModal.js"></script>
      </div>

      <!-- <script src="../js/mobileMenu.js"></script> -->
      <div class="wrapper">
        <div class="model-hierarchy">
          <img src="../img/HierarchyModel/step2.svg">
        </div>
        <div>
          <form action="../Stats/Step3" method="post" class="check-box" name="check-box">
            <div class="criteria_wrap">
              <?php
              DisplayCriteriaWrap(); ?>
            </div>
            <script src="../js/checkboxLimitRadius.js" type="text/javascript">
              checkBoxLimit()
            </script>
            <input type="hidden" class="chartchoice" name="chartChoice" value=<?= $radioVal ?>>

            <button onclick="location.href='../Stats/index'" class="back-button" type="button"></button>
            <button class="next-button" name="GroupFilterSubmit" type="submit"></button>
          </form>
        </div>
      </div>
    <?php

    } elseif ($radioVal == "Bars") {

    ?>

      <button class="infoButton" id="myBtn"> ? </button>
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Event</h3>
          <p> Success - will display whether a certain attack was successful or not (i.e. 0/1)</p>
          <p> Suicide - will display whether a certain attack was a suicide attempt or not (i.e. 0/1)</p>
          <p> Attack type - will display the type of attack (i.e. Hijacking/Asssassination/Bombing/Explosion)</p>
          <br>
          <h3>Time</h3>
          <p> Year - will display the year in which the attack took place (i.e. 1970-2017) </p>
          <p> Month - will display the month in which the attack took place (i.e. 1-12) </p>
          <p> Duration - will display whether the attack took longer than 24h or not (i.e. 0/1)</p>
          <br>
          <h3>Location</h3>
          <p> Country - will display the country in which the attack took place (i.e. Pakistan/Italy/India/Colombia) </p>
          <p> Region - will display the region code based on 12 regions (i.e. 1-12)</p>
          <br>
          <h3>Attacker</h3>
          <p> Claim mode - will display the way the attackers claimed a certain attack (i.e. Note left at scene/Email/Video)</p>
          <p> Claim - will display whether the attack was claimed or not (i.e. 0/1) </p>
          <br>
          <h3>Target</h3>
          <p> Target type - will display the category for the attack target (i.e. Government (Diplomatic)/Police/Business/Tourists)</p>
          <p> Target subtype - will display the subcategory for the attack target (i.e. Named Civilian/Embassy/Consulate/Electricity) </p>
          <p> Target nationality - will display the nationality of the target (i.e. Belgium/Germany/Japan) </p>
          <br>
          <h3>Weapon</h3>
          <p> Weapon type - will display the category for the used weapon (i.e. Explosive/Chemical/Firearms)</p>
          <p> Weapon subtype - will display the subcategory for the used weapon (i.e. Dynamite/TNT/Poisoning/Handgun/Suffocation) </p>
        </div>
      </div>
      <script src="../js/FiltersInfoModal.js"></script>

      <div class="wrapper">
        <div class="model-hierarchy">
          <img src="../img/HierarchyModel/step2.svg">
        </div>
        <div>
          <form action="../Stats/Step3" method="post" class="check-box" name="check-box">
            <h3>Choose at most 4 countries for which you want to see a report</h3>
            <?php DisplayCriteriaWrapCountryDB(); ?>
            <h3> Choose the category for the data you want to compare </h3>
            <?php DisplayCriteriaWrapBarsChartGroupBy(); ?>
            <script src="../js/checkboxLimit.js" type="text/javascript">
              checkBoxLimit()
            </script>
            <input type="hidden" class="chartchoice" name="chartChoice" value=<?= $radioVal ?>>
            <button onclick="location.href='../Stats/index'" class="back-button" type="button"></button>
            <button class="next-button" name="GroupFilterSubmit" type="submit"></button>
          </form>
        </div>
      </div>

  <?php
    }
  }
  ?>
</body>

</html>