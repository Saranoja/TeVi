<!DOCTYPE html>
<html lang="en">

<head>
  <title> TeVi - Statistics </title>
  <?php getBaseHead(); ?>
  <link rel="stylesheet" href="../style/StatsStep3.css">
</head>

<body>
  <?php getMenuInfo(); ?>
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
              localStorage.setItem('select', '<?php echo $groupBy;?>'); 
            </script>

            <form action="../Result/index" method="post" class="check-box" name="check-box">
              <div class="criteria_wrap">
                <?php DisplayCriteriaWrapDB(); ?>
              </div>
              <input type="hidden" name="chartChoice" value=<?= $chartChoice ?>>
              <input type="hidden" name="groupByChoice" value=<?= $groupBy ?>>
              <button onclick="location.href='../Stats/Step2'" class="back-button" type="button"></button>
              <button class="finish-button" name="generate-chart" type="submit"></button>
            </form>

          <?php  }
          if ($chartChoice == "Map") {
            $groupBy = $_POST["radioFilterGroupBy"];
          ?>
            <div class="no-restrioctions">
              <h4>You can't choose restriction for this type of visualisation</h4>
              <br>
            </div>
            <form action="../Result/index" method="post" class="check-box" name="check-box">
              <input type="hidden" name="chartChoice" value=<?= $chartChoice ?>>
              <input type="hidden" name="groupByChoice" value=<?= $groupBy ?>>
              <button onclick="location.href='../Stats/Step2'" class="back-button" type="button"></button>
              <button class="finish-button" name="generate-chart" type="submit"></button>
            </form>
          <?php
          }

          if ($chartChoice == "Table") {
          ?>
            <form action="../Result/index" method="post" class="check-box" name="check-box">
              <div class="criteria_wrap">
                <?php DisplayCriteriaWrapDB(); ?>
              </div>
              <input type="hidden" name="chartChoice" value=<?= $chartChoice ?>>
              <input type="hidden" name="groupByChoice" value=<?= $groupBy ?>>
              <button onclick="location.href='../Stats/Step2'" class="back-button" type="button"></button>
              <button class="finish-button" name="generate-chart" type="submit"></button>
            </form>

          <?php
          }

          if ($chartChoice == "Bars") {
          ?>
            <form action="../Result/index" method="post" class="check-box" name="check-box">
              <div class="criteria_wrap">
                <?php DisplayCriteriaWrapDB(); ?>
              </div>
              <input type="hidden" name="chartChoice" value=<?= $chartChoice ?>>
              <input type="hidden" name="groupByChoice" value=<?= $groupBy ?>>
              <button onclick="location.href='../Stats/Step2'" class="back-button" type="button"></button>
              <button class="finish-button" name="generate-chart" type="submit"></button>
            </form>

        <?php
          }
        }
        ?>
      </div>
    </div>
</body>

</html>