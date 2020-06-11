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
    document.getElementById("query").textContent = "Dataset: ".concat(localStorage.getItem("select"));

    am4core.useTheme(am4themes_animated);

    var chart = am4core.create("chartdiv", am4charts.PieChart3D);
    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

    chart.legend = new am4charts.Legend();

    am4core.ready(fetchData(data).then(response => {
        console.log(JSON.stringify(response));

        if (Object.keys(response).length > 0) {
            chart.data = response;
            var series = chart.series.push(new am4charts.PieSeries3D());
            series.dataFields.value = "count(".concat(localStorage.getItem("select").replace("-", "_")).concat(")");
            series.dataFields.category = localStorage.getItem("select").replace("-", "_");
            chart.exporting.menu = new am4core.ExportMenu();
        }
        else {
            document.getElementById("response").textContent = "Sorry, there is no result available for your request. :(";
        }
    }));
}

let globalJson = {
    "limit": "20",
    "select": [],
    "where": [],
    "groupBy": []
};


globalJson["select"].push({ "column": localStorage.getItem("select").replace("-", "_") });
globalJson["select"].push({ "column": "count(".concat(localStorage.getItem("select").replace("-", "_")).concat(")") });

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

console.log(globalJson);


globalJson["groupBy"].push({ "column": localStorage.getItem("select").replace("-", "_") });

//document.getElementById("filters").textContent = "Filters: ".concat(localStorage.getItem("where"));

createChart(globalJson);
