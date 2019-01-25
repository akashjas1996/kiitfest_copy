<?php
include "sql.php";
$sql = new sql();
?>

	<!DOCTYPE html>
	<!--html lang="zxx" class="no-js"-->
	<script src="js/TimelineLite.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Cultural</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/accordion.css" />
    <link rel="stylesheet" href="css/fontawesome-all.min.css" />

		</head>
		<body>

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

			<section class="generic-banner relative" style="height: 300px">
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<!--div class="generic-banner-content">
								<h2 class="text-white">The Generic Page</h2>
								<p class="text-white">It won’t be a bigger problem to find one video game lover in your <br> neighbor. Since the introduction of Virtual Game.</p>
							</div-->
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

		<!-- About Generic Start -->
		<div class="main-wrapper">

        <?php include 'cultural_1.php';?>

			<!-- Start home-video Area -->
			<!--section class="home-video-area" id="about">
				<div class="container-fluid">
					<div class="row justify-content-end align-items-center">
						<div class="col-lg-4 no-padding about-right">
							<p class="top-title">Tutorial for beginner</p>
							<h1>Watch tutorial <br>
							Video of SaaS to start</h1>
							<p><span>We are here to listen from you deliver exellence</span></p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim.
							</p>
						</div>
						<section class="video-area col-lg-6 no-padding">
							<div class="overlay overlay-bg"></div>
							<div class="containers">
								<div class="video-content">
									<img class="img-fluid" src="img/about1.jpg" alt="">
								</div>
							</div>
						</section-->
					</div>
				</div>
			</section>
			<!-- End home-aboutus Area -->

			<!-- Start Generic Area -->
			<!--section class="about-generic-area section-gap">
				<div class="container border-top-generic">
					<h3 class="about-title mb-30">Elaboration about Generic Page</h3>
					<div class="row">
						<div class="col-md-12">
							<div class="img-text">
								<img src="img/a.jpg" alt="" class="img-fluid float-left mr-20 mb-20">
								<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking systems that accept players from the United States that wish to play in online casinos.</p>
							</div>
						</div>
						<div class="col-lg-12">
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking systems that accept players from the United States that wish to play in online casinos.</p>
						</div>
						<div class="col-lg-12">
							<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking systems that accept players from the United States that wish to play in online casinos.</p>
						</div>
						<div class="col-md-12">
							<div class="img-text">
								<img src="img/a2.jpg" alt="" class="img-fluid float-left mr-20 mb-20">
								<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking systems that accept players from the United States that wish to play in online casinos.</p>
							</div>
						</div>
					</div>
				</div>
			</section-->
			<!-- End Generic Start -->

			<!-- start footer Area -->
			<!--footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="footer-text">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

								</p>
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer-->
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>
			<script src="js/common.js"></script>
      <script src="js/accordiontest.js"></script>
		</body>
	</html>

	<style type="text/css">
		.generic-banner{
			background-color: black;
			background-image: url(new_img/cover_cultural.png);
			background-size: 100%;
			background-repeat: no-repeat;
		}
	</style>
