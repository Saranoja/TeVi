<!DOCTYPE html>
<html lang="en">
    <head>
        <title> TeVi - Statistics Page </title>

        <link rel="stylesheet" href="Styles/Stats.css">

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
                <form action="Chart.php" method="post">
                    <div>
                        <h3>Choose data to display:</h3>
                            <div>
                            <input type="checkbox" id="ID_event" name="ID_event">
                            <label for="ID_event">Event ID</label>
                            </div>

                            <?php 
                                include "StatsController.php";
                                foreach($columns as $column): 
                            ?>
                            <input type="checkbox" id=<?=$column?> name=<?=$column?>>
                            <label for=<?=$column?>> <?=$column?> </label>
                            <?php endforeach; ?>

                        <h3>Event filters</h3>
                        <div>
                            <label for="date">Date</label>
                            <input type="date" name="date" id="dateOfInfo">
                        </div>
                        
                        <div>
                            <label for="country">Country</label>      
                            <select id="country" name="country" class="country-control">
                                <?php 
                                    foreach($states as $state): 
                                ?>
                                <option value=<?=$state?>> <?=$state?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div>
                            <label for="region">Region</label>
                            <select id="region" name="region" class="region-control">
                                <?php 
                                    foreach($regions as $region):
                                ?>
                                <option value=<?=$region?>> <?=$region?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- <div>
                            <label for="city">City</label>
                            <select id="city" name="city" class="city-control">
                            </select>
                        </div> -->
                        <p><input type="submit" value="Submit" title="Click to generate your chart" /></p>
                    </div>
                </form>	           
            </main>
        </div>
    </body>
</html>