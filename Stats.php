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
        <link rel="stylesheet" href="Styles/Stats.css">
        <script src="Scripts/mobileMenu.js"></script>
        <script src="Scripts/CollapsedFilter.js"></script>
    </head>
    <body id="whole_body">
        <?php getMenuInfo(); initModal(); ?>  
        
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
                                <div class="pic1">
                                    <img src="Images/worldmap.svg" alt="Statistics">
                                </div>
                                <div class="pic2">
                                    <img src="Images/undraw_data_xmfy.svg" alt="Statistics">
                                </div>
                                <div class="pic3">
                                    <img src="Images/fatalities.png" alt="Statistics">
                                </div>
                                <?php DisplayCriteriaWrap(); ?>
                            </div>

                            <div class="shrink">
                                <?php DisplayMobileShrink(); ?>
                            </div>

                        </section>
                        <section class="section2">
                            <h3>Event filters</h3>
                            <?php DisplaySort(); ?>
                            <p><input type="submit" value="Submit" title="Click to generate your chart" /></p>
                        </section>
                    </div>
                </form>	           
            </main>
        </div>
    </body>
</html>