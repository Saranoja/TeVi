<!DOCTYPE html>
<?php 
include_once "../StatsControllers/criteriaWrap.php";
include_once "../StatsControllers/filtersWrap.php";
include_once "../StatsControllers/mobileWrap.php";
include_once "../StatsControllers/sortWrap.php";
include_once "../StatsControllers/headInit.php";
include_once "../StatsControllers/menuInit.php";
include_once "../StatsControllers/modalInit.php";
include_once "../StatsControllers/criteriaWrapPieChart.php";
include_once "../StatsControllers/criteriaWrapMapChart.php";
?>
<html lang="en">
    <head>
        <title> TeVi - Statistics Piro Page </title>
        <?php getBaseHead(); ?>
        <link rel="stylesheet" href="../styles/StatsStep2.css">
    </head>
    <body>
        <?php getMenuInfo();?>  
       
         
<?php 
   if (isset($_POST['Result']))
  {


   $radioVal = $_POST["hopping"];

    if($radioVal == "Pie")
  {
      ?>
     
     <div class="wrapper">
          <div class="model-hierarchy">
               <img src="../styles/HierarchyModel/step2.svg">
            </div>

          <div>
          <form action="StatsStep3.php" method="post" class="check-box" name="check-box">
          <?php DisplayCriteriaWrapPieChartGroupBy(); ?>
          
          <input type="hidden" class="chartchoice"  name="chartChoice" value=<?=$radioVal?>>
          
          <button  onclick="location.href='StatsV2.php'" class="back-button" type="button"></button>      
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
               <img src="../styles/HierarchyModel/step2.svg">
            </div>

          <div>
          <form action="StatsStep3.php" method="post" class="check-box" name="check-box">
          <?php DisplayCriteriaWrapMapChartGroupBy(); ?>
          
          <input type="hidden" class="chartchoice"  name="chartChoice" value=<?=$radioVal?>>
          
          <button  onclick="location.href='StatsV2.php'" class="back-button" type="button"></button>      
          <button  class="next-button" name="GroupFilterSubmit" type="submit"></button>          
          </form>
          </div>

    </div>   

    <?php  }    

      elseif ($radioVal == "Table") {
       
        echo("You chose the third button. Good choice. :D");
      }elseif ($radioVal == "Bars") {
       
       echo("You chose the fourth button. Good choice. :D");
      }
    }

    ?> 

      </body>

</html>