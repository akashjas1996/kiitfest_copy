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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../css/swiper.min.css">

      <!--Material design links-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

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
                                <li><a href="../contact.php"></a></li>
                                <?php
                                    if($sql->isLogin()==1)
                                    {
                                      echo '<li><a href="checkout.php">CHECKOUT</a></li>';
                                      echo '<li><a href="../logout.php">LOGOUT</a></li>';

                                    }
                                ?>
                                <li></li>
                                <li></li>

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
                    <div class="entry-header" style="font-size:215%; margin-left: 2%; font-style: bold!important">
                      School of Electrical Engineering

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

            <div class="price-value"><div style="margin:8px">Circuit Design & </div>
            <div>Power Relay</div>
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
          <a href="#" data-toggle="modal" data-target="#myModal">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(101) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>

        <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 red">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Design 4 </div>
            <div>Energy </div>
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
          <a href="#" data-toggle="modal" data-target="#myModal1">Know More</a>
          <?php
              $query="SELECT `kf_id` FROM `participants_participant` WHERE `unique_id`='retriveSessionParticipant()'";
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(102) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>






      <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 blue">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">KIIT-IEEE</div>
            <div> Workshop</div>
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
              $query="SELECT `kf_id` FROM `participants_participant` WHERE `unique_id`='retriveSessionParticipant()'";
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(103) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>

         <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 green">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Robot</div>
            <div> Triathlon</div>
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
              $query="SELECT `kf_id` FROM `participants_participant` WHERE `unique_id`='retriveSessionParticipant()'";
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(104) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>



</div><!--row tag ends-->

        <div class="row" style="margin-left: 2%; margin-top: 10%;margin-right:2%;">
          <div class="col-md-4 col-sm-6">
        <div class="pricingTable11 red">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Smart Utilisation of  </div>
            <div>Innovation and <br>technology (S.U.I.T)</div>
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
              $query="SELECT `kf_id` FROM `participants_participant` WHERE `unique_id`='retriveSessionParticipant()'";
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(105) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>


       <div class="col-md-4 col-sm-6">
        <div class="pricingTable11">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px"> Solar </div>
            <div>Spectrum</div>
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
              $query="SELECT `kf_id` FROM `participants_participant` WHERE `unique_id`='retriveSessionParticipant()'";
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(106) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>



     </div>


      </div><!--row-->
    </div>
    <br><br>


 <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Electrical Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Electrify-Events</i></h5></center>
                              <p style="color: black;"><center ><h3 style="color: black;">Circuit Design & Power Relay</h3></center>
                                <hr style="border-color: black;">


<p style="color: black;"><b>Description:</b> Power relay as well as circuit design is about having knowledge about basic electrical components. Showcase your skills with your ideas about electrical things. Design the best circuit you do with least time. What matters is knowledge and speed with accurate result. So, Think and design how fast and how accurate you can be!

  <br>
<b>Team Criteria:</b><br>
Group participation, maximum 3 members are allowed.<br>
Solo participation is allowed.

                             <br>
<p style="color: black;">
<b>Judging Criterion</b><br>
Stage-1 :- Set of Multiple choice questions, qualifying participants goes for the second stage.<br>
Stage-2:- In this round, a wrong circuit will be provided to all the teams. Teams able to correct the circuit in minimum time or identify the faulty portion (depending upon the circuit) will be selected for next final round.<br>
Stage 3:- Find the fault in the circuit and rectify it within the time limit. Depending upon situation hardware implementation may also have to be dealt with.<br>

</p>
<p style="color: black;">
  <b>Prize money worth:-</b> &nbsp; Rs 20,000<br>
  ●The Prize money will be decided on the number of registrations for this event.
<br>

</p>
<p style="color: black;">
<b>Contacts:</b><br>
Shobhan Banerjee (7355433380)  <br>
Anamika Das (7978498536)<br>
Niranjan Chakrobarty (9735840684)

<br>
</p>
</p>
</p>
</p>
                            </div>

                          </div>
                        </div>
                      </div>

                <!-- end of modal 1 -->

                     <div class="modal fade" id="myModal1" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                               <center ><h5 style="color: black;">School of Electrical Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Electrify-Events</i></h5></center>
                              <p style="color: black;"><center ><h3 style="color: black;">Design 4 Energy</h3></center>
                              <hr style="border-color: black;">


<p style="color: black;"><b>Description:</b><br> The best way to predict the future is to design it.<br> Innovation begins at home…..<br>
The prime motive of this event is to grab out the innovative ideas from the scholars regarding the maximum utilization of Power through  renewable sources of energy. So that the most acceptable outcome would be recognized and can become a tool for its implementation.<br>
Let’s go green…. <br>
<p style="color: black;">
<b>Team Criteria:</b><br>
Number of Participants: -  Maximum 4 members in each group.<br>
Round 1: one member from each team.<br>
Round 2 and 3: All the members of the selected teams.<br></p>

<p style="color: black;">
<b>Judging Criteria:</b><br>
Round 1:- Quiz test MCQ type .<br>
Round 2:- Power-point Presentation on their view of green building with a hypothetical design of a green building(Visual). <br>
Round 3:- Last round will be judged on best feasible idea and best model of operation presented. <br>

                      <br>
                    </p>
                    <p style="color: black;">
  <b>Prize money worth:-</b> &nbsp; Rs 20,000<br>
  ●The Prize money will be decided on the number of registrations for this event.
<br>


</p>
<p style="color: black;">
<b>Contacts:</b><br>
Yashwant Kumar Sahu (8463886801)   <br>
 Shubhra Debnath (8131037040) <br>
Sneha Sinha (81143 31835)
</p>
</p>
</p>
</p>
</p>
                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 2 -->

                       <!-- Modal -->
                      <div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                               <center ><h5 style="color: black;">School of Electrical Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Electrify-Events</i></h5></center>
                              <p style="color: black;"><center ><h3 style="color: black;">KIIT-IEEE Workshop</h3></center>
                              <hr style="border-color: black;">


<p style="color: black;"><b>Description:</b><br> 
Since it’s inception in 2016, KIIT-IEEE student branch council has been organising seminar workshop and seminar on various trending domain in the fields of technology.<br>

This year is no different. KIIT-IEEE Student branch council invites all enthusiastic techno-geeks to come broaden their horizon on the wide field of science this KIITFEST 2018.<br>

The world is quickly adopting to electric vehicles and in the next couple of decades, EVs are going to be more mainstream than internal combustion vehicles. More automotive manufacturers are now devoting a rather large chunk of their resources towards the research and development of electric vehicles. This begs a question though! Where does India fit in the overall scheme of electric vehicles globally? The government of India had a plan of converting the entire fleet of vehicles to fully electric by 2030, which is barely 12 years away. But in January, 2018, it was sort of scrapped. If this actually happens, then India will be one of the largest markets for electric vehicles in the world, possibly only behind China.<br>

This year we welcome you all for a 3-day workshop on electric vehicle and it’s future proposition.<br>



A certificate from the KIIT-IEEE student branch chapter would be awarded to all the attendees<br>
<p style="color: black;">
<b> Contacts</b><br>
Anubhav Mohanty (7011639373)<br>
Saikat Gupta (7978780265)<br>
Narottam Das (7980185395)<br>

</p></p>
</p>
</p>
</p>
                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 3-->

                       <!-- Modal -->
                      <div class="modal fade" id="myModal3" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                               <center ><h5 style="color: black;">School of Electrical Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Electrify-Events</i></h5></center>
                               <p style="color: black;"><center ><h3 style="color: black;">Robo Triathlon
</h3></center>
                              <hr style="border-color: black;">


<p style="color: black;"><b>Description:</b><br> It’s time that robots take over! Design a manually controlled mechanical bot, which can push or kick a medium sized ball, and is durable enough to survive highly challenging obstacle course and also would be strong and agile enough for a sumo-style wrestling fight. The prime motive is to built a robot which is brisk as well as strong enough to overcome all the hurdles. Let the games begin.....

 <br>
 <p style="color: black;">
<b>Bot Specification :- </b>The Bot can undergo changes according to each event requirement but the weight and dimensions cant change through out all the events once participated. The changes in the bot (if made any) are to be informed to the co-ordinator .<br>

i)Height- 30 cm.<br>

ii)Length- 30 cm.<br>

iii)Width- 30 cm.<br>

iv)Weight- 3 kg.<br>

v)Battery Rating – 12V/5A<br>

vi)No. of motors – 4(additional 1 can be used for shooting purpose)<br>

vii)All the above dimensions are maximum, failure to which disqualifications shall be taken into effect.<br>
</p>

 <p style="color: black;">
<b>Rounds:</b><br>

<b>Round 1: Robo Soccer :-</b>This is the qualifier round. The bot will have to shoot a medium sized ball towards a goal. The bot can also push the ball to exert a certain force for the ball to reach the goal.<br>
<b>Rules</b><br>
●Each team will get 5 points from which the bot has to shoot the ball or push to score the goal.<br>

●Each team can have a maximum of 4 members. Maximum 2 members shall be allowed close to the field for operating the bot.<br>

●Each team will be given a time interval of 5 minutes to shoot from each point, excluding which penalty will be incurred.<br>

●Bots that will be using pushing mechanism can take a maximum run up of 40 cm. And the bots which will be using shooting mechanism will get a smaller distance to shoot from, comparatively.<br>

●There should not be any loop to hold the ball tight and the front hand like extensions (if having) should have a gap of minimum 10 cm. So that the ball can easily move.<br>

●Any act of misbehavior or misconduct will lead to immediate disqualification of the team.<br>

●In case of any discrepancy, the final decision rests in the hands of co-ordinators.<br>

●Any battery or eliminator will not be provided. Members are required to bring their own battery or power source.<br>

●If any damage is incurred on the arena by the bot , the team will be disqualified .<br>

●This round is similar to penalty shoot outs.<br>

●If any Technical problem arises, time compensation shall be given.<br>

<b>Round 2: Robo Hurdle Sprint :-</b>This is the elimination round. The bot needs to do some tasks while racing against time on a rugged terrain.<br>

<b>Rules :-</b><br>

●The team qualified Round 1 will be playing this round.<br>

●The bot will have to perform some tasks like pushing a cube to the given colour code.<br>

●The bot will have to go through uneven surfaces like inclined planes , zig-zag paths, etc.<br>

●The whole path needs to be completed for qualifying to the next level.<br>

●The scoring will be based on the time taken to complete the path.<br>

● If the bot crosses the given path, penalty will be held. If the bot goes completely out of the arena the team will be disqualified.<br>

●In case, if there is any technical problem, a technical break will be provided , it will be given only once for each team.<br>

●Depending on the score in the last round, a bonus time out can be awarded, though the final decision will be of the co-ordinators.<br>

●Only two members of the team will be allowed close to the arena for controlling the bot.<br>

●Each hurdle will provide points, lesser the time consumed to complete the tasks more will be the bonus points.<br>

●If the arena gets damaged by the bot, the team will be disqualified.<br>

●Arena will be disclosed only few moments before the round.<br>

<b>Round 3: Robo Sumo :-</b>This is the final round of the event. Two bots will face each other for a sumo type wrestling.<br>


<b>Rules :-</b><br>

●Two teams who have qualified round 2 will face each other for a sumo wrestling.<br>

●Points will be scored on pushing the opponent bot out of the arena.<br>

●The teams need to score their points with in 5 minutes , if there is no scoring within 5 minutes then a new gameplay will come into the picture, this part of the game and its rules will be disclosed in final only.<br>

●If the bots get stuck to each other and are not able to move, then there will be a new start .<br>

●If any major part of the bot gets broken, a technical timeout will be provided (only once).<br>

●Small timeout will be provided on other technical issues.<br>

●Two members from each team will be allowed close to the arena for controlling the bot.<br>

●At any point of the game, if there is any discrepancy the decision taken by the co-ordinators will be final.<br>

●Every other details about the event will be provided before the final event starts.<br>

●There should not be any parts attached to the bot for making intentional damage to the opponent bot, this is not robo war.<br>

●Arena should not be damaged by the bot or else the team will be disqualified.<br>

</p>
<p style="color: black;">
<b style="color: black;">Judging Criteria:</b><br>
<b>1st Round :- Robo Soccer :</b> (qualification round) Each goal scored will award points, teams having scored more than 3 goals will be qualified for the next round.<br>

<b>2nd Round :- Robo Hurdle Sprint :</b> (elimination round) An obstacle sprint race for robots where they need to do some tasks, marking will be done on that basis. The winners will progress to final round. Each successful task will award points.<br>

<b>3rd Round :- Robo Sumo :</b> (Final Round) A one on one tackle between two bots to find their toughness and agility. The bot that will push its opponent out of the arena more times in the given 5 minutes will win.

<br>
</p>
<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 25,000<br>
  ●The Prize money will be decided on the number of registrations for this event.<br>
<b>Contacts:</b><br>
Akash Roy Choudhary (8794616221 / 8837269929)<br>
Abhishek Kushary (8876546411 / 8327707064)<br>

</p>
</p>
</p>
                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 4-->

                      <div class="modal fade" id="myModal4" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                               <center ><h5 style="color: black;">School of Electrical Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Electrify-Events</i></h5></center>
                               <p style="color: black;"><center ><h3 style="color: black;">Smart Utilisation of Innovation and technology (S.U.I.T)
</h3></center>
                              <hr style="border-color: black;">


<p style="color: black;"><b>Description:</b><br> Ideate and propose innovative applications of electrical engineering in day-to-day life. Applications can be (but not limited to) related to the field of Medical sciences, traffic control, pollution monitoring, agriculture, water/irrigation, home automation, smart grid, vehicular electronics, etc.


 <br>

<b style="color: black;">Judging Criteria:</b><br>
  Round     1:-Set of Multiple choice questions, qualifying participants goes for the second stage.<br>
       For groups only 1 member can appear for qualifying test.<br>


Round 2:- Power-point Presentation on their innovation and their field of use. The PowerPoint presentation must contain the present scenario and after effects of the proposed innovation.<br>

Round 3:- Basic model demonstration and explanation of the proposed Idea and small report. Some basic equipments will be given.<br>
<b>Team Criteria :</b><br>
Group participation (max 4) and solo participation allowed.


<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 20,000<br>
  ●The Prize money will be decided on the number of registrations for this event.<br>
<b>Contacts:</b><br>
Ashutosh Nayak (7999205175)<br>
Tanisha Das (9937460081)
<br>
Vishwam Jaiswal(72059 97466)<br>

</p>
</p>
</p>
                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 5-->


                       <!-- Modal -->
                      <div class="modal fade" id="myModal5" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Electrical Engineering <br>
                           <i style="font-family: Allura; font-weight: bold;"> Electrify-Events</i></h5></center>
                               <p style="color: black;"><center ><h3 style="color: black;">Solar Spectrum</h3></center>
                              <<hr style="border-color: black;">


<p style="color: black;"><b>Description:</b><br>Solar spectrum is about designing solar based car models with creativity. It’s about unleashing your racing spirit in toy cars. Clean and green is our motto as solar cars are the next big thing! We have absolutely no constraints to your creativity or your will to innovate and design solar based car modules. Vroooommm your way to the top with style!


 <br>
 <b>Team Criteria:</b><br>
 Group participation, maximum member allowed is 3.<br>
Solo participation is allowed.<br>

 <p style="color: black;">
<b>Rules and regulations:</b><br>

ROUND 1(SPEED TEST): In this round, a plain arena will be setup where solar
based cars will be competing against each other testing their speed capability. Fastest
cars will be selected for the next round.<br>

ROUND 2 (TORQUE TEST): In this final round, hurdles like inclination, water pod
etc will be setup, testing the torque capability in the solar cars.<br><br>

<b>DESIGN SPECIFICATION:</b><br>
Should fit inside a standard shoe box.
</p>
<br>
<p style="color: black;">
<b style="color: black;">Judging Criteria:</b><br>
1st round will be judged on aesthetics, rules and specifications followed, creativeness,
skills shown, presentation, and speed capability. Fastest teams will be further selected
for final round.<br>

2nd round will be based on torque testing skills, adherence to spirit, successful
completion of the hurdles will bag the Top 3 spots.


<br>
</p>
<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 20,000<br>
  ●The Prize money will be decided on the number of registrations for this event.<br>
<b>Contacts:</b><br>
Dibyalochan Samantray (7539833703)<br>
Shreya Sinha (9078641075)
<br>
Soumya Raj (8984970743)<br>

</p>
</p>
</p>
                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 6-->

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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <br><br><a href="../webteam.php">KIITFest Web Team</a>

                        </div><!-- copyright-info -->

                        <div class="footer-social">
                            <ul class="flex justify-content-center align-items-center">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div><!-- footer-social -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- footer-content-wrapper -->
    </footer><!-- site-footer -->


    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

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
