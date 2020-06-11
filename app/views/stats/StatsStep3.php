<!DOCTYPE html>
<html lang="en">

<head>
  <title> TeVi - Statistics </title>
  <?php getBaseHead(); ?>
  <link rel="stylesheet" href="../style/StatsStep3.css">
  <script src="../js/mobileMenu.js"></script>
</head>

<body id="whole_body">
  <?php getMenuInfo();
  initModal(); ?>
  <?php loadingScreen(); ?>
  <div class="wrapper">
    <div class="model-hierarchy">
      <img src="../img/HierarchyModel/step3.svg">
    </div>
    <div>
      <div>
        <?php
        if (isset($_POST['GroupFilterSubmit'])) {
          $chartChoice = $_POST["chartChoice"];
          if ($chartChoice == "Pie") {
            $groupBy = $_POST["radioFilterGroupBy"];
        ?>
            <script>
              localStorage.clear();
              localStorage.setItem('select', '<?php echo $groupBy; ?>');
            </script>
            <form action="../Result/index" method="post" class="check-box" name="check-box">
              <div class="criteria_wrap">
                <?php DisplayCriteriaWrapDB(); ?>
              </div>
              <input type="hidden" name="chartChoice" value=<?= $chartChoice ?>>
              <input type="hidden" name="groupByChoice" value=<?= $groupBy ?>>
              <!-- <button onclick="location.href='../Stats/Step2'" class="back-button" type="button"></button> -->
              <button class="finish-button" name="generate-chart" type="submit"></button>
            </form>
            <form action="../Stats/Step2" method="post">
              <input type="hidden" name="chartChoice" value=<?= $chartChoice ?>>
              <button class="back-button" name="back-button" type="submit"></button>
            </form>
            <script src="../js/loadingscreen.js"></script>
          <?php  }
          if ($chartChoice == "Map") {
            $groupBy = 0;
          ?>
            <form action="../Result/index" method="post" class="check-box" name="check-box">
              <div class="criteria_wrap">
                <?php DisplayCriteriaWrapDB(); ?>
              </div>
              <input type="hidden" name="chartChoice" value=<?= $chartChoice ?>>
              <input type="hidden" name="groupByChoice" value=<?= $groupBy ?>>
              <!-- <button onclick="location.href='../Stats/Step2'" class="back-button" type="button"></button> -->
              <button class="finish-button" name="generate-chart" type="submit"></button>
            </form>
            <form action="../Stats/Step2" method="post">
              <input type="hidden" name="chartChoice" value=<?= $chartChoice ?>>
              <button class="back-button" name="back-button" type="submit"></button>
            </form>
          <?php
          }
          if ($chartChoice == "Table") {
            $groupBy = $_POST["checkboxFilterRestriction"];
            $jsonTableGroupBy = json_encode($groupBy);
          ?>
            <script>
              localStorage.clear();
              localStorage.setItem('table-groupBy', '<?php echo $jsonTableGroupBy; ?>');
            </script>
            <form action="../Result/index" method="post" class="check-box" name="check-box">
              <div class="criteria_wrap">
                <?php DisplayCriteriaWrapDB(); ?>
              </div>
              <input type="hidden" name="chartChoice" value=<?= $chartChoice ?>>
              <input type="hidden" name="groupByChoice" value="0">
              <button class="finish-button" name="generate-chart" type="submit"></button>
            </form>
            <form action="../Stats/Step2" method="post">
              <input type="hidden" name="chartChoice" value=<?= $chartChoice ?>>
              <button class="back-button" name="back-button" type="submit"></button>
            </form>
          <?php
          }
          if ($chartChoice == "Bars") {
            $countryResult = array();
            if (isset($_POST["country"])) {
              foreach ($_POST["country"] as $value) {
                array_push($countryResult, $value);
              }
            }
            $groupBy = $_POST["radioFilterGroupBy"];
            $jsonCountry = json_encode($countryResult);
          ?>
            <script>
              localStorage.clear();
              localStorage.setItem('select', '<?php echo $groupBy; ?>');
              localStorage.setItem('countries', '<?php echo $jsonCountry; ?>');
            </script>
            <form action="../Result/index" method="post" class="check-box" name="check-box">
              <div class="criteria_wrap">
                <?php DisplayCriteriaWrapDB(); ?>
              </div>
              <input type="hidden" name="chartChoice" value=<?= $chartChoice ?>>
              <input type="hidden" name="groupByChoice" value=<?= $groupBy ?>>
              <button class="finish-button" name="generate-chart" type="submit"></button>
            </form>
            <form action="../Stats/Step2" method="post">
              <input type="hidden" name="chartChoice" value=<?= $chartChoice ?>>
              <button class="back-button" name="back-button" type="submit"></button>
            </form>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
  <script src="../js/loadingscreen.js"></script>
</body>

</html>