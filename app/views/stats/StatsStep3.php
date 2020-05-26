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
        <link rel="stylesheet" href="../styles/StatsStep3.css">
    </head>
   <body>
<?php getMenuInfo();?>  
<div class="wrapper">
          <div class="model-hierarchy">
               <img src="../styles/HierarchyModel/step3.svg">
            </div>
          
          </div>

    </div>  
           
          <form action="Chart.php" method="post" class="check-box" name="check-box">
           <div class="criteria_wrap">
          <?php 

            if (isset($_POST['GroupFilterSubmit']))
            {
              $groupBy = $_POST["radioFilterGroupBy"];
              $chartChoice = $_POST["chartChoice"];
              
              if($chartChoice == "Pie"){
                DisplayCriteriaWrap(); 
                  }

              if($chartChoice == "Map"){
                ?>
                  <!-- Call image or something -->
                  <div class="no-restrioctions">
                  <h4>You can't choose restriction for this type of visualisation</h4>
                  </div>
                <?php  
                  }
                    
              if($chartChoice == "Table"){
                DisplayCriteriaWrap(); 
                  }
              
              if($chartChoice == "Bars"){
                DisplayCriteriaWrap(); 
                  }                               

            }
          ?>
          
          <input type="hidden"  name="chartChoice" value=<?=$chartChoice?>>
          <input type="hidden"  name="groupByChoice" value=<?=$groupBy?>>

          <button  onclick="location.href='StatsStep2.php'" class="back-button" type="button"></button>
          <button  class="finish-button" name="generate-chart" type="submit"></button>  
      		    </div>    
          </form>
 
      </body>
</html>