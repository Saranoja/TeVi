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
    am4core.useTheme(am4themes_animated);
    var chart = am4core.create('chartdiv', am4charts.XYChart)
    chart.colors.step = 2;

    chart.legend = new am4charts.Legend()
    chart.legend.position = 'top'
    chart.legend.paddingBottom = 20
    chart.legend.labels.template.maxWidth = 95

    document.getElementById("query").textContent = "Dataset: ".concat(localStorage.getItem("select"));
    //document.getElementById("chosenCountries").textContent = "Countries: ".concat(localStorage.getItem("countries"));

    am4core.ready(fetchData(data).then(response => {

        if (Object.keys(response).length > 0) {

            var xAxis = chart.xAxes.push(new am4charts.CategoryAxis())
            xAxis.dataFields.category = 'country'
            xAxis.renderer.cellStartLocation = 0.1
            xAxis.renderer.cellEndLocation = 0.9
            xAxis.renderer.grid.template.location = 0;

            var yAxis = chart.yAxes.push(new am4charts.ValueAxis());
            yAxis.min = 0;

            console.log(response);

            let countries = JSON.parse(localStorage.getItem("countries"));

            console.log(countries);


            let accJson = [{
                country: countries[0]
            },
            {
                country: countries[1]
            },
            {
                country: countries[2]
            },
            {
                country: countries[3]
            }];

            var index;
            for (index = 0; index < 4; index++)

                response.forEach(element => {
                    //console.log(element["country"]);

                    //console.log(accJson[index].country);
                    if (element["country"] == accJson[index].country) {
                        accJson[index][element[localStorage.getItem("select").replace("-", "_")]] = element["count(" + localStorage.getItem("select").replace("-", "_") + ")"];
                        //console.log("match");
                    }
                })

            chart.data = accJson;

            console.log(accJson);

            for (index = 0; index < Object.keys(accJson[0]).length; index++)
                if (Object.keys(accJson[0])[index] != "country")
                    createSeries(Object.keys(accJson[0])[index], Object.keys(accJson[0])[index]);
            chart.exporting.menu = new am4core.ExportMenu();
        }

        else {
            document.getElementById("response").textContent = "Sorry, there is no result available for your request. :(";
        }

        function createSeries(value, name) {
            var series = chart.series.push(new am4charts.ColumnSeries())
            series.dataFields.valueY = value
            series.dataFields.categoryX = 'country'
            series.name = name

            series.events.on("hidden", arrangeColumns);
            series.events.on("shown", arrangeColumns);

            var bullet = series.bullets.push(new am4charts.LabelBullet())
            bullet.interactionsEnabled = false
            bullet.dy = 30;
            bullet.label.text = '{valueY}'
            bullet.label.fill = am4core.color('#ffffff')

            return series;
        }

        function arrangeColumns() {

            var series = chart.series.getIndex(0);

            var w = 1 - xAxis.renderer.cellStartLocation - (1 - xAxis.renderer.cellEndLocation);
            if (series.dataItems.length > 1) {
                var x0 = xAxis.getX(series.dataItems.getIndex(0), "categoryX");
                var x1 = xAxis.getX(series.dataItems.getIndex(1), "categoryX");
                var delta = ((x1 - x0) / chart.series.length) * w;
                if (am4core.isNumber(delta)) {
                    var middle = chart.series.length / 2;

                    var newIndex = 0;
                    chart.series.each(function (series) {
                        if (!series.isHidden && !series.isHiding) {
                            series.dummyData = newIndex;
                            newIndex++;
                        }
                        else {
                            series.dummyData = chart.series.indexOf(series);
                        }
                    })
                    var visibleCount = newIndex;
                    var newMiddle = visibleCount / 2;

                    chart.series.each(function (series) {
                        var trueIndex = chart.series.indexOf(series);
                        var newIndex = series.dummyData;

                        var dx = (newIndex - trueIndex + middle - newMiddle) * delta

                        series.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
                        series.bulletsContainer.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
                    })
                }
            }
        }

    }));
}

let globalJson = {
    "limit": "1000",
    "select": [],
    "where": [],
    "groupBy": []
};

globalJson["select"].push({ "column": "country" });
globalJson["select"].push({ "column": localStorage.getItem("select").replace("-", "_") });
globalJson["select"].push({ "column": "count(".concat(localStorage.getItem("select").replace("-", "_")).concat(")") });

let countries = JSON.parse(localStorage.getItem("countries"));

globalJson["where"].push({
    "column": "country",
    "operator": "in",
    "value": "('" + countries[0] + "', '" + countries[1] + "','" + countries[2] + "','" + countries[3] + "')"
});

var obj = JSON.parse(localStorage.getItem("where"));
var keys = Object.keys(obj);


keys.forEach(element => {

    let columns = "";

    obj[element].forEach(value => {
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

globalJson["groupBy"].push({ "column": localStorage.getItem("select").replace("-", "_") });
globalJson["groupBy"].push({ "column": "country" });

console.log("global");
console.log(globalJson);

//document.getElementById("filters").textContent = "Filters: ".concat(localStorage.getItem("where"));

createChart(globalJson);


