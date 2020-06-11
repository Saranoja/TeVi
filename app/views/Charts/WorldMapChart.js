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
  document.getElementById("query").textContent = "Dataset: total fatalities";

  am4core.ready(fetchData(data).then(response => {

    if (Object.keys(response).length <= 0) {
      document.getElementById("response").textContent = "Sorry, there is no result available for your request. :(";
    }

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    // Create map instance
    var chart = am4core.create("chartdiv", am4maps.MapChart);

    // Set map definition
    chart.geodata = am4geodata_worldLow;

    // Set projection
    chart.projection = new am4maps.projections.Miller();

    // Create map polygon series
    var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

    // Exclude Antartica
    polygonSeries.exclude = ["AQ"];

    // Make map load polygon (like country names) data from GeoJSON
    polygonSeries.useGeodata = true;

    // Configure series
    var polygonTemplate = polygonSeries.mapPolygons.template;
    polygonTemplate.tooltipText = "{name}";
    polygonTemplate.polygon.fillOpacity = 0.6;


    // Create hover state and set alternative fill color
    var hs = polygonTemplate.states.create("hover");
    hs.properties.fill = chart.colors.getIndex(0);

    // Add image series
    var imageSeries = chart.series.push(new am4maps.MapImageSeries());
    imageSeries.mapImages.template.propertyFields.longitude = "longitude";
    imageSeries.mapImages.template.propertyFields.latitude = "latitude";
    imageSeries.mapImages.template.tooltipText = "{title}";
    imageSeries.mapImages.template.propertyFields.url = "url";

    var circle = imageSeries.mapImages.template.createChild(am4core.Circle);
    circle.radius = 3;
    circle.propertyFields.fill = "color";

    var circle2 = imageSeries.mapImages.template.createChild(am4core.Circle);
    circle2.radius = 3;
    circle2.propertyFields.fill = "color";


    circle2.events.on("inited", function (event) {
      animateBullet(event.target);
    })


    function animateBullet(circle) {
      var animation = circle.animate([{ property: "scale", from: 1, to: 5 }, { property: "opacity", from: 1, to: 0 }], 1000, am4core.ease.circleOut);
      animation.events.on("animationended", function (event) {
        animateBullet(event.target.object);
      })
    }

    var colorSet = new am4core.ColorSet();

    console.log(response);

    // console.log(JSON.stringify(response).length);
    //console.log(response[0]["sum(total_fatalities)"]);
    // console.log(response[0]["avg(latitude)"]);
    // console.log(response[0]["avg(longitude)"]);

    imageSeries.data = [];

    for (i = 0; i < response.length; i++) {
      imageSeries.data.push({
        "title": "Total fatalities:".concat(response[i]["sum(total_fatalities)"]),
        "latitude": parseFloat(response[i]["avg(latitude)"]),
        "longitude": parseFloat(response[i]["avg(longitude)"]),
        "color": colorSet.next()
      });
    }

    chart.exporting.menu = new am4core.ExportMenu();

  }));
}


let limit = 250

let globalJson = {
  "limit": limit,
  "select":
    [{
      "column": "country"
    },
    {
      "column": "sum(total_fatalities)"
    },
    {
      "column": "avg(latitude)"
    },
    {
      "column": "avg(longitude)"
    }],
  "where":
    [
    ],
  "groupBy":
    [{
      "column": "country"
    }]
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