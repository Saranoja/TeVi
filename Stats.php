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
        <script src="Scripts/mobileMenu.js"></script>
        <script src="Scripts/CollapsedFilter.js"></script>
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
                                <div class="pic1">
                                    <img src="Images/worldmap.svg" alt="Statistics">
                                </div>
                                <div class="pic2">
                                    <img src="Images/undraw_data_xmfy.svg" alt="Statistics">
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
                                <div class="pic3">
                                    <img src="Images/fatalities.png" alt="Statistics">
                                </div>
                            </div>

                            <div class="shrink">
                                <div class="event">
                                    <button type="button" onclick="col()" class="collapsible"> Event </button>
                                    <div class="content">
                                        <?php DisplayChecksFor($event_columns); ?>
                                    </div>
                                </div>
                                <div class="time">
                                    <button type="button" onclick="col()" class="collapsible"> Time </button>
                                    <div class="content">
                                        <?php DisplayChecksFor($time_columns); ?>
                                    </div>
                                </div>
                                <!-- <div class="pic1">
                                    <img src="Images/worldmap.svg" alt="Events">
                                </div>
                                <div class="pic2">
                                    <img src="Images/undraw_data_xmfy.svg" alt="Events">
                                </div> -->
                                <div class="location">
                                    <button type="button" onclick="col()" class="collapsible"> Location </button>
                                    <div class="content">
                                        <?php DisplayChecksFor($location_columns); ?>
                                    </div>
                                </div>
                                <div class="attacker">
                                    <button type="button" onclick="col()" class="collapsible"> Attacker </button>
                                    <div class="content">
                                        <?php DisplayChecksFor($attacker_columns); ?>
                                    </div>
                                </div>
                                <div class="target">
                                    <button type="button" onclick="col()" class="collapsible"> Target </button>
                                    <div class="content">
                                        <?php DisplayChecksFor($target_columns); ?>
                                    </div>
                                </div>
                                <div class="weapon">
                                    <button type="button" onclick="col()" class="collapsible"> Weapon details </button>
                                    <div class="content">
                                        <?php DisplayChecksFor($weapons_columns); ?>
                                    </div>
                                </div>
                                <div class="deaths">
                                    <button type="button" onclick="col()" class="collapsible"> Deaths </button>
                                    <div class="content">
                                        <?php DisplayChecksFor($deaths_columns); ?>
                                    </div>
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