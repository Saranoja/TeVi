<!DOCTYPE html>
<html lang="en">
    <head>
        <title> TeVi - Statistics Page </title>
        <link rel="icon" type="image/ico" href="Images/SEO.png" />
        <link rel="stylesheet" href="Styles/Chart.css">

        <meta charset="utf-8">
        <meta name="terrorism" content="all">
        <meta name="author" content="Irina Calin and Victor-Ionut Platon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A web global terrorism visualizer">

    </head>
    <body id="whole_body">        
        <div class="page_wrapper">
            <header class="upper_intro">
                <div class="page_title">
                    <h1> TeVi </h1>
                    <h2> Statistics </h2>
                </div>
                <nav class="navigation">
                    <ul class="nav_bar">
                        <li><a class="nav_option" href="HomePage.php">Home</a></li>
                        <li><a class="nav_option" id="hover" href="#stats">Statistics</a></li>
                        <li><a class="nav_option" href="Resources.php">Resources</a></li>
                    </ul>
                    <form>
                        <input type="search" placeholder="Search...">
                        <input type="submit" value="Submit">
                    </form>
                </nav>
            </header>
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