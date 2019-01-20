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

  <!--Local css-->
  <link rel="stylesheet" href="css/common.css" />
  <link rel="stylesheet" href="css/accordion.css" />
  <link rel="stylesheet" href="css/fontawesome-all.min.css" />

  <!--Local js-->
  <script src="js/TimelineLite.min.js"></script>
  <script src="js/TweenMax.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery.transit.min.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-66101749-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-66101749-2');
  </script>

    </head>

    <body>


    <div class="background ">
      <div class="sliding-bg"></div>
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



      <div class="container">
        <div class="deptContainer">
          <button class="department">Electrifyn</button>
            <div class="eventContainer">
              <button id="event1" class="events">Robo Triathlon</button>
              <button id="event2" class="events">Design 4 Energy</button>
              <button id="event3" class="events">Circuit Design & Power Relay</button>
              <button id="event4" class="events">S.U.I.T</button>
              <button id="event5" class="events">Solar Spectrum</button>
              <button id="event6" class="events">KIIT-IEEE Workshop</button>
            </div>

          <button class="department">Kinesis</button>
            <div class="eventContainer">
              <button id="event1" class="events">Cell-Lock Holmes</button>
              <button id="event1" class="events">Chitra-a-ghar</button>
              <button id="event1" class="events">Hackathon 5.0</button>
              <button id="event1" class="events">Jugaad Out of Kabaad</button>
              <button id="event1" class="events">PainTerrific</button>
              <button id="event1" class="events">Pixeloscope</button>
              <button id="event1" class="events">Shabd-War</button>
            </div>

          <button class="department">KSOM</button>
            <div class="eventContainer">
              <button id="event1" class="events">Business Simulation</button>
              <button id="event1" class="events">Dalal Street</button>
              <button id="event1" class="events">Dare To Face</button>
              <button id="event1" class="events">Ikadhikaar</button>
              <button id="event1" class="events">Milk Run</button>
              <button id="event1" class="events">Synergy Konflictus 5.0</button>
            </div>

          <button class="department">Luminaire</button>
            <div class="eventContainer">
              <button id="event1" class="events">Brainotracking</button>
              <button id="event1" class="events">Hackathon</button>
              <button id="event1" class="events">Matricity</button>
              <button id="event1" class="events">Minute-to-Win-it</button>
              <button id="event1" class="events">Eagle's Hunt</button>
              <button id="event1" class="events">Tech-Builder Konflictus 5.0</button>
            </div>

          <button class="department">Mirabilia</button>
            <div class="eventContainer">
              <button id="event1" class="events">Braille Coding</button>
              <button id="event1" class="events">Turncoat</button>
              <button id="event1" class="events">3rd Eye Photography</button>
              <button id="event1" class="events">Bring Back To Life</button>
              <button id="event1" class="events">DataJAM</button>
              <button id="event1" class="events">Algonigma</button>
              <button id="event1" class="events">Appathon</button>
              <button id="event1" class="events">Tech-Know</button>
            </div>

          <button class="department">Nirminite</button>
            <div class="eventContainer">
            <button id="event1" class="events">Burj-Al-Paper</button>
            <button id="event1" class="events">CAD-NOVUS</button>
            <button id="event1" class="events">Civi Kalakaar</button>
            <button id="event1" class="events">Cryptic Crossword</button>
            <button id="event1" class="events">Final Destination</button>
            <button id="event1" class="events">Frame-D-Bridge</button>
            <button id="event1" class="events">Model-It</button>
            <button id="event1" class="events">Twister Coaster</button>
            </div>

          <button class="department">Vidnan</button>
            <div class="eventContainer">
            <button id="event1" class="events">Scavanger's Quest</button>
            <button id="event1" class="events">Innovation Challenge</button>
            <button id="event1" class="events">The Salvage Yard</button>
            <button id="event1" class="events">Seguidor</button>
            <button id="event1" class="events">Roadrunner</button>
            <button id="event1" class="events">Mirror Maze</button>
            <button id="event1" class="events">Robo War</button>
            <button id="event1" class="events">Kivi</button>
            </div>

          <button class="department">Yantriki</button>
            <div class="eventContainer">
            <button id="event1" class="events">AeroRace</button>
            <button id="event1" class="events">Architecture of Destruction</button>
            <button id="event1" class="events">Drone-Acharya</button>
            <button id="event1" class="events">EDCAD</button>
            <button id="event1" class="events">HydroBooster</button>
            <button id="event1" class="events">Mech Ke Tech Stars</button>
            <button id="event1" class="events">Sunder Master</button>
            </div>

        </div>

        <div class="eventDetailsContainer">
          <p class="eventContent"></p>
        </div>
      </div>

      <script src="js/common.js"></script>
      <script src="js/accordiontest.js"></script>
    </body>
  </html>
