<!DOCTYPE html>
<html lang="en">
    <head>
        <title> TeVi - Statistics Page </title>
        <link rel="icon" type="image/ico" href="Images/SEO.png" />
        <link rel="stylesheet" href="Styles/All.css">
        <link rel="stylesheet" href="Styles/Chart.css">

        <meta charset="utf-8">
        <meta name="terrorism" content="all">
        <meta name="author" content="Irina Calin and Victor-Ionut Platon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A web global terrorism visualizer">
        <script src="Scripts/mobileMenu.js"></script>

    </head>
    <body id="whole_body">    
        <div class="menu-info">
          <img class="img-logo" src="Styles/Backgrounds/LOGO.svg">
            <ul class="nav-area">
                <li><a href="HomePage.php">home</a></li>
                <li><a href="Stats.php">statistics</a></li>
                <li><a href="Resources.php">resources</a></li>
            </ul>
        </div>

        <button onclick="openPopout()" id="menu" class="mobile-menu" type="button"></button>

        <!--Pop-up menu-->
        <div class="bg-modal">
            <div class="modal-contents">

                <div onclick="closePopout()" class="close">+</div>
                <form action="">
                    <ul class="mobile-menu-text">
                        <li><a href="HomePage.php">home</a></li>
                        <li><a href="Stats.php">statistics</a></li>
                        <li><a href="Resources.php">resources</a></li>
                    </ul>
                </form>
             </div>
        </div>

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