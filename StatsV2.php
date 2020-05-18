<!DOCTYPE html>
<?php 
include_once "StatsControllers/criteriaWrap.php";
include_once "StatsControllers/filtersWrap.php";
include_once "StatsControllers/mobileWrap.php";
include_once "StatsControllers/sortWrap.php";
include_once "StatsControllers/headInit.php";
include_once "StatsControllers/menuInit.php";
include_once "StatsControllers/modalInit.php";
?>
<html lang="en">
    <head>
        <title> TeVi - Statistics Page </title>
        <?php getBaseHead(); ?>
        <link rel="stylesheet" href="Styles/StatsV2.css">
        <script src="Scripts/mobileMenu.js"></script>
        <script src="Scripts/CollapsedFilter.js"></script>
    </head>
    <body>
        <?php getMenuInfo();?>  
       
        <div class="wrapper">
          <div class="model-hierarchy">
               <img src="Styles/HierarchyModel/step1.svg">
            </div>
  
           <div class="chart-container">
              <div class="pie-chart">
                <img src="Styles/HierarchyModel/Piechart.svg">
            </div>

           <div class="map-chart">
              <img src="Styles/HierarchyModel/mapChart.png">
             </div>
         
           <div class="table-chart">
            <img src="Styles/HierarchyModel/tableChart.svg">
              </div>
     
        <div class="bars-chart">
              <img src="Styles/HierarchyModel/barsChart.svg">
              </div>
     
      </div>

          
<form action="StatsStep2.php" method="post" class="check-box" name="check-box">
  <input id="a" type="radio" name="hopping" value="Pie" checked>
  <label for="a"><span></span>Pie Chart</label>
  <input id="b" type="radio" name="hopping" value="Map">
  <label for="b"><span></span>Map Chart</label>
  <input id="c" type="radio" name="hopping" value="Table">
  <label for="c"><span></span>Tabble Chart</label>
  <input id="d" type="radio" name="hopping" value="Bars">
  <label for="d"><span></span>Bars Chart</label>
  <div class="worm">
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
    <div class="worm__segment"></div>
  </div>
<button  class="next-button" name="Result" type="submit"></button>


</form>

        </div>
      

            
      </body>
</html>