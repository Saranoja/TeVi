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
    <script src="https://www.amcharts.com/lib/4/themes/frozen.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
</head>

<body id="whole_body">
    <?php getMenuInfo();
    initModal(); ?>

    <div class="page_wrapper">
        <?php
        //optiune de la StatsV2;
        $pie_chart = "Pie";
        $bars_chart = "Vertical";
        $horizontal_bars_chart = "Horizontal";
        $map = "Map";
        $donut = "Doughnut";
        $bubbles = "Bubbles";


        if (isset($_POST['generate-chart'])) {
            // foreach( $_POST["checkboxFilterRestriction"] as $checkboxVal)
            //     {
            //         // $choice->addFilterChoice($checkboxVal);   
            //         echo '<p>'.$checkboxVal.'</p>';
            //     }


            $groupBy = $_POST["groupByChoice"];
            $chartChoice = $_POST["chartChoice"];

            // echo $groupBy;
            // echo $chartChoice;

        }

        if (strcmp($chartChoice, $pie_chart) == 0) {
            //createChart();
        ?>
            <script src="http://localhost/TeVi/app/views/Charts/PieChart.js"></script>
            <main>
                <h3> Results for your request: </h3>
                <div id="chartdiv"></div>
            </main>
        <?php
        } else if (strcmp($chartChoice, $bars_chart) == 0) {
            include "../Charts/BarsChart.js";
        ?>
            <main>
                <h3> Results for your request: </h3>
                <div id="chartdiv"></div>
            </main>
        <?php } else if (strcmp($chartChoice, $map) == 0) {
            include "../Charts/WorldMapChart.js"; ?>
            <main>
                <h3> Results for your request: </h3>
                <div id="chartdiv"></div>
            </main>
        <?php } else {
            include "../Charts/ValueAxisChart.js"; ?>
            <main>
                <h3> Results for your request: </h3>
                <div id="chartdiv"></div>
            </main>
        <?php } ?>
    </div>
</body>

</html>