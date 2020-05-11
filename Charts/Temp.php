<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<?php 
include_once "./Database/Database.php";
include_once "Controllers/PieChartController.php";

$db = Database::getInstance();
$mysqli = $db->getConnection();

$pieChart = new PieChartController();
$pieChart->createQuery($mysqli, 'success');
$pieChart->setStructure();
$json = $pieChart->doAll();

//echo $json;

?>

<!-- Chart code -->
<script>
am4core.ready(function() {

am4core.useTheme(am4themes_animated);

var chart = am4core.create("chartdiv", am4charts.PieChart3D);
chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

chart.legend = new am4charts.Legend();

chart.data = <?php echo $json ?>;


var series = chart.series.push(new am4charts.PieSeries3D());
series.dataFields.value = "value";
series.dataFields.category = "category";

}); // end am4core.ready()
</script>