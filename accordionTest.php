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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
          <button class="department"><span>Electrifyn</span></button>
          <div class="eventContainer">
            <div class="events">
              <div id="101">
                <span>Circuit Design & Power Relay</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(101) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="102">
                <span>Design 4 Energy</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(102) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="103">
                <span>KIIT-IEEE Workshop</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(103) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="104">
                <span>Robot Triathlon</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(104) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="105">
                <span>S.U.I.T</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(105) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="106">
                <span>Solar Spectrum</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(106) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
            </div>
          </div>

          <button class="department"><span>Kinesis</span></button>
          <div class="eventContainer">
            <div class="events">
              <div id="201">
                <span>Cell-Lock Holmes</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(201) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="202">
                <span>Chitra-a-ghar</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(202) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="203">
                <span>Hackathon 5.0</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(203) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="204">
                <span>Jugaad Out of Kabaad</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(204) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="205">
                <span>PainTerrific</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(205) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="206">
                <span>Pixeloscope</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(206) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="207">
                <span>Shabd-War</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(207) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
            </div>
          </div>

          <button class="department"><span>KSOM</span></button>
          <div class="eventContainer">
            <div class="events">
              <div id="301">
                <span>Business Simulation</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(301) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="302">
                <span>Dalal Street</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(302) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="303">
                <span>Dare To Face</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(303) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="304">
                <span>Ikadhikaar</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(304) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="305">
                <span>Milk Run</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(305) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="306">
                <span>Synergy Konflictus 5.0</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(306) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
            </div>
          </div>

          <button class="department"><span>Luminaire</span></button>
          <div class="eventContainer">
            <div class="events">
              <div id="401">
                <span>Brainotracking</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(401) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="402">
                <span>Hackathon</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(402) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="403">
                <span>Matricity</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(403) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="404">
                <span>Minute-To-Win-It</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(404) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="405">
                <span>Eagle's Hunt</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(405) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="406">
                <span>Tech-Builder Konflictus 5.0</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(406) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
            </div>
          </div>

          <button class="department"><span>Mirabilia</span></button>
          <div class="eventContainer">
            <div class="events">
              <div id="501">
                <span>Braille Coding</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(501) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="502">
                <span>Turncoat</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(502) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="503">
                <span>3rd Eye Photography</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(503) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="504">
                <span>Bring Back To Life</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(504) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="505">
                <span>DataJAM</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(505) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="506">
                <span>Algonigma</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(506) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="507">
                <span>Appathon</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(507) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="508">
                <span>Techknow</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(508) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
            </div>
          </div>

          <button class="department"><span>Nirminite</span></button>
          <div class="eventContainer">
            <div class="events">
              <div id="601">
                <span>Burj-Al-Paper</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(601) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="602">
                <span>CAD-NOVUS</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(602) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="603">
                <span>Civi Kalakaar</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(603) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="604">
                <span>Cryptic Crossword</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(604) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="605">
                <span>Final Destination</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(605) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="606">
                <span>Frame-D-Bridge</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(606) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="607">
                <span>Model-It</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(607) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="608">
                <span>Twister Coaster</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(608) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
            </div>
          </div>

          <button class="department"><span>Vidnan</span></button>
          <div class="eventContainer">
            <div class="events">
              <div id="701">
                <span>Scavenger's Quest</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(701) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="702">
                <span>Innovation Challenge</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(702) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="703">
                <span>The Slavage Yard</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(703) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="704">
                <span>Seguidor</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(704) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="705">
                <span>Roadrunner</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(705) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="706">
                <span>Mirror Maze</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(706) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="707">
                <span>RoboWar</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(707) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="708">
                <span>Kivi</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(708) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
            </div>
          </div>

          <button class="department"><span>Yantriki</span></button>
          <div class="eventContainer">
            <div class="events">
              <div id="801">
                <span>AeroRace</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(801) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="802">
                <span>Architecture of Destruction</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(802) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="803">
                <span>Drone-Acharya</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(803) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="804">
                <span>EDCAD</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(804) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="805">
                <span>HydroBooster</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(805) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="806">
                <span>Mech ke Tech Stars</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(806) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
              <div id="807">
                <span>Sunder Master</span>
                <?php if($sql->isLogin() == 1) { echo '<button onClick=addToCart(807) class="addEvent"><i class="fas fa-plus-circle"></i></button>';} ?>
              </div>
            </div>
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
