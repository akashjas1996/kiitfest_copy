<!DOCTYPE html>
<head>
  </head>
<?php include "trac.php"; ?>
<?php
include "./sql.php";
$sql = new sql();
$isLogin = $sql->isLogin();
echo '<script> var isLogin = '. $isLogin. ';</script>' 
?>

<html lang="en">
  <head>

    <head>

</head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="192x192" href="img/kfLogoTopLeft.png">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>KIITFEST 5.0</title>

    <!--Local css-->
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/technical.css" />
    <link rel="stylesheet" href="css/cultural.css" />
    <link rel="stylesheet" href="css/fontawesome-all.min.css" />

    <!--Local js-->
    <script src="js/TimelineLite.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.transit.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php include "events/quizfestEventDetails.php"; ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-66101749-2"></script>

  </head>

  <body>


    <div class="background ">
      <div class="sliding-bg"></div>
      <div id="blackTint" class="overlay about"></div>
    </div>

    <!--Header-->
    <header class="header header-scrolled">
      <ul class="navContainer">
        <li class="expand">
          <svg class="hamburger" viewBox="0 0 100 100">
            <line class="line l1" x1="15" y1="29" x2="85" y2="29" />
            <line class="line l2" x1="15" y1="46" x2="85" y2="46" />
            <line class="line l3" x1="15" y1="63" x2="85" y2="63" />
          </svg>
        </li>
        <li><a class="nav-button" href="index.php">Home</a></li>
        <li><a class="nav-button" href="technical.php">Technical</a></li>
        <li><a class="nav-button" href="cultural.php">Cultural</a></li>
        <?php
            if($sql->isLogin()==1) {
                echo '<li><a href="events/checkout.php">Checkout  <i class="fas fa-shopping-cart"></i></a></li>';
                echo '<li><a href="logout.php">Logout   <i class="fas fa-sign-out-alt"></i></a></li>';
            } else {
                //echo '<li><a class="button" href="signup.php">Register</a></li>';
                echo '<li><a class="button" href="login.php">Log In</a></li>';
            }
        ?>
      </ul>
    </header>

    <div class="container">
      <div class="deptContainer">

        <div id="eventNames" class="eventNames">
          <!-- Event Names for each department get rendered here by js -->
        </div>
        
      </div>

      <div class="eventDetailsContainer">
        <div class="eventContent"></div>
        <p style="color:white"> Choose an event to see the details. </p>
          <!-- Event detailsfor each event get rendered here by js -->
      </div>

    </div>

    <!-- Modal for mobile view -->
    <div class="modal">
        <div class="eventContent modalContent"> 
        </div>
    </div>

    <script src="js/common.js"></script>
    <script src="js/quizfest.js"></script>
  </body>
</html>
