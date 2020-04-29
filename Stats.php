<!DOCTYPE html>
<?php 
include "StatsControllers/StatsController.php"; 
include "StatsControllers/StatsDataDisplay.php";
include "StatsControllers/StatsFiltersDisplay.php";
include "StatsControllers/IncrementalField.php";
?>
<html lang="en">
    <head>
        <title> TeVi - Statistics Page </title>
        <link rel="icon" type="image/ico" href="Images/SEO.png" />
        <link rel="stylesheet" href="Styles/All.css">
        <link rel="stylesheet" href="Styles/Stats.css">

        <meta charset="utf-8">
        <meta name="terrorism" content="all">
        <meta name="author" content="Irina Calin, Victor-Ionut Platon and Bogdan-Mihail Peltea">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A web global terrorism visualizer">
    </head>
    <body id="whole_body">
        <div class="menu-info">
            <img class="img-logo" src="Styles/Backgrounds/LOGO.svg">
                <ul class="nav-area">
                <li><a href="HomePage.php" class="home">home</a></li>
                <li><a href="Stats.php">statistics</a></li>
                <li><a href="Resources.php">resources</a></li>
            </ul>
        </div>        
        <div class="page_wrapper">
            <header class="upper_intro">
                <div class="page_title">
                    <h1> TeVi </h1>
                    <h2> STATISTICS </h2>
                </div>
            </header>
            <main>
                <form action="Chart.php" method="post">
                    <div class="page_wrap">
                        <section class="section1">
                            <h3>Choose data to display:</h3>
                            <div class="criteria_wrap">
                                <div class="event">
                                    <p> Event </p>
                                    <?php DisplayChecksFor($event_columns); ?>
                                </div>
                                <div class="time">
                                    <p> Time </p>
                                    <?php DisplayChecksFor($time_columns); ?>
                                </div>
                                <div class="location">
                                    <p> Location </p>
                                    <?php DisplayChecksFor($location_columns); ?>
                                </div>
                                <div class="attacker">
                                    <p> Attacker </p>
                                    <?php DisplayChecksFor($attacker_columns); ?>
                                </div>
                                <div class="target">
                                    <p> Target </p>
                                    <?php DisplayChecksFor($target_columns); ?>
                                </div>
                                <div class="weapon">
                                    <p> Weapon details </p>
                                    <?php DisplayChecksFor($weapons_columns); ?>
                                </div>
                                <div class="deaths">
                                    <p> Deaths </p>
                                    <?php DisplayChecksFor($deaths_columns); ?>
                                </div>
                            </div>
                        </section>
                        <section class="section2">
                            <h3>Event filters</h3>
                            <div class="selection">
                                <div class="filter">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" id="dateOfInfo">
                                </div>
                                
                                <div class="filter">
                                    <label for="country">Country</label>      
                                    <select id="country" name="country" class="country-control">
                                        <?php DisplayFiltersFor($states); ?>
                                    </select>
                                </div>

                                <div class="filter">
                                    <label for="region">Region</label>
                                    <select id="region" name="region" class="region-control">
                                        <?php DisplayFiltersFor($regions); ?>
                                    </select>
                                </div>

                                <div class="filter">
                                    <label for="entries">Entries number to show:</label>
                                    <select id="entry" name="entry" class="entries">
                                        <?php IncrementalField(1, 80) ?>
                                    </select>
                                </div>
                            </div>
                            <div class="sorting">
                                <label for="sort">Sort by</label>      
                                <select id="sort" name="sort" class="sort-control">
                                    <?php DisplayFiltersFor($all_columns); ?>
                                </select>
                            </div>
                            <div class="visualisation">
                                <label for="view">Data Visualisation Type</label>      
                                <select id="view" name="view" class="view-control">
                                    <?php DisplayFiltersFor($view_type); ?>
                                </select>
                            </div>
                            <p><input type="submit" value="Submit" title="Click to generate your chart" /></p>
                        </section>
                    </div>
                </form>	           
            </main>
        </div>
    </body>
</html>