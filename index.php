<!DOCTYPE html>

<?php
include "./sql.php";
$sql = new sql();
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" sizes="192x192" href="img/logo.png">

  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>KIITFEST 5.0</title>

  <!--Bootstrap 4.2-->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!--Local css-->
  <link rel="stylesheet" href="css/common.css" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/fontawesome-all.min.css">

  <!--Local js-->
  <script src="js/TimelineLite.min.js"></script>
  <script src="js/TweenMax.min.js"></script>


</head>
<body>

  <div class="background ">
    <div class="sliding-bg"></div>
    <div id="tint" class="overlay home"></div>
    <div id="blackTint" class="overlay black"></div>
  </div>

  <!--Header-->
  <header class="header">
    <ul class="navContainer">
      <li class="expand">
        <svg class="hamburger" viewBox="0 0 100 100">
          <line class="line l1" x1="15" y1="29" x2="85" y2="29" />
          <line class="line l2" x1="15" y1="46" x2="85" y2="46" />
          <line class="line l3" x1="15" y1="63" x2="85" y2="63" />
        </svg>
      </li>
      <li><a class="nav-button" href="#home">Home</a></li>
      <li><a class="nav-button" href="#about">About</a></li>
      <li><a class="nav-button" href="#events">Events</a></li>
      <!-- <li><a class="nav-button" href="#guests">Guests</a></li> -->
      <li><a class="nav-button" href="#contactUs">Contact Us</a></li>
      <?php
          if($sql->isLogin()==1) {
              echo '<li><a href="events/checkout.php">Checkout  <i class="fas fa-shopping-cart"></i></a></li>';
              echo '<li><a href="logout.php">Logout   <i class="fas fa-sign-out-alt"></i></a></li>';
          } else {
              echo '<li><a class="button" href="signup.php">Register</a></li>';
              echo '<li><a class="button" href="login.php">Log In</a></li>';
          }
      ?>
    </ul>
  </header>


  <!--Logo-->
  <section id="home" >
    <div class="container h-100 d-flex flex-column justify-content-center align-items-center ">

      <div class="row w-100 d-flex justify-content-center align-items-center">
        <div class="col-lg-9 col-md-12 col-sm-12">

          <!-- Animated Logo -->
          <div class="images">
            <img alt="center" class="center" src='img/Logo/center.png' />
            <img alt="greenText" class="greenText" src='img/Logo/greenText.png' />
            <img alt="innertri" class="innerTri" src='img/Logo/innertri.png' />
            <img alt="lower" class="lower" src='img/Logo/lower.png' />
            <img alt="mainText" class="mainText" src='img/Logo/mainText.png' />
            <img alt="middle" class="middle" src='img/Logo/middle.png' />
            <img alt="upper" class="upper" src='img/Logo/upper.png' />
          </div>

          <h2 class="date"> 15th Feb - 17th Feb<br> 2019 </h2>

          <!-- Countdown -->
          <div class="countdown mt-auto">
            <div class="countdown__days">
              <div class="number"></div>
              <span class="time">Days</span>
            </div>
            <div class="countdown__hours">
              <div class="number"></div>
              <span class="time">Hours</span>
            </div>
            <div class="countdown__minutes">
              <div class="number"></div>
              <span class="time">Minutes</span>
            </div>
            <div class="countdown__seconds">
              <div class="number"></div>
              <span class="time">Seconds</span>
            </div>
          </div>

        </div>
      </div>

      <!-- KIIT/KISS Logo -->
      <a href="https://kiit.ac.in"><img class="kiitLinkLogo" src="img/Logo/kiitLogo.png"></a>
      <a href="https://kiss.ac.in"><img class="kissLinkLogo" src="img/Logo/kissLogo.png"></a>

    </div>
  </section>
  

  <!--KiiTFest Intro Video-->
  <section id="about">
    <div class="container-fluid h-100">
      <div class="row justify-content-between align-items-center px-5 h-100">

        <!--Intro Body-->
        <div class="mt-5 col-lg-5 col-sm-12">
          <h1 class="heading">About KiitFest</h1>
          <p class="body">
          KIITFEST is a “Contest of Contests” that encompasses all cultural and technical events into one forum that we are about to bring forth “KIITFEST 5.0”. KIITFEST is an ever-expanding universe of glory and greatness, where fun and games meet battles and battles become wars, where we put the sparkle in the air and glitz in the land and where we make the stars shine. </p>
          <p class="body">
          This February, we aim to bring enthusiastic participation, eminent personalities and nights limed with entertainment and hysterical fun. KIITFEST has managed to attain a huge audience in the country and a participation of around 25000 students from all across the country stands a testimony to this. The techno cultural fest is packed with more than 100 events this year, with experts and dignitaries from various fields coming down to adjudicate the events. </p>
        </div>

        <!--Intro Video-->
        <div class="col-lg-6 col-sm-12 embed-responsive embed-responsive-16by9 align-self-center">
          <iframe width="100%" height="auto" src="https://www.youtube-nocookie.com/embed/Op7SHPDHwdI?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> 

      </div>
    </div>
  </section>


  <!--Events -->
  <section id="events">
    <div class="container-fluid h-100">
      <div class="row justify-content-center align-items-center h-100">

        <div class="col-md-3 col-sm-8 d-flex flex-column justify-content-center align-items-center event tech">
          <h2 class="title">Technical</h2>
              <p class="body">"A small step. A giant leap for mankind."</p>
              <p class="body"> A hub for all denizens and enthusiasts of Technology who believe that they can mould this world into a better place to be a part of. A click is what matters!</p>
          <a href="./technical.php"><button class="event-button" >See Events</button></a>
        </div>
        <div class="col-md-3 col-sm-8 d-flex flex-column justify-content-center align-items-center event cul">
          <h2 class="title">Cultural</h2>
              <p class="body">"A small step. A giant leap for mankind."</p>
              <p class="body"> A hub for all denizens and enthusiasts of Technology who believe that they can mould this world into a better place to be a part of. A click is what matters!</p>
          <a href="./cultural.php"><button class="event-button"> See Events</button>
</a>        </div>
        <div class="col-md-3 col-sm-8 d-flex flex-column justify-content-center align-items-center event quiz">
          <h2 class="title">QuizFest</h2>
              <p class="body">"A small step. A giant leap for mankind."</p>
              <p class="body"> A hub for all denizens and enthusiasts of Technology who believe that they can mould this world into a better place to be a part of. A click is what matters!</p>
          <a href="./quizfest.php"><button class="event-button">See Events</button></a>
        </div>

      </div>
    </div>
  </section>


  <!--Sponsors
  <section class="">
    <div class="overlay"></div>
    <div class="container-fliud h-100 ">

      <div class="row">
        <div class="col-12">
          <h1 class="text-white">Our Previous Sponsors</h1>
        </div>
      </div>
      <div class="row">
        <a class="col-lg-3 col-xs-3 p-5" href="#">
          <img class="sponsor" src="img/brands/audi_logo.png" alt="">
        </a>
        <a class="col-lg-3 col-xs-3 p-5" href="#">
          <img class="sponsor" src="img/brands/hero.png" alt="">
        </a>
        <a class="col-lg-3 col-xs-3 p-5" href="#">
          <img class="sponsor" src="img/brands/ccd.png" alt="">
        </a>
        <a class="col-lg-3 col-xs-3 p-5" href="#">
          <img class="sponsor" src="img/brands/nikon.png" alt="">
        </a>
      </div>

      <div class="row my-5">
        <a class="col-lg-3 col-xs-6 p-5" href="#">
          <img class="sponsor" src="img/brands/hp.png" alt="">
        </a>
        <a class="col-lg-3 col-xs-6 p-5" href="#">
          <img class="sponsor" src="img/brands/dell.png" alt="">
        </a>
        <a class="col-lg-3 col-xs-6 p-5" href="#">
          <img class="sponsor" src="img/brands/bigfm.png" alt="">
        </a>
        <a class="col-lg-3 col-xs-6 p-5" href="#">
          <img class="sponsor" src="img/brands/mindfire.png" alt="">
        </a>
      </div>

      <div class="row">
        <a class="col-lg-3 col-xs-6 p-5" href="#">
          <img class="sponsor" src="img/brands/cocacola.png" alt="">
        </a>

        <a class="col-lg-3 col-xs-6 p-5" href="#">
          <img class="sponsor" src="img/brands/samsung.png" alt="">
        </a>

        <a class="col-lg-3 col-xs-6 p-5" href="#">
          <img class="sponsor" src="img/brands/icici.png" alt="">
        </a>

        <a class="col-lg-3 col-xs-6 p-5" href="#">
          <img class="sponsor" src="img/brands/aircel.png" alt="">
        </a>
      </div>

    </div>
  </section>
  -->


  <!--Contact Us-->
  <section id="contactUs">
    <div class="mapouter">

      <div class="gmap_canvas">
        <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=ksac%20bhubaneshwar&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>

      <div class="row contact-info">
        <div class="col-md-4 col-xs-12 text-md-left text-xs-center">
          <h3 class="">Phone</h3>
          <p class="text-dark">
            +91 8114382208<br>
            +91 7781957003
          </p>
        </div>
        <div class="col-md-4 col-xs-12 text-md-center text-xs-center">
          <h3>Address</h3>
          <p class="text-dark">
            KIIT STUDENT ACTIVITY CENTRE,<br>
            KIIT Deemed to be University<br>
            Patia<br>
            Bhubaneswar - 751024
          </p>
        </div>
        <div class="col-md-4 col-xs-12 text-md-right text-xs-center">
          <h3>E-mail</h3>
          <p class="text-dark">techsupport@kiitfest.org</p>
        </div>
      </div>

    </div>
  </section>

  <script src="js/common.js"></script>
  <script src="js/index.js"></script>
</body>
</html>
