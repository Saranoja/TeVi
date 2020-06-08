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
    am4core.useTheme(am4themes_frozen);
    am4core.useTheme(am4themes_animated);

    var chart = am4core.create("chartdiv", am4charts.PieChart3D);
    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

    chart.legend = new am4charts.Legend();

    am4core.ready(fetchData(data).then(response => {
        //console.log("THEN");
        chart.data = response;
        var series = chart.series.push(new am4charts.PieSeries3D());
        series.dataFields.value = "count(".concat(localStorage.getItem("select").replace("-","_")).concat(")");
        series.dataFields.category = localStorage.getItem("select").replace("-","_");
    }));
}

let globalJson = {
    "limit": "10",
    "select": [],
    "where": [],
    "groupBy": []
};

console.log("count(".concat(localStorage.getItem("select").replace("-","_")).concat(")"));

globalJson["select"].push({ "column": localStorage.getItem("select").replace("-","_")});
globalJson["select"].push({ "column": "count(".concat(localStorage.getItem("select").replace("-","_")).concat(")")});
globalJson["where"].push({
    "column": "year",
    "operator": ">",
    "value": "2012"
});
globalJson["groupBy"].push({ "column": localStorage.getItem("select").replace("-","_")});

console.log(globalJson);

createChart(globalJson);
