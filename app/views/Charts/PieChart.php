<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/frozen.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<script>
  async function fetchData(data = {}) {

    console.log("START FETCH DATA");

    const response = await fetch("http://localhost/TeVi/api/query", {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': 'd82494f05d6917ba02f7aaa29689ccb444bb73f20380876cb05d1f37537b7892',
      },
      body: JSON.stringify(data)
    });

    return response.json();
  }
</script>

<?php function createChart()
{ ?>
  <script>
    am4core.useTheme(am4themes_frozen);
    am4core.useTheme(am4themes_animated);

    var chart = am4core.create("chartdiv", am4charts.PieChart3D);
    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

    chart.legend = new am4charts.Legend();

    //console.log('data');
    //console.log(data);
    am4core.ready(fetchData().then(response => {
      //console.log("THEN");
      chart.data = response;
      var series = chart.series.push(new am4charts.PieSeries3D());
      series.dataFields.value = "sum(total_fatalities)";
      series.dataFields.category = "year";
    }));
  </script>

<?php
}

// createChart({
//   "limit": "25",
//   "select": [{
//     "column": "year"
//   },
//   {
//     "column": "sum(total_fatalities)"
//   }
//   ],
//   "where": [{
//     "column": "year",
//     "operator": ">",
//     "value": "2012"
//   }],
//   "groupBy": [{
//     "column": "year"
//   }]
// });
?>