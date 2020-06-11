async function fetchData(data = {}) {

  console.log("START FETCHING DATA");

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

function createChart(data = {}) {
  // document.getElementById("query").textContent = "Dataset: ".concat(localStorage.getItem("table-groupBy"));

  am4core.useTheme(am4themes_animated);

  var chart = am4core.create("chartdiv", am4charts.PieChart3D);

  chart.startAngle = 160;
  chart.endAngle = 380;

  // Let's cut a hole in our Pie chart the size of 40% the radius
  chart.innerRadius = am4core.percent(40);

  chart.legend = new am4charts.Legend();

  am4core.ready(fetchData(data).then(response => {
    console.log(JSON.stringify(response));

    if (Object.keys(response).length > 0) {
      chart.data = response;
      // Add and configure Series
      var pieSeries = chart.series.push(new am4charts.PieSeries());
      pieSeries.dataFields.value = "sum(total_fatalities)";
      pieSeries.dataFields.category = groupByColumn;
      pieSeries.slices.template.stroke = new am4core.InterfaceColorSet().getFor("background");
      pieSeries.slices.template.strokeWidth = 1;
      pieSeries.slices.template.strokeOpacity = 1;

      // Disabling labels and ticks on inner circle
      pieSeries.labels.template.disabled = true;
      pieSeries.ticks.template.disabled = true;

      // Disable sliding out of slices
      pieSeries.slices.template.states.getKey("hover").properties.shiftRadius = 0;
      pieSeries.slices.template.states.getKey("hover").properties.scale = 1;
      pieSeries.radius = am4core.percent(40);
      pieSeries.innerRadius = am4core.percent(30);

      var cs = pieSeries.colors;
      cs.list = [am4core.color(new am4core.ColorSet().getIndex(0))];

      cs.stepOptions = {
        lightness: -0.05,
        hue: 0
      };
      cs.wrap = false;

      // Add second series
      var pieSeries2 = chart.series.push(new am4charts.PieSeries());
      pieSeries2.dataFields.value = "count(event_id)";
      pieSeries2.dataFields.category = groupByColumn;
      pieSeries2.slices.template.stroke = new am4core.InterfaceColorSet().getFor("background");
      pieSeries2.slices.template.strokeWidth = 1;
      pieSeries2.slices.template.strokeOpacity = 1;
      pieSeries2.slices.template.states.getKey("hover").properties.shiftRadius = 0.05;
      pieSeries2.slices.template.states.getKey("hover").properties.scale = 1;

      pieSeries2.labels.template.disabled = true;
      pieSeries2.ticks.template.disabled = true;

      chart.exporting.menu = new am4core.ExportMenu();

      var label = chart.seriesContainer.createChild(am4core.Label);
      label.textAlign = "middle";
      label.horizontalCenter = "middle";
      label.verticalCenter = "middle";
      label.adapter.add("text", function (text, target) {
        return "[font-size:18px]total attacks[/]:\n[bold font-size:30px]" + pieSeries.dataItem.values.value.sum + "[/]";
      })
    }
    else {
      document.getElementById("response").textContent = "Sorry, there is no result available for your request. :(";
    }
  }));
}

let groupByColumn = JSON.parse(localStorage.getItem("table-groupBy"))[0].replace("-", "_");

let globalJson = {
  "limit": "10",
  "select": [
    {
      "column": groupByColumn
    },
    {
      "column": "sum(total_fatalities)"
    },
    {
      "column": "count(event_id)"
    }
  ],
  "where": [],
  "groupBy": [
    {
      "column": groupByColumn
    }
  ]
};

var obj = JSON.parse(localStorage.getItem("where"));
var keys = Object.keys(obj);


keys.forEach(element => {

  let columns = "";

  obj[element].forEach(value => {
    // columns.concat(value,"','");
    columns = columns.replace("-", "_") + value + "','";
  });


  columns = columns.slice(0, -3);

  let jsonValue = "('".concat(columns, "')");

  globalJson["where"].push({
    "column": element.toString().replace("-", "_"),
    "operator": "in",
    "value": jsonValue
  });

});

//document.getElementById("filters").textContent = "Filters: ".concat(localStorage.getItem("where"));

createChart(globalJson);
