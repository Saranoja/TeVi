<?php
/** 
 * @author Calin Irina 
 * */

require_once 'core/App.php';
require_once 'core/Model.php';
require_once 'core/Controller.php';
require_once 'core/database/Database.php';

require_once 'views/StatsControllers/headInit.php';
require_once 'views/StatsControllers/menuInit.php';
require_once 'views/StatsControllers/modalInit.php';
require_once 'views/StatsControllers/mobileWrap.php';
require_once 'views/StatsControllers/IncrementalField.php';
require_once 'views/StatsControllers/CriteriaControl.php';
require_once 'views/StatsControllers/criteriaWrap.php';
require_once 'views/StatsControllers/criteriaWrapMapChart.php';
require_once 'views/StatsControllers/criteriaWrapPieChart.php';
require_once 'views/StatsControllers/filtersWrap.php';
require_once 'views/StatsControllers/criteriaWrapMapChart.php';
require_once 'views/StatsControllers/sortWrap.php';
require_once 'views/StatsControllers/StatsController.php';
require_once 'views/StatsControllers/StatsControllerMapChartGroup.php';
require_once 'views/StatsControllers/StatsControllerPieChartGroup.php';
require_once 'views/StatsControllers/StatsDataDisplay.php';
require_once 'views/StatsControllers/StatsFiltersDisplay.php';

require_once 'views/StatsControllers/criteriaWrapDB.php';
require_once 'views/StatsControllers/criteriaWrapCountryDB.php';
require_once 'views/StatsControllers/criteriaWrapBarsChart.php';
require_once 'views/loadingScreen/loadingScreen.php';


?>