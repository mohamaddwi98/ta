<?php include("file/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Upload dan Download</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
    body {
      padding-top: 70px;
      background: #eeeeee;
    }

    .container-body {
      background: #ffffff;
      box-shadow: 1px 1px 1px #999;
      padding: 20px;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>

        </button>
        <a class="navbar-brand" >Upload & Download</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="?page=1">Home</a></li>
          <li><a href="?page=up">Upload</a></li>
          <li><a href="?page=down">Download</a></li>
          <li><a href="?page=about">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php
          if($_SESSION['user']){
            echo '<li><a href="?page=usr">Profile</a></li>';
            echo '<li><a href="?page=my">My File</a></li>';
            echo '<li><a href="?page=out" onclick="return confirm(\'Keluar?\')">Logout</a></li>';
          }else{
            echo '<li><a href="?page=in">Login</a></li>';
          }
          ?>
          <li><a href="https://www.facebook.com/speedhunter98" target="_blank">Visit Us</a></li>
          <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container container-body">
  <?php include "/file/content.php";?>
  <hr>
    <center>copyright &copy; 2018 <a href="https://www.facebook.com/speedhunter98" target="_blank">M Dwi Krisyunanto</a></center>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>