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
				<li><a href="../contact.php"></a></li>
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
		    <div class="entry-header">
		      School of BioTechnology

		    </div><!-- entry-header -->
		</div><!-- col-12 -->
	    </div><!-- row -->
	</div><!-- container -->
    </div><!-- page-header -->


    <div class="content" style="margin-top:10%;">
      <br><br>
	     <br>
       <div class="row" style="margin-left:2%;margin-right:2%;" >
	<div class="col-md-3 col-sm-6">
	<div class="pricingTable11">
	  <div class="pricingTable-header" style="height:12rem">

	    <div class="price-value"><div style="margin:8px">Cell-Lock</div>
	    <div>Holmes</div>
	  </div>
	</div>
	<h3 class="heading"></h3>
	<div class="pricing-content">
	  <ul>
	    <li><b>Venue</b> Coming soon</li>
	    <li><b>Schedule</b> Coming soon</li>
	    <li>Participation<b></b> Coming soon</li>
	  </ul>
	</div>
	<div class="pricingTable-signup">
	  <a href="#" data-toggle="modal" data-target="#myModal">Know More</a>
<?php

if($sql->isLogin() == 1)
{
	echo '
		<a onClick=addToCart(201) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

	      }
	  ?>
	</div>
      </div>
      </div>



	<div class="col-md-3 col-sm-6">
	<div class="pricingTable11 red">
	  <div class="pricingTable-header" style="height:12rem">

	    <div class="price-value"><div style="margin:8px">Chitra-a-ghar</div>
	    <div> </div>
	  </div>
	</div>
	<h3 class="heading"></h3>
	<div class="pricing-content">
	  <ul>
	    <li><b>Venue</b> Coming soon</li>
	    <li><b>Schedule</b> Coming soon</li>
	    <li><b>Participation</b> Coming soon</li>
	  </ul>
	</div>
	<div class="pricingTable-signup">
	  <a href="#" data-toggle="modal" data-target="#myModal1">Know More</a>
	  <?php

	     if($sql->isLogin() == 1)
	     {
	       echo '
		<a onClick=addToCart(202) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

	     }
?>
	</div>
      </div>
      </div>






      <div class="col-md-3 col-sm-6">
	<div class="pricingTable11 blue">
	  <div class="pricingTable-header" style="height:12rem">

	    <div class="price-value"><div style="margin:8px">Hackathon 5.0</div>
	    <div> </div>
	  </div>
	</div>
	<h3 class="heading"></h3>
	<div class="pricing-content">
	  <ul>
	    <li><b>Venue</b> Coming soon</li>
	    <li><b>Schedule</b> Coming soon</li>
	    <li><b>Participation</b> Coming soon</li>
	  </ul>
	</div>
	<div class="pricingTable-signup">
	  <a href="#" data-toggle="modal" data-target="#myModal2">Know More</a>
<?php

	     if($sql->isLogin() == 1)
	     {
		     echo '
		<a onClick=addToCart(203) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

	      }
	  ?>
	</div>
      </div>
      </div>

	 <div class="col-md-3 col-sm-6">
	<div class="pricingTable11">
	  <div class="pricingTable-header" style="height:12rem">

	    <div class="price-value"><div style="margin:8px">Jugaad Out of</div>
	    <div>  Kabaad</div>
	  </div>
	</div>
	<h3 class="heading"></h3>
	<div class="pricing-content">
	  <ul>
	    <li><b>Venue</b> Coming soon</li>
	    <li><b>Schedule</b> Coming soon</li>
	    <li><b>Participation</b> Coming soon</li>
	  </ul>
	</div>
	<div class="pricingTable-signup">
	  <a href="#" data-toggle="modal" data-target="#myModal3">Know More</a>
	<?php

	     if($sql->isLogin() == 1)
	     {
	       echo '
		<a onClick=addToCart(204) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

	     }
?>
	</div>
      </div>
      </div>



</div><!--row tag ends-->

	<div class="row" style="margin-left: 2%; margin-top: 10%;margin-right:2%;">
	  <div class="col-md-3 col-sm-6">
	<div class="pricingTable11 green">
	  <div class="pricingTable-header" style="height:12rem">

	    <div class="price-value"><div style="margin:8px">PainTerrific</div>
	    <div></div>
	  </div>
	</div>
	<h3 class="heading"></h3>
	<div class="pricing-content">
	  <ul>
	    <li><b>Venue</b> Coming soon</li>
	    <li><b>Schedule</b> Coming soon</li>
	    <li><b>Participation</b> Coming soon</li>
	  </ul>
	</div>
	<div class="pricingTable-signup">
	  <a href="#" data-toggle="modal" data-target="#myModal4">Know More</a>
<?php

	     if($sql->isLogin() == 1)
	     {
		     echo '
		<a onClick=addToCart(205) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

	      }
	  ?>
	</div>
      </div>
      </div>


       <div class="col-md-3 col-sm-6">
	<div class="pricingTable11">
	  <div class="pricingTable-header" style="height:12rem">

	    <div class="price-value"><div style="margin:8px">Pixeloscope</div>
	    <div></div>
	  </div>
	</div>
	<h3 class="heading"></h3>
	<div class="pricing-content">
	  <ul>
	    <li><b>Venue</b> Coming soon</li>
	    <li><b>Schedule</b> Coming soon</li>
	    <li><b>Participation</b> Coming soon</li>
	  </ul>
	</div>
	<div class="pricingTable-signup">
	  <a href="#" data-toggle="modal" data-target="#myModal5">Know More</a>
	  <?php

	     if($sql->isLogin() == 1)
	     {
	       echo '
		<a onClick=addToCart(206) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

	     }
?>
	</div>
      </div>
      </div>



      <div class="col-md-3 col-sm-6">
	<div class="pricingTable11 red">
	  <div class="pricingTable-header" style="height:12rem">

	    <div class="price-value"><div style="margin:8px">Shabd-War</div>
	    <div></div>
	  </div>
	</div>
	<h3 class="heading"></h3>
	<div class="pricing-content">
	  <ul>
	    <li><b>Venue</b> Coming soon</li>
	    <li><b>Schedule</b> Coming soon</li>
	    <li><b>Participation</b> Coming soon</li>
	  </ul>
	</div>
	<div class="pricingTable-signup">
	  <a href="#" data-toggle="modal" data-target="#myModal6">Know More</a>
<?php

	     if($sql->isLogin() == 1)
	     {
		     echo '
		<a onClick=addToCart(207) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;" href="#" data-toggle="modal" data-target="#myModal8">Add To Cart</a>';

	      }
	  ?>
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
			      <center ><h5 style="color: black;">School of Biotechnology <br>
			   <i style="font-family: Allura; font-weight: bold;"> Kinesis-Events</i></h5></center>
			      <p style="color: black;"><center ><h3 style="color: black;">Cell-Lock Holmes</h3></center>
				<hr style="border-color: black;">


<p style="color: black;"><b>Description:</b> “Absence of evidence is not evidence of absence.” Ever pictured the Sherlock Holmes or the Byomkesh Bakshi in you? Grab the opportunity to unleash your detective brains and solve the brainstorming puzzles!
  <br>
<b>Rules and regulation:</b><br>
This event shall comprise of two rounds:<br>
<b>Round 1 –</b> Each of the participants will be given a meme which would have names of basic biochemical compounds hidden in them. They need to solve the meme and submit their responses. <br>
<b>Round 2 –</b> Participants will be given case studies. The most suited analysis of the case takes away the prize.<br>
<b>Judging Criteria:</b><br>
<ul style="color: black;" >
<li>Maximum compound names cracked from meme.
<li>Least time taken to analyze the meme.
<li>The maximum number of hints cracked for reaching the final answer.
<li>Closeness to the exact answer.
<li>The minimum time taken to reach the final answer.</ul><br>
<p style="color: black;"><b>Prize Money worth: </b> &nbsp;Rs. 13,000<br>

			     <br>
<b>Contacts:</b><br>
Pamela Chanda Roy (9875487809)<br>
Soumitra Pathak (9674455405)
<br>
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
			      <center ><h5 style="color: black;">School of Biotechnology <br>
			   <i style="font-family: Allura; font-weight: bold;"> Kinesis-Events</i></h5></center>
			      <p style="color: black;"><center ><h3 style="color: black;">CHITR-A-GAR</h3></center>
			      <hr style="border-color: black;">


<p style="color: black;"><b>Description:</b><br> Ever wondered how amazing it would have been if you got to paint with a form of life! We unveil the most exciting event which lets you draw your imaginations out on plates. The single celled life form will eat up the food on the plate and it’s pattern of growth would be your pattern of art. <br>
<b>Rules and regulations:</b><br>
The registered participants have to streak, pour or spread the organism provided to them agar plates and draw designs on it.
After an incubation period of one day, the best-resulted art pattern sans-contamination shall be awarded.<br>
<b>Judging Criteria:</b><br>
<ul style="color: black;">
<li>Creativity/originality in technique, organism(s) used, and agar(s) used
<li>The overall artistry of design
 <li>Presentation
<li>The scientific accuracy of description
<li>Appropriateness/accessibility of description for a general audience</ul><br>
<p style="color: black;"><b>Prize money worth:</b>&nbsp Rs. 13,000<br>

		      <br>
<b>Contacts:</b><br>
Debanajana Maiti (8777586692)<br>
Soumitra Pathak (9674455405)<br>
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
			      <center ><h5 style="color: black;">School of Biotechnology <br>
			   <i style="font-family: Allura; font-weight: bold;"> Kinesis-Events</i></h5></center>
			      <p style="color: black;"><center ><h3 style="color: black;">Hackathon 5.0</h3></center>
			      <hr style="border-color: black;">


<p style="color: black;"><b>Description:</b><br> Bring your out-of-the-box ideas in this low-risk environment. Showcase the clever hacker that dwells in you and the one who has the highest endurance wins.
 <br>
<b>Rules and regulations:</b><br>
<ul style="color: black;">
<li>During registration, the participants will be given any problem or issue pertaining to the field of Biotechnology.
<li>This event which will last for 30hours which begins with each student pitching their unique solutions.
<li>The ones with similar ideas may or may not chose to team up.
<li>They will be given a duration of 24hours in which they need to work on their ideas which shall be followed by the participants having to showcase their work in the form of a model or poster and a presentation (compulsory).
</ul>
<br>
<b style="color: black;">Judging Criteria:</b><br>
<ul style="color: black;">
<li>The problem statement and its relevance to the theme.
<li>The innovativeness and practical applicability of the proposed hack.
 <li>Utility of the hack be it a process or a product.
<li>The commercialization potential and its scalability.
<li>Presentation of the overall idea.</ul><br>
<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 21,000<br>
<b>Contacts:</b><br>
Nilotpal Majumdar (8250869594)<br>
Soumitra Pathak (9674455405)<br>

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
			      <center ><h5 style="color: black;">School of Biotechnology <br>
			   <i style="font-family: Allura; font-weight: bold;"> Kinesis-Events</i></h5></center>
			       <p style="color: black;"><center ><h3 style="color: black;">Jugaad Out of Kabaad</h3></center>
			      <hr style="border-color: black;">


<p style="color: black;"><b>Description:</b><br> “Use it up, wear it out; Make it do or do without.”  In this event, let your creative hands and imaginative minds come together in sync and we’ll witness a burst of energies.
 <br>
<b>Rules and regulations:</b><br>
<ul style="color: black;">
<li>Participants will be provided with any trash material that may range from straws to pencil shaves.
<li>The materials shall be provided on a lucky draw basis which will form the primary raw materials for the making of final product.
<li>After a time period of 24hours, the participants are required to present a useful product. The one who makes the best will be declared the JUGADOO OF THE YEAR.
<li>They can use extra materials for beautification and decoration of the products.

</ul>
<br>
<b style="color: black;">Judging Criteria:</b><br>
<ul style="color: black;">
<li>The model/ thing should be able to give an insight and clarity of the theme to the viewer.
<li>The participants should create something with their own imagination and creativity.
 <li>The model/ thing should have an overall impression and should stand on its own as a complete and outstanding work of art.

 </ul><br>
<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 21,000<br>
<b>Contacts:</b><br>
Soumya Sristi Mahapatra (9937482817)
<br>
Soumitra Pathak (9674455405)<br>

</p>
</p>
</p>
			    </div>

			  </div>
			</div>
		      </div>

		      <!-- end of modal 4-->

		      <div class="modal fade" id="myModal8" role="dialog">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">

			    <div class="modal-body" style="background-color: aqua;">
			      <button type="button" class="close" aria-label="Close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			      </button>
			      <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
			      <center ><h5 style="color: black;">School of Biotechnology <br>
			   <i style="font-family: Allura; font-weight: bold;"> Kinesis-Events</i></h5></center>
			       <p style="color: black;"><center ><h3 style="color: black;">Illustory</h3></center>
			      <hr style="border-color: black;">


<p style="color: black;"><b>Description:</b><br>A team of two will comprise of a painter and a writer. A common topic will be given to all and one word, per group, that the writer has to use in their story. The painter in the group will have to depict the story in their painting or sketch.
 <br>
<b>Rules and regulations:</b><br>
<ul style="color: black;">
<li>Word selection for each group will be done by chit system.
<li>All stories must contain their allotted words.
<li>Once the writer is done with their story, they have to tap in their partners, and only then can painters start their work.
<li>Total time given to a team will strictly be 150 minutes.
<li>Plagiarism will result to immediate disqualification.




</ul>
<br>
<b style="color: black;">Judging Criteria:</b><br>
<b style="color:black">Writing</b>
<ul style="color: black;">
<li>Creativity (10)
 <li>Construction(10)
 <li>Relevance with topic and use of allotted word (10)
	<br>
</ul>
 <b style="color:black">Painting</b>
<ul style="color: black;">
<li>Creativity (10)
 <li>Relevance to story(10)
 </ul>
 <b style="color:black">Time utilisation(5)</b>


 <br>
<p style="color: black;"><b>Prize money worth:</b><br> &nbsp;1st Prize: Rs. 12,000<br>2nd Prize: Rs 8000 <br>
<b>Contacts:</b><br>
Swagatika (7873632732)
<br>
Anuttama (90733 60613) <br>

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
			      <center ><h5 style="color: black;">School of Biotechnology <br>
			   <i style="font-family: Allura; font-weight: bold;"> Kinesis-Events</i></h5></center>
			       <p style="color: black;"><center ><h3 style="color: black;">Pixeloscope</h3></center>
			      <<hr style="border-color: black;">


<p style="color: black;"><b>Description:</b><br> Art and thus, photography can exist in any form. Presenting to you Pixeloscope- the event where you do Microscope photography to create MICROGRAPHS.

 <br>
<b>Rules and regulations:</b><br>
<ul style="color: black;">
<li>Individual Submissions. Each entrant may submit up to three images in each contest for judging.
<li>Photos at least 8" x 10" at 300 dpi.
<li>Photographed safely in the appropriate Bio Safety Level environment for the organism(s) used. For more information, please consult LABORATORY GUIDELINES FOR BIOSAFETY IN TEACHING LABORATORIES and the APPENDIX TO THE GUIDELINES.
<li> New and original, not seen/posted on the internet before or previously published or displayed elsewhere.
<li>Digitally untouched or minimally edited to improve clarity of the photo. No other artificial enhancements or manipulations (e.g. false coloring) are permitted.
<li> Macro photography is not permitted.
<li> ALL THE PHOTOS MUST BE EMAILED BY DEADLINE (to be updated)

</ul>
<br>
<b style="color: black;">Judging Criteria:</b><br>
<ul style="color: black;">
<li>Originality
<li>Informational Content
 <li>Technical Proficiency
 <li>Artistic and Visual Impact.

 </ul><br>
<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 13,000<br>
<b>Contacts:</b><br>
Ishita Ghosh (8777482453)
<br>
Soumitra Pathak (9674455405)<br>

</p>
</p>
</p>
			    </div>

			  </div>
			</div>
		      </div>

		      <!-- end of modal 6-->

		      <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">

			    <div class="modal-body" style="background-color: aqua;">
			      <button type="button" class="close" aria-label="Close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			      </button>
			      <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
			      <center ><h5 style="color: black;">School of Biotechnology <br>
			   <i style="font-family: Allura; font-weight: bold;"> Kinesis-Events</i></h5></center>
			      <p style="color: black;"><center ><h3 style="color: black;">Cell-Lock Holmes</h3></center>
				<hr style="border-color: black;">


<p style="color: black;"><b>Description:</b> “Absence of evidence is not evidence of absence.” Ever pictured the Sherlock Holmes or the Byomkesh Bakshi in you? Grab the opportunity to unleash your detective brains and solve the brainstorming puzzles!
  <br>
<b>Rules and regulation:</b><br>
This event shall comprise of two rounds:<br>
<b>Round 1 –</b> Each of the participants will be given a meme which would have names of basic biochemical compounds hidden in them. They need to solve the meme and submit their responses. <br>
<b>Round 2 –</b> Participants will be given case studies. The most suited analysis of the case takes away the prize.<br>
<b>Judging Criteria:</b><br>
<ul style="color: black;" >
<li>Maximum compound names cracked from meme.
<li>Least time taken to analyze the meme.
<li>The maximum number of hints cracked for reaching the final answer.
<li>Closeness to the exact answer.
<li>The minimum time taken to reach the final answer.</ul><br>
<p style="color: black;"><b>Prize Money worth: </b> &nbsp;Rs. 13,000<br>

			     <br>
<b>Contacts:</b><br>
Pamela Chanda Roy (9875487809)<br>
Soumitra Pathak (9674455405)
<br>
</p>
</p>
</p>
			    </div>

			  </div>
			</div>
		      </div>



		       <!-- Modal -->
		      <div class="modal fade" id="myModal6" role="dialog">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">

			    <div class="modal-body" style="background-color: aqua;">
			      <button type="button" class="close" aria-label="Close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
			      </button>
			      <center ><img style="size: 10px;" src="kiitfest_logo.png"></center>
			      <center ><h5 style="color: black;">School of Biotechnology <br>
			   <i style="font-family: Allura; font-weight: bold;"> Kinesis-Events</i></h5></center>
			       <p style="color: black;"><center ><h3 style="color: black;">Shabd-War</h3></center>
			      <hr style="border-color: black;">


<p style="color: black;"><b>Description:</b><br> “Prove me wrong, prove me right; it’s the fight of words and thus, I shall strive.” A general event to involve the views of students from each and every field with topics pertaining to Life Sciences background. Tighten your belts, mates! This ride will be worth the take.

 <br>
<b>Rules and regulations:</b><br>
<ul style="color: black;">
<li><b>Round 1:</b><br>
Turncoat round: each speaker gets 60 seconds for speaking for the motion and 60 seconds for against the motion.
Preparation time 10 mins.
<li><b>Round 2:</b><br>
Classical debate.
Participants will be paired with a random opponent and each have to speak either for or against the motion. Preparation time 15min. Each participant will be given 5 minutes to speak on it.




</ul>
<br>
<b style="color: black;">Judging Criteria:</b><br>
<ul style="color: black;">
<li>Time utilisation
<li>Relevance to topic
<li>Content (structure, points, facts/statistics, recent studies etc.)
<li>Response to rebuttals
<li>Bonus: opponent rebuttal
<li>Penalty: exceeding time limit


 </ul><br>
<p style="color: black;"><b>Prize money worth:</b> &nbsp; Rs. 13,000<br>
<b>Contacts:</b><br>
Anuttama Pal (9073360613)
<br>
Soumitra Pathak (9674455405)<br>

</p>
</p>
</p>

			    </div>

			  </div>
			</div>
		      </div>

		      <!-- end of modal 7-->




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
