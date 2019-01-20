<?php
include "../sql.php";
$sql = new sql();
?>
<html lang="en" dir="ltr">
<?php include "../trac.php"; ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">

    <title>KIIT FEST 2K18</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../css/swiper.min.css">

      <!--Material design links-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="../style.css">
    <link href='https://fonts.googleapis.com/css?family=Bowlby One' rel='stylesheet'>

</head>
<body class="blog-page">
    <header class="site-header">
        <div class="header-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-10 col-lg-4">
                        <h1 class="site-branding flex">
                            <a href="../index.php">
                                <img src="../img/kiitfest_logo.png" alt="kiitfest logo" height="85px">
                            </a>
                        </h1>
                    </div>

                    <div class="col-2 col-lg-8">
                        <nav class="site-navigation">
                            <div class="hamburger-menu d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- .hamburger-menu -->
                            <ul>
                                <li><a href="../index.php">HOME</a></li>
                                <li><a href="../technical.php">TECHNICAL</a></li>
                                <li><a href="../cultural.php">CULTURAL</a></li>
                                <li><a href="../quizfest.php">QUIZFEST</a></li>
                                <li><a href="../webteam.php"></a></li>

                                <?php
                                    if($sql->isLogin()==1)
                                    {
                                        echo '<li><a href="checkout.php">CHECKOUT</a></li>';
                                        echo '<li><a href="../logout.php">LOGOUT</a></li>';

                                    }
                                ?>

                            </ul><!-- flex -->
                        </nav><!-- .site-navigation -->
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- container-fluid -->
        </div><!-- header-bar -->
    </header>

     <div class="page-header" style="background-image: url(../images/bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="entry-header" style="font-size: 215%;margin-left: 2%;">
                      School of Mechanical Engineering


                    </div><!-- entry-header -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->


    <div class="content" style="margin-top:10%;">
      <br><br>
              <div class="row align-items-center">
                    <div class="col-lg-4">
                    </div>


                 <div class="col-lg-8">

                  </div>
             </div>
             <br>
       <div class="row" style="margin-left:2%;margin-right:2%;" >
        <div class="col-md-3 col-sm-6">
        <div class="pricingTable11">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">AeroRace</div>
            <div></div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Coming soon</li>
            <li><b>Schedule</b> Coming soon</li>
            <li>Participation<b></b> Coming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal1">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(801) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>







        <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 green">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Architecture of </div>
            <div> Destruction</div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Coming soon</li>
            <li><b>Schedule</b> Coming soon</li>
            <li><b>Participation</b> Coming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal2">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(802) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>






      <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 red">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">DRONE-ACHARYA</div>
            <div> </div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Coming soon</li>
            <li><b>Schedule</b> Coming soon</li>
            <li><b>Participation</b> Coming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal3">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(803) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>

         <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 blue">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">EDCAD</div>
            <div> </div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Coming soon</li>
            <li><b>Schedule</b> Coming soon</li>
            <li><b>Participation</b> Coming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal4">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(804) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>



</div><!--row tag ends-->

        <div class="row" style="margin-left: 2%; margin-top: 10%;margin-right:2%;">
          <div class="col-md-4 col-sm-6">
        <div class="pricingTable11">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">HydroBooster</div>
            <div></div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Coming soon</li>
            <li><b>Schedule</b> Coming soon</li>
            <li><b>Participation</b> Coming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal5">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(805) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>


       <div class="col-md-4 col-sm-6">
        <div class="pricingTable11 red">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Mech k Tech</div>
            <div>Stars</div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Coming soon</li>
            <li><b>Schedule</b> Coming soon</li>
            <li><b>Participation</b> Coming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal6">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(806) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>



      <div class="col-md-4 col-sm-6">
        <div class="pricingTable11 blue">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Sunder Master</div>
            <div></div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Coming soon</li>
            <li><b>Schedule</b> Coming soon</li>
            <li><b>Participation</b> Coming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal7">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(807) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>


      </div><!--row-->
    </div>

      <br><br>

      <div class="modal fade" id="myModal1" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Mechanical Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Yantriki-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">AeroRace</h3>
                                </center>
                                                        <hr style="border-color: black;">
                               <p style="color: black;">

                                 <b> Description of the Event:</b>
The objective of this event is to attract multi-rotors enthusiasts to provide them with immense opportunity of testing the agility of their rotary wings aircrafts and UAVs as well as to attract aero modeling enthusiasts to provide them with immense opportunity of testing the agility of their fixed aircrafts.


<br>

</p>

<p style="color: black;">
<h3 style="color:black;"> Problem Statement:</h3><br>
<b style="color:black;">Round-1:Drone Race</b><br>
<p style="color: black;"><b>Design Constraint:</b><br>

<ol style="color:black;">
    <li>All sorts of rotary wing aircrafts (i.e., quadcopters, helicopter, hexcopters etc.) are allowed to compete in the competition.</li>
    <li>Size of the aircraft should be a minimum of 200mmX 200mmX150mmand maximum of 250mmX250mmX200mm.</li>
    <li>Autopilot systems are not allowed. Flight stabilization boards may be used.</li>
    <li>FPV Systems are allowed.</li>
</ol>
<br></p>

<b style="color:black;">Scoring:</b>

<ol style="color:black;">
 <li style="color:black;"> <b>Round 1 (7 Ripple Way)</b><br>
Participants need to cover the zigzag flag pole path in limited time by their respective multi-rotor. This round will access the flying skills of the participants. [Note: Single attempt shall be provided for completing the task]<br>

<b>Points criteria:</b> For each successful zigzag completion, each team will get 5 points. And for completing the square box which is in the middle, they will get 10 points. And this task is to be completed in minimum time as this will be noted down and will be taken into consideration for final evaluation. These points will be added to the second round.<br>
N.B: Each round will have a penalty. Suppose, if anyone touches a pole or an obstacle, 3 points will be deducted.<br></li>

<li><b>Round 2 (Ascending Descending Path)</b><br>
This round will check maneuverability of the aircraft. The contestant in this round will have to fly their aircrafts in following pattern:-<br>

<b>Points criteria:</b> For successful circuit completion, each team will get 90 points each. And the summation of first and second round will be added to the third round. This task is to be completed in minimum time as this will be noted down and will be taken into consideration for final evaluation.<br>
<b>The attempt will not be counted if the aircraft touches the ground during the attempt.</b><br>
<b>[Note: Each team will be provided with 2 attempts.]</b><br>
N.B: Each round will have a penalty. Suppose, if anyone touches a pole or an obstacle, 3 points will be deducted.<br>
<li> <b>Round 3 (Race to Eternity)</b>
This round will be testing the racing abilities of the aircraft and controlling ability of the pilot. The contestant in this round will have to fly their aircrafts in following pattern within min time:-<br>

<b>Points criteria:</b> For successful circuit completion, each team will get 100 points. And the summation of first and second round will be added to the third round respectively, and this task is to be completed in minimum time as this will be noted down and will be taken into consideration for final evaluation.<br>
<b>The attempt will not be counted if the aircraft touches the ground during the attempt.</b><br>
<b>[Note: Each team will be provided with 2 attempts in this task.]</b><br>
N.B: Each round will have a penalty. Suppose, if anyone touches a pole or an obstacle, 3 points will be deducted.<br>
<b>FINAL EVALUATION:</b><br>
&emsp;&emsp;&emsp;FINAL SCORE=TOTAL SCORE CALCULATED FROM ALL THREE ROUNDS <br>
<hr style="border-color: black; width: 400px; margin-left: 17%;">
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;TOTAL TIME CALCULATED FROM ALL THREE ROUNDS<br>
<p style="color:black;">
<b>ROUND-2: FIX-WING AIRCRAFT</b><br>

<b>PROBLEM STATEMENT (EVENT DETAILS)</b><br>
<b>Aircraft Specification:</b><br>
The aircraft is to be designed in such a way that it travels quickly in air, is easily maneuverable and can carry the maximum payload.<br>
Gearboxes in Micro Class are allowed. Multiple motors, multiple propellers, propeller shrouds, and ducted fans are allowed.<br>
Gyroscopic assist or other forms of stability augmentation are not allowed.<br>
Competing designs are limited to fixed wing aircraft only. No lighter-than-air or rotary wing aircraft such as helicopters will be allowed to compete.<br>
The payload must consist of a support assembly and payload plates. All payloads carried for score must be carried within the cargo bay(s). The support assembly must be constructed so as to retain the weights as a homogeneous mass.<br>
The payload should not provide any addition to the strength of the wings and fuselage or any other aerodynamic advantage. e.g. steel rods to strengthen the wings are not allowed.<br>
Usage of Ready-to-Fly (RTF) and Almost-Ready-to-Fly (ARF) kits is strictly prohibited.<br>
Any dimension of the aircraft should not exceed 1000 mm i.e. maximum allowed dimension is 100cm, whether it is the wingspan or the length of the aircraft. Any exception to this rule will render the participant disqualified.<br>
Metal propellers are not allowed.<br>
Anyone found not following the above rules will be disqualified.<br>
<b>Launching method:</b><br>
Aircraft may be launched by firmly grasping the fuselage and using a one-step (stride) launch. Only one person may be used to hand launch the aircraft.<br>
<b>Take off:</b><br>
After the signal from the respective AERIAL QUEST representative, the team will have only 2 min to prepare their respective UAV and take off. Two attempts will be given for the round.<br>
<b>Landing:</b><br>
Landing is defined as occurring from initial touchdown to the point at which the aircraft stops moving. A crash-landing invalidates the landing attempt and the round. A good landing for a successful flight is defined as touching down within the designated landing zone. Rolling-out or sliding beyond the landing zone limits is allowed, provided the aircraft initial touchdown occurs within the landing zone.<br>
<ul style="color: black;">
<li>The participant will be considered for scoring only if his plane follows the mentioned path. Otherwise, his score stands at zero.
<li>The competition will be held for only one. Two chances will be given for each round, only if the plane lands before the first cone or if it fails to launch. If the plane crosses the first pole, no second chance will be awarded for that round.
<li>All parts must remain attached to the aircraft during flight and landing.
<li>Broken propellers are allowed, and will not invalidate a flight attempt.
<li>The payload must be secured to the airframe to ensure that the payload will not shift or come loose in flight.
<li>The use of 2.4 GHz radio is required for all aircraft competing.
<li>A maximum time of 3 minutes will be given to complete the circuit.
<li>The weight of payload and empty weight of the plane will be checked by the coordinator after every round.

</ul>

</p>
</p>




</p>

<p style="color: black;">
<b>Judging Criteria:</b><br>
Score = (N÷2)+1/((T∕W  )t )+LP + PF, where<br>
N = No. of rounds.<br>
T/W = Net thrust: Weight Ratio.<br>
t = Time taken to complete.<br>
LP = Landing Point.<br>
PF= Payload Fraction<br>


</p>

<p style="color: black;">
<b>Prize money Worth :</b> &nbsp; Rs. 40,000</p>

<p style="color: black;"><b>Contact Details:</b><br>
A.Ankush Singh- 7504412558
 <br>  B. Kaustav Ghosh- 7681045132

                              </p>


                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 1-->

                      <!-- Modal -->
                      <div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                           <div class="modal-body" style="background-color: aqua; ">
                            <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Mechanical Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Yantriki-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">ARCHITECTURE OF DESTRUCTION</h3>
                                </center>
                                                       <hr style="border-color: black;">
                                <p style="color: black;">

                                 <b> Description of the Event:</b>
Being an architect can be both fun and tough. The Architecture of Destruction has been a very popular event of KIITFEST since its inception, and this year it is ready to have fun with some "destructively creative" minds. Divided into three rounds, this event checks your ability to find the weak spots of a structure, your ability to create trouble for your opponents with your steps, and your ability to make a rock-solid structure with limited resources. Stay calm, and win it all.
<br></p>

<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
    <li><b>BREAK UP(KNOCK OUT ROUND):</b><br>

               2 teams will be pitted against each other. There will be a pile of Jenga blocks and you have to pull the blocks. Make sure to make your opponent the victim of your move.
</li>
<li><b>SHOW ME YOUR MOVE BABY!:</b><br>

In the second round, Participants will have to make a structure of their own using the JENGA blocks. During the event, one member of the opponent will be allowed to come and pull out or add one block in their structure.
</li>
<li> <b>THE TWIN TOWERS OF 9/11:</b><br>

After 2 rounds of Jenga, the final round will involve a pack of cards. Since childhood, we are building castles of cards. Again we need to make 1.<br>
You'll be given a pack of cards. And you have to make a Castle out if it(make sure no card is wasted). Then, the opponent will be given 5 paper Planes and they'll throw it on your castle. It involves your precision and your opponents' aim. <br>Time factor involved as well as strength. <br>
</li>
<li>The members of teams cannot be from different institutes.</li>

</ol>

</p>

<p style="color: black;">
<b>Judging Criteria:</b>
<ol style="color:black;">
    <li> Participant has to be a college student (any branch or year).</li>
<li>Any kind of violence (physical/verbal) is not allowed. If found guilty, the participant will be immediately disqualified.</li>
<li> Within the event, there might be some instances when the participant will get a chance to destruct others participant's structure. That has to be done only under the eyes of coordinator and within the rules specified at that moment. </li>
<li>Coordinators have the right to disqualify you at any moment if they find you involved in any kind of cheating or abuse of rules.</li>

<li>The decision of the judges will be final and no alterations will be made in the results.</li>

</ol>

</p>

<p style="color: black;">
<b>Prize Money: </b><br>Rs.25000<br>
</p>

<p style="color: black;"><b>Contact Details:</b><br>
A. Sarthak Sinha (+91-7684854312)(Roll no:1502057) <br>  B. Aaditya Agrawal (+91-9051469709) (Roll no: 1626013)

                              </p>

                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 2 -->

                      <!-- Modal -->
                      <div class="modal fade" id="myModal3" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Mechanical Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Yantriki-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">DRONE-ACHARYA</h3>
                                </center>
                                                        <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>
A one-day technical workshop on UAV (Unmanned Aerial Vehicles), i.e., drones.<br></p>

<p style="color: black;">
<b>Event Details:</b><br>
Drone-Acharya is a one-day workshop technical workshop that’ll be conducted by KIIT Aeronautical Society. In the workshop, a basic idea about the drones, i.e., the working, types, and creation of UAV will be demonstrated. The workshop would be all technical and the participants are sure to learn and know the basics of drones. There will a short drone flying session in which trained pilots will fly the UAV. At the end of the workshop, there will a short quiz based on the workshop and there will be prizes for the winners in the quiz.<br>
On the whole, it will be a fun and techy workshop for the Aero enthusiasts.
</p>

<p style="color: black;"><b>Contact Details:</b><br>
A. Gourav Dutta (+91-9162867942) <br>  B. Harshit Singh (+91-7978187493)

                              </p>

                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 3-->

                      <!-- Modal -->
                      <div class="modal fade" id="myModal4" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Mechanical Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Yantriki-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">EDCAD</h3>
                                </center>
                                                        <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>
This event has two different parts:
<br>

Engineering Drawing is more than merely the drawing of pictures, it is also a language-a graphical language that communicates ideas and information from one mind to another.<br>
CAD software will be used to design and visualize a unique and non-existing concept for the world.

<br></p>

<p style="color: black;">
<b>Stages:</b>
<ol style="color:black;">
    <li> <b>Stage 1</b>
        <ul style="list-style-type: disc;">
            <li>Geometrical Dimensions and Tolerance (GD&T) quiz.</li>

        </ul>
    </li>
    <li><b>Stage 2</b>
        <ul style="list-style-type: disc;">
            <li>The idea behind the concept is to be submitted through mail prior to the competition.</li>
            <li>Concept to be represented in 3D through any CAD software within the stipulated time during the competition.</li>
        </ul>
    </li>

</ol>

</p>


<p style="color: black;">
<b>Rules and Regulations:</b>
<ul style="color:black;list-style-type: disc;">
    <li>All participants need to arrive at the venue 15 min before the starting time of the competition.</li>
    <li>No submissions of emails will be accepted after the given period of time.</li>
    <li>Any participant not ready with his or her model within the allotted time will be disqualified.</li>
    <li>Participants are free to use any CAD software and/or their own laptops.</li>
    <li>Interested participants may render out their models. However, it won’t be considered as a criterion for judging.</li>
    <li>Judges’ decision will be final and binding to all.</li>


</ul>

</p>

<p style="color: black;">
<b>Judging Criteria:</b>
<ul style="color:black;list-style-type: disc;">
    <li> Speed, Accuracy</li>
    <li>Quality of Model</li>
    <li> Dimension and texting</li>
    <li>Originality of idea</li>
    <li>Innovation and Creativity</li>
    <li>The probability of Real World Implementation</li>

</ul>

</p>

<p style="color: black;">
<b>Prize Money: </b><br>Rs.13000<br>
</p>

<p style="color: black;"><b>Contact Details:</b><br>
A. Hemant Tiwari (+91-8342910025)(For ED) <br>  B. Devashish Roy (+91-7873873015) (For CAD)

                              </p>
                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 4-->

                       <!-- Modal -->
                      <div class="modal fade" id="myModal5" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Mechanical Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Yantriki-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">HYDRO BOOSTER</h3>
                                </center>
                                                       <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>
Take your first big step to propel yourself into the world of aerodynamics!<br>
Design a water rocket that is completely powered by the thrust delivered by water expelled at high pressure along with its launchpad.<br>
Water Rocket is a mechanical event that involves the fabrication of a rocket whose fuel/thrust for flight is obtained by the use of water that is expelled at a large air pressure. It is an example of Newton's third law of motion. The prerequisites for such an event would be a basic knowledge of fabrication, materials and physical calculations involving thrust, air pressure, etc. The event tests a couple of aspects of the Rocket’s flight. These include range, time of flight and accuracy of the launching mechanism.<br>



The event consists of two rounds. First one is eliminatory, second is the final round.<br>
<ul style="list-style-type: disc;color: black;">
    <li><b>First round: </b>Range test
Here the maximum range is tested. The distance between the launch pad and the point of landing is measured and taken to be the points in that round. From this, top 5 will be shortlisted for the next round.</li>
    <li><b>Second round: </b>Accuracy test<br>
At a distance of 70m from the launch pad, a target is placed. Target contains concentric circles of radii 2m, 4m and 6m. If the rocket lands at the centre, team gets 100 points, second ring 75 points, and outer ring 50 points. If otherwise, no points are awarded. Three teams will qualify for the final round. In the case of any tie, the time of flight will be noted and the team with the least time gets into lead.
</li>
</ul>


<br></p>


<p style="color: black;">
<b>Rules and Regulations:</b><br>
Max 5 participants. These Participants can be from different colleges too.
<ul style="color:black;list-style-type: disc;">
    <li>The rocket and its components must be handmade. No readymade rocket is allowed.</li>
    <li>The rocket body should be made only with plastic bottles of aerated soft drinks of maximum capacity 2.5L and should be free of any fabrication failures or dents caused by heat exposure. More than one bottle can be used but the total volume must be less than 2.5L.</li>
    <li>Each team MUST have their own launch pads.</li>
    <li>The water rocket must use only compressed atmospheric air as its source of energy. Pressure compressors (foot pump) shall be provided at the venue. The pressure inside the container (rocket body) before launch should NOT exceed 60 psi for the first two rounds.</li>
    <li>Water to be filled in the rockets will be provided by the organizers. Calculations regarding amount of water to be used is left to the choice of the team.</li>
    <li>Two trials will be given to each team and best of two will be taken into consideration.</li>

    <li> The rocket must be launched from a stationary position using a fixed launch pad. Slingshots, trebuchets, catapults, cannons, and all other devices that may assist launching are strictly prohibited. IN other words, the internal pressure of the rocket must be the only source of energy for the rocket.</li>

    <li>Water rockets can have multiple stages. Parachute, gliding mechanisms are permitted.</li>

    <li>Use of electronic components and chemical explosives are banned.</li>

    <li>The point where the rocket hits the ground first will be taken as the point of landing and measurements will be taken considering this point.</li>
    <li>Teams are advised to get more than one water rocket, in case of any damage to one. But the water rockets must be identical.</li>
    <li>The participants are allowed to use variations of their water rockets in different rounds. However, only one design must be maintained throughout a single round.</li>
    <li>The team will be disqualified/given another chance to remodel if the model is found to be dangerous in anyway. Decision of the organizers is final and binding.</li>



</ul>

</p>

<p style="color: black;">
<b>Judging Criteria:</b><br>
The judgment is completely based on the marking scheme mentioned in the event format.<br>
The organizers decide to permit the launching of the rocket after inspection of both the rocket and launch pad considering factors such as safety and permissible mechanisms mentioned in the rules. In such cases, the organizers’ decision is final and binding.


</p>

<p style="color: black;">
<b>Prize Money: </b><br>Rs.20000<br>
</p>

<p style="color: black;"><b>Contact Details:</b><br>
A. Tulika Satpathy (+91-8763185687)(Roll no: 1502317) <br>  B. Prachi Sinha (+91-7504433354) (Roll no: 1502286)

                              </p>

                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 5 -->

                       <!-- Modal -->
                      <div class="modal fade" id="myModal6" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Mechanical Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Yantriki-Events</i></h5></center>
                               <center>
                                    <h3 style="color:black;">Mech ke Tech Stars</h3>
                                </center>
                                                     <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>
A game of patience and technical knowledge to show your true talent and your presence of mind along with evolution of multitasking ability.

<br></p>

<p style="color: black;">
<b>Rules and Regulations:</b>
<ul style="color:black;list-style-type: disc;">
    <li><b>Qualifying Round:</b><br>

               Participants will have to go through a Personal Interview round.
    </li>
    <li><b>Finals:-</b><br>

    <ol>
        <li><b>Round 1:</b><br>

              <b>Earn for smile</b>- In this event, participants will be distributed in small groups where they will be given small articles and they will be asked to sell them. The highest earner is the winner; profit will be donated.
         </li>

         <li><b>Round 2:</b><br>

              There will be groups of 2 members. Some free body diagrams will be projected and the groups will have to write the name of the forces which will act on the system or we will ask them about the direction of movement of the objects in the given diagrams. The group that can give maximum number of answers will win. In case of a tie, we will consider their timings.
         </li>

         <li><b>Round 3:</b><br>

              <b>Matki fod</b>- There will be groups of 3 members. 1 member will tie the hands of any one member of other group. Then that member will release himself and will give the direction to the 3rd member, who will be blindfolded and there will be some obstacles between him/her and matki. The 2nd member will guide him to the matki. If the 3rd member touches the obstacles, there will be some time penalty. The team who can crack the matki in least possible time will be declared the winners.

         </li>

         <li><b>Round 4:</b><br>

              Assemble it, we will give the finalists some dismantled parts of a machine & the one who can assemble it first will be the winner.
              <ul style="list-style-type: circle;">
                <li>All participants will arrive before the start of the competition to take their places.</li>
                <li> Any participant involved in indisciplinary activity will be disqualified.</li>
                <li>Judges decision will be final and binding to all.</li>

              </ul>
         </li>


    </ol>


</ul>

</p>



<p style="color: black;">
<b>Prize Money worth: </b><br>Rs.13000<br>
</p>

<p style="color: black;"><b>Contact Details:</b><br>
A. Kaushik Sharma (+91-8723852602)(Roll no:1502113) <br>  B. Obed Min (+91-8457867206) (Roll no: 1502336)

                              </p>
                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 6 -->
                       <!-- Modal -->
                      <div class="modal fade" id="myModal7" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Mechanical Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Yantriki-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">Sunder Master</h3>
                                </center>
                                                       <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>
Sunder Muster tests the participant’s mental and physical balance. This event is majorly divided into four segments consisting of a quiz, fastest fingers first, disassembly and assembly of vehicle components and then, followed by a slow bicycle race.

<br></p>

<p style="color: black;">
<b>Rules and Regulations:</b>

   The rules for the major segments are provided below:<br>
   <ol style="color: black;">
    <li><b> Quiz:</b>
        <ul style="color:black;list-style-type: disc;">
           <li> It consists of objective type questions based on the basics of automobiles.
 <li>The whole group can participate in this round. Any team scoring 60% or above of that of the top scoring team will be eligible for next round.
 <li>The question paper consists of 30 questions with a time limit of 30 minutes.
 <li>For each correct answer, 3 points will be awarded and for each incorrect answer, 1 point will be deduced.

</ul>

<li> <b>Fastest Fingers First: </b>
    <ul style="color:black;list-style-type: disc;">
       <li> A Rubik’s cube will be provided to teams who successfully cleared the quiz.
<li>The cube will be dismantled and provided to the team.
<li>Only one representative is required for this round from each team.
<li>There will be 2 attempts for each team and the best time will be considered.
<li>Any team scoring 40% or above of that of the best recorded time among all the teams will be eligible for next round.

    </ul>
    <li><b>Disassembly/Assembly: <b>
        <ul style="color:black;list-style-type: disc;">
           <li> The teams who qualify the previous round will be provided a Juggernaut Racing vehicle.
<li>This will be a time restrained task and the team will be awarded on the basis of their teamwork, compatibility and speed.
<li>In this round, the team has to disassemble all the four wheel of the buggy and then assemble the same.
<li>The time from the beginning till the end of the task will be recorded.

        </ul>
        <li><b>Slow Bicycle Race:</b>
             <ul style="color:black;list-style-type: disc;">
               <li>This is the final milestone of this event where teams will get bicycles and they have to showcase their mental and physical balance as well as patience.
<li>Time will be recorded for this as well.
<li>There will be penalty for each time a participant puts a leg or both the legs down, or crosses the track.

             </ul>

</ol>
</p>

<p style="color: black;">
<b> Judging Criteria:</b><br>
<table border="2" cellspacing="30" width="100%" style="color: black;">
    <tr>
        <th> Sub Events</th>
        <th> Criteria</th>
        <th>Points</th>
    </tr>
    <tr>
        <td>Quiz</td>
        <td>Basic Technicals</td>
        <td>(+3) for each correct attempts<br>(-1) for each incorrect attempts</td>
    </tr>
    <tr>
        <td>Fastest Finger First</td>
        <td>Speed</td>
        <td>10 points for the best recorded time team, 8 points for the second best and so on by deducting 2 points from the previous best team</td>
    </tr>
    <tr>
        <td>Disassembly/Assembly</td>
        <td>
            Team Work<br>Capability<br>Hands On
            </td>
        <td>For each segment, points will be awarded out of 5 for each team</td>
    </tr>
    <tr>
        <td>Slow Bicycle Race(50 Mts)</td>
        <td>Time<br>Penalties</td>
        <td>20 points for the best recorded time team, 18 points for the second best and so on by deducting 2 points from the previous best team. For each penalty, there will be a deduction of 2 points from the total score</td>
    </tr>

</table>

</p>


<p style="color: black;">
<b>Prize money Worth :</b> &nbsp; Rs. 20,000</p>



<p style="color: black;"><b>Contact Details:</b><br>
A. TRIBHUWAN KUMAR – 7978564349 (Roll no: 1502419) <br>  B. ASHISH KUMAR – 7738801494 (Roll no: 1502420)

                              </p>
                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 7-->

    <footer class="site-footer">
        <div class="footer-cover-title flex justify-content-center align-items-center">
            <h2>KIITFEST 5.0</h2>
        </div><!-- .site-footer -->

        <div class="footer-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <a href="#">KIITFEST 5.0</a>
                        </div><!-- entry-title -->

                        <div class="entry-mail">
                            <a href="#">techsupport@kiitfest.org</a>
                        </div><!-- .entry-mail -->

                        <div class="copyright-info">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <br><br> <a href="../webteam.php">KIITFest Web Team</a>

                        </div><!-- copyright-info -->

                        <div class="footer-social">
                            <ul class="flex justify-content-center align-items-center">
                                <li><a href="https://www.facebook.com/kiitfest/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/KIITFest" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/kiitfest/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div><!-- footer-social -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- footer-content-wrapper -->
    </footer><!-- site-footer -->

    <script type='text/javascript' src='../js/jquery.js'></script>
    <script type='text/javascript' src='../js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='../js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='../js/swiper.min.js'></script>
    <script type='text/javascript' src='../js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='../js/circle-progress.min.js'></script>
    <script type='text/javascript' src='../js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='../js/custom.js'></script>

    <style >

  .pricingTable11{text-align:center;background:#fff;margin:0 2px;box-shadow:0 0 10px #ababab;padding-bottom:40px;border-radius:10px;color:#cad0de;transform:scale(1);transition:all .5s ease 0s}
.pricingTable11:hover{transform:scale(1.05);z-index:1}
.pricingTable11 .pricingTable-header{padding:40px 0;background:#f5f6f9;border-radius:10px 10px 50% 50%;transition:all .5s ease 0s}
.pricingTable11:hover .pricingTable-header{background:#ff9624}
.pricingTable11 .pricingTable-header i{font-size:50px;color:#858c9a;margin-bottom:10px;transition:all .5s ease 0s}
.pricingTable11 .price-value{font-size:35px;color:#ff9624;transition:all .5s ease 0s}
.pricingTable11 .month{display:block;font-size:14px;color:#cad0de}
.pricingTable11:hover .month,.pricingTable11:hover .price-value,.pricingTable11:hover .pricingTable-header i{color:#fff}
.pricingTable11 .heading{font-size:24px;color:#ff9624;margin-bottom:20px;text-transform:uppercase}
.pricingTable11 .pricing-content ul{list-style:none;padding:0;margin-bottom:30px}
.pricingTable11 .pricing-content ul li{line-height:30px;color:#a7a8aa}
.pricingTable11 .pricingTable-signup a{display:inline-block;font-size:15px;color:#fff;padding:10px 35px;border-radius:20px;background:#ffa442;text-transform:uppercase;transition:all .3s ease 0s}
.pricingTable11 .pricingTable-signup a:hover{box-shadow:0 0 10px #ffa442}
.pricingTable11.blue .heading,.pricingTable11.blue .price-value{color:#4b64ff}
.pricingTable11.blue .pricingTable-signup a,.pricingTable11.blue:hover .pricingTable-header{background:#4b64ff}
.pricingTable11.blue .pricingTable-signup a:hover{box-shadow:0 0 10px #4b64ff}
.pricingTable11.red .heading,.pricingTable11.red .price-value{color:#ff4b4b}
.pricingTable11.red .pricingTable-signup a,.pricingTable11.red:hover .pricingTable-header{background:#ff4b4b}
.pricingTable.red .pricingTable-signup a:hover{box-shadow:0 0 10px #ff4b4b}
.pricingTable11.green .heading,.pricingTable11.green .price-value{color:#40c952}
.pricingTable11.green .pricingTable-signup a,.pricingTable11.green:hover .pricingTable-header{background:#40c952}
.pricingTable11.green .pricingTable-signup a:hover{box-shadow:0 0 10px #40c952}
.pricingTable11.blue:hover .price-value,.pricingTable11.green:hover .price-value,.pricingTable11.red:hover .price-value{color:#fff}
@media screen and (max-width:990px){.pricingTable11{margin:0 0 20px}
}

</style>
<script>
      function addToCart(id) {
        console.log(id);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if(this.readyState == 4 && this.status == 200) {
            console.log("Hello");
            //changecart value

          }
        }
        xhr.open("POST", "addToCart.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("itemId="+id);
        swal("Congratulations!", "Sucessfuly Add To Cart", "success");
      }
    </script>
</body>
</html>
<style >
  .card-body{
    background-color: lightgrey;
  }

</style>
