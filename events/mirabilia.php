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
                    <div class="entry-header" style="font-size: 215%;margin-left: 2%;%;">
                      School of Computer Application


                    </div><!-- entry-header -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    <div class="content" style="margin-top:10%;">
      <br><br>

        <div class="row" style="margin-left:2%;margin-right:2%;" >


            <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 blue">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Braille Coding</div>
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
          <a href="#" data-toggle="modal" data-target="#myModal3">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(501) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>



            <div class="col-md-3 col-sm-6">
        <div class="pricingTable11">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Bring Back To</div>
            <div>Life</div>
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
          <a href="#" data-toggle="modal" data-target="#myModal4">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(502) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>




            <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 green">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Human Snake and </div>
            <div> Ladder</div>
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
          <a href="#" data-toggle="modal" data-target="#myModal6">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(503) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>




           <div class="col-md-3 col-sm-6">
        <div class="pricingTable11 red">
          <div class="pricingTable-header" style="height:12rem">

            <div class="price-value"><div style="margin:8px">Turncoat</div>
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
          <a href="#" data-toggle="modal" data-target="#myModal8">Know More</a>
          <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(504) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
        </div>
      </div>
      </div>


        </div>
    </div>
      <br><br>


  <!-- Modal -->
                      <div class="modal fade" id="myModal3" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body"  style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Computer Application <br>
                           <i style="font-family: Allura; font-weight: bold;"> Mirabilia-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">Braille Coding</h3>
                                </center>
                                                    <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>
A simple coding fest with certain twists and turns.<br></p>

<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
    <li>The participant will have to code in blank screen within a defined time frame.</li>
<li>Points will be credited on basis of minimum errors.</li>
<li>If there is a tie, the participants will have to code in reverse manner. the game will
have two rounds in which first round is an elimination round.</li>
<li> Venue: KOEL Campus, 10am onwards</li>

</ol>

</p>

<p style="color: black;">
<b>Number of Participants: </b>1<br>
</p>

<p style="color: black;"><b>Contact with phone numbers:</b><br>
A. Priyatesh Shah (+91-7978411690)  <br>  B. Raziur Rahman (+91-8240735593)
</p>
                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 1-->

                      <!-- Modal -->
                      <div class="modal fade" id="myModal4" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body"  style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Computer Application <br>
                           <i style="font-family: Allura; font-weight: bold;"> Mirabilia-Events</i></h5></center>
                               <center>
                                    <h3 style="color:black;">Bring Back To Life</h3>
                                </center>
                                                 <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>
Solve puzzles to find the various system parts spread across the campus and assemble
them into a fully functional system.<br></p>

<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
    <li>The event will be consisting of 2 rounds based on the performance of the
participants in round 1 they will reach round 2.</li>
<li>System parts are disassembled and spread across the campus.</li>
<li>Teams will have to find these parts based on the clues given and assemble the parts
in the shortest time possible.</li>
<li> Winners shall be decided based on the shortest time taken.</li>
<li>The game will be containing various implications of IOT(Internet of things ) in the
second round.</li>

</ol>

</p>

<p style="color: black;">
<b>Number of Participants: </b>3<br>
</p>

<p style="color: black;"><b>Contact with phone numbers:</b><br>
A. Ravi Kumar (+91-9905083800)  <br>  B. Subhajit Kundu (+91-8840782451)</p>
                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 2-->

                       <!-- Modal -->
                      <div class="modal fade" id="myModal6" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body"  style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Computer Application <br>
                           <i style="font-family: Allura; font-weight: bold;"> Mirabilia-Events</i></h5></center>
                                 <center>
                                    <h3 style="color:black;">Human Snake and Ladder</h3>
                                </center>
                                                   <hr style="border-color: black;">
                                <p style="color: black;">

                                 <b> Description of the Event:</b>
Your childhood pastime, now on bigger and real life-sized board with many twists and
turns with every dice roll.<br></p>

<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
    <li>Teams will be given life size snake and ladder plot. </li>
<li>1 member shall act as playing beads while the other shall roll a dice.</li>
<li> There will be twist in the events. </li>
<li> The first team to complete the event will be the winner.</li>

</ol>

</p>

<p style="color: black;">
<b>Number of Participants: </b>4<br>
</p>

<p style="color: black;"><b>Contact with phone numbers:</b><br>
A. Gouri Priya Hansda (91-9040153804)  <br>  B. Anshu Priya (91-9905660327)

                              </p>


                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 3-->

                       <!-- Modal -->
                      <div class="modal fade" id="myModal8" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body"  style="background-color: aqua;">
                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
                              <center ><h5 style="color: black;">School of Computer Application <br>
                           <i style="font-family: Allura; font-weight: bold;"> Mirabilia-Events</i></h5></center>
                              <center>
                                    <h3 style="color:black;">Turncoat</h3>
                                </center>
                                              <hr style="border-color: black;">

                                <p style="color: black;">

                                 <b> Description of the Event:</b>
A self-debate in which both the sides of the coin are to be shown by the same
individual within the given time.<br></p>

<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;">
    <li>The participants will be given random topics based on a lottery system. </li>
<li>The preparation time given to the participants will be half an hour after they have
selected their topic.</li>
<li> Time of 10 minutes will be provided to each individual for delivering a speech on
the given topic while showing both the pros and cons of the topic whenever “switch”
is commanded by the judges.</li>
<li>Judges will be deciding the winners.</li>

</ol>

</p>

<p style="color: black;">
<b>Number of Participants: </b>1<br>
</p>

<p style="color: black;"><b>Contact with phone numbers:</b><br>
A. Akansha (+91-9771118956)  <br>  B. Sinet Chowdhury (+91-8910209855)

                              </p>

<p style="color: black;">
    <b> Timings:</b>10AM Onwards</p>



                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- end of modal 4-->

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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <br><br>  <a href="../webteam.php">KIITFest Web Team</a>

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
