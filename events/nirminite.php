<?php
include "../sql.php";
$sql = new sql();
?>
<!DOCTYPE html>
<?php include "../trac.php"; ?>
<html lang="en" dir="ltr">
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
<body class="blog-page" style="overflow-x: hidden;">
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
                    <div class="entry-header" style="font-size: 215%;margin-left: 2%">
                      School of Civil Engineering


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
        <div class="pricingTable11 red">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Burj-Al-Paper</div>
            <div></div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Comming soon</li>
            <li><b>Schedule</b> Comming soon</li>
            <li>Participation<b></b> Comming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal1">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(601) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>







        <div class="col-md-3 col-sm-6">
        <div class="pricingTable11">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">CAD-NOVUS </div>
            <div> </div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Comming soon</li>
            <li><b>Schedule</b> Comming soon</li>
            <li><b>Participation</b> Comming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal2">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(602) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>






      <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 green">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Civi Kalakaar</div>
            <div> </div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Comming soon</li>
            <li><b>Schedule</b> Comming soon</li>
            <li><b>Participation</b> Comming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal3">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(603) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>

         <div class="col-md-3 col-sm-6 blue">
        <div class="pricingTable11">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Cryptic</div>
            <div> Crossword </div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Comming soon</li>
            <li><b>Schedule</b> Comming soon</li>
            <li><b>Participation</b> Comming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal4">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(604) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>



</div><!--row tag ends-->

        <div class="row" style="margin-left: 2%; margin-top: 10%;margin-right:2%;">
          <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 blue">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Final </div>
            <div>Destination</div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Comming soon</li>
            <li><b>Schedule</b> Comming soon</li>
            <li><b>Participation</b> Comming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal5">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(605) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>


       <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 red">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Frame-D-Bridge</div>
            <div></div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Comming soon</li>
            <li><b>Schedule</b> Comming soon</li>
            <li><b>Participation</b> Comming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal6">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(606) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>



      <div class="col-md-3 col-sm-6">
        <div class="pricingTable11">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Model-It</div>
            <div></div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Comming soon</li>
            <li><b>Schedule</b> Comming soon</li>
            <li><b>Participation</b> Comming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="" data-toggle="modal" data-target="#myModal7">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(607) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>
               <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 green">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Twister</div>
            <div>Coaster</div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> Comming soon</li>
            <li><b>Schedule</b> Comming soon</li>
            <li><b>Participation</b> Comming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="" data-toggle="modal" data-target="#myModal7">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(608) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>



      </div><!--row-->
    </div>


    <!--modal-->

      <!--modal 1 starts-->
<!-- Modal -->
                      <div class="modal fade" id="myModal1" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Civil Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Nirminite-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">Burj-al-paper</h3>
                                </center>
                                                       <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>
Burj-Al-Paper is an event in which participating teams need to build free standing frame by news-papers and tape only.<br></p>

<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
    <li>The event is open to all.
    <li>Teams must consist of a minimum of 3 and maximum of 5 participants.
    <li>No two teams must have any common member.
    <li>The time limit for the completion is 3 hrs.
    <li>The task of each team is to design a free standing frame made of newspaper & tape only (any other material like glue is not allowed).
    <li>Only the base & tape will be given. No part of the structure may extend outside the perimeter of the base.
    <li>Material like stick is not allow to stable the structure.
    <li>Teams must have to carry newspaper & scissors.

</ol>

</p>

<p style="color: black;">
<b>Judging Criteria: </b>The final decision will be made on the basis of aesthetic view, height & stability of the structure.<br>
</p>

<p style="color: black;">
<b>Prize Money: </b>Worth Rs.13000/-<br>
</p>

<p style="color: black;"><b>Faculty Coordinators:</b><br>
A. Dr. J.P. Padhi (+91-9692023641)  <br>  B. Prof. Sitam Suvam (91-87633781511) <br>  C. Prof. Neha Nasreen(91-8210359573)

</p>

<p style="color: black;"><b>Student Coordinators:</b><br>
A. Rishabh Shukla (+91-9984816911)  <br>  B. Trisha Bej (91-7873877211) <br>  C. Nilanjana Saha(91-8256928203)

</p>
                            </div>

                          </div>
                        </div>
                      </div>
      <!--modal 1 closes-->


       <!--modal 2 starts-->
<!-- Modal -->
                      <div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Civil Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Nirminite-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">CAD-NOVUS</h3>
                                </center>
                                 <hr style="border-color: black;">

                                <p style="color: black;">
<b>Guidelines:</b>
<ol style="color:black;">
    <li>Problem Statement – Design an innovative plan and sectional view for a G+1 residential building with all necessary amenities.
    <li>The plot area must be equal to 1750sqft (35’x50’)
    <li>Location – Bhubaneswar, Odisha, India
    <li>Client Requirements – Lawn, Car Parking, 2 No’s Bedroom, Kitchen, Washroom, Living Area for Ground Floor and Open Terrace, 3 No’s Bedroom, Kitchen, Washroom, Living Area for First Floor.


</ol>

</p>
<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
    <li>Single Participation (Can use a rough paper for sketching)
    <li>Time Allotted – 2 Hours
    <li>Software to be used – AutoCAD 2016 and above


</ol>

</p>

<p style="color: black;">
<b>Judging Criteria: </b><br>

<ol style="color:black;">
    <li>Most Innovative Plan, Energy Efficient Plan and New Design i.e. not copied from Google.
    <LI>Economical from Structural Point of View.



</ol>
</p>

<p style="color: black;">
<b>Prize Money: </b>Worth Rs.13000/-<br>
</p>

<p style="color: black;"><b>Faculty Coordinators:</b><br>
A. Prof. J Dutta (+91-9678652302)  <br>  B. Prof. Shiv S Kumar (91-9957965796)

</p>

<p style="color: black;"><b>Student Coordinators:</b><br>
A. Linita George (+91-9475529615)  <br>  B. Mohit Sharma (91-9460852198) <br>  C. Debarshee Das(91-9078802266)

</p>
                            </div>

                          </div>
                        </div>
                      </div>
      <!--modal 2 closes-->


       <!--modal 3 starts-->
<!-- Modal -->
                      <div class="modal fade" id="myModal3" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Civil Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Nirminite-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">CIVIKALAKAAR</h3>
                                </center>
                                                      <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>
As the world is progressing with its full velocity, so are the young engineering minds with their innovations and sketching skills. Introducing a world of creativity where you can transfer your virtual world into the real world as well as real world into more innovative world. Sketching is the best way to express your feelings and emotions, thus we bring forward you this event where you can display your innovative talent, creative skills and discover the “Real Artist” with in you. Students will be provided with certain materials and themes, and they need to showcase the thoughts through their sketch related to Civil Engineering Structures and monuments.
<br></p>

<p style="color: black;">
<b>Themes:</b>
<ol style="color:black;">
    <li>Smart Building Environment.
  <li>Monuments(including wondrous structures around the world, real life structures etc.)
  <li>Structures including Airports, Bridges and Dams.
  <li>Civil engineering innovations.
<li>Architectural interior Design Sketch.
<li>Smart Traffic Control Design.
<li>Sketch including concepts of Smart City
<li>Rapid Transit System- including metro , bullet trains and BRTS
<li>Smart waste Management System.



</ol>

</p>

<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
    <li>Open only for individual participation.
<li>Time is restricted to 3 hours.
<li>This is an on-spot event.
<li>Participants are required to bring their own colours/pencils/crayons etc.that best suits their sketch
<li>Participants are required to submit a small write up describing their sketch.
<li>Drawing sheets will be provided by the coordinators.



</ol>

</p>

<p style="color: black;">
<b>Judging Criteria: </b><br>

<ol style="color:black;">
    <li>Judgement will be based accoring to the theme. The participant producing more innovative sketch accoring to the theme will be declared as the winner .

    <LI>The result will be announced by the jury members.




</ol>
</p>

<p style="color: black;">
<b>Prize Money: </b>Worth Rs.13000/-<br>
</p>

<p style="color: black;"><b>Faculty Coordinators:</b><br>
A. Prof. SS Panda (+91-7008227874)  <br>  B. Prof. S Biswas (91-7060324154)

</p>

<p style="color: black;"><b>Student Coordinators:</b><br>
A. Shouvik Bhattacharya (+91-9830816227)  <br>  B. Pratik Pegu (91-7606926969)

</p>
                            </div>

                          </div>
                        </div>
                      </div>
            <!--modal 3 closes-->

       <!--modal 4starts-->
<!-- Modal -->
                      <div class="modal fade" id="myModal4" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Civil Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Nirminite-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">Cryptic Crossword</h3>
                                </center>
                                                  <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>
A cryptic crossword is a fun event in which a team is given a jumbled crossword puzzle which they have to solve.  After solving that puzzle, team members have to convey the hidden message to the other teammate. This event aims for providing some refreshment to all participants. It involves both the physical exertion and the mental activity of developing strategies to solve and clear the various stages of the puzzle. It is an event where everyone competes equally, and age is not dominated by youth and learn about teamwork, gain self-confidence and develop leadership abilities while having fun and getting welcome stress-relief.

<br></p>

<p style="color: black;">
<b>Details :</b>
<ol style="color:black;">
 <li> Initially 1 member of the team will be given puzzles to solve.
<li> The puzzle will make up a name of any famous monument or structures.
<li> The 1st member will have to make 2nd member understand the name of the structure using hand or body gestures.
<li> The 2nd member will have to guess the correct name and write it on 3rd member’s shoulder.
<li> The 3rd member will have to guess and write the name on the board.
<li> Teams who completed this task in less time will be the winners.





</ol>

</p>

<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
  <li> Teams must consist of three members.
 <li> No verbal communications are allowed.
 <li> The 1st member can use the alphabetical hand gesture to make 2nd member guess the name maximum 6 times.
  <li> Coordinators' decision will be final and binding in case of any issues.
 <li> All the rules apart from these will be clearly communicated on-spot.



</ol>

</p>

<p style="color: black;">
<b>Judging Criteria: </b><br>

<ol style="color:black;">
    <li>Top two teams solving the puzzle with minimum time will be awarded.



</ol>
</p>

<p style="color: black;">
<b>Prize Money: </b>Worth Rs.8000/-<br>
</p>

<p style="color: black;"><b>Faculty Coordinators:</b><br>
A. Prof. D.K.Bera : 9438012765 <br>  B. Prof. P.Nanda  9040139220

</p>

<p style="color: black;"><b>Student Coordinators:</b><br>
A. Vaibhav Rathore (+91 7064443343)  <br>  B. Swagato Saha (+91 7873688258)

</p>
                            </div>

                          </div>
                        </div>
                      </div>
            <!--modal 4 closes-->


       <!--modal 5 starts-->
<!-- Modal -->
                      <div class="modal fade" id="myModal5" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-body" style="background-color: aqua; ">
                            <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Civil Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Nirminite-Events</i></h5></center>
                            <div class="modal-body">
                                <center>
                                    <h3 style="color:black;">Final Destination</h3>
                                </center>
                                                     <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>
Final Destination is a game of hunting the treasures by given steps. The team members solve the riddles & follow the clues all the way to treasure. <br>
<b>PRELIMINARY SELECTION ROUND-</b><br>
A limited number of teams will be selected via jenga challenge based on the height of the structures they create using Jenga blocks & the rules apart from this will be described on-spot.<br>
<b>MAIN ROUND : SEARCH THE TREASURE</b><br>
The participants would be asked to search the treasure with the help of a clue that shall be provided at each step.


<br></p>



<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
 <li> All teams must have at least 3 members and not more than 5 members.
 <li>Teams will have to collect treasure from that final point and reach to initial point before time limit runs out.
 <li>Teams must stay together during the hunting and are encouraged to work together to solve the clues.
 <li>The treasure is hidden in the limited radius from the starting point.
 <li>Participated teams will have to give their team names on the day of events.

</ol>

</p>

<p style="color: black;">
<b>Judging Criteria: </b><br>

<ol style="color:black;">
    <li>Coordinators' decision will be final and binding in case of any issues
<li>All the rules apart from these will be clearly communicated in the on-spot event.
<li>Decorum should be positively maintained.
<li>No taking or hiding clues of the other team as Involving in malpractices of any form may result in disqualification of the team.
<li>Prizes with authorized certificate will be given to the winners




</ol>
</p>

<p style="color: black;">
<b>Prize Money: </b>Worth Rs.20000/-<br>
</p>

<p style="color: black;"><b>Faculty Coordinators:</b><br>
A. Prof. P. Chakarborty 7008777798     <br>  B. Prof. M. Ejjada – 8093285605    <br>  C. Prof.P.S.Adhikari 9040365059

</p>

<p style="color: black;"><b>Student Coordinators:</b><br>
A. Aditya Patel- 8435822225  <br>  B. Sudeshna Chakraborty- 943485981  <br>  C. Bhaskar Bezboruah 9508461348

</p>


                            </div>

                          </div>
                        </div>
                      </div>
            <!--modal 5 closes-->

       <!--modal 6 starts-->

             <!-- Modal -->
                      <div class="modal fade" id="myModal6" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Civil Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Nirminite-Events</i></h5></center>
                                     <center>
                                    <h3 style="color:black;">Frame-D-Bridge</h3>
                                </center>
                                                    <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>

Bridges are an integral part of Civil Engineering. The responsibility of a Civil Engineer is to not only design strong structure but also keep it economical and aesthetically pleasing. This event tests the mettle of participants by challenging them to design a truss bridge by using popsicle sticks, catch being that the balance between weight of materials used and load carried by the bridge is maintained i.e. the efficiency is maximised.


<br></p>
<p style="color: black;">
 <b> Event Format: </b><br>
There will be only one round in which bridges will be tested. Participants have to come with their bridges. <br>
<b>Material to be Used: </b><br>
<ol style="color: black;">
 <li>Popsicle sticks with dimensions (11 cm X 1.2cm 0.2cm).
 <li>Only Fevicol can be used as adhesive, use of other adhesives will lead to disqualification.
 <li>Use of thread is not allowed.
</ol>

<b style="color: black;">Dimensions of Bridge: </b><br>
<ol style="color: black;">
<li> Length: 75 cm.
<li> Width: 10-13 cm.
<li> Height: 30 cm.
<li> Clearance: A minimum clearance of 8 cm high and 5 cm wide should be provided for the passage of a small toy car.
<li> Weight: Not More than 350gm.
</ol>

<b style="color: black;">Dimensions of Bridge: </b><br>
<ol style="color: black;">
<li> Length: 75 cm.
 <li>Width: 10-13 cm.
<li> Height: 30 cm.
<li> Clearance: A minimum clearance of 8 cm high and 5 cm wide should be provided for the passage of a small toy car.
 <li>Weight: Not More than 350 gm.
</ol>


</p>


<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
 <li>Truss action should be ensured.
<li> Team size could be of 3-5 members.
<li> All sticks must be visible to inspection and may not be painted or stained in anyway.
<li> All members of the team should be enrolled as students in an educational institute.
<li> No person can be a part  of more than one team.
<li> No other reinforcement material (like steel wires, wire mesh) will be allowed.
<li> Bridges not meeting the requirements listed in these rules will be subject to Disqualification.
<li> Each bridge must be able to hold the weight of the testing equipment which is about 4 kg.
<li> Loading will be done at the Centre of Bridge.
<li> Arch Bridge is not allowed.
<li> Popsicle sticks should not overlap more than 1/4th of its length.
<li> Decision of Judges will be final and binding.


</ol>

</p>

<p style="color: black;">
<b>Judging Criteria: </b><br>


   Each bridge will be scored in accordance to an Efficiency Rating (ER) which will be Calculated by the following Equation: <br>
<b>ER = (Load carried by bridge at failure) / (Weight of Bridge) </b><br>




</p>

<p style="color: black;">
<b>Prize Money: </b>Worth Rs.20000/-<br>
</p>

<p style="color: black;"><b>Faculty Coordinators:</b><br>
A. Prof. Asheena Sunny: 8093534664    <br>  B. Prof. P. Roy: 9051648936    <br>  C. Prof. Seevani Bali: 8895151065

</p>

<p style="color: black;"><b>Student Coordinators:</b><br>
A. Nayan Gupta: 9012317476  <br>  B. Rajdeep Dasgupta: 9078802415   <br>  C.Aditi Chakraborty: 9434048742
</p>
                            </div>

                          </div>
                        </div>
                      </div>

        <!--modal 6 closes-->


       <!--modal 7 starts-->




<div class="modal fade" id="myModal7" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Civil Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Nirminite-Events</i></h5></center>
                               <center>
                                    <h3 style="color:black;">Model-It</h3>
                                </center>
                                                     <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>

Models encapsulate various engineering wonders. A model is a miniature representation of any structure, both natural and man-made, that depicts its form, style, and pattern. Models revive our imagination.
So, elicit the artist hidden inside you<br>

<b>Participants are expected to build a model of a ‘’Self Sustaining Colony’’ which will produce its own electricity, reuse the waste generated from the colony, etc. The model must address the social and development concerns of a city.</b><br>

With a population of 1.2 billion and limited resources depleting exponentially, it is the need of the hour to “become smart and create smart” to transform a developing country like India into a developed country. Now, the time has come for the civil engineers to create self-sustaining and economically feasible structures.
“If not now, then never”


<br></p>


<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
<li>The event is open to all.
<li> Teams must consist of a minimum of 2 and maximum of 5 members.
<li> The model should be handmade with household and stationery items.
<li> Readymade or factory model will not be accepted.
<li> Teams have to present the detailed idea behind all features of the model within 10 minutes and there will be a query session of 5 minutes at the end of the presentation.
<li> The decision of judges shall be final and binding.


</ol>

</p>

<p style="color: black;">
<b>Judging Criteria: </b><br>


Contribution in making a city self-sustaining : <b>20%</b> <br>
Innovation : <b>20%</b> <br>
Economic feasibility : <b>15%</b> <br>
Technical accuracy and Detailing :<b> 25%</b><br>
Aesthetics : <b>20%</b><br>


<br>

</p>

<p style="color: black;">
<b>Prize Money: </b>Worth Rs.20000/-<br>
</p>

<p style="color: black;"><b>Faculty Coordinators:</b><br>
A.Prof. P.C.Saha - 9903899236    <br>  B. Prof. Malaya Mohanty - 9437253054   <br>
</p>

<p style="color: black;"><b>Student Coordinators:</b><br>
A. Sourav Paul - 8972697471 <br>  B. Sani Panda - 9776665193  <br>  C. Subhajit Das – 7735662500

</p>
                            </div>

                          </div>
                        </div>
                      </div>
                       <!--modal 7 closes-->

      <!--modal 8 starts-->

      <!-- Modal -->
                      <div class="modal fade" id="myModal8" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Civil Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Nirminite-Events</i></h5></center>
                               <center>
                                    <h3 style="color:black;">Twister_Coaster</h3>
                                </center>
                                                  <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>

Twister Coaster is an astonishing structure which provides exciting rides without using any external power. The event aims to provide an opportunity to the participants for acquiring such ecstatic feeling through analysing the creativity of building a twister coaster within provided specifications.<br>
<b>PROBLEM STATEMENT:</b><br>
In this event participants will be required to make twister coaster.A marble ball will be dropped from the starting point of the twister coaster to see distance covered by the ball and the time taken to reach the end point.The twister coaster will be made of chart paper.For pasting the paper- fevicol, sello tape and stapler pins may be used.


<br></p>


<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
 <li>It is an on Spot event.
<li>A single team will comprise of maximum 5 members.
<li>Magnets,electricity,springs and other forms of energy are not allowed to use.
<li>The START position must be marked and the marble must END in a designated area.



</ol>

</p>

<p style="color: black;">
<b>Judging Criteria: </b><br>

<ol style="color: black;">
  <li>Aesthetic view and Height of the structure.
<li>Complexity of the structure.
<li>Time taken by the marble ball to reach END point.
<li>Efficiency.

</ol>


</p>

<p style="color: black;">
<b>Prize Money: </b>Worth Rs.8000/-<br>
</p>

<p style="color: black;"><b>Faculty Coordinators:</b><br>
A. Prof. C.K. Kundu - 7077538565   <br>  B. Prof. S. Jaiswal - 8572999442    <br>  C. Prof. Kalpana Sahoo - 8093391827 8895151065

</p>

<p style="color: black;"><b>Student Coordinators:</b><br>
A. Sharmili Paul - 9774812960  <br>  B. Shreyan S. Sharma - 8984851097   <br>  C. Parth Shukla - 7077885390
                            </div>

                          </div>
                        </div>
                      </div>
      <!--modal 8 closes-->



    <!--modal closes-->


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
