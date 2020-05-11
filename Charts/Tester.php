<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<?php 
include_once "./Database/Database.php";

$db = Database::getInstance();
$mysqli = $db->getConnection();

$sql = "SELECT
year as `year`,
COUNT(year) AS `attacks`
FROM
data
GROUP BY
year
LIMIT 10";

$result = mysqli_query($mysqli, $sql);

$structure = array();

$index = 0;
while ($row = mysqli_fetch_assoc($result))
{
    if(!isset($structure[$row['attacks']]))
    {
        $structure[$index] = array();
    }
    $structure[$index]['year'] =  $row['year'];
    $structure[$index]['attacks'] =  intval($row['attacks']);
    $index = $index + 1;
}
mysqli_free_result($result);

//encode to json
$json = json_encode($structure);

//echo $json;
?>

<!-- Chart code -->
<script>
am4core.ready(function() {

am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4charts.PieChart3D);
chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

chart.legend = new am4charts.Legend();

chart.data = <?php echo $json ?>;


var series = chart.series.push(new am4charts.PieSeries3D());
series.dataFields.value = "attacks";
series.dataFields.category = "year";

}); // end am4core.ready()
</script>