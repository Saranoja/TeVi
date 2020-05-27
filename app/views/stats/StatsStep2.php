<!DOCTYPE html>
<html lang="en">
    <head>
        <title> TeVi - Statistics </title>
        <?php getBaseHead(); ?>
        <link rel="stylesheet" href="http://localhost/TeVi/public/style/StatsStep2.css">
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
               <img src="http://localhost/TeVi/public/img/HierarchyModel/step2.svg">
            </div>

          <div>
          <form action="http://localhost/TeVi/public/Stats/Step3" method="post" class="check-box" name="check-box">
          <?php DisplayCriteriaWrapPieChartGroupBy(); ?>
          
          <input type="hidden" class="chartchoice"  name="chartChoice" value=<?=$radioVal?>>
          
          <button  onclick="location.href='http://localhost/TeVi/public/Stats/index'" class="back-button" type="button"></button>      
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
               <img src="http://localhost/TeVi/public/img/styles/HierarchyModel/step2.svg">
            </div>

          <div>
          <form action="http://localhost/TeVi/public/Stats/Step3" method="post" class="check-box" name="check-box">
          <?php DisplayCriteriaWrapMapChartGroupBy(); ?>
          
          <input type="hidden" class="chartchoice"  name="chartChoice" value=<?=$radioVal?>>
          
          <button  onclick="location.href='http://localhost/TeVi/public/Stats/index'" class="back-button" type="button"></button>      
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