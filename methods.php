<?php
  function databaseExist($dbname) {
    include('connector/initConnector.php');
    if ($conn->select_db($dbname) === false) {
      $conn->close();
      return false;
    } else {
      $conn->close();
      return true;
    }
  }

  function createDatabase($dbname) {
    include('connector/initConnector.php');
    if ($conn->connect_error) {
      $conn->close();
      return false;
    } else {
      $createDatabase = "CREATE DATABASE ".$dbname;
      if ($conn->query($createDatabase) === TRUE) {
        $conn->close();
        return true;
      } else {
        $conn->close();
        return false;
      }
    }
  }

  function createTables() {

  }

  function needsInitialization() {

  }
?>
