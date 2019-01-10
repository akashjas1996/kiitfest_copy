<?php
include "./sql.php";
$sql = new sql();
?>

<link rel="stylesheet" href="css/main.css">
<header id="header" style1="background-color: rgba(000, 0, 0, 0.6);">
      <div class="container">
	<div class="row align-items-center justify-content-between d-flex">
	  <div id="logo">
	    <a href="index.php"><img src="img/logo_top_left.png" alt="" title="" style="height: 80px" /></a>
	  </div>
	  <nav id="nav-menu-container">
	    <ul class="nav-menu">
	      <!--li class="menu-active"><a href="#home">Home</a></li-->
	      <li><a href="#videos">Gallery</a></li>
	      <li><a href="#speakers">Guests</a></li>
	      <li><a href="webteam.php">Our Team</a></li>
	      <li><a href="contact.php">Contact Us</a></li>


	      <li> <a href="" data-toggle="modal" data-target="#myeventModal" class="">Events</a> </li>


	      <!--li class="menu-has-children"><a href="">Events</a>
	 <ul>
	 <li><a href="technical.php.back">Technical</a></li>
	 <li><a href="cultural.php">Cultural</a></li>
	 <li><a href="quizfest.php">Quiz</a></li>
	 </ul>
	 </li-->
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
	  </nav><!-- #nav-menu-container -->		    		
	</div>
      </div>
    </header><!-- #header -->