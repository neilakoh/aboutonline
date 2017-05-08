<?php
  $servername = "localhost";
  $username = "root";
  $password = "";

  $conn = new mysqli($servername, $username, $password);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } else {
      $dbname = "aboutonline";
      $createDatabase = "CREATE DATABASE ".$dbname;
      $createTableAdmin = '';

      if ($conn->query($createDatabase) === TRUE) {
          echo "Database created successfully";
      } else {
          echo "Error creating database: " . $conn->error;
      }
  }

  $conn->close();
?>
