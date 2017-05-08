<?php
  $dbname = "aboutonline";
  $isDatabaseExist = "None";

  if(databaseExist($dbname)) {
    $isDatabaseExist = "Already Created";
    $isDatabaseExistStyle = "badge-success";
  } else {
    createDatabase($dbname);
    if(databaseExist($dbname)) {
      $isDatabaseExist = "Done";
      $isDatabaseExistStyle = "badge-success";
    } else {
      $isDatabaseExist = "Failed";
      $isDatabaseExistStyle = "badge-failed";
    }
  }
?>

<html>
  <head>
    <title>Setup Database</title>
      <link rel="stylesheet" href="./frameworks/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="./frameworks/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"/>
      <link rel="stylesheet" type="text/css" href="styles/style.css" >
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="./frameworks/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="setupWrapper" id="setupWrapper">

      <div class="panel panel-primary">
        <div class="panel-heading">Application Setup</div>
        <div class="panel-body">

          <ul class="list-group">
            <li class="list-group-item">
              <span class="badge <?php print $isDatabaseExistStyle; ?>">
                <?php
                  print $isDatabaseExist;
                ?>
              </span>
              Creating Database
            </li>
          </ul>

          <ul class="list-group">
            <li class="list-group-item">
              <span class="badge">Done</span>
              Creating Database Tables
            </li>
          </ul>

        </div>
      </div>

    </div>
  </body>
</head>
