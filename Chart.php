<!DOCTYPE html>
<?php 
include_once "StatsControllers/headInit.php";
include_once "StatsControllers/menuInit.php";
include_once "StatsControllers/modalInit.php";
?>
<html lang="en">
    <head>
        <title> TeVi - Statistics Page </title>
        <link rel="stylesheet" href="Styles/Chart.css">
        <?php getBaseHead(); ?>
        <script src="Scripts/mobileMenu.js"></script>
    </head>
    <body id="whole_body">    
        <?php getMenuInfo(); initModal(); ?>

        <div class="page_wrapper">
            <?php 
                $nume = $_REQUEST["view"];
                $pie_chart = "Pie";
                $bars_chart = "Vertical";
                $horizontal_bars_chart = "Horizontal";
                $map = "Map";
                $donut = "Doughnut";
                $bubbles = "Bubbles";
                if(strcmp($nume,$pie_chart)==0) {
                include "Charts/PieChart.php";
            ?>
                <main>
                    <h3> Results for your request: </h3>
                    <div id="chartdiv"></div>
                </main>
            <?php
                }
                else if (strcmp($nume,$bars_chart)==0) {
                    include "Charts/BarsChart.php";
            ?>
                    <main>
                        <h3> Results for your request: </h3>
                        <div id="chartdiv"></div>
                    </main>
            <?php } 
                else if (strcmp($nume, $horizontal_bars_chart)==0) { 
                    include "Charts/HorizontalBarsChart.php";?>
                    <main>
                        <h3> Results for your request: </h3>
                        <div id="chartdiv"></div>
                    </main>
            <?php } 
                else if (strcmp($nume, $map)==0) {
                    include "Charts/WorldMapChart.php";?>
                        <main>
                            <h3> Results for your request: </h3>
                            <div id="chartdiv"></div>
                        </main>
            <?php } 
                else if (strcmp($nume, $donut)==0) { 
                    include "Charts/DonutChart.php";?>
                        <main>
                            <h3> Results for your request: </h3>
                            <div id="chartdiv"></div>
                        </main>
            <?php } else if (strcmp($nume, $bubbles)==0) { 
                    include "Charts/BubblesChart.php";  ?>
                        <main>
                            <h3> Results for your request: </h3>
                            <div id="chartdiv"></div>
                        </main>
            <?php } else { include "Charts/ValueAxisChart.php";?>
                        <main>
                            <h3> Results for your request: </h3>
                            <div id="chartdiv"></div>
                        </main>  
            <?php } ?>       
        </div>
    </body>
</html>