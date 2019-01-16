<?php
include "sql.php";
$sql = new sql();
?>
<!DOCTYPE html>
<html>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66101749-2"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-66101749-2');
</script>

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
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">


    <title>KIIT FEST 5.0</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/common.css">

      <link rel="stylesheet" href="css/linearicons.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/nice-select.css">
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="css/main.css">
  </head>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



<body style="background-image: url(images/bg.jpg); overflow-x: hidden;">

<header id="header" id="home" style1="background-color: rgba(000, 0, 0, 0.6);">
			    <div class="container" >
				<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
					<a href="index.php"><img src="img/logo.png" alt="" style="height:100px" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
					<ul class="nav-menu">
					  <li class="menu-active"><a href="index.php#home">Home</a></li>
					  <li><a href="https://kiitfest.org/cultural.php">Cultural</a></li>
				  <li><a href="quizfest.php">QuizFest</a></li>
					<li><a href="webteam.php">Our Team</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<?php
	 	if($sql->isLogin()==1)
    {
      echo '<li><a class="ticker-btn" href="events/checkout.php">CHECKOUT</a></li>';
      echo '<li><a class="ticker-btn" href="logout.php">LOGOUT</a></li>';
		}
		else{
			echo '<li><a class="ticker-btn" href="signup.php">Register</a></li>';
			echo '<li><a class="ticker-btn" href="login.php">Log In</a></li>';
		}
    ?>

      </ul>
      </div>
    </header>


<div class="container">
	 <div class="row">
		<div class="col-12">
		    <div class="the-complete-lineup">
			<div class="entry-title">
			    <p></p>
			    <h2 style="color: white;"></h2>
			</div><!-- entry-title -->

			<div class="row the-complete-lineup-artists">
			    <div class="col-6 col-md-4 col-lg-3 artist-single">
				<figure class="featured-image">
				    <a href="events/electrifyn.php"> <img src="img/electrifyn.jpg" alt=""> </a>
				    <a href="events/electrifyn.php" class="box-link"> <img src="" alt=""> </a>
				</figure><!-- featured-image -->

				<a href="events/electrifyn.php"><h2 style="color: white;">ELECTRIFYN</h2></a>
				<center><div style="color: white;">School of Electrical Engineering</div></center>
			    </div><!-- artist-single -->

			    <div class="col-6 col-md-4 col-lg-3 artist-single">
				<figure class="featured-image">
				    <a href="events/kinesis.php"> <img src="img/kinesis.png" alt=""> </a>
				    <a href="events/kinesis.php" class="box-link"> <img src="" alt=""> </a>
				</figure><!-- featured-image -->

				<a href="events/kinesis.php"><h2 style="color: white;">KINESIS</h2></a>
				<center><div style="color:white;">School of Biotechnology</div></center>
			    </div><!-- artist-single -->

			    <div class="col-6 col-md-4 col-lg-3 artist-single">
				<figure class="featured-image">
				    <a href="events/ksom.php"> <img src="img/kiit.jpg"  alt=""> </a>
				    <a href="events/ksom.php" class="box-link"> <img src="" alt=""> </a>
				</figure><!-- featured-image -->

				<a href="events/ksom.php"><h2 style="color: white;">KSOM</h2></a>
				<center><div style="color:white;">School of Management </div></center>
			    </div><!-- artist-single -->

			    <div class="col-6 col-md-4 col-lg-3 artist-single">
				<figure class="featured-image">
				    <a href="events/luminaire.php"> <img src="img/luminaire.png" alt=""> </a>
				    <a href="events/luminaire.php" class="box-link"> <img src="" alt=""> </a>
				</figure><!-- featured-image -->

			       <a href="events/luminaire.php"> <h2 style="color: white;">LUMINAIRE</h2></a>
			       <center><div style="color:white;">School of Computer Science </div></center>
			    </div><!-- artist-single -->

			    <div class="col-6 col-md-4 col-lg-3 artist-single">
				<figure class="featured-image">
				    <a href="events/mirabilia.php"> <img src="img/mirabilia.png" alt=""> </a>
				    <a href="events/mirabilia.php" class="box-link"> <img src="" alt=""> </a>
				</figure><!-- featured-image -->

				<a href="events/mirabilia.php"><h2 style="color: white;">MIRABILIA</h2></a>
				 <center><div style="color:white;">School of Computer Application </div></center>
			    </div><!-- artist-single -->

			    <div class="col-6 col-md-4 col-lg-3 artist-single">
				<figure class="featured-image">
				    <a href="events/nirminite.php"> <img src="img/nirminite.png"  alt=""> </a>
				    <a href="events/nirminite.php" class="box-link"> <img src="" alt=""> </a>
				</figure><!-- featured-image -->

				<a href="events/nirminite.php"><h2 style="color: white;">NIRMINITE</h2></a>
				<center><div style="color:white;">School of Civil Engineering </div></center>

			    </div><!-- artist-single -->

			    <div class="col-6 col-md-4 col-lg-3 artist-single">
				<figure class="featured-image">
				    <a href="events/vidnan.php"> <img src="img/vidnan.png" alt=""> </a>
				    <a href="events/vidnan.php" class="box-link"> <img src="" alt=""> </a>
				</figure><!-- featured-image -->

				<a href="events/vidnan.php"><h2 style="color: white;">VIDNAN</h2></a>
				<center><div style="color:white;">School of Electronics Engineering</div></center>
			    </div><!-- artist-single -->

			    <div class="col-6 col-md-4 col-lg-3 artist-single">
				<figure class="featured-image">
				    <a href="events/yantriki.php"> <img src="img/yantriki.png" alt=""> </a>
				    <a href="events/yantriki.php" class="box-link"> <img src="" alt=""> </a>
				</figure><!-- featured-image -->

				<a href="events/yantriki.php"><h2 style="color: white;">YANTRIKI</h2></a>
				<center><div style="color:white;">School of Mechanical Engineering</div></center>
			    </div><!-- artist-single -->
			</div><!-- the-complete-lineup-artists -->


		    </div><!-- the-complete-lineup -->
		</div><!-- col-12 -->
	    </div><!-- row -->
	</div>
	<br><br>

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

			     <a href="./webteam.php"> KIITFEST 5.0 WEB TEAM</a>

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

    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>


	</body>
	</html>
