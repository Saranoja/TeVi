<!DOCTYPE html>
<?php include "WorldMap.php"; ?>
<html lang="en">
    <head>
        <title> TeVi - Statistics Page </title>

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
                        <!-- <li><a class="nav_option" href="Maps.php">Maps</a></li> -->
                        <li><a class="nav_option" href="Resources.php">Resources</a></li>
                    </ul>
                    <form>
                        <input type="search" placeholder="Search...">
                        <input type="submit" value="Submit">
                    </form>
                </nav>
            </header>
            <main>
                <h3> Results for your request: </h3>
                <div id="chartdiv"></div>
            </main>
        </div>
    </body>
</html>