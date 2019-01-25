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
                        School of Computer Engineering

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
        <div class="col-md-4 col-sm-6">
        <div class="pricingTable11">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Brainotracking</div>
            <div></div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> coming soon</li>
            <li><b>Schedule</b> coming soon</li>
            <li>Participation<b></b> coming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal1">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(401) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>

<!-- Modal 1 -->

      <!--Modal starts-->
  <!--modal 1-->
  <div class="modal fade" id="myModal1" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua; ">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School Of Computer Science <br>
                           <i style="font-family: Allura; font-weight: bold;"> Luminare-Events</i></h5></center>
                             <p style="color: black;"><center ><h3 style="color: black;">Brainotracking</h3></center>

                              <hr style="border-color: black;">

<p style="color: black;"><b>Description:</b><br> <b>“Truth can only be found in one place : THE CODE”</b><br>
If you think you have the 7th sense, Which people normally refer to as the Coder Sense then brush up your mind for a brain teasing snippets with the essence of cinematic universe. Let your mind relax while reading the code, but let me remind you time is important.

 <br>
<b>Rules and regulations:</b><br>

Round 1 :
<ol style="color: black;">

<li>Pair participation.
<li>Participants will be given a code snippet.
<li>One partner will find output of the code while the other will wait.
<li>Output of the code will be solution to the name of a movie.
<li>The partner who knows the name of the movie will explain the movie to the other partner and the person will have to guess the Bollywood movie.
<li>This will be a knockout round and people who’ll complete the task in minimum time will be selected.

</ol>
<p style="color: black;">Round 2 :
<ol style="color: black;">
<Li>A code snippet will be given along with its output.
<Li>The code snippet will be jumbled.
<Li>It is to be ordered correctly.
<Li>Winners will be selected on minimum time taken to order the code according to the output.


</ol>
</p>
<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 20,000<br>

                      <br>
<b>Contacts:</b><br>
Ankita Kumari, Bhavya Raj, Natasha Michael, Shalini Jha <br>
(Contact-7978136032,8902424688)<br>


<br>

</p>
</p>
</p>

  </div>

                          </div>
                        </div>
                      </div>

        <!--end of modal 1-->



        <div class="col-md-4 col-sm-6">
        <div class="pricingTable11 red">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Hackathon</div>
            <div></div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> coming soon</li>
            <li><b>Schedule</b> coming soon</li>
            <li><b>Participation</b> coming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal2">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(402) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>






      <div class="col-md-4 col-sm-6">
        <div class="pricingTable11 green">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Matricity</div>
            <div></div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> coming soon</li>
            <li><b>Schedule</b> coming soon</li>
            <li><b>Participation</b> coming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal3">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(403) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>



</div><!--row tag ends-->

        <div class="row" style="margin-left: 2%; margin-top: 10%;margin-right:2%;">
          <div class="col-md-4 col-sm-6">
        <div class="pricingTable11 blue">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Minute-to-Win-it</div>
            <div></div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> coming soon</li>
            <li><b>Schedule</b> coming soon</li>
            <li><b>Participation</b> coming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal4">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(404) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>


       <div class="col-md-4 col-sm-6">
        <div class="pricingTable11 red">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Eagle's Hunt</div>
            <div></div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> coming soon</li>
            <li><b>Schedule</b> coming soon</li>
            <li><b>Participation</b> coming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal5">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(405) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>



      <div class="col-md-4 col-sm-6">
        <div class="pricingTable11">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Tech-Builder</div>
            <div>Konflictus 5.0</div>
          </div>
        </div>
        <h3 class="heading"></h3>
        <div class="pricing-content">
          <ul>
            <li><b>Venue</b> coming soon</li>
            <li><b>Schedule</b> coming soon</li>
            <li><b>Participation</b> coming Soon</li>
          </ul>
        </div>
        <div class="pricingTable-signup">
          <a href="#" data-toggle="modal" data-target="#myModal6">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(406) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>


      </div><!--row--><!-- col-6 -->


                </div><!-- blog-list-page -->
            </div><!-- last-news -->
        </div><!-- container -->
    </div><!-- main-content -->



      <br><br>






        <!--modal 2-->
<div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Computer Science <br>
                           <i style="font-family: Allura; font-weight: bold;"> Luminare-Events</i></h5></center>
                               <p style="color: black;"><center ><h3 style="color: black;">Hackathon</h3></center>

                              <hr style="border-color: black;">

<p style="color: black;"><b>Description:</b><br> Hey Coders! Isn't it time you registered already? Brush up on your favorite programming language, because LUMINAIRE presents Hackathon. Whenever a layman hears the term 'coding', a nerd with glasses and immense logical skills is pictured. Show the world, that logic is just one side of the coin. Display your artistic and innovation skills and create theme based website/app under a time pressure. Are you ready for the challenge, coz we are here waiting for you.


 <br>
<b>Rules and regulations:</b><br>

<ul style="color: black;">
<li>Team Size: maximum 2 participants

<li>Duration: 6 hours

<li>All ideas/codes must be original and developed specifically for the event.

<li>Please get your own laptops, mobile phones and any other devices with the necessary software. While a Wi-Fi connection would be provided, no tech support for   connecting your personal devices to the same would be available.

<li>The teams can code the challenge in any desired programming language.

<li>You are also required to get all required software and hardware components for your project.

<li>The teams will be provided with a problem statement.

<li>The teams have to make a website or an app accomplishing the the problem statement.

<li>Judging for the winner will be on the basis of the design and functioning of the website/app.

</ul>

<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 20,000<br>
                      <br>
<b>Contacts:</b><br>
Indrashis Das (7980620325)<br>
Adarsh Parashar (7985235594)



<br>

</p>
</p>
</p>
                            </div>

                          </div>
                        </div>
                      </div>
        <!--modal 2 closes-->

        <!--modal 3-->

                      <div class="modal fade" id="myModal3" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Computer Science <br>
                           <i style="font-family: Allura; font-weight: bold;"> Luminare-Events</i></h5></center>
                               <p style="color: black;"><center ><h3 style="color: black;">Matricity</h3></center>

                              <hr style="border-color: black;">

<p style="color: black;"><b>Description:</b><br>Each puzzle is an enigma. Everyone is a puzzle not only to himself but to others also, and the great mystery of our time is how we penetrate this puzzle. Come conjure the world of puzzle and feel the adrenaline rush down your veins for a mind teasing conquest of inexplicable world.

 <br>
<b>Rules and regulations:</b><br>

<ul style="color: black;">
<li>Individual participation.
<li>A puzzle will be given to solve.
<li>There will be 2 rounds and each round will be a knockout round.
<li>Winners will be selected on the basis of their sustainability till the final round.


</ul>

<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 13,000<br>

<b>Contacts:</b><br>
Coordinator<br>
Bharat Sharma(8795487676)<br>
</p>
</p>

                            </div>

                          </div>
                        </div>
                      </div>
  <!--end of modal 3-->

  <!--modal 4-->
<div class="modal fade" id="myModal4" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Computer Science <br>
                           <i style="font-family: Allura; font-weight: bold;"> Luminare-Events</i></h5></center>
                                <p style="color: black;"><center ><h3 style="color: black;">Minute-to-Win-it</h3></center>

                              <hr style="border-color: black;">

<p style="color: black;"><b>Description:</b><br> It takes an incredibly smart person to do something incredibly fast. Do have needle sharp focus and Usain Bolt speed? Do you have what it takes to complete any given task in a minute?<br>
If yes, welcome champ, to a minute to win it.


 <br>
<b>Rules and regulations:</b><br>

<ul style="color: black;">
<li>2-5  participants in each team.
 <li>Each round will have interesting task
 <li>There will be around 4-5 rounds
 <li>Each round will be Knockout round.

</ul>

<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 20,000<br>
<b>Contacts:</b><br>
Shikher Trivedi (8765855714)<br>
Kaushtoov Biswas (9078802955)<br>


<br>

</p>
</p>
</p>
                            </div>

                          </div>
                        </div>
                      </div>
  <!--end of modal 4-->

  <!--modal 5-->
<div class="modal fade" id="myModal5" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Computer Science <br>
                           <i style="font-family: Allura; font-weight: bold;"> Luminare-Events</i></h5></center>
                               <p style="color: black;"><center ><h3 style="color: black;">Eagle's Hunt</h3></center>

                              <hr style="border-color: black;">

<p style="color: black;"><b>Description:</b><br>“To date, treasure-hunters have followed up clue after clue, including a dagger-marked tree, to no avail. If there is a fortune buried in Handcart Gulch, it is still safely hidden”, so do you have what it needs to do the mind boggling search for the answers. So fasten your seatbelts for this adventurous ride.


 <br>
<b>Rules and regulations:</b><br>

<ul style="color: black;">
<li>Team Participation (2-4 members)
<li>Each member of the team will be given a clue about where the object is hidden.
<li>The team members will have to find the hidden objects.
<li>Each round will be a knockout round.
<li>There will be 2 rounds in the game.
<li>Second round will have the same task to complete but with a mysterious object.
<li>Winners will be selected on the basis of minimum time taken to find all the objects.

</ul>

<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 20,000<br>
<b>Contacts:</b><br>
Ankita Kumari (7978136032)


<br>

</p>
</p>
</p>

                            </div>

                          </div>
                        </div>
                      </div>
  <!--end of modal 5-->

  <!--modal 6-->
<div class="modal fade" id="myModal6" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body" style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Computer Science <br>
                           <i style="font-family: Allura; font-weight: bold;"> Luminare-Events</i></h5></center>
                              <p style="color: black;"><center ><h3 style="color: black;">Tech-Builder</h3></center>

                              <hr style="border-color: black;">

<p style="color: black;"><b>Description:</b><br>Living at risk is jumping off the cliff and building your wings at the way down, want to feel the same and build your solution just from raw ideas? Then you are at the right place and good to go, it will need nothing other than speedy analysis of thoughts. “Be prepared”

 <br>
<b>Rules and regulations:</b><br>

<ul style="color: black;">
<li>Pair participation.
<li>An analytical situation will be given whose flowchart output is to be drawn on a chart paper.
<li>The flowchart is to be explained to the judges. Judges will judge the outputs.
<li>It’ll be a knockout round.
<li>Top Participants will qualify for the next round where there will another set of analytical problems.
<li>Winners will be selected on the basis of the judging panel’s decision.


</ul>

<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 20,000<br>
<b>Contacts:</b><br>

Coordinator<br>
Ritik (9546862541)<br>


<br>

</p>
</p>
</p>
                            </div>

                          </div>
                        </div>
                      </div>
  <!--end of modal 6-->

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
