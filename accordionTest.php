<!DOCTYPE html>
<?php include "trac.php"; ?>
<?php
include "./sql.php";
$sql = new sql();
?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="192x192" href="img/kfLogoTopLeft.png">

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
    <?php include "events/eventDetails.php"; ?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-66101749-2"></script>

  </head>

  <body>


    <div class="background ">
      <div class="sliding-bg"></div>
      <div id="blackTint" class="overlay home"></div>
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
        <li><a class="nav-button" href="#home">Home</a></li>
        <li><a class="nav-button" href="#about">About</a></li>
        <li><a class="nav-button" href="#events">Events</a></li>
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
              <div class="events"><span id="101">Circuit Design & Power Relay</span></div>
              <div class="events"><span id="102">Design 4 Energy</span></div>
              <div class="events"><span id="103">KIIT-IEEE Workshop</span></div>
              <div class="events"><span id="104">Robot Triathlon</span></div>
              <div class="events"><span id="105">S.U.I.T</span></div>
              <div class="events"><span id="106">Solar Spectrum</span></div>
            </div>

          <button class="department">Kinesis</button>
            <div class="eventContainer">
              <div class="events"><span id="201">Cell-Lock Holmes</span></div>
              <div class="events"><span id="202">Chitra-a-ghar</span></div>
              <div class="events"><span id="203">Hackathon 5.0</span></div>
              <div class="events"><span id="204">Jugaad Out of Kabaad</span></div>
              <div class="events"><span id="205">PainTerrific</span></div>
              <div class="events"><span id="206">Pixeloscope</span></div>
              <div class="events"><span id="207">Shabd-War</span></div>
            </div>

          <button class="department">KSOM</button>
            <div class="eventContainer">
              <div class="events"><span id="301">Business Simulation</span></div>
              <div class="events"><span id="302">Dalal Street</span></div>
              <div class="events"><span id="303">Dare To Face</span></div>
              <div class="events"><span id="304">Ikadhikaar</span></div>
              <div class="events"><span id="305">Milk Run</span></div>
              <div class="events"><span id="306">Synergy Konflictus 5.0</span></div>
            </div>

          <button class="department">Luminaire</button>
            <div class="eventContainer">
              <div class="events"><span id="401">Brainotracking</span></div>
              <div class="events"><span id="402">Hackathon</span></div>
              <div class="events"><span id="403">Matricity</span></div>
              <div class="events"><span id="404">Minute-to-Win-it</span></div>
              <div class="events"><span id="405">Eagle's Hunt</span></div>
              <div class="events"><span id="406">Tech-Builder Konflictus 5.0</span></div>
            </div>

          <button class="department">Mirabilia</button>
          <div class="eventContainer">
            <div class="events">
              <div id="501">
                <span>Braille Coding</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(501) class="addEvent">+</button>';} ?>
              </div>
              <div id="502">
                <span>Turncoat</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(502) class="addEvent">+</button>';} ?>
              </div>
              <div id="503">
                <span>3rd Eye Photography</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(503) class="addEvent">+</button>';} ?>
              </div>
              <div id="504">
                <span>Bring Back To Life</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(504) class="addEvent">+</button>';} ?>
              </div>
              <div id="505">
                <span>DataJAM</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(505) class="addEvent">+</button>';} ?>
              </div>
              <div id="506">
                <span>Algonigma</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(506) class="addEvent">+</button>';} ?>
              </div>
              <div id="507">
                <span>Appathon</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(507) class="addEvent">+</button>';} ?>
              </div>
              <div id="508">
                <span>Techknow</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(508) class="addEvent">+</button>';} ?>
              </div>
            </div>
          </div>
              

          <button class="department">Nirminite</button>
            <div class="eventContainer">
            <span id="601" class="events">Burj-Al-Paper</span>
            <span id="602" class="events">CAD-NOVUS</span>
            <span id="603" class="events">Civi Kalakaar</span>
            <span id="604" class="events">Cryptic Crossword</span>
            <span id="605" class="events">Final Destination</span>
            <span id="606" class="events">Frame-D-Bridge</span>
            <span id="607" class="events">Model-It</span>
            <span id="608" class="events">Twister Coaster</span>
            </div>

          <button class="department">Vidnan</button>
            <div class="eventContainer">
            <span id="701" class="events">Scavanger's Quest</span>
            <span id="702" class="events">Innovation Challenge</span>
            <span id="703" class="events">The Salvage Yard</button>
            <span id="704" class="events">Seguidor</span>
            <span id="705" class="events">Roadrunner</span>
            <span id="706" class="events">Mirror Maze</span>
            <span id="707" class="events">Robo War</span>
            <span id="708" class="events">Kivi</span>
            </div>

          <button class="department">Yantriki</button>
            <div class="eventContainer">
            <span id="801" class="events">AeroRace</span>
            <span id="802" class="events">Architecture of Destruction</span>
            <span id="803" class="events">Drone-Acharya</span>
            <span id="804" class="events">EDCAD</span>
            <span id="805" class="events">HydroBooster</span>
            <span id="806" class="events">Mech Ke Tech Stars</span>
            <span id="807" class="events">Sunder Master</span>
            </div>

        </div>

        <div class="eventDetailsContainer">
            
          <div class="eventContent"></div>
        </div>
      </div>

      <script src="js/common.js"></script>
      <script src="js/accordiontest.js"></script>
    </body>
  </html>
