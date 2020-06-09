<!DOCTYPE html>
<html lang="en">
  <head>
    <title> TeVi - Statistics </title>
    <?php getBaseHead(); ?>
    <link rel="stylesheet" href="../style/StatsStep2.css">
  </head>
  <body>
    <?php getMenuInfo();?>
    
    
    <?php
    if (isset($_POST['Result']) || isset($_POST['back-button']))
    {
    if(isset($_POST["hopping"])){
    $radioVal = $_POST["hopping"];
    }
    else
    {
    $radioVal = $_POST["chartChoice"];
    }
    if($radioVal == "Pie")
    {
    ?>
    
    <div class="wrapper">
      <div class="model-hierarchy">
        <img src="../img/HierarchyModel/step2.svg">
      </div>
      <div>
        <form action="../Stats/Step3" method="post" class="check-box" name="check-box">
          <?php DisplayCriteriaWrapPieChartGroupBy(); ?>
          
          <input type="hidden" class="chartchoice"  name="chartChoice" value=<?=$radioVal?>>
          <button  onclick="location.href='../Stats/index'" class="back-button" type="button"></button>
          <button  class="next-button" name="GroupFilterSubmit" type="submit"></button>
        </form>
    </div>
    </div>
    
    <?php
    }
    else if($radioVal == "Map")
    {
    ?>
    <div class="wrapper">
      <div class="model-hierarchy">
        <img src="../img/HierarchyModel/step2.svg">
      </div>
      <div>
        <form action="../Stats/Step3" method="post" class="check-box" name="check-box">
          <?php DisplayCriteriaWrapMapChartGroupBy(); ?>
          
          <input type="hidden" class="chartchoice"  name="chartChoice" value=<?=$radioVal?>>
          
          <button  onclick="location.href='../Stats/index'" class="back-button" type="button"></button>
          <button  class="next-button" name="GroupFilterSubmit" type="submit"></button>
        </form>
      </div>
    </div>
    <?php  }
    elseif ($radioVal == "Table") {
    ?>
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
          <input type="hidden" class="chartchoice"  name="chartChoice" value=<?=$radioVal?>>
          
          <button  onclick="location.href='../Stats/index'" class="back-button" type="button"></button>
          <button  class="next-button" name="GroupFilterSubmit" type="submit"></button>
        </form>
      </div>
    </div>
    <?php
    
    }elseif ($radioVal == "Bars") {
    
    ?>
    
    <div class="wrapper">
      <div class="model-hierarchy">
        <img src="../img/HierarchyModel/step2.svg">
      </div>
      <div>
        <h2>You can choose a maximum of 4 countries</h2>
        <form action="../Stats/Step3" method="post" class="check-box" name="check-box">
          <?php 
            DisplayCriteriaWrapCountryDB();
            DisplayCriteriaWrapPieChartGroupBy(); ?>
          <script src="../js/checkboxLimit.js" type="text/javascript">checkBoxLimit()</script>
          <input type="hidden" class="chartchoice"  name="chartChoice" value=<?=$radioVal?>>
          <button  onclick="location.href='../Stats/index'" class="back-button" type="button"></button>
          <button  class="next-button" name="GroupFilterSubmit" type="submit"></button>
        </form>
      </div>
    </div>
    
    <?php
    }
    }
    ?>
  </body>
</html>