<!DOCTYPE html>
<?php 
include_once "StatsControllers/headInit.php";
include_once "StatsControllers/menuInit.php";
include_once "StatsControllers/modalInit.php";
?>
<html lang="en">
    <head>
        <title> TeVi - Statistics Page </title>
        <?php getBaseHead(); ?>
        <link rel="stylesheet" href="Styles/Chart.css">
        <link rel="stylesheet" href="Charts/ChartsStyle.css">
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
                include "Charts/Temp.php";
            ?>
                <main>
                    <h3> Results for your request: </h3>
                    <div id="chartdiv"></div>
                </main>
            <?php
                }
                else if (strcmp($nume,$bars_chart)==0) {
                    include "Charts/Temp.php";
            ?>
                    <main>
                        <h3> Results for your request: </h3>
                        <div id="chartdiv"></div>
                    </main>
            <?php } 
                else if (strcmp($nume, $horizontal_bars_chart)==0) { 
                    include "Charts/HorizontalBarsChart.js";?>
                    <main>
                        <h3> Results for your request: </h3>
                        <div id="chartdiv"></div>
                    </main>
            <?php } 
                else if (strcmp($nume, $map)==0) {
                    include "Charts/WorldMapChart.js";?>
                        <main>
                            <h3> Results for your request: </h3>
                            <div id="chartdiv"></div>
                        </main>
            <?php } 
                else if (strcmp($nume, $donut)==0) { 
                    include "Charts/DonutChart.js";?>
                        <main>
                            <h3> Results for your request: </h3>
                            <div id="chartdiv"></div>
                        </main>
            <?php } else if (strcmp($nume, $bubbles)==0) { 
                    include "Charts/BubblesChart.js";  ?>
                        <main>
                            <h3> Results for your request: </h3>
                            <div id="chartdiv"></div>
                        </main>
            <?php } else { include "Charts/ValueAxisChart.js";?>
                        <main>
                            <h3> Results for your request: </h3>
                            <div id="chartdiv"></div>
                        </main>  
            <?php } ?>       
        </div>
    </body>
</html>