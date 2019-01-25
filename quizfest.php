 <?php
include "sql.php";
$sql = new sql();
?>
<!DOCTYPE html>
<script src="js/TimelineLite.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
<html>

<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-66101749-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-66101749-2');
</script> -->
<?php include "trac.php"; ?>


<head>
<link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>QUIZFEST | KIIT FEST 5.0</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width-device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!--Material design links-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/linearicons.css">
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/nice-select.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/common.css" />
</head>
<body class="blog-page" style="overflow-x: hidden;">
    
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
    <div class="page-header" style="background-image: url('quizfest.png');background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="entry-header">
                        <!--<h2 class="entry-title">Cultural</h2>-->

                        <ul class="breadcrumbs flex align-items-center">

                        </ul><!-- .breadcrumbs -->
                    </div><!-- entry-header -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->



    <div class="main-content">
        <div class="container">
            <div class="last-news">
                <div class="entry-header">
                    <div class="entry-title">
                      <p>KIITFEST 5.0</p>
                        <h2>QUIZFEST AND UDGHOSH</h2>
                    </div><!-- entry-title -->
                </div>

                <div class="row blog-list-page">
                    <div class="col-12 col-md-6 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="1.png" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="box-link-date">
                                <a href="http://tinyurl.com/udghosh19" target="_blank">No Registration Fee</a>
                            </div>

                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>Udghosh</h2>
                                </div><!-- entry-header -->

                                <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span>14/02/2019</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span>9:30AM- 05:00PM</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Bhubaneswar</span>
                                </div>

                                <div class="entry-description">
									<p>The battlefield waits in anticipation. The calm before the storm. One of the most testing, intense and yet fulfilling quizzing experiences awaits you.Belligerents from all over India will fight for the top prize with their full might. The stakes are high.
                                    </p>
                                </div><!-- entry-description -->

                                    <div class="container">
                      				<!-- Trigger the modal with a button -->
                     				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Explore More</button>
                                     <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(1001) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
                      				<!-- Modal -->
                      				<div class="modal fade" id="myModal" role="dialog">
                        				<div class="modal-dialog modal-lg">
                          					<div class="modal-content">

                          			<div class="modal-body" style="background-color: aqua;">
                                   <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                	<center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                	<center ><h5 style="color: black;"><br>
                           			<i style="font-family: Allura; font-weight: bold;"> QuizFest-Events</i></h5></center>
                              		<p style="color: black;"><center ><h3 style="color: black;">Udghosh 2018</h3></center>
                                	<hr style="border-color: black;">



<p style="color: black;"><b>Event Description:</b><br>The battlefield waits in anticipation. The calm before the storm. One of the most testing, intense and yet fulfilling quizzing experiences awaits you. Belligerents from all over India will fight for the top prize with their full might. The stakes are high. The stage is set. Do you have the nerve to get into battle with the best and the brightest open quizzers of India? You better get ready. This is the war cry.
<br><br>
<b>Rules and Regulations:</b><br>
This event shall comprise of two rounds:<br>
<b>Round 1 –</b> Written prelims having 25-30 questions. <br>
<b>Round 2 –</b> 8 top scoring teams from prelims qualify for final stage round. <br>
Open to all ages. From school students to undergraduates, graduates and corporate.<br>
Each team should consist of two members.<br>

<p style="color: black;"><b>Prizes: </b><br>
1st Prize- Rs 75000<br>
2nd Prize- Rs 50000<br>
3rd Prize- Rs 25000<br>
4th-8th place- Rs 5000<br>
Best college team- Rs 8000<br>
Best school teaam- Rs 5000<br>
Certificate for every participant and abundant audience prizes including various discount coupons.<br>
<br>
<b>Contacts:</b><br>
Shubham Saurav (7892801818)<br>
Alankar Devta (7381279653)<br>	
Email - qutopia 2018@gmail.com<br>
</p>
</p>
</p>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-6 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="2.png" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->



                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>Biz-tech Quiz</h2>
                                </div><!-- entry-header -->

                                <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span>15/02/2019</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span>09:00AM - 01:00 PM</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Bhubaneswar</span>
                                </div>


                                <div class="entry-description">
                                    <p>Do you know the founders of which company had considered the names "Cargo House" and "Pequod" before settling on the current name inspired by the book Moby Dick? Or what do we call a person opposed to any kind of technological innovation?
                                    </p>
                                </div><!-- entry-description -->

                                <div class="container">
                      				<!-- Trigger the modal with a button -->
                     				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Explore More</button>
                                     <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(1002) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
                      				<!-- Modal -->
                      				<div class="modal fade" id="myModal1" role="dialog">
                        				<div class="modal-dialog modal-lg">
                          					<div class="modal-content">

                          			<div class="modal-body" style="background-color: aqua;">
                                   <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                	<center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                              		<center ><h5 style="color: black;"><br>
                           			<i style="font-family: Allura; font-weight: bold;"> QuizFest-Events</i></h5></center>
                              		<p style="color: black;"><center ><h3 style="color: black;">FLAMES Quiz</h3></center>
                                	<hr style="border-color: black;">

<p style="color: black;"><b>Event Description:</b><br>Do you know the founders of which company had considered the names "Cargo House" and "Pequod" before settling on the current name inspired by the book Moby Dick? Or what do we call a person opposed to any kind of technological innovation? If these questions were a cake walk  for you then come join us at the Biz-Tech quiz and be a Star. Major Chandrakant Nair, the quizmaster for this quiz, has assured us that the questions will be a bang for your Buck.
<br><br>
<b>Rules and Regulations:</b><br>
This event shall comprise of two rounds:<br>
<b>Round 1 –</b> Written prelims having 25-30 questions. <br>
<b>Round 2 –</b> 8 top scoring teams from prelims qualify for final stage round. <br>
Maximum 2 students/team, PG and cross-college teams are allowed.
Any number of teams can participate from an institute.<br>

<p style="color: black;"><b>Prizes: </b><br>
1st Prize- Rs 12,000<br>
2nd Prize- Rs 8,000<br>
Finalists- Goodies and exciting vouchers.<br>
Certificate for every participant and abundant audience prizes.<br>
<br>
<b>Contacts:</b><br>
Shubham Saurav (8588005280)<br>
Alankar Devta (7381279653)<br>
</p>
</p>
</p>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>

                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-6 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="3.png" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->


                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>FLAMES Quiz</h2>
                                </div><!-- entry-header -->

                               <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span>16/02/2019</span>
                                    <span class="space">|</span>
				       <span class="space"><span>Time:</span>09:30AM - 02:00 PM</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Bhubaneswar</span>
                                </div>


                                <div class="entry-description">
                                    <p>This quiz will be conducted by the fiery Abhinav Dhar. Thrown into this quizzing crucible will be such varied topics as Food/Fashion, Literature, Arts/Architecture, Music, Entertainment, Sports</p>
                                </div><!-- entry-description -->

                                <div class="container">
                      				<!-- Trigger the modal with a button -->
                     				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Explore More</button>
                                     <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(1003) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
                      				<!-- Modal -->
                      				<div class="modal fade" id="myModal2" role="dialog">
                        				<div class="modal-dialog modal-lg">
                          					<div class="modal-content">

                          			<div class="modal-body" style="background-color: aqua;">
                                   <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                   </button>
                                	<center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                              		<center ><h5 style="color: black;"><br>
                           			<i style="font-family: Allura; font-weight: bold;"> QuizFest-Events</i></h5></center>
                              		<p style="color: black;"><center ><h3 style="color: black;">Biz-tech Quiz</h3></center>
                                	<hr style="border-color: black;">

<p style="color: black;"><b>Event Description:</b><br>This quiz will be conducted by the fiery Abhinav Dhar. Thrown into this quizzing crucible will be such varied topics as Food/Fashion, Literature, Arts/Architecture, Music, Entertainment, Sports. Let the burning questions come to you on the blazing bounces or answer them with passionate pounces. Come, participate and have your minds ignited. <br><br>
<b>Rules and Regulations:</b><br>
This event shall comprise of two rounds:<br>
<b>Round 1 –</b> Written prelims having 25-30 questions.<br>
<b>Round 2 –</b> 8 top scoring teams from prelims qualify for final stage round.<br>
Maximum 2 students/team, PG and cross-college teams are allowed.<br>
Any number of teams can participate from an institute.<br>

<p style="color: black;"><b>Prize Money worth: </b><br>
1st Prize- Rs 12,000<br>
2nd Prize- Rs 8,000<br>
Finalists- Goodies and exciting vouchers.<br>
Certificate for every participant and abundant audience prizes.<br>
<br>
<b>Contacts:</b><br>
Shubham Saurav (8588005280)<br>
Alankar Devta (7381279653)
<br>
</p>
</p>
</p>

                            </div>

                          </div>
                        </div>
                      </div>
                    </div>

                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->



                    <div class="col-12 col-md-6 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="4.png" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->



                            <div class="entry-content">
                                <div class="entry-header">
                                	<h2>Travel,Living,Culture</h2>
                                </div><!-- entry-header -->

                               <div class="entry-meta">
				       <span class="author-name"><span>Date:</span>15/02/2019</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span>01:30 PM - 05:00 PM</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Bhubaneswar</span>
                                </div>


                                <div class="entry-description">
                                    <p>The sanskaari Navin Rajaram, quizmaster for our quiz, is bringing us an edifying India, Travel and Culture quiz. Learn about our rich Indian heritage and be enthralled by questions on different world cultures.
									</p>
                                </div><!-- entry-description -->

                                <div class="container">
                      				<!-- Trigger the modal with a button -->
                     				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Explore More</button>
                                     <?php

             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(1004) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

              }
          ?>
                      				<!-- Modal -->
                      				<div class="modal fade" id="myModal3" role="dialog">
                        				<div class="modal-dialog modal-lg">
                          					<div class="modal-content">

                          			<div class="modal-body" style="background-color: aqua;">
                                   <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                   </button>
                                	<center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                              		<center ><h5 style="color: black;"><br>
                           			<i style="font-family: Allura; font-weight: bold;"> QuizFest-Events</i></h5></center>
                              		<p style="color: black;"><center ><h3 style="color: black;">Travel, Living and Culture</h3></center>
                                	<hr style="border-color: black;">

<p style="color: black;"><b>Event Description:</b><br>The sanskaari Navin Rajaram, quizmaster for our quiz, is bringing us an edifying India, Travel and Culture quiz. Learn about our rich Indian heritage and be enthralled by questions on different world cultures.<br><br>
<b>Rules and Regulations:</b><br>
This event shall comprise of two rounds:<br>
<b>Round 1 –</b>  Written prelims having 25-30 questions.
<br>
<b>Round 2 –</b> 8 top scoring teams from prelims qualify for final stage round.
<br>
Maximum 2 students/team, PG and cross-college teams are allowed.<br>
Any number of teams can participate from an institute.<br>
<p style="color: black;"><b>Prizes: </b><br>
1st Prize- Rs 12,000<br>
2nd Prize- Rs 8,000<br>
Finalists- Goodies and exciting vouchers.<br>
Certificate for every participant and abundant audience prizes.<br>
<br>
<b>Contacts:</b><br>
Shubham Saurav (8588005280)<br>
Alankar Devta (7381279653)
<br>
</p>
</p>
</p>

                            </div>

                          </div>
                        </div>
                      </div>
                    </div>

                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                </div><!-- blog-list-page -->
            </div><!-- last-news -->
        </div><!-- container -->
    </div><!-- main-content -->

    <footer class="site-footer">
        <div class="footer-cover-title flex justify-content-center align-items-center">
            <h2>KIITFEST </h2>
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

                           <a href="webteam.php"> KIITFEST 5.0 WEB TEAM</a>

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

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <script src="js/common.js"></script>
      <script src="js/accordiontest.js"></script>

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
        xhr.open("POST", "events/addToCart.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("itemId="+id);
		     swal("Congratulations!", "Sucessfuly Add To Cart", "success");

      }
    </script>
</body>
</html>
