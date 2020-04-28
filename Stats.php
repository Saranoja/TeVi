<!DOCTYPE html>
<?php include "StatsController.php"; ?>
<html lang="en">
    <head>
        <title> TeVi - Statistics Page </title>
        <link rel="icon" type="image/ico" href="Images/SEO.png" />
        <link rel="stylesheet" href="Styles/All.css">
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
                        <li><a class="nav_option" id="active" href="#stats">Statistics</a></li>
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
                    <div class="page_wrap">
                        <h3>Choose data to display:</h3>
                        <div class="criteria_wrap">
                            <div class="event">
                                <p> Event </p>
                                <?php 
                                    foreach($event_columns as $column): 
                                ?>
                                <input type="checkbox" id=<?=$column?> name=<?=$column?>>
                                <label for=<?=$column?>> <?=$column?> </label>
                                <br>
                                <?php endforeach; ?>
                            </div>
                            <div class="time">
                                <p> Time </p>
                                <?php 
                                    foreach($time_columns as $column): 
                                ?>
                                <input type="checkbox" id=<?=$column?> name=<?=$column?>>
                                <label for=<?=$column?>> <?=$column?> </label>
                                <br>
                                <?php endforeach; ?>
                            </div>
                            <div class="location">
                                <p> Location </p>
                                <?php 
                                    foreach($location_columns as $column): 
                                ?>
                                <input type="checkbox" id=<?=$column?> name=<?=$column?>>
                                <label for=<?=$column?>> <?=$column?> </label>
                                <br>
                                <?php endforeach; ?>
                            </div>
                            <div class="attacker">
                                <p> Attacker </p>
                                <?php 
                                    foreach($attacker_columns as $column): 
                                ?>
                                <input type="checkbox" id=<?=$column?> name=<?=$column?>>
                                <label for=<?=$column?>> <?=$column?> </label>
                                <br>
                                <?php endforeach; ?>
                            </div>
                            <div class="target">
                                <p> Target </p>
                                <?php 
                                    foreach($target_columns as $column): 
                                ?>
                                <input type="checkbox" id=<?=$column?> name=<?=$column?>>
                                <label for=<?=$column?>> <?=$column?> </label>
                                <br>
                                <?php endforeach; ?>
                            </div>
                            <div class="weapon">
                                <p> Weapon details </p>
                                <?php 
                                    foreach($weapons_columns as $column): 
                                ?>
                                <input type="checkbox" id=<?=$column?> name=<?=$column?>>
                                <label for=<?=$column?>> <?=$column?> </label>
                                <br>
                                <?php endforeach; ?>
                            </div>
                            <div class="deaths">
                                <p> Deaths </p>
                                <?php 
                                    foreach($deaths_columns as $column): 
                                ?>
                                <input type="checkbox" id=<?=$column?> name=<?=$column?>>
                                <label for=<?=$column?>> <?=$column?> </label>
                                <br>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <h3>Event filters</h3>
                        <div class="selection">
                            <div class="filter">
                                <label for="date">Date</label>
                                <input type="date" name="date" id="dateOfInfo">
                            </div>
                            
                            <div class="filter">
                                <label for="country">Country</label>      
                                <select id="country" name="country" class="country-control">
                                    <?php 
                                        foreach($states as $state): 
                                    ?>
                                    <option value=<?=$state?>> <?=$state?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="filter">
                                <label for="region">Region</label>
                                <select id="region" name="region" class="region-control">
                                    <?php 
                                        foreach($regions as $region):
                                    ?>
                                    <option value=<?=$region?>> <?=$region?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="filter">
                                <label for="entries">Entries number to show:</label>
                                <select id="entry" name="entry" class="entries">
                                <!-- auto incremental field with numbers from 1 to 100 -->
                                <?php
                                    for ($i=1; $i<=100; $i++)
                                    {
                                        ?>
                                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                        <?php
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                        <div class="sorting">
                            <label for="sort">Sort by</label>      
                            <select id="sort" name="sort" class="sort-control">
                                <?php 
                                    foreach($all_columns as $column): 
                                ?>
                                <option value=<?=$column?>> <?=$column?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="visualisation">
                            <label for="view">Data Visualisation Type</label>      
                            <select id="view" name="view" class="view-control">
                                <?php 
                                    foreach($view_type as $type): 
                                ?>
                                <option value=<?=$type?>> <?=$type?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <p><input type="submit" value="Submit" title="Click to generate your chart" /></p>
                    </div>
                </form>	           
            </main>
        </div>
    </body>
</html>