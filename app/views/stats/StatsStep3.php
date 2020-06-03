<!DOCTYPE html>
<html lang="en">
    <head>
        <title> TeVi - Statistics </title>
        <?php getBaseHead(); ?>
        <link rel="stylesheet" href="http://localhost/TeVi/public/style/StatsStep3.css">
    </head>
   <body>
<?php getMenuInfo();?>  
<div class="wrapper">
          <div class="model-hierarchy">
               <img src="http://localhost/TeVi/public/img/HierarchyModel/step3.svg">
            </div>
          
          </div>

    </div>  
           
          <form action="http://localhost/TeVi/public/Result/index" method="post" class="check-box" name="check-box">
           <div class="criteria_wrap">
          <?php 

            if (isset($_POST['GroupFilterSubmit']))
            {
              $groupBy = $_POST["radioFilterGroupBy"];
              $chartChoice = $_POST["chartChoice"];
              
              if($chartChoice == "Pie"){
                DisplayCriteriaWrapDB();
                  }

              if($chartChoice == "Map"){
                ?>
                  <!-- Call image or something -->
                  <div class="no-restrictions">
                  <h4>You can't choose restriction for this type of visualisation</h4>
                  </div>
                <?php  
                  }
                    
              if($chartChoice == "Table"){
                DisplayCriteriaWrapDB();
                  }
              
              if($chartChoice == "Bars"){
                DisplayCriteriaWrapDB();
                  }                               

            }
          ?>
          
          <input type="hidden"  name="chartChoice" value=<?=$chartChoice?>>
          <input type="hidden"  name="groupByChoice" value=<?=$groupBy?>>

          <button  onclick="location.href='http://localhost/TeVi/public/Stats/Step2'" class="back-button" type="button"></button>
          <button  class="finish-button" name="generate-chart" type="submit"></button>  
      		    </div>    
          </form>
 
      </body>
</html>