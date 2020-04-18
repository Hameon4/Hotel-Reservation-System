<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <style>
      .mainNav2{
        padding-top: 30px;
        float: left;
      }
      .logIn{
        margin-top: 40px;
      }
    </style>
<header>


  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php" style="font-size: 35px;">ADHRS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>



        <?php
        if (isset($_SESSION['userId'])) {
          echo '<div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="#home" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
              <li class="nav-item"><a href="#rooms" class="nav-link">Rooms</a></li>
              <li class="nav-item"><a href="#menu" class="nav-link">Restaurant Menu</a></li>
              <li class="nav-item"><a href="#about" class="nav-link">About Us</a></li>
            </ul>

            <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit" class="nav-item">Logout</button>

          </form>
          </div';
        }
        else {
          echo '<form action="includes/login.inc.php" method="post">
          <div class = "mainNav22">
              <ul class="mainNav2">
              <li class="nav-item"><input type="text" name="mailuid" placeholder="Username/E-mail..."></li>
              <li class="nav-item"><input type="password" name="pwd" placeholder="Password..."></li>
            </ul>
            </div>
              <button type="submit" name="login-submit" class="logIn">Login</button>
            </form>';


        }
         ?>
    </div>
  </nav>
  <!-- END nav -->
  <style >
    .mainNav22 ul li {
      list-style: none;
      float: left;
    }
    .logIn {
      float: right;
      margin-left: 450px;
      margin-top: -50px;
    }
  </style>
</header>
