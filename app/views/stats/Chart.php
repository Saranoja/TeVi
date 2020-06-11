<!DOCTYPE html>
<html lang="en">

<head>
    <title> TeVi - Statistics Page </title>
    <?php getBaseHead(); ?>
    <link rel="stylesheet" href="http://localhost/TeVi/public/style/Chart.css">
    <link rel="stylesheet" href="http://localhost/TeVi/public/style/ChartsStyle.css">
    <script src="http://localhost/TeVi/public/js/mobileMenu.js"></script>

    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

    <script src="https://www.amcharts.com/lib/4/maps.js"></script>
    <script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
</head>

<body id="whole_body">
    <?php getMenuInfo();
    initModal(); ?>

    <div class="page_wrapper">
        <?php
        //optiune de la StatsV2;
        $pie_chart = "Pie";
        $bars_chart = "Bars";
        $map = "Map";

        $column = array("success", "suicide", "attack-type", "year", "month", "day", "country", "provence", "city", "group-name", "group-subname", "terrorists_number", "claim-mode", "target-type", "target-subtype", "target_nationality", "weapon-type", "weapon-subtype", "total-fatalities", "us-citizens-who-died");

        if (isset($_POST['generate-chart'])) {
            $resultFilter = array();
            foreach ($column as $value) {
                //array_push($column,$value);
                if (isset($_POST[$value])) {
                    $resultFilter[$value] = array();
                    foreach ($_POST[$value] as $checkboxVal) {
                        array_push($resultFilter[$value], $checkboxVal);
                    }
                }
            }

            if ($_POST["groupByChoice"])
                $groupBy = $_POST["groupByChoice"];
            $chartChoice = $_POST["chartChoice"];

            $json = json_encode($resultFilter);
        }

        ?>

        <script>
            localStorage.setItem('where', '<?php echo $json; ?>');
        </script>

        <?php

        if (strcmp($chartChoice, $pie_chart) == 0) {

        ?>
            <main>
                <h2 id="query"> Dataset: </h2>
                <h3 id="response"> Results for your request: </h3>
                <script src="http://localhost/TeVi/app/views/Charts/PieChart.js"></script>
                <div id="chartdiv"></div>
            </main>
        <?php
        } else if (strcmp($chartChoice, $bars_chart) == 0) {
        ?>
            <main>
                <h2 id="query"> Dataset: </h2>
                <!-- <h2 id="chosenCountries"> Countries: </h2> -->
                <h3 id="response"> Results for your request: </h3>
                <script src="http://localhost/TeVi/app/views/Charts/BarsChartCountry.js"></script>
                <div id="chartdiv"></div>
            </main>
        <?php } else if (strcmp($chartChoice, $map) == 0) { ?>
            <main>
                <h2 id="query"> Dataset: </h2>
                <h3 id="response"> Results for your request: </h3>
                <script src="http://localhost/TeVi/app/views/Charts/WorldMapChart.js"></script>
                <div id="chartdiv"></div>
            </main>
        <?php } else { ?>
            <main>
                <h3 id="response"> Results for your request: </h3>
                <script src="http://localhost/TeVi/app/views/Charts/Radius.js"></script>
                <div id="chartdiv"></div>
            </main>
        <?php } ?>
    </div>
</body>

</html>