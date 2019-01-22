<?php
include "../sql.php";
$sql = new sql();
?>
<!DOCTYPE html>
<?php include "../trac.php"; ?>
<html lang="en" dir="ltr">


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66101749-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-66101749-2');
</script>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="viewport" content="width-device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

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
                        School of Electronics Engineering

                    </div><!-- entry-header -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    <div class="main-content">
        <div class="container">
            <div class="last-news">
                <!-- <div class="entry-header">
                    <div class="entry-title">
                        <p>JUST THE BEST</p>
                        <h2>Our last news</h2>
                    </div>
                </div> -->

                <div class="row" style="margin-left:2%;margin-right:2%;" >

                  <div class="col-md-3 col-sm-6">
        <div class="pricingTable11">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Scavenger's</div>
            <div>Quest</div>
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
                <a onClick=addToCart(701) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>



                      <!-- Modal -->
                      <div class="modal fade" id="myModal7" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content" >

                            <div class="modal-body" style="background-color: aqua;" >
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Electronics Engineering<br>
                           <i style="font-family: Allura; font-weight: bold;"> Vidnan-Events</i></h5></center>
                                  <center>
                                    <h3 style="color:black;">Scavenger's Quest</h3>
                                </center>
                                                       <hr style="border-color: black;">
                               <p style="color: black;">

                                 <b> Description of the Event:</b>
There will be a total of 3 rounds:<br>
<b>Round 1: </b>Elimination Round<br>
Participants have to solve the brainteaser in a period of 20 minutes. Elimination round. Time Limit: 20 minutes<br>
<b>Round 2:</b> Hunt Round<br>
Participants will have to run in and around the campus and find the electronic components hidden.These components are to be  used in the third round to design their innovative T-shirts.<br>
<b>Round 3:</b> Final Round<br>
The participants need to design a wearable tech T shirt which implements the modernity of technology and the creativity of the art. A set of components will be given which the participants have to use while designing the T shirt.<br>
</p>



<p style="color: black;">
<b>Rules and Regulations: </b><br>

 <b>General:</b><br>
<ol style="color:black;">


<li>A team must have 2-3 members </li>
<li> Students are not allowed to use Mobile, Laptop, Calculator or any kind of electronic media. </li>
<li> All members of the team must be present at the clue checkpoint to collect the clue from the volunteer.</li>
 <li>Teams are allowed to use any source of information such as books, Internet etc. in round 2 and 3.</li>
<li> College ID card is Mandatory.</li>
</ol><br>
<b style="color: black;">In ROUND 3:</b><br>
<ol style="color:black;">
 <li>A plain white T Shirt will be provided to all the participants.</li>
 <li> A set of electronic components( THE CLUES FOUND IN ROUND 2) will have to be used while designing the T shirt. </li>
<li>The participants are allowed to use any kind of tech or non-tech accessories.</li>
 <li>The event is open for 24 hours only.</li>
 <li>After the T shirts are distributed they need to be submitted at the given time of submission
only.</li>
 <li> During the time of submission, the participants need to submit the details of all the accessories used. </li>
<li>The decision of coordinators and judges is final.</li>
 <li>Timings of distribution and will be decided on spot.</li>
 <li>Use of colors is allowed.</li>
 <li> Judges and Coordinators Decisions are final.</li>
<li> All rights are reserved with the coordinators. They may or may not disclose any information depending upon the information asked. They can change any rule at any time according to the situation.</li>
<li>Any misconduct or violation of rules will lead to immediate elimination.</li>

</ol>


</p>

<p style="color: black;">
<b>Judging Criteria:</b><br>
10 points will be awarded for crossing ‘START MARK’ and reaching Checkpoint A.<br>
<ol style="color:black;">

    <li>The T-shirt should support the basic idea of a wearable tech and promote electronics as whole. </li>
    <li>Any leakage of current, open wires or heat being generated leads to immediate elimination.</li>
    <li>The use of smart technology is preferred.</li>

    <li>The team with highest average score from 3 rounds will be declared winner.</li>


</ol>


</p>

<p style="color: black;"><b>Prize Money:</b><br>
Worth Rs. 20,000/-    </p>

<p style="color: black;"><b>Contact Details:</b><br>
A. Samriddhi (+91-7855043720) <br>  B. Shinjini(+91-9938245522)

                              </p>


                            </div>

                          </div>
                        </div>
                      </div>
                  </div>


        <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 red">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Innovation</div>
            <div>Challenge</div>
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
                <a onClick=addToCart(702) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
    </div>
       <!-- Modal -->
       <div class="modal fade" id="myModal1" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                      <div class="modal-body" style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Electronics Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Vidnan-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">Innovation Challenge</h3>

                                    <h5 style="color: black;">Next generation city 16th-18th Dec</h5></center>
                                                        <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>
<br>
 Vidnan (School of Electronics Engineering) under the banner of KIIT FEST is committed towards a competitive and transparent ecosystem for the innovative minds and thinkers across the nation. Innovation challenge participants are encouraged to put on their young minds and provide suitable solutions for the existing problem across six themes. All the teams will be evaluated on two phases depending upon their proposed solution.

<br>
<ul style="list-style-type: disc; color:black;">
    <li>Water, Waste and Energy Management </li>
<li>Health Care and Education </li>
<li>Urban Mobility, Public Transport and Citizen Safety </li>
<li>Agriculture, Climate Change and Disaster Management</li>
 <li>Security (Banking, Insurance and different data transfer platforms) </li>
 <li>Tourism</li>

</ul>
</p>

<p style="color: black;">
<b>Ideation:</b><br>

<b> Phase 1:</b><br>
 The ideal participating team would be a solution provider. The team would be expected to provide and develop an idea which would solve the real-life problem related to the six themes. <br>
<b>Phase 2:</b><br>
 Coders, developers and designers will have a prodigious platform to use their out-of-the-box idea on these six themes using Embedded Systems, Artificial Intelligence, Machine Learning, IoT, AR/VR, Blockchain, Data Analytics or whatever they want to use. The team would be expected to come up with an innovative idea of the problem. After that, they have to design the solution in a 20-hr hackathon which will be held during the 3 days of KIIT FEST.


</p>

<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
    <li>Participants should take full responsibility of their own work and ensure to work as a team. The components should be of the participants to make their model. No components will be provided y the college.</li>
    <li>No participant shall engage in any malicious/illegal activities which do not adhere to general code of conduct for developers. Participants will be immediately disqualified if they found indulging in malpractice.
    <br></li>
    <li>Participant shall ensure adequate testing, debugging and review of software and related documents before submission</li>
    <li>Participants shall not knowingly use software that is obtained or retained either illegally or unethically includes using TeamViewer or similar software. Participants will be disqualified if they are found using it.</li>
    <li>Incase of any emergency or medical assistance, please reach out to the Organizers.</li>


</ol>

</p>

<p style="color: black;">
<b>Team Guidelines: </b>
A good team would have the right mix of business and technology thinkers. Since the innovation challenge is a team event, the team is expected to develop the working prototype of its proposed solution. We intend to provide necessary support to the team. A good team would be self-sufficient to create the prototype.
● the team size is upto 1-5.
● Member of the team should not necessarily to be of same college.


</p>


<p style="color: black;">
<b>Judging Criteria:</b><br>
The teams would be judged on the basis of the following parameters:

<ol style="color:black;">
    <li>  Out of the box thinking (Already existing vs new solution).</li>
<li>Completeness of the solution (Idea, Development, Prototype, Deployment)
</li>
<li> The practicality of the proposed solution
 </li>
<li> Cost effectiveness of the solution.
</li>

<li>Ease of scalability
</li>

<li>Sustainability of the solution</li>

<li>Quickness in completion of development of the solution (during the hackathon) would be appreciated- complexity of the prototype of the solution should be minimal
</li>
<li>How your product stands out among the existing products (How your product is better than its existing counterpart)</li>
<li>Representation of your product via presentation is mandatory and detail
  work of the model would be asked at that time.</li>
</ol>

</p>

<p>Submit your idea at:- <a href="https://goo.gl/tRPHGL"></a></p>         
<p style="color: black;"><b>Prize Money:</b><br>
Worth Rs. 1,20,000/-    </p>


<p style="color: black;"><b>Contact Details:</b><br>
A. Shreya (+91-8839912039) <br>  B. Akshat (+91-897021147)

                              </p>
                            </div>

                          </div>
                        </div>
                      </div>



             <div class="col-md-3 col-sm-6">
        <div class="pricingTable11">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">The Salvage</div>
            <div>Yard</div>
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
          <a href="#" data-toggle="modal" data-target="#myModal8">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(703) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>

                      <!-- Modal -->
                      <div class="modal fade" id="myModal8" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua;" >
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Electronics Engineering<br>
                           <i style="font-family: Allura; font-weight: bold;"> Vidnan-Events</i></h5></center>
 <center>
                                    <h3 style="color:black;">The Salvage Yard</h3>
                                </center>
                                                       <hr style="border-color: black;">
<p style="color: black;">
<b> Description of the Event:</b>
  
The School of Electronics Tech Fest, Vidnan, brings to you Salvage Yard, the newest addition
to their list of amazing and interactive events. If you have what it takes to bring out the best from
what you get, this is the perfect event for you. This event literally combines fun with learning.
After clearing a fun and interactive quiz round, and solving riddles in the most innovative and
knowledge-friendly way, you get to make the best of the components you acquire for yourself.
  
<ol style="color: black;">
    <li>Round 1: 1st Elimination Round<br>
        <ul style="list-style-type: disc;">
             <li>There will be two Quiz round. The first is a buzzer round to test your general
knowledge. This round will be held multiple times from which each time the top three
will progress to the next quiz round.</li>
        </ul>
    </li>
    <li>
        Round 2: 2nd Elimination Round<br>
        <ul style="list-style-type: disc;">
            <li>The second quiz round is to test your knowledge on basic principles of electronic
circuits. One member from each of the top three teams from the previous round will pick
a chit containing a problem statement. The member will have to enact and draw the
answer to their remaining team member.    
        </ul>
  </li>
  <li>
    Round 3: Final Round
    <ul style="list-style-type: disc;">
      <li>Each team will be made to stand in front of carton boxes underneath which will contain
a mystery box. Each team will be then given a ball and will have to hit a carton box to
get the desired mystery box.</li>
      <li>The mystery box will contain 7 components and each team will have to choose at least 5
components from the mystery box and have to design an innovative circuit within a
limited time frame of 60 minutes.</li>
 </ol>
</p>



<p style="color: black;">
<b>Rules and Regulations: </b><br>

 <ol style="color:black;">


<li> A team can have a minimum of 2 members and a maximum of 4 members.</li>
 <li>The team which finishes the task in less time will be given priority over others.</li>
<li>Finishing the task doesn’t guarantee selection as it is also a time-based challenge.</li>
 <li>Problem Statement and mystery box once provided will not be changed. </li>
    <li>In Round 3:
    <br>Participants are allowed to use the Internet.
    <br>Participants can request for additional components and wires to the coordinators but it entirely depends on the coordinators whether they allow it.
    <br>All the components will be provided to them during this round.</li>
 <li> Students are not allowed to use Mobile, Laptop, Calculator or any kind of electronic media in first Round.</li>
 <li> College Id Card is Mandatory.</li>
 <li>The decision of the judges and students are final.</li>
 <li> All rights are reserved with the coordinators. They may or may not disclose any information depending upon the information asked. They can change any rule at any time according to the situation. </li>
<li>Any misconduct or violation of rules will lead to immediate elimination.</li>


</ol>
</p>



<p style="color: black;">
<b>Judging Criteria:</b><br>
  Round 1:<br>
<ol style="color:black;">

<li>The teams will be given three chances to pick a chit and enact the answer. Weightage
of points decreases with each successive chance. </li>
</ol>
                            
<p style="color:black;">Round 2:</p>
<ol style="color:black;">

 <li>
The team will be judged on basis of the circuit made in Tinkercad and points will be
allotted accordingly.</li>

</ol>
                            
<p style="color:black;">Round 3:</p> 
<ol style="color:black;">                            

  <li>The team which scored the maximum points in the previous round will be allowed to hit
the carton boxes first. The mystery box once won cannot be exchanged will be judged
on the basis of their understanding of the circuit, their efficiency in identifying the fault
and rectification of the fault to get the correct</li>
  <li>The team will be judged on the basis of their innovation, an efficiency of the
circuit, explanation, how much more components of the mystery box the team
uses.</li>
  <li>All teams will be evaluated after the time frame of 60 minutes and winners will
be declared.</li>
  <li>Time Limit: 60 minutes</li>

</p>

<p style="color: black;"><b>Prize Money:</b><br>
Worth Rs. 20,000/-    </p>

<p style="color: black;"><b>Contact Details:</b><br>
A. Anirban (+91-9973769996) <br>  B. Shubham(+91-9938283553)

                              </p>

                            </div>

                          </div>
                        </div>
                      </div>

                 <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 green">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Seguidor</div>
              <div style="font-size: 20px">An Autonomous Event</div>
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
                <a onClick=addToCart(704) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>

       <div class="container">

                      <!-- Modal -->
                      <div class="modal fade" id="myModal4" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Electronics Engineering<br>
                           <i style="font-family: Allura; font-weight: bold;"> Vidnan-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">SEGUIDOR</h3>
                                </center>
                                                      <hr style="border-color: black;">
                               <p style="color: black;">

                                 <b> Description of the Event:</b>
Design and construct an autonomous robot which is capable of traversing the arena by following a line in a particular manner and avoid the obstacle that it might encounter. The participants are required to build a line following bot which is capable of detecting an obstacle in front of it and sense the presence of colour on the floor in front of it.During its operation, the bot will encounter the various obstacle which it needs to understand and take action accordingly. Performing every task smoothly will result in full point and violating it will result in penalties. 

<br>

</p>


<p style="color: black;">

<b>TASK:</b><br>
Traverse the area from the START point to the END point by following a white line laid throughout the white area. But the task is not that simple. The bot should be capable of following a particular pattern as mentioned further in this problem statement. The bot should work on the principle of advance line follower to give utmost efficiency on the arena. During its operation, the bot will encounter the various obstacle which it needs to understand and take action accordingly. Performing every task smoothly will result in full point and violating it will result in penalties.

<br>
</p>
<p style="color: black;">
<b>Arena Design and Specification:</b><br>

<ol style="color:black;">
    <li>Arena will be absolutely flat and levelled out so additional power is not required to run the bot. Although participants can vary the speed of their robot to give maximum efficiency in following the line.</li>
    <li>The Surface of the arena will be painted white and the bot is required to follow a white line of thickness 2 centimetres.</li>


</ol>

</p>

<p style="color: black;">
<b>Key Points:</b>
<br>
   1. There are some key points of the arena that the participants need to keep in mind while programming their bot to gain maximum points and avoid deviation from the required path.<br>
At some point in the area, the white line will not be continuous and there will be a gap of not more than 5 centimetres. There will also be a sharp turn after some gaps. So the participants should program their bot in such a way that it does not malfunction at these given points. According to the given figure, the bot should follow the line as the blue line suggest.<br>
  
2. As the image suggests, at some point of the arena the line shift suddenly to either the right or left by not more than 1 centimetre. The participant needs to program their bot in such a manner that it could understand the shift and traverse the path according to the blue line shown in the image.<br>
  
3. At some points of the arena, the lines will have sharp turns but the edges of the turn will be removed as you can see in the image beside. So the participant needs to program their bot in such a way that it does not malfunction in this part.<br>
  
4. At some points of the arena, the path could have a turn with an angle of at most 45 degrees. So the participants will have to program their bot accordingly. If the bot leaves the path, it will have to restart from the last checkpoint and penalties will be imposed for every such action.<br>
  
5. Some part of the arena will constitute curved dotted lines with gaps of maximum 1 centimetre. The line will not bend with a very sharp turn but will almost look like a straight line. So the contestant need not worry so much about this part as they will easily be able to traverse with a minor change in the program.<br>



</p>


<p style="color: black;">
<b>Colour Sensing:</b><br>

 1.There will be points in the arena where the line will divert into two paths at 90 degrees. At this point, there will a rectangular patch of red colour laid on the floor 3 cm ahead of the turning point as shown in the diagram. The participant needs to construct their bot and program it in such a manner that it should be able to detect this colour in front of the line and take 90 degrees turn to the left side. Taking a right turn in this point and following the path will result in negative points. If the left path is traversed, the team will gain points in their favour.<br>
  
2.There will be points in the arena where the line will divert into two paths at 90 degrees. At this point, there will a rectangular patch of yellow colour laid on the floor 3 cm ahead of the turning point as shown in the diagram. The participant needs to construct their bot and program it in such a manner that it should be able to detect this colour in front of the line and take 90 degrees right turn. Taking a left turn in this point and following the path will result in negative points. If the right path is traversed, the team will gain points in their favour.<br>
  
3.When patches of blue colour will be present on the floor in front of the line the bot should take a 180 degrees turn clockwise or anticlockwise and follow the path backwards and take another left turn to follow the right path. Skipping the blue patch and following the wrong path will result in negative marking.<br>
  
4.According to the given figure, at some point in the arena, there will be no line to follow. Instead, there will be a wall in front. The participant will have to construct their bot in such a way that it should detect the wall in front of it and take a 90 degree turn to the right and continue to detect a line again. If the bot is not able to detect the wall in front of it or it is deviating from its required path, then it will have to take a restart and start from the last checkpoint with penalties.<br>
  <b>NOTE</b><br>  
 1.The Arena will contain various checkpoints, completing which will result in addition points. After any checkpoint if the bot deviates from its path, then the bot will start its journey from the last checkpoint.<br>
  
2.The contestant will need to program their bot so that it is capable turning clockwise or counter-clockwise at exactly at the angle required at each key points of the arena. Failing which will result in negative marking.<br>

<p style="color: black;">
<b>Robot Specifications:</b><br>
<ol style="color:black;">
    <li>Robot must not contain any readymade kits or Lego kits or any such assembly.</li>
    <li>However readymade microcontroller boards, sensors, chassis, gears and shafts may be used.</li>
    <li>The voltage difference between any two points on bot must not exceed 24 volts.</li>
    <li>The robot dimension must be limited by 20cm x 20cm x 20cm.</li>
    <li>The robot must be completely autonomous. - It should not receive any input from outside the arena.</li>
    <li>The robot should not contain more than 6 IR sensors for fair competition.</li>
    <li>Motor RPM should not exceed 200.</li>



</ol>

</p>

<p style="color: black;">
<b>Technical Details:</b>

<ol style="color:black;">

    <li>Team members will not be allowed to touch any part of arena, only organizers are allowed to handle the arena in any situation, the team will be disqualified whose member is found touching the arena.</li>
    <li>Teams will not be allowed to change bot’s mechanism and parts once the game starts.</li>
    <li>Participants are not allowed to keep anything inside arena other than the bot.</li>
    <li>During the run, the bot should not damage the arena in anyway. It is not allowed to leave anything behind or make any marks while traversing. All machines found damaging the arena will be immediately disqualified. The final decision is at the discretion of the organizer.</li>
    <li>The time measured by organizers will be final and will be used for scoring.</li>
    <li>Time measured by participants is not acceptable for scoring.</li>
    <li>Organizing team will not be responsible for any kind of damage to your bot.</li>
    <li>Organizer's decision will be final and binding in case of any dispute.</li>
    <li>Organizers reserve the right to change any of the above rules they deem to be fit.</li>
    <li>The participants will be provided with 220 Volts, 50Hz standard AC supply if required but it is advised to construct a bot containing a self-powering mechanism.</li>
    <li>Participants will have to themselves arrange for any other power supply required for their robot.</li>
    <li>There may be slight variation in dimension of the arena.</li>
    <li>The arena & colour pattern may be different from the picture shown above.</li>




</ol>
</p>

<p style="color: black;">
<b>Rules and Regulations: </b>

<ol style="color:black;">

    <li>This event is restricted to students currently studying in any recognized Educational institute.</li>
    <li>A maximum of four participants are allowed per team.</li>
    <li>Students from different colleges can be a part of same team.</li>
    <li>An individual cannot be part of more than one team. Participants must bring a valid identity card of their institute and KIITFEST ID.</li>




</ol>


</p>

<p style="color: black;">
<b>Gameplay: </b>

<ol style="color:black;">

   <li>1. PRELIMS:
        <ul style="list-style-type: disc;">
            <li>Prelims will contain only some key points of the problem statement and the participant ability of building a perfect line follower will be tested. This will a qualifying round in which contestant will compete each other to qualify for the finals and get yourself one step closer to the winning prize!!</li>
            <li>Two dry run of 8 minutes will be given followed by one final run of 5 minutes. The dry run will help the participant anticipate any change in the program that they might need to do to make their bot more perfect (Any change in the construction is not allowed). But they cannot take more than 5 minutes or leave the arena during their dry and final run, otherwise the team will be disqualified.</li>
            <li>The score of only final run will decide if the participant qualifies in the next round or not. And only one final run will be made and the scoring will be final under every circumstances.</li>
            <li>If the bot deviates from the path, it will have to start again from the last checkpoint. Three such restart will be allowed, after that negative mark will be imposed on them.</li>
            <li>For completion of every checkpoint there will be positive making.</li>
            <li>Completing the whole path of the prelim will result in additional points other than the checkpoint.</li>
            <li>Skipping is not allowed in the prelims.</li>
        </ul>
   </li>

   <li>2. FINALS:
        <ul style="list-style-type: disc;">
            <li>Finals will contain all the key points of the problem statement. This is where it will get really interesting. The Actual coding skill and teamwork of the participant will be tested and the challenges will not be as easy as the prelims.</li>
            <li>Similarly like the prelims, two dry run of 10 minutes and one final run of 8 minutes will be allowed.</li>
            <li>The score of only final run will decide winner. And only one final run will be made and the scoring will be final under every circumstances.</li>
            <li>If the bot deviates from the path, it will have to start again from the last checkpoint. Three such restart will be allowed, after that negative mark will be imposed on them.</li>
            <li>For completion of every checkpoint there will be positive making.</li>
            <li>Completing the whole path of the prelim will result in additional points other than the checkpoint.</li>
            <li>Any team can skip a checkpoint after 3 deviation but not directly. A maximum of 2 skips will be allowed with heavy negative marking.</li>

        </ul>
   </li>



</ol>


</p>

<p style="color: black;">
<b>Judging Criteria:</b><br>


Scoring will be done on the basis of time and points and it will be only for the final run. The team will be qualified or declared winner on the score of final run only. The decision taken by the organizer will be final.<br>
If, T=time left on the clock in seconds after completing the course,<br>
C=10, for completing a checkpoint,<br>
A=Number of checkpoints cleared,<br>
D=Number of deviation from the path, after the third time,<br>
S=20, for every skip,<br>
B=Number of skip,<br>
F=50, for completing whole course, 0 for not.<br>
Final Score= 100+T+C*A+F-(D*5)-(S*B)<br>


</p>



<p style="color: black;"><b>Prize Money:</b><br>
Worth Rs. 30,000/-    </p>






<p style="color: black;"><b>Contact Details:</b><br>
A. Anirban Nag (+91-9973769996) <br>  B. Shuvam(+91-9938283553)

                              </p>


                            </div>

                          </div>
                        </div>
                      </div>








      <br>

</div><!--row tag ends-->



    <div class="container">  <div class="row">


<div class="col-md-3 col-sm-6">
        <div class="pricingTable11 blue">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin-left:">Roadrunner</div>
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
          <a href="#" data-toggle="modal" data-target="#myModal6">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(705) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>





                      <!-- Modal -->
                      <div class="modal fade" id="myModal6" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Electronics Engineering<br>
                           <i style="font-family: Allura; font-weight: bold;"> Vidnan-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">RoadRunner</h3>
                                </center>
                                                        <hr style="border-color: black;">
                               <p style="color: black;">

                                 <b> Description of the Event:</b>
1.The Task is to build a manually controlled bot which can complete the rote by overcoming the obstacles in its Path. Thus battling with the opponents based on Marginal points and timing to finally win it. 
2.The bot can be wired or wireless. In case of wireless they maybe Bluetooth controlled or Wi-Fi controlled. 
3.There are 2 rounds, Round 1 and 2 based on the difficulty level, participants will go to the next round by only clearing the preceding round.

<br>

</p>

<p style="color: black;">

<b>Round1 (Two bots will have to compete each other in a race.)</b>
<p style="color: black;"><b>Gameplay 1:</b><br>
 Two bots must start from the “START” mark.  <br>
The bots first arrive at Checkpoint A .<br>
 The two bots have to reach Checkpoint B after crossing the hurdles in any of the two paths.(Additional points for difficult path.) <br>
 Then the bots will move towards the Checkpoint C after crossing the typical curvature.<br>
  Then the bots will have to climb a special obstacle to reach Checkpoint D . <br>
 Checkpoint E will be obtained after overcoming the Staircase(ie.an escalator moving in the opposite direction). Then the bots have to go through the Roller section to reach the ‘FINISH’ MARK.<br></p>

<b style="color:black;">Round2:</b>
 <p style="color: black;"><b>Gameplay 2:-</b><br>
 It is a solo race; In addition to the previous Checkpoints in ROUND 1 the new Checkpoints are as follows:-<br>
 The bot must start from the ‘START’ mark. <br>
 The bot will reach Checkpoint *A after avoiding the obstacles.<br>
 The bot arrives at Checkpoint *B after going through the tunnel. <br>
 Checkpoint *C will be obtained after overcoming the Roller section with additional obstacle. <br>
 The bot will have to choose either of the two paths to reach the Checkpoint *D or Checkpoint *E respectively and finally reach the ‘FINISH’ MARK.<br>

</p>

</p>

<p style="color: black;">
<b>Rules and Regulations: </b>

<ol style="color:black;">

    <li>Teams can have minimum of 2 and maximum of 4 members. </li>

    <li>Bots must not exceed the dimensions of 30x30x30(cms). </li>
    <li>The weight of the bot must not exceed 3kgs.</li>
    <li>The bot may or may not have onboard power source,a 220v( ac) source will be provided,eliminators,batteries,dc motors must not exceed 12-14v(dc). </li>
    <li>There can be students from different colleges to form a team.</li>
    <li>At the most 2 members are allowed to control the bot.(including driver).</li>
    <li>Bot is liable for disqualification if<br>
-it is out of the specifications mentioned <br>
-does any damage to the arena </li>
    <li>❖ Maximum time limit is 10 mins for each time</li>
    <li>In case the bot gets stuck in the arena for more than 1 minute,it will be repositioned to its initial checkpoint and there is no penalty for it. </li>
    <li>The organiser’s decision is final and binding. </li>






</ol>


</p>

<p style="color: black;">
<b>Judging Criteria:</b><br>
10 points will be awarded for crossing ‘START MARK’ and reaching Checkpoint A.<br>
<ol style="color:black;">

    <li>20 points will be awarded for reaching Checkpoint B. </li>
    <li>15 points will be awarded for reaching checkpoint C.</li>
    <li>Again 15 points will be awarded for reaching Checkpoint D. </li>
    <li>5 points for reaching Checkpoint E.</li>
    <li>10 points for reaching the ‘FINISH MARK’. </li>
    <li>5 points for reaching Checkpoint *A. </li>
    <li>15 points for reaching Checkpoint *B. </li>
    <li>5 points for reaching Checkpoint *C. </li>
    <li>20 points for reaching Checkpoint *D or 10 points for reaching Checkpoint *D. </li>
    <li>Bots may be judged for full completion and quickness of completion based on performance and development of the bot.</li>
    <li>Any change in the scoring and judgment criteria may be done by the Organizers without prior announcement if some issue arises.</li>

</ol>


</p>


<p style="color: black;">
<b>Penalties:</b><br>
Participants may skip an obstacle but will result in -10points. (Only one skip is allowed in the entire race.) <br>
<ol style="color:black;">
  <li>10 points for going out of the arena. </li>
    <li>5 points for moving the bot backwards. </li>

</ol>
<p style="color: black;">*Scoring is performed based on points and time taken by the organizers.</p>
</p>


<p style="color: black;"><b>Prize Money:</b><br>
Worth Rs. 30,000/-    </p>

<p style="color: black;"><b>Contact Details:</b><br>
A. Nomit (+91-8249097249) <br>  B. Vishesh(+91-9711901381)

                              </p>





                            </div>

                          </div>
                        </div>
                      </div>
                   </div>


<div class="col-md-3 col-sm-6">
        <div class="pricingTable11 green">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Mirror</div>
            <div>Maze</div>
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
                <a onClick=addToCart(706) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>



                      <!-- Modal -->
                     <div class="modal fade" id="myModal5" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-body" style="background-color: aqua;" >
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Electronics Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Vidnan-Events</i></h5></center>
                            <center>
                                    <h3 style="color:black;">MIRROR MAZE</h3>
                                </center>
                                                       <hr style="border-color: black;">
                               <p style="color: black;">

                                 <b> Description of the Event:</b>
There will be a maze of size 11x17 sq.ft. where the bot will traverse. The walls will be made of glass and mirrors. It will be a manually controlled bot that can be wired or wireless. The goal is to gather maximum points by touching the blocks, placed randomly across the maze. A camera or a phone should be mounted over the bot, which will provide a live feed fpv from bot. The driver will have to control it through camera screen as the arena will not be shown to the driver who is controlling the bot. Obstacles like speed breakers, bumps and fluid patches would be present on the arena. Depth of fluid patch would be 2 cm from ground level. So all electrical connections of the bot must be designed accordingly.

<br>

</p>

<p style="color: black;">
<b>Requirements of the Bot:</b><br>

<ol style="color:black;">
    <li>Dimensions of the bot must not exceed : 20x20x20 cubic.cm. </li>
    <li>All connections of the bot must be minimum of 3-4 cm above the ground level. </li>
    <li>Max. potential difference between any two points of bot must not exceed 16v. Only 220v AC would be provided. Participants would have to bring their own adapter/battery etc. </li>
    <li>No weight criteria. </li>
    <li>The camera or mobile phone must be tightly fixed in order to prevent detachment.</li>



</ol>

</p>

<p style="color: black;">
<b>Rules and Regulations: </b>

<ol style="color:black;">

    <li>Maze dimension will be (11x17) sq.ft. </li>
    <li>A team of max. 4 participants is allowed. </li>
   <li>The event consists of ......... rounds.</li>
    <li>Each team can avail for only 1 technical time-out per round. </li>
    <li>The maze obstacles consists of speed breakers, bumps and may be fluid patches along with few other common obstacles. </li>
    <li>Each participant has to start at a fixed position to traverse the maze. </li>
    <li>Wooden blocks of certain points would be placed at random positions in the maze before a team start their turn (Red block= 5 point, Blue block= 10 point, Yellow block= 30 point, Jackpot block= 100 point).</li>
    <li>The points will be awarded on time basis and total number of blocks touched by the bot. </li>
    <li>Only one person per team will be allowed to manage the wire (only if bot is wired) & only one would be allowed to control the bot. The other members would be sitting by the controller facing their laptops thereby seeing the live feed. The person managing the wire is strictly prohibited to convey any information regarding the layout & position of point blocks. Anyone doing the same will be disqualified from the event.</li>
    <li>The controller would be allowed 30s just before the start of their turn to observe the maze & positions of the point blocks. </li>
    <li>Any damage to the arena will result in direct disqualification. </li>
    <li>Teams with maximum points qualify for the next round.</li>
    <li>Each team gets 3 skip options. It can only be applied when a bot is unable to cross any obstacle or if the controller wishes to skip the obstacle (No negative markings in such criteria). Special case : In case the controller wishes to skip the water(or non-Newtonian fluid) patch 10 points would be deducted from the total score. Any damage to the bot caused while crossing this patch is solely the team’s responsibility. </li>
    <li>However this skip option is not available in the jackpot region.</li>
    <li>Touching the glass wall results in a negative marking of 2 marks. </li>
    <li>Further rules of qualifying rounds would be disclosed on spot. </li>
    <li>The organiser’s decision is final and binding</li>





</ol>


</p>

<p style="color: black;">
<b>Judging Criteria:</b>


<ol style="color: black;">
<li>A trial case of 50 seconds  will be allowed to individual teams to check the maze.
<li>A participant can avail maximum up to 3 skips per round, which can be opted only if the bot freezes on spot. For each skip, 5 marks would be deducted.
<li>All teams would be awarded 50 points initially only if it satisfies the dimension criteria.
<li>A tolerance of 20cm + 4cm (bot width) will be allowed for participating in the event, however, the team would lose the initial 50 points in that case.
<li>

    There would be a total of 3 rounds: <br>
    <ul list-style-type="disc">
      <li><b>Round 1:</b> Individual teams would be participating one by one & the top teams scoring the most points in the specified time for the round will get qualified for the next round.
      <li><b> Round 2:</b>Two bots would be participating simultaneously from 2 random extreme points in the maze. The bot securing most points in the given time span of the round qualifies for the next round. An addition of 20 points would be awarded if the bot exits the maze in the given time span.
      <li><b>Round 3:</b> Will be disclosed on spot.
    </ul>
<li>Ramming of the wall (by a bot or by the participant) would directly result in a deduction of 10 marks.
<li>Each team is allowed only 1 technical timeout per round and this rule is applicable only if the coordinators find the case to be relevant.
<li>All rules & marking schemes are subjected to change before the starting of competition.
<li>Detailed marking scheme would be disclosed to the participants just before the commencement of the event.

</ol>

</p>


<p style="color: black;"><b>Prize Money:</b><br>Worth Rs.30,000/-

                              </p>






<p style="color: black;"><b>Contact Details:</b><br>
A. Bishal (+91-9401476420) <br>  B. Saswata(+91-8116340242)

                              </p>







                            </div>

                          </div>
                        </div>
                      </div>


</div>



      <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 red">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">RoboWar</div>
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
          <a href="#" data-toggle="modal" data-target="#myModal2">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(707) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>
                      <!-- Modal -->
                      <div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Electronics Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Vidnan-Events</i></h5></center>
                                <center>
                                    <h3 style="color:black;">RoboWar</h3>
                                </center>
                                                       <hr style="border-color: black;">
                               <p style="color: black;">

                                 <b> Task:</b>
Design and construct a remote controlled robot capable of fighting a one on one tournament.

<br>

</p>

<p style="color: black;">
<b>Dimension and Fabrications:</b><br>

<ol style="color:black;">
    <li>The machine should fit in a box of dimension 500mm x 500mm x 500 mm (l x w x h) at any given point during the match. The external device used to control the machine or any external tank is not included in the size constraint.</li>
    <li>The machine should not exceed 23 kg but a tolerance of 5% will be allowed.
Mobility: All robots must have easily visible and controlled mobility in order to compete. Methods of mobility include:
.
    <br></li>
    <li> Rolling (wheels, tracks or the whole robot).</li>
    <li>Non-wheeled robots having no rolling elements in contact with the floor and any continuous rolling or cam operated motion in contact with the floor, either directly or via a linkage. Motion is "continuous" if continuous operation of the drive motor(s) produces continuous motion of the robot. Linear-actuated legs and novel non-wheeled drive systems come under this category.</li>
    <li>Jumping and hopping is not allowed. Flying (using air foil, helium balloons etc.) is not allowed.
</li>


</ol>

</p>

<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
    <li>The machine can be controlled through wired or wireless remote. In case of wireless remote Power supply should be on board only. Refer below for further details on battery and power</li>
    <li>There should be binding capability between transmitters and receivers and they must connect between polycarbonate (6mm), metal bars barriers. The remotes with such facility will only be allowed.
    <br></li>
    <li> Nonstandard or self-made remote control systems must first be approved by the organizers.</li>
    <li>Team should pair up the wireless remote with the machine before putting it into the arena</li>



</ol>

</p>

<p style="color: black;">
<b>Battery and Power:</b><br>
<ol style="color:black;">
    <li>The machine can be powered electrically only. Use of an IC engine in any form is not allowed. On- board batteries must be sealed, immobilized-electrolyte types (such as gel cells, lithium, NiCad, NiMH, or dry cells).</li>
    <li>The electric voltage between 2 points anywhere in the machine should not be more than 36V DC at any point of time.
    <br></li>
    <li> All efforts must be made to protect battery terminals from a direct short and causing a battery fire, failure to do so will cause direct disqualification.</li>
    <li>Use of damaged, non-leak proof batteries may lead to disqualification. </li>


    <li>Special care should be taken to protect the on-board batteries. If judges found that the battery is not properly protected, then team will be disqualified immediately.</li>

    <li>Change of battery will not be allowed during the match.</li>

     <li>It is suggested to have extra battery ready and charged up during competition so that on advancing to next level, you don’t have to wait or suffer due to uncharged battery. If teams don’t show up on allotted slot, they will be disqualified. Hydraulics:</li>

     <li>Robot can use non-inflammable liquid to actuate hydraulic devices e.g. cylinders.</li>

     <li>All hydraulic components on-board must be securely mounted. Special care must be taken while mounting pump, accumulator and armour to ensure that if ruptured direct fluid streams will not escape the robot.</li>

     <li>All hydraulic liquids are required to be non-corrosive and your device should be leak proof.</li>

     <li>Maximum allowed pressure is 12 bars.</li>

     <li>Participant must be able to indicate the used pressure with integrated or temporarily fitted pressure gauge.</li>




</ol>

</p>

<p style="color: black;">
<b>Weapons Systems:</b>

Robots can have any kind of cutters, flippers, saws, lifting devices, spinning hammers etc. as weapons with following exceptions and limitations:<br>
<ol style="color:black;">

    <li>Liquid projectiles.</li>
    <li> Any kind of inflammable liquid. </li>
    <li> Flame-based weapons.</li>



</ol>
</p>


<p style="color: black;">
<b>Judging Criteria:</b><br>


<ol style="color:black;">
    <li>  A robot is declared victorious if its opponent is immobilized.</li>
<li>A robot will be declared immobile if it cannot display linear motion of at least one inch in a time period of 30 seconds. A bot with one side of its drivetrain disabled will not be counted out if it can demonstrate some degree of controlled movement. In case both the robots remain mobile after the end of the round then the winner will be decided subjectively
</li>
<li>  A robot that is deemed unsafe by the judges after the match has begun will be disqualified and therefore declared the loser. The match will be immediately halted and the opponent will be awarded a win.
 </li>
<li> If a robot is thrown out of the arena the match will stop immediately, and the robot still inside the arena will automatically be declared as the winner.
</li>

<li>Robots cannot win by pinning or lifting their opponents. Organizers will allow pinning or lifting for a maximum of 20 seconds per pin/lift then the attacker robot will be instructed to release the opponent. If, after being instructed to do so, the attacker is able to release but does not, their robot may be disqualified. If two or more robots become entangled or a crushing or gripping weapon is employed and becomes trapped within another robot, then the competitors should make the timekeeper aware, the fight should be stopped and the robots separated by the safest means.
</li>

<li>Points will be given on the basis of aggression, damage, control and strategy.</li>

<li>Aggression – Aggression is judged by the frequency, severity, boldness and effectiveness of attacks deliberately initiated by the robot against its opponent. If a robot appears to have accidentally attacked an opponent, that act will not be considered Aggression.

</li>
<li>Control – Control means a robot is able to attack an opponent at its weakest point, use its Weapons in the most effective way, and minimize the damage caused by the opponent or its weapons. </li>

 <li>Damage – Through deliberate action, a robot either directly or indirectly reduces the functionality, effectiveness or defensibility of an opponent. Damage is not considered relevant if a robot inadvertently harms itself. Also, if a pressure vessel or a rapidly spinning device on a robot fragments, any damage to the opponent will not be considered "deliberate".</li>

  <li>Strategy – The robot exhibits a combat plan that exploits the robot's strengths against the
weaknesses of its opponent. Strategy is also defined as a robot exhibiting a deliberate defence plan that guards its weaknesses against the strengths of the opponent. (NOTE: Qualification of a robot to next level be subjective and totally on the decision of the judges. A robot winning in a round against its opponent doesn’t guarantee its entrance into the next round. If the judges found the winner robot incompetent to enter into the next round, it may get disqualified. Judges can disqualify both the robots of a match from advancing to the next round. All the decisions taken by the judge will be final and binding to all. Any queries afterwards will not be entertained.) </li>


</ol>

</p>

<p style="color: black;">
<b>Team Specifications: </b>

<ol style="color:black;">

    <li> Any team can participate in Robowars, KIITfest. A team may consist of a maximum of 5 participants. These participants can be from same institute.</li>
    <li> Team Name: Every team must have a name which must be unique. KIITfest reserves the right to reject entries from any Team whose name it deems inappropriate, offensive or conflicting. Organizers must be notified during if a Team's name has been changed. </li>
    <li> Team Representative: Each team must specify their Team Representative (Leader) at the time of registration. All-important communications between KIIT FEST team members and the registered teams will be done through their Team Representative. The Team representatives must submit valid contact details (phone no., email ID etc.) at the time of registration. (NOTE: During any kind of conversation, registration, communication, mails or submissions the team must identify themselves by their Team ID only provided at the time of registration and not by your team name. Please do not use your team name as your identification in any kind of communication with us. Follow this rule very strictly.)
</li>



</ol>


</p>


<p style="color: black;">
<b>Event Specific Terminologies:: </b>

<ol style="color:black;">

    <li> Disabled – A robot is not functioning correctly due to either an internal malfunction, or contact with the opposing robot or Arena Hazard.</li>
    <li> Disqualification – A Robot is no longer permitted to compete in the current Robowars
Tournament.
 </li>
    <li> Immobilized – In Judge's opinion, a robot is not responsive for a specified period of time.
</li>

<li>Knockout – Occurs when the attack or deliberate actions of one robot causes its opponent to
become immobilized. </li>
<li>Lifting – Occurs when one robot controls an opponent's translational motion by lifting the drive mechanism of the opponent off of the Arena floor. </li>
<li> No Contact – Occurs when neither robot makes contact with each other for a specified period of time. </li>
<li> Pinning – Occurs when one robot, through sheer force, holds an opponent stationary in order to immobilize it. </li>
<li> Radio Interference – Refers to the situation where at least one robot becomes non-Responsive or non-controllable due to the effect of the other robot's remote-control signal. </li>
<li> Non-Responsive – In a Referee's opinion, the robot cannot display some kind of controlled translational movement along the Arena floor.</li>
 <li> Restart – Occurs after a Fault or a Timeout has been declared and the competing robots are ready to continue. </li>
<li> Stuck – A robot is hung-up on a part of the Arena, an Arena Hazard or an opponent, such that it is effectively non-responsive. </li>
<li> Tap-Out – Occurs when a Robot's Operators decide that they no longer want to continue the
Match, and concede the win to the opposing Team. </li>
<li> Technical Knockout – Occurs when a robot wins due to immobilization of its opponent even
though, in the Judges' opinion, no action of the winning robot caused the opponent's immobilization. </li>
<li> Timeout – A temporary halting of a Match. Timeouts are usually called to separate robots, but
can be called for other reasons as well.</li>


</ol>


</p>

<p style="color: black;"><b>Prize Money:</b><br>
Worth Rs. 50,000/-    </p>




<p style="color: black;"><b>Contact Details:</b><br>
A. Sandipan (+91-9804113215) <br>  B. Sourav(+91-8348518426)

                              </p>


                            </div>

                          </div>
                        </div>
                      </div>







      <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 blue">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Kivi</div>
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
          <a href="#" data-toggle="modal" data-target="#myModal3">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(708) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>


                      <!-- Modal -->
                       <div class="modal fade" id="myModal3" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua;" >
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Electronics Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Vidnan-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">Kivi</h3>
                                </center>
                                                       <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b><br>It is an online quiz that is totally related to the electronics circuits and its equivalent and the participants will have ten seconds to choose the answer amongst the options provided. This event will be conducted thrice a day after some events so that the enthusiasm among the participants is maintained. The different pages of the application involve the registration page and each quiz question page.


</p>


<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
    <li>1.The KIVI game  link will  be provided to  the registered participants.</li>
    <li>2.The KIWI application will work only within the GEO_FENCING so no outsider away fromthe electronics department will be allowed to enter the game who hasn’t registered.</li>
    <li>3.The total number of questions for each quiz will be 12.</li>
    <li>4.Each question is to be answered in a time span of 10 seconds by choosing the correct option after which next question will appear.</li>
    <li>5.Any kind of cheating will lead to disqualification of the participant.</li>
    <li>6.It is an individual event that means only a single member in a team is allowed. </li>
    <li>7.The different pages of the application involves the registration page and the each quiz question page. </li>
    <li>8.Sudoku puzzle consists of a grid of 9 blocks. Each block contains 9 boxes arranged in 3 rows and 3 columns.</li>
    <li>9.In Sudoku, some blocks will be pre-filled. These numbers cannot be changed in the course of the game. </li>
    <li>The  last round is rubik’s cube for the selected participants for final round.</li>



</ol>

</p>


<p style="color: black;">
<b>Judging Criteria:</b><br>The one who gets all the answers correct shall be the winner.
</p>

<p style="color: black;">
<b>Prize Money:</b><br>Worth Rs.20,000/-
</p>




<p style="color: black;"><b>Contact Details:</b><br>
A. Manish (+91-88638480029) <br>  B. Surabhi (+91-9777833256)

                              </p>
                            </div>

                          </div>
                        </div>
                      </div>

















                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


      </div><!--row--><!-- col-6 -->


                </div><!-- blog-list-page -->
            </div><!-- last-news -->
        </div><!-- container -->
    </div><!-- main-content -->



      <br><br>


<!--Modal starts-->
  <!--modal 1-->


<!--modal close-->



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
