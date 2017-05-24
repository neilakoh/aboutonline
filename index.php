<?php
  include('methods.php');
  $dbname = "aboutonline";
  (databaseExist($dbname) ? include('components/home.php') : include('components/setup.php'));
?>
