<?php
include_once "StatsController.php"; 
include_once "StatsFiltersDisplay.php";

function DisplaySort() { 
    global $all_columns;
    global $view_type;
    ?>
    <div class="selection">
        <?php DisplayFilters(); ?>
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
<?php
} ?>