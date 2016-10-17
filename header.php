<?php
  session_start();
?>

<!DOCTYPE html>
<html>
    <head>

      <!-- Meta-tags -->

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
      <title>PIS - PHP</title>

      <link href="https://fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin-ext" rel="stylesheet">

      <!-- CSS -->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link href="css/main.css" rel="stylesheet" />

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

    </head>
    <body>

      <div  id="header">
        <div class="container">
          <div class="row">
            <div class="col-md-6 left">
              <h1><a href="dashboard.php" class="logo">PIS PHP</a></h1>
            </div>
            <div class="col-md-6 right">
              <?php
                if(isset($_SESSION['name'])) {
                  echo "
                    <a href='dashboard.php?admin=true'><i class='fa fa-dashboard'></i> Admin Panel</a>
                    <span> | </span>
                    <a href='logout.php'><i class='fa fa-sign-out'></i> Wyloguj</a>
                  ";
                }
                //  else if(isset($_COOKIE[$cookie_name]))
              ?>
            </div>
          </div>
        </div>
      </div>
