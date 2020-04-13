<style>
#chartdiv {
  width: 100%;
  height: 500px;
}

</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4charts.PieChart3D);
chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

chart.legend = new am4charts.Legend();

chart.data =  [
  {
    country: "Lithuania",
    deaths: 505
  },
  {
    country: "Czech Republic",
    deaths: 303
  },
  {
    country: "Ireland",
    deaths: 203
  },
  {
    country: "Germany",
    deaths: 165
  },
  {
    country: "Australia",
    deaths: 139
  },
  {
    country: "Austria",
    deaths: 128
  },
  {
    country: "UK",
    deaths: 99
  },
  {
    country: "Belgium",
    deaths: 60
  },
  {
    country: "The Netherlands",
    deaths: 50
  }
];

var series = chart.series.push(new am4charts.PieSeries3D());
series.dataFields.value = "deaths";
series.dataFields.category = "country";

}); // end am4core.ready()
</script>