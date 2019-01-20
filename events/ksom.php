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
			School of Management

		    </div><!-- entry-header -->
		</div><!-- col-12 -->
	    </div><!-- row -->
	</div><!-- container -->
    </div><!-- page-header -->

    <div class="content" style="margin-top:20%;">

	<div class="row" style="margin-left:2%;margin-right:2%;" >
	<div class="col-md-4 col-sm-6">
	<div class="pricingTable11 green">
	  <div class="pricingTable-header" style="height:12rem">

	    <div class="price-value"><div style="margin:8px">Business</div>
	    <div>Simulation</div>
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
		<a onClick=addToCart(301) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

	      }
	  ?>
	</div>
      </div>
      </div>





	<div class="col-md-4 col-sm-6">
	<div class="pricingTable11 red">
	  <div class="pricingTable-header" style="height:12rem">

	    <div class="price-value"><div style="margin:8px">Dalal</div>
	    <div> Street</div>
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
		<a onClick=addToCart(302) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

	     }
?>
	</div>
      </div>
      </div>






      <div class="col-md-4 col-sm-6">
	<div class="pricingTable11 blue">
	  <div class="pricingTable-header" style="height:12rem">

	    <div class="price-value"><div style="margin:8px">Dare To</div>
	    <div> Face</div>
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
		<a onClick=addToCart(303) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

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

	    <div class="price-value"><div style="margin:8px">Ikadhikaar</div>
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
	  <a href="#" data-toggle="modal" data-target="#myModal4">Know More</a>
	  <?php

	     if($sql->isLogin() == 1)
	     {
	       echo '
		<a onClick=addToCart(304) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

	     }
?>
	</div>
      </div>
      </div>


       <div class="col-md-4 col-sm-6">
	<div class="pricingTable11 red">
	  <div class="pricingTable-header" style="height:12rem">

	    <div class="price-value"><div style="margin:8px">Milk Run</div>
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
	  <a href="#" data-toggle="modal" data-target="#myModal5">Know More</a>
<?php

	     if($sql->isLogin() == 1)
	     {
		     echo '
		<a onClick=addToCart(305) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

	      }
	  ?>
	</div>
      </div>
      </div>



      <div class="col-md-4 col-sm-6">
	<div class="pricingTable11 green">
	  <div class="pricingTable-header" style="height:12rem">

	    <div class="price-value"><div style="margin:8px">Synergy</div>
	    <div>Konflictus 5.0</div>
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
		<a onClick=addToCart(306) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

	     }
?>
	</div>
      </div>
      </div>


      </div><!--row-->

</div><!--content-->

<!--MODALS-->

  <!-- Modal 1 -->

		      <div class="modal fade" id="myModal1" role="dialog">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">

			    <div class="modal-body" style="background-color: aqua;">
				<button type="button" class="close" aria-label="Close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			      </button>
			       <center ><img style="size: 10px;" src="kiitfest_logo.PNG"></center>
			      <center ><h5 style="color: black;">School of Management <br>
			   <i style="font-family: Allura; font-weight: bold;"> KSOM-Events</i></h5></center>
				 <p style="color: black;"><center ><h3 style="color: black;">Business Simulation</h3></center>
			      <hr style="border-color: black;">

<p style="color: black;"><b>Description:</b><br> A scenario and numeric based game that tests the overall business acumen of teams in a competitive scenario.
 </p>
 <br>

 <p>
<b>Rules and regulations:</b><br>
<b style="color:black;"><b>Rules and regulations:</b><br></b>
<ul style="color: black;">
<li>Team should consist of minimum 2 members and maximum 3 members.

<li>There is no limit to the number of teams participating from an institute.

<li>A student cannot be part of more than one team.

<li>The members of teams cannot be from different institutes.

</ul>
</p>

<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 40,000<br>
<b>Contacts:</b><br>
Rittik Sarkar<br>
+918017126802<br>
17202039@ksom.ac.in<br>
<br>
Pras Khanna <br>
+919776922104 <br>
18202034@ksom.ac.in <br>
<br>

</p>
			    </div>

			  </div>
			</div>
		      </div>
<!--Modal  1 close-->
<!-- Modal 2-->
		      <div class="modal fade" id="myModal2" role="dialog">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">

			    <div class="modal-body" style="background-color: aqua;">
				<button type="button" class="close" aria-label="Close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			      </button>
			       <center ><img style="size: 10px;" src="kiitfest_logo.PNG"></center>
			      <center ><h5 style="color: black;">School of Management <br>
			   <i style="font-family: Allura; font-weight: bold;"> KSOM-Events</i></h5></center>
			       <p style="color: black;"><center ><h3 style="color: black;">Dalal Street</h3></center></p>
			      <hr style="border-color: black;">

<p style="color: black;"><b>Description:</b><br> Dalal Street is a game of virtual stock market where you build your portfolio and react to the market volatility. Make more investment to get more returns.
 </p>
 <br>

 <p>
<b style="color:black;">Rules and regulations:</b><br>
<ul style="color: black;">
<li> Participants participate individually.
<li> Participants would be provided with a laptop where there would be an online platform for virtual stock market trading.
<li> A virtual ID would be created of Rs.2500000 portfolio.
<li> Participants are required to buy or sell stocks according to their judgement.
<li> At the end of the trading, the one with a portfolio of Rs.2500000 or more wins.


</ul></p>

<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 20,000<br>
<b>Contacts:</b><br>
S Sonali Prusty<br>
+918763242043<br>
17202248@ksom.ac.in<br>
<br>

Nishan Agarwalla<br>
+918338075558 <br>
18202033@ksom.ac.in <br>

<br>

</p>

			    </div>

			  </div>
			</div>
		      </div>
       <!--MODAL  2 CLOSE-->

<!-- Modal 3-->
		      <div class="modal fade" id="myModal3" role="dialog">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">

			    <div class="modal-body" style="background-color: aqua;">

				<button type="button" class="close" aria-label="Close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			      </button>
			       <center ><img style="size: 10px;" src="kiitfest_logo.PNG"></center>
			      <center ><h5 style="color: black;">School of Management <br>
			   <i style="font-family: Allura; font-weight: bold;"> KSOM-Events</i></h5></center>
			      <p style="color: black;"><center ><h3 style="color: black;">Dare To Face</h3></center>
			      <hr style="border-color: black;">

<p style="color: black;"><b>Description:</b><br> A press conference scenario where the company's CEO, Product Manager and the Brand Manager come together to save the face of the Company for a product that has created havoc in the market. Only this time it's Do or Die.
 </p>
 <br>
 <p>
<b style="color:black;"><b>Rules and regulations:</b><br></b>
<ul style="color: black;">
<li> It will be a group event (3 members only).
<li> Cases will be given at time of the event.
<li> 15 minutes will be given to each team to prepare their strategies.
<li> The conference will be for a total of 30 minutes(excluding initial 15 minutes).
<li> Once the press conference starts teams will be given an initial 10 minutes to give their opening statements.
<li> This will be followed by 15 minutes of confrontation with the press.
<li> The conference will end with the closing statement made by the CEO for which an additional 5 minutes will be given.


</ul></p>

<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 20,000</p><br>
<p style="color: black;">
<b >Contacts:</b><br>
Rittik Sarkar<br>
+918017126802<br>
17202039@ksom.ac.in<br>
<br>
Pras Khanna <br>
+919776922104 <br>
18202034@ksom.ac.in <br>


<br>
</p>
</p>

			    </div>

			  </div>
			</div>
		      </div>
  <!--MODAL 3 CLOSED-->

<!-- Modal 4 -->
		      <div class="modal fade" id="myModal4" role="dialog">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">

			    <div class="modal-body" style="background-color: aqua;">
				<button type="button" class="close" aria-label="Close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			      </button>
			       <center ><img style="size: 10px;" src="kiitfest_logo.PNG"></center>
			      <center ><h5 style="color: black;">School Of Management <br>
			   <i style="font-family: Allura; font-weight: bold;"> KSOM-Events</i></h5></center>
			      <p style="color: black;"><center ><h3 style="color: black;">Ikadhikaar</h3></center>
			      <hr style="border-color: black;">

<p style="color: black;"><b>Description:</b><br> The strategic business game this will be a monopoly team based game with riddles and puzzles. Judgement will be based on the property valuation at the ends of both the rounds.</p>

 <br>

 <p style="color: black;">
<b style="color:black;"><b>Rules and regulations:</b><br></b>

Team of 4 members are allowed. One will throw the dice and others will strategize the move and game rules.<br>
Price of all properties will be hidden and can only be known after they solve a riddle provided.
There will be a limit on amount that can be spent by the teams in one round.<br>
Chance slot will have pick up chit system that will constitute of negative and positive task.<br>
Round 1:<br>
<ul style="color: black;">
<li> One team need to decide based on the amount whether to purchase the property or not.
<li> On the purchased property of any team, the other teams had to pay rent.
<li> Until the last team reaches the starting point the game goes on.
<li> The puzzles provided will be based on mind logics and reasoning.
</ul>
</p>

<p style="color: black;">Round 2:<br>
There will be a hidden growth percentage associated in all the properties.<br>
If a team wants to purchase any other property and they fall in scarce of the amount, then they need to auction their property. The winner in both the rounds will solely be decided based on the end of the entire round on the basis of the highest amount spent by the team in generating the properties + the earning of the team from their properties in terms of rent, mortgage.<br>
</p>




<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 20,000</p><br>

<p style="color: black;"><b>Contacts:</b><br>
Aditya Mitra<br>
8339840067<br>
17202072@ksom.ac.in<br>
<br>
Ujjwal Mahato<br>
9668219321<br>
18202070@ksom.ac.in<br>

<br>

</p>
</p>
			    </div>

			  </div>
			</div>
		      </div>
      <!--Modal 4 closed-->

 <!-- Modal 5 -->
		      <div class="modal fade" id="myModal5" role="dialog">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">

			    <div class="modal-body" style="background-color: aqua;">
				<button type="button" class="close" aria-label="Close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			      </button>
			       <center ><img style="size: 10px;" src="kiitfest_logo.PNG"></center>
			      <center ><h5 style="color: black;">School of Management <br>
			   <i style="font-family: Allura; font-weight: bold;"> KSOM-Events</i></h5></center>
			      <p style="color: black;"><center ><h3 style="color: black;">Milk Run</h3></center></p>
			      <hr style="border-color: black;">

<p style="color: black;"><b>Description:</b><br> Have you ever thought about how a milk man strategies his distribution. If not, then start thinking, register and participate.<br>
Event Based on Supply Chain Management. There will be five teams working as distributors with limited funds. They will be buying materials from warehouse and selling them to retailers by overcoming challenges of logistics.<br>
Participants will be learning about logistics, dead stock, limited working capital and supply chain</p>
 <br>
 <p>
<b style="color:black;"><b>Rules and regulations:</b><br></b>
<ul style="color: black;">
<li> Total team members: 4
<li> Each Team from all the participating team gets a lump sum and equal amount of money, which they will use to place order for raw materials.
<li> The vendor manages the order of the customers, notes the raw material requirement of customers and is assisted by the Material manager who keeps the stock in hand details and helps in receiving convenient orders as per availability of stock in warehouse.
<li>  Other two members of the team will be managing the flow of goods and cash in and out of warehouse.


</ul></p>

<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 20,000<br></p>

<p style="color: black;"><b>Contacts:</b><br>
Akriti Raj<br>
7504429751<br>
17202073@ksom.ac.in<br>
<br>
Shashi Sekhar Ray<br>
7980357048<br>
18202055@ksom.ac.in<br>

<br>

</p></p>
			 </div>

			  </div>
			</div>
		      </div>
	<!--MODAL 5 CLOSED-->

 <!-- Modal  6-->
		      <div class="modal fade" id="myModal6" role="dialog">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">

			    <div class="modal-body" style="background-color: aqua;">
				<button type="button" class="close" aria-label="Close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			      </button>
			       <center ><img style="size: 10px;" src="kiitfest_logo.PNG"></center>
			      <center ><h5 style="color: black;">School of Management <br>
			   <i style="font-family: Allura; font-weight: bold;"> KSOM-Events</i></h5></center>
			      <p style="color: black;"><center ><h3 style="color: black;">Synergy Konflictus 5.0</h3></center></p>
			      <hr style="border-color: black;">

<p style="color: black;"><b>Description:</b><br> Managing Human Capital is a key business function. Happy employees results in better productivity & greater growth. This game will give participants a firsthand feel of managing employees.</p>
 <br>

 <p>
<b style="color:black;"><b>Rules and regulations:</b><br></b>

<p style="color: black;">The Activity will be completed in 3 individual levels divided in level 1,2,3 respectively:</p>
<ol style="color: black;">

<li>The first level will be focusing on identifying and understanding the various situations presented in form of audio visual clipping that people are familiar with & usually came across in organization or with friends and family.
<li>The second level will focus on communication an integral part in anyone’s life, creative thinking and time management.
<li>The third level will be focusing on decision making and their approaches to situation to the situations observed in level 1 & 2 along with synergy with team members.
<li>Each level will be scored on various parameters and the team scoring maximum points win.
</ol></p>

<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 20,000<br></p>

<p style="color: black;">
<b>Contacts:</b><br>
Puja Singh<br>
7209248102<br>
17202177@ksom.ac.in<br>
<br>
Ashrita Das<br>
7330747346<br>
18202016@ksom.ac.in<br>

<br>

</p>
</p>
			    </div>

			  </div>
			</div>
		      </div>
      <!--MODAL 6 CLOSES-->


<!--END OF MODALS-->
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <br><br> <a href="webteam.html">KIITFest Web Team</a>

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
