<?php

 if (isset($_POST['Result']))
  {

   $radioVal = $_POST["hopping"];
   echo $radioVal;

 }

 if (isset($_POST['GroupFilterSubmit']))
  {
   $groupBy = $_POST["radioFilterGroupBy"];
   echo $radioVal;
  }


?>