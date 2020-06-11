<!DOCTYPE html>
<html lang="en">

<head>
  <title> TeVi - Statistics </title>
  <?php getBaseHead(); ?>
  <link rel="stylesheet" href="../style/StatsV2.css">
  <script src="../js/mobileMenu.js"></script>
  <script src="../js/CollapsedFilter.js"></script>
</head>

<body id="whole_body">

  <?php getMenuInfo();
  initModal(); ?>

  <div class="wrapper">
    <div class="model-hierarchy">
      <img src="../img/HierarchyModel/step1.svg">
    </div>

    <div class="chart-container">
      <div class="pie-chart">
        <img src="../img/HierarchyModel/Piechart.svg">
      </div>
      <div class="map-chart">
        <img src="../img/HierarchyModel/mapChart.png">
      </div>

      <div class="table-chart">
        <img src="../img/HierarchyModel/tableChart.svg">
      </div>

      <div class="bars-chart">
        <img src="../img/HierarchyModel/barsChart.svg">
      </div>

    </div>

    <form action="../Stats/Step2" method="post" class="check-box" name="check-box">
      <input id="a" type="radio" name="hopping" value="Pie" checked>
      <label for="a"><span></span>Pie Chart</label>
      <input id="b" type="radio" name="hopping" value="Map">
      <label for="b"><span></span>Map Chart</label>
      <input id="c" type="radio" name="hopping" value="Table">
      <label for="c"><span></span>Radius Chart</label>
      <input id="d" type="radio" name="hopping" value="Bars">
      <label for="d"><span></span>Bars Chart</label>
      <div class="worm">
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
        <div class="worm__segment"></div>
      </div>
      <button class="next-button" name="Result" type="submit"></button>
    </form>
  </div>
  <div class="bg-model">
    <img src="../img/HierarchyModel/bgTablet.svg">
  </div>
</body>

</html>