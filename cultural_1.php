
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


    <title>CULTURAL | KIITFEST 5.0</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="blog-page">
    <!--header class="site-header">
        <div class="header-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-10 col-lg-4">
                        <h1 class="site-branding flex">
                            <a href="index.php"><img src="img/kiitfest_logo.png" alt="kiitfest logo" height="85px">
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
                            </div>

                            <ul>
                                <li><a href="https://kiitfest.org" style="color:black;">HOME</a></li>
                                <li><a href="technical.php" style="color:black;">TECHNICAL</a></li>
                                
                                <li><a href="quizfest.php" style="color:black;">QUIZFEST</a></li>
                                <li><a href="webteam.php" style="color:black;">OUR TEAM</a></li>
                                <li><a href="contact.php" style="color:black;">CONTACT</a></li>
                                <li>                                    <?php 
                                if($sql->isLogin()==1)
                                    {
                                      echo '<li><a href="events/checkout.php">CHECKOUT</a></li>';
                                        echo '<li><a href="logout.php">LOGOUT</a></li>';
                                        
                                    }
                                ?></li>
              
                            </ul><!-- flex -->
                        </nav><!-- .site-navigation -->
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- container-fluid -->
        </div><!-- header-bar -->
    </header--><!-- .site-header -->

    <!--div class="page-header" style="background-image: url(images/bg.jpg); ">
    </div--><!-- page-header -->

    <div class="main-content">
        <div class="container">
            <div class="last-news">
                <div class="entry-header">
                    <div class="entry-title">
                        <p>KIITFEST 5.0</p>
                        <h2>CULTURAL</h2>
                    </div><!-- entry-title -->
                </div>

                <div class="row blog-list-page">
                    <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="img/works/frozen in time.png" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->
                            
                            

                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>FROZEN IN TIME</h2>
                                </div><!-- entry-header -->

                                <div class="entry-meta">
                                    <span hclass="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span> Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Coming soon</span>
                                </div>

                                <div class="entry-description">
                                    <p style="text-align: justify;">A pencil, a brush & few colors or sometimes may be just one of these is enough to create a piece  of art that can make people stop and wonder. Our aim this time is...</p>
                                </div><!-- entry-description -->
                                <!-- Trigger the modal with a button -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Know More</button>
                      <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(901) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>
                      <!-- Modal -->
                      <div class="modal fade" id="myModal1" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-body"  style="background-color: aqua;">
                                  <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                              <center ><h5 style="color: black;">CULTURAL<br></h5></center>


                                <center>
                                    <h3 style="color:black;">FROZEN IN TIME</h3>
                                </center>
                                                      <hr style="border-color: black;">

                             <p style = "float: left; text-align: justify;" >

                                 <b> Description of the Event:</b>
A pencil, a brush & few colors or sometimes may be just one of these is enough to create a piece  of art that can make people stop and wonder. Our aim this time is to stop not just at wondering but   create such pieces that make people wonder and reflect on themselves as well as their near and dear ones and the lifestyle they are leading. Something which can bring about a change and can make a positive impact on people and it’s surrounding(socially) and which can give a new outlook towards living thus creating a constructive effect in our time, is decided as the theme of our event.
<br>
<br></p>

<p style="color: black;">
<b>Rules and Regulations:</b>
<ol style="color:black;list-style-type:1;">
<li>Max 2 members can be in a team during participation.</li>
<li>Individual registration is to be done by the members.</li>
<li>Topic will be given on spot before the beginning of the competition.</li>
<li>Time allotted to each team will be 60 minutes.</li>
<li>Canvas or Chart papers will be provided on the spot.</li>
<li>Participants need to bring their own materials needed for painting. Any type of colour is allowed.</li>
<li>Use of mobile phones and internet is strictly prohibited.</li>
<li>Events registration will be closed 10 days prior to the main fest.</li>
</ol>
<br>
<b>JUDGEMENT CRITERIA</b>
<ol style="color:black;list-style-type:1;">

<li>Interpretation and the clarity of the theme(a social issue that needs to be looked into  which has been neglected till now,eg:section 377 or section 497 which has been newly formed) to the viewer.
</li>
<li>Creativity and originality of the depicted theme.</li>
<li>Quality of artistic composition and overall design based on the theme.</li>
<li>Overall impression of art.
</li>

</ol>

</p>

<p style="color: black;">
<b>PRIZE MONEY: RS 20000</b><br>
</p>

<p style="color: black;list-style-type:1;float: left;"><b>Contact with phone numbers:</b><br>
Angana Majumder        (7873877305) <br>  Sayan Sarkar (9431770604)
 <br>   Pratik Sahoo                 (9938868613)





                              </p>
                          </p>
                            </div>

                          </div>
                        </div>
                      </div>
                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="img/works/mismatch.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            

                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>MISMATCH - The Masterchef Event</h2>
                                </div><!-- entry-header -->

                               <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span> Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Coming soon</span>
                                </div>

                                <div class="entry-description">
                                    <p style="text-align: justify;">Did you ever wonder why Vasco Da Gama ended up discovering India? What was so special about a rarely known piece of land...</p>
                                </div><!-- entry-description -->
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Know More</button>
                                  <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(902) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>

                                  <!-- Modal -->
                                  <div class="modal fade" id="myModal2" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">

                                        <div class="modal-body"  style="background-color: aqua;">
                                              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                          <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                          <center ><h5 style="color: black;">CULTURAL<br></h5></center>


                                            <center>
                                                <h3 style="color:black;">MISMATCH - The Masterchef Event</h3>
                                            </center>
                                                                  <hr style="border-color: black;">

                                            <p style="color: black; text-align: justify;">

                                             <b> Description of the Event:</b>
                                             Did you ever wonder why Vasco Da Gama ended up discovering India? What was so special about a rarely known piece of land that the world went bonkers on finding it?
                                   <strong>Spices aka Masala.</strong>
                                   Yes, Masala does add taste to anything you eat and tickles your sensation in its own way. We want to discover the Masterchef inside you and participate in this event to have some fun and play with food with some creative and innovative cuisines of your choice.So, take out the cutlery, strap on the apron, pack all of them ingredients and a pinch of your secret! Light the burner, smoke the chimney, stir the pan and taste that gravy.And don't you worry, even your Maggi is better than many a curry! Ladies and gentlemen, MISMATCH is on! The kitchen is set and the flames are on. Where are you hiding now?
            <br>
            <br></p>

            <p style="color: black;">
            <b>Rules and Regulations:</b>
            <ol style="color:black;list-style-type:1;float: center;">
            <li>Max 3 members and Min 1 member in a team is allowed. All the members should be of same School/College/University.</li>
            <li>2 Rounds of event. 1st Round - KNOW YOUR INGREDIENT and 2nd Round - LIVE COOKING.</li>
            <li>A Black box will be provided to each selected team in 2nd Round using which they need to cook.</li>
            <li>1st Round - Know your ingredient, Duration - 30 min and 2nd Round - Live Cooking, Duration - 1 hr 30 min</li>
            <li>Judges decision will be final and no discrepancy will be done later.</li>
            <li>2 team winners will be selected from final round.</li>
            <li>Participants need not to bring any utensils, cutlery, food or spices with them; if found will be disqualified. You can bring your apron.</li>
            <li>It is a 2 day event. 1st Round will take place in the evening of 1st Day of KIITFEST and 2nd Round will start from Morning of 2nd Day of KIITFEST..</li>
            </ol>
            <br>
            <b>JUDGEMENT CRITERIA</b>
            <ol style="color:black;list-style-type:1;float: center;">

            <li>Top 10 teams will be selected from 1st Round according to their knowledge regarding food.
            </li>
            <li>Know your ingredient questionnaire will be prepared by an expert in Food & Hospitality.</li>
            <li>1st Round will be evaluated by in-house judges.</li>
            <li>2nd Round - Live Cooking will be judged by 3 Professional Chefs of 3/5 star Hotels of Bhubaneswar.
            </li>
            <li> Preparation Method, Knowledge, Creativity, Taste & Quality</li>
            <li>Judges decision will be final.</li>

            </ol>

            </p>

            <p style="color: black;">
            <b>PRIZE MONEY: RS 30000</b><br>
            </p>

            <p style="color: black;list-style-type:1;float: center;"><b>Contact with phone numbers:</b><br>
              Braja Kishore Mishra (9438888388)<br>
              Paulami Das (9830311058)
            </p>




                                          </p>
                                        </div>

                                      </div>
                                    </div>
                                  </div>


                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="img/works/open sesame.png" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                           
                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>Open Sesame</h2>
                                </div><!-- entry-header -->

                               <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span> Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Coming soon</span>
                                </div>

                                <div class="entry-description">
                                    <p style="text-align: justify;">Open Sesame is our take on combining writing skills and oration, emoting with words and expressing with your voice in a unique poetry slam....</p>
                                </div><!-- entry-description -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Know More</button>
                                <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(903) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>


                                <!-- Modal -->
                                <div class="modal fade" id="myModal3" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                      <div class="modal-body"  style="background-color: aqua;">
                                          <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                        <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                        <center ><h5 style="color: black;">CULTURAL<br></h5></center>

                                          <center>
                                              <h3 style="color:black;">Open Sesame</h3>
                                          </center>
                                                                <hr style="border-color: black;">

                                          <p style="color: black; text-align: justify;">

                                           <b> Description of the Event:</b>
                                           Open Sesame is our take on combining writing skills and oration, emoting with words and expressing with your voice in a unique poetry slam.<br><br>
 It is a 2 round event with participants performing their own original poetry, showcasing their writing and curating auras out in the open.

                                <br>
                                <br></p>

                                <p style="color: black;">
                                <b>Rules and Regulations:</b>
                                <ul style="none;float:left;">
                                <li>Each participant would have to submit both their poems for plagiarism check before a pre-decided date.</li>
                                <li>Each performance would have to be completed in 2+1 minutes, exceeding which the participants would be penalized.</li>
                                <li>Reading out or reciting from a phone/paper is allowed.</li>
                                <li>The top 10 performers from round 1 would advance to round 2 and would perform their 2nd poem and the top 3 would be decided.</li>
                              </ul>
                                <br><br><br>
                                <b>JUDGEMENT CRITERIA</b><br><br>
                                  <ul style="color:black;float:left;">
                                    <li>External judges would be there to judge the participants as per pre-decided criterias.</li>
                                  </ul>

                                </p><br><br>
                                <p style="color: black;">
                                <b>PRIZE MONEY</b><br><br>
                                <b>Winner</b>: Rs. 6000 <br>
                                <b>Runner Up</b>: Rs. 4000 <br>
                                <b>Second Runner Up</b>: Rs. 3000 <br>
                                </p>

                                <p style="color: black;list-style-type:1;float: center;"><b>Contact with phone numbers:</b><br>
                                Arka Saha    (Ph. No.-7044067788)
                                <br>Sharmistha Mohanty               (Ph. No.-7504874066)<br>
                                Sonali Ankita Mohapatra               (Ph. No.- 9930696042)





                                        </p>
                                      </div>

                                    </div>
                                  </div>
                                </div>




                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="img/works/nach.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                          

                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>Zara Nachke Dikha</h2>
                                </div><!-- entry-header -->

                               <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span>Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Coming soon</span>
                                </div>

                                <div class="entry-description">
                                    <p style="text-align: justify;">As the name suggests, Zara Nachke Dikha is a dance event focused upon all sorts...</p>
                                </div><!-- entry-description -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">Know More</button>
                                <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(904) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal4" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                      <div class="modal-body"  style="background-color: aqua;">
                                          <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                        <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                        <center ><h5 style="color: black;">CULTURAL<br></h5></center>


                                          <center>
                                              <h3 style="color:black;">Zara Nachke Dikha</h3>
                                          </center>
                                                                <hr style="border-color: black;">

                                          <p style="color: black; text-align: justify;">

                                           <b> Description of the Event:</b>
                                          As the name suggests, Zara Nachke Dikha is a dance event focused upon all sorts of opportunities for the people willing to participate and showcase their talent in the field of dance. We have got solo, duet and group dance competitions with their respective rules and regulations.
                                <br>
                                <br></p>

                                <p style="color: black;">
                                <b>General Rules</b>
                                <ul style="list-style-type:1;text-align: left;">
                                  <li>A valid College/ School ID card is required at the time of Registration.</li>
                                  <li>Multiple teams/participants per college are allowed.</li>
                                  <li>Cross-college participation is allowed</li>
                                  <li>Props and Costumes have to be brought by the teams themselves. </li>
                                  <li>The loss of or damage to props is not the responsibility of the organizers.</li>
                                  <li>Pre-recorded music should be brought in a PEN DRIVE in *.mp3 format only (Any other formats shall not be entertained) Teams/Participants must follow the time limit; failing to do so shall lead to disqualification.</li>
                                  <li>In the event, if a routine is interrupted because of failure of equipment, facilities, etc., then the participant(s) affected will be permitted to restart the routine from the beginning.</li>
                                  <li>Any kind of fluid, flame, vehicle or live animals is not allowed on stage.</li>
                                  <li>Obscenity of any kind is not allowed and will lead to immediate disqualification.</li>
                                  <li>The decision of the concerned Judges and Faculty Coordinators shall be final and binding.</li>
                                  <li>Live Music is not allowed.</li>
                                </ul>
                                <br><br><br>
                                <b>RULES FOR GROUP:</b>
                                <ul style="list-style-type:1;text-align: left;">
                                  <li>Minimum 4 on stage at all point during the performance.</li>
                                  <li>There is no maximum team limit but if the team members Exceed 30 then a separate mail has to be sent to the event heads or to the organizers notifying the same.</li>
                                  <li>Time limit- 8+2 min (Entry to Exit)</li>
                                  <li>There will be only ONE ROUND.</li>
                                </ul>


                                <br><br><br>
                                <b>JUDGING CRITERIA FOR GROUP:</b>
                                <ul style="list-style-type:1;text-align: left;">
                                  <li>Choreography, Co-ordination, Creativity, and originality will be given more weightage, Prop utilization (if any), Stage Utilization, Theme relevance.</li>
                                </ul>
                                </p>

                                <p style="color: black;">
                                <b>PRIZE DISTRIBUTION FOR GROUP:</b><br><br>
                                <b>1st prize</b>- 20,000 INR<br>
                                <b> 2nd prize</b>- 10,000 INR
                                </p>


                                <p style="color: black;">
                                <b>RULES FOR SOLO:</b><br><br>
                                <b>First Round:</b><br><br>
                                Online video submission. The last date is 15th December. Participants should send their videos to soloentries2018@gmail.com <br>
<b>Time limit</b> - 2 min (maximum)<br>
<b>Genre</b> - Any Dance Form <br><br><br>

<b>Final Round:</b><br><br>

<b>Time limit</b>  - 3+1 min <br>
<b>Genre</b> - Any Dance Form <br>

<br><br><br>
<b>JUDGING CRITERIA FOR SOLO:</b>
<ul style="list-style-type:1;text-align: left;">
  <li>Facial expression and Body Language, Choreography Creativity and Presentation, Overall clarity and impact, Prop utilization(If any), Versatility and Beat sense.</li>
</ul>


                                <p style="color: black;">
                                <b>PRIZE DISTRIBUTION FOR SOLO:</b><br><br>
                                <b>1st prize</b>- 2000 INR<br>
                                <b> 2nd prize</b>- 1000 INR
                                </p>

                                </p>
                                <br><br><br>
                                <b>JUDGING CRITERIA FOR DUET:</b>
                                <ul style="list-style-type:1;text-align: left;">
                                  <li>Facial expression and Body Language, Choreography Creativity and Presentation, Overall clarity and impact, Prop Utilization(must), Versatility and Beat sense.</li>
                                </ul>


                                                                <p style="color: black;">
                                                                <b>PRIZE DISTRIBUTION FOR DUET:</b><br><br>
                                                                <b>1st prize</b>- 4,000 INR<br>
                                                                <b> 2nd prize</b>- 3,000 INR
                                                                </p>

                                <p style="color: black;list-style-type:1;float: center;"><b>Contact with phone numbers:</b><br>
                                Aradhya-9648753567 <br>
                                Rajat-9560838776 <br>
Srinjoyi-9903521904 <br>
Peenal-9078802826 <br>






                                        </p>
                                      </div>

                                    </div>
                                  </div>
                                </div>




                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"><img src="img/works/tell a tale.png" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                           
                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>Tell A Tale</h2>
                                </div><!-- entry-header -->

                               <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span> Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span>Coming soon</span>
                                </div>

                                <div class="entry-description">
                                    <p style="text-align: justify;">This event is an online flash fiction competition hosted, in collaboration with The Poets Weed (TPW)...</p>
                                </div><!-- entry-description -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Know More</button>
                                <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(905) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal5" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                      <div class="modal-body"  style="background-color: aqua;">
                                          <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                        <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                        <center ><h5 style="color: black;">CULTURAL<br></h5></center>


                                          <center>
                                              <h3 style="color:black;">Tell a Tale</h3>
                                          </center>
                                                                <hr style="border-color: black;">

                                          <p style="color: black; text-align: justify;">

                                           <b> Description of the Event:</b>
                                           This event is an online flash fiction competition hosted, in collaboration with The Poets Weed (TPW).<br><br>
Participants would be required to frame a micro tale based on a given theme and shall be judged on the basis of creativity and skill. It is one round event and all entries shall be accepted online only.

                                <br></p>

                                <p style="color: black;">
                                <b>Rules and Regulations:</b>

                                <ul style="list-style-type:1;text-align: left;">
                                  <li>Participants must strictly adhere to the word limit of 140 characters.</li>
                                  <li>Plagiarism is not allowed</li>
                                  <li>Entries should be related to the given theme.</li>
                                  <li>Entries are to be sent to the official KIITFEST mail ID within a given deadline.</li>
                                  <li>The 3 best entries would be uploaded to the TPW page.</li>
                                </ul>
                                <br><br>
                                <b>JUDGEMENT CRITERIA</b><br><br>
                                Judges from the TPW organization would judge the entries and the three best entries would be uploaded to the TPW page.
                                </p>

                                <p style="color: black;">
                                  <br><br>
                                  <b>PRIZE MONEY</b><br><br>
                                None. The top three would be featured on the “The Poets Weed” fb page.<br>
                                </p>

                                <p style="color: black;list-style-type:1;float: center;"><b>Contact with phone numbers:</b><br>
                                Anmol Mishra: 8770627588
                                <br>Animesh Mishra: 8726687774





                                        </p>
                                      </div>

                                    </div>
                                  </div>
                                </div>


                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="img/works/shabd.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                           

                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>Shabd</h2>
                                </div><!-- entry-header -->

                               <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span> Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Coming soon</span>
                                </div>

                                <div class="entry-description">
                                    <p style="text-align: justify;">Competition of performing poetry or story or Shayari with some background music...</p>
                                </div><!-- entry-description -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">Know More</button>
                                <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(906) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>


                                <!-- Modal -->
                                <div class="modal fade" id="myModal6" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                      <div class="modal-body"  style="background-color: aqua;">
                                          <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                        <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                        <center ><h5 style="color: black;">CULTURAL<br></h5></center>


                                          <center>
                                              <h3 style="color:black;">Shabd</h3>
                                          </center>
                                                                <hr style="border-color: black;">

                                          <p style="color: black; text-align: justify;">
                                           <b> Description of the Event:</b>
                                           Competition of performing poetry or story or Shayari with some background music or the participants can use props in order to represent their ideas.
                                          <br>
                                <br></p>

                                <p style="color: black;">
                                <b>Rules and Regulations:</b>

                                                                <ul style="list-style-type:1;text-align: left;">
                                                                  <li>Everyone will be allotted a time of 5 mins.</li>
                                                                  <li>The best performance will be released from the page of khwahishein.</li>
                                                                  <li>Participants will be judged on the basis of the following criteria</li>
                                                                  <ol>
                                                                    <li>Content</li>
                                                                    <li>Body Language</li>
                                                                    <li>Presentation</li>
                                                                    <li>Grip over the Hindi language.</li>
                                                                  </ol></li>
                                                                </ul>
                                <br>


                                <p style="color: black;list-style-type:1;float: center;"><b>Contact with phone numbers:</b><br>
                                  Coordinators: <br><br>
                                  SRIJAN PANDEY - 9438372916 <br>
                                  ATUL KONDLIYA - 7064001831 <br> <br>
                                </p>
                                </p>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                                </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                                <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="img/works/tulika.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                           

                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>Tulika</h2>
                                </div><!-- entry-header -->

                               <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span> Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Coming soon</span>
                                </div>

                                <div class="entry-description">
                                    <p style="text-align: justify;"> It is a Hindi writing competition to promote Hindi language and focus on social issues.</p>
                                </div><!-- entry-description -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">Know More</button>
                                <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(915) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>


                                <!-- Modal -->
                                <div class="modal fade" id="myModal15" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                      <div class="modal-body"  style="background-color: aqua;">
                                          <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                        <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                        <center ><h5 style="color: black;">CULTURAL<br></h5></center>


                                          <center>
                                              <h3 style="color:black;">Tulika</h3>
                                          </center>
                                                                <hr style="border-color: black;">

                                          <p style="color: black; text-align: justify;">
                                                                            <p style="color: black;">
                                                                             <b> Description of the Event:</b>
                                                                             It is a Hindi writing competition to promote Hindi language and focus on social issues.

                                                                            <br>
                                                                  <br></p>

                                                                  <p style="color: black;">
                                                                  <b>Rules and Regulations:</b>

                                                                                                  <ul style="list-style-type:1;text-align: left;">
                                                                                                    <li>Every participant has to write about a picture.</li>
                                                                                                    <li>A picture will be shown to them on the projector.</li>
                                                                                                    <li>The event consists of only 1 round. </li>
                                                                                                    <li>Trophies and certificates will be rewarded to the winners and participants.</li>
                                                                                                    <li>Participants will be judged on the basis of</li>
                                                                                                    <ol>
                                                                                                      <li>Content</li>
                                                                                                      <li>Presentation</li>
                                                                                                      <li>Hindi Vocabulary Skill.</li>
                                                                                                    </ol></li>
                                                                                                  </ul>
                                                                  <br>


                                                                  <p style="color: black;list-style-type:1;float: center;"><b>Contact with phone numbers:</b><br>
                                                                    Coordinators: <br><br>
                                                                    SRIJAN PANDEY - 9438372916 <br>
                                                                    ATUL KONDLIYA - 7064001831






                                        </p>
                                      </div>

                                    </div>
                                  </div>
                                </div>



                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="img/works/spotlight.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                          

                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>SPOTLIGHT</h2>
                                </div><!-- entry-header -->

                              <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span> Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Coming soon</span>
                                </div>

                                <div class="entry-description">
                                    <p style="text-align: justify;">Let the emotions flow from page to stage!  The colourful lights, the camera and the audience are waiting for you...</p>
                                </div><!-- entry-description -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal7">Know More</button>

                                           <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(907) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal7" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                      <div class="modal-body"  style="background-color: aqua;">
                                          <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                        <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                        <center ><h5 style="color: black;">CULTURAL<br></h5></center>


                                          <center>
                                              <h3 style="color:black;">SPOTLIGHT</h3>
                                          </center>
                                                                <hr style="border-color: black;">

                                          <p style="color: black; text-align: justify;">
                                           <b> Description of the Event:</b>
                                           Let the emotions flow from page to stage!  The colourful lights, the camera and the audience are waiting for you. <br>
                                <br></p>

                                <p style="color: black;">
                                <b>Rules and Regulations:</b>
                                <ul style="list-style-type:1;text-align: left;">
                                  <li>Maximum time allotted for the preliminary round is 25 mins and that for the final round is 50 mins, exceeding this would result into negative marking.</li>
                                  <li>Each group will perform it's play/skit on any theme of their choice. </li>
                                  <li>Teams are allowed to have one member each for lights, sound and spot. </li>
                                  <li> No offensive/obscene content should be there in the play/skit.</li>
                                  <li>The criteria for the evaluation of performance will be announced before the start of the event.</li>
                                  <li> Judges decision will be full and final.</li>
                                  <li>No of teams qualifying for finals- 5</li>
                                </ul>
                                <br>
                              <br>
                                </p>

                                <p style="color: black;">
                                    <b>PRIZE MONEY: RS 35000</b><br>
                                </p>

                                <p style="color: black;list-style-type:1;float: center;"><b>Contact with phone numbers:</b><br>
                                  Contact Details: Shubham Singh- 6370082596 <br>
                                    Titly Saha- 9078802181 <br>
                                    Vishal Sahu- 9630274030 <br>
                                </p>
                                        
                                      </p>
                                      </div>

                                    </div>
                                  </div>
                                </div>



                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="img/works/dekh.png" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                          

                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>DEKH TAMASHA DEKH</h2>
                                </div><!-- entry-header -->

                              <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span> Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Coming soon</span>
                                </div>

                                <div class="entry-description">
                                    <p style="text-align: justify;"> Street Theatre is the earliest form of communication and its objective is to convey a social message...</p>
                                </div><!-- entry-description -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal14">Know More</button>

                                           <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(913) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal14" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                      <div class="modal-body"  style="background-color: aqua;">
                                          <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                        <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                        <center ><h5 style="color: black;">CULTURAL<br></h5></center>


                                          <center>
                                              <h3 style="color:black;">DEKH TAMASHA DEKH</h3>
                                          </center>
                                          <hr style="border-color: black;">
                                        <p style="color: black; text-align: justify;">
                                          <h3>DEKH TAMASHA DEKH</h3><br><br>
                                         <b> Description of the Event:</b>
                                         Street Theatre is the earliest form of communication and its objective is to convey a social message...direct, intimate and effective means of dramalogy. So, we give you an opportunity to : “Break the barriers, raise your voices and reach the people directly”.  <br>
                              <br></p>

                              <p style="color: black;">
                              <b>Rules and Regulations:</b>
                              <ul style="list-style-type:1;text-align: left;">
                                <li>It is imperative that all team members carry their college ID cards and must present them during the time of registration at the campus.</li>
                                <li>No props and costumes will be provided by us. Teams have to bring their own costumes and props</li>
                                <li>Vulgarity of any kind and use of fire or any other injury causing items would lead to disqualification of the team from the event. Hence, if the team feels that an enactment can be deemed as vulgar, it is advised to consult the organizers before performing it directly.</li>
                                <li>Time limit for every team would be 20 minutes.</li>
                                <li>Negative marking shall be imposed if participants exceed the time limit.</li>
                                <li>A team should consist of maximum 20 members excluding 2 instrumentalists</li>
                                <li>The theme for stage play should reveal a social issue, and clearly illustrate the message as well.</li>
                                <li>Decision of the judges will be final and binding.</li>
                              </ul>
                              <br>
                            <br>
                              </p>

                              <p style="color: black;">
                              <b>Judging Criteria</b>
                              <ul style="list-style-type:1;text-align: left;">
                                <li>Acting (Characterization, Use of voice and energy levels, Movement, Teamwork)</li>
                                <li> Writing (Script, Execution, Use of Writing)</li>
                                <li> Production (Efficient use of space, Relevance of the musical soundtrack and Props)
However, the above criteria are completely subjected to discretion of judges.</li>
                                </ul>
                              <br>
                            <br>
                              </p>

                              <p style="color: black;">
                              <b>PRIZE MONEY: RS 30000</b><br>
                              </p>

                              <p style="color: black;list-style-type:1;float: center;"><b>Contact with phone numbers:</b><br>
                                Contact numbers: Srishti Dhingra- 969298490 <br>
      Vikram Singh Tomar- 9938220879 <br>
      Revati Raman- 8789837508



                                      </p>
                                      </div>

                                    </div>
                                  </div>
                                </div>



                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"><img src="img/works/isle to glory.png" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->


                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>Isle To Glory</h2>
                                </div><!-- entry-header -->

                               <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span> Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Coming soon</span>
                                </div>

                                <div class="entry-description">
                                    <p style="text-align: justify;">Join the most happening dance battle of the year and mesmerize the crowd with your moves...</p>
                                </div><!-- entry-description -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal8">Know More</button>

                                           <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(908) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal8" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                      <div class="modal-body"  style="background-color: aqua;">  <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                        <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                        <center ><h5 style="color: black;">CULTURAL<br></h5></center>


                                          <center>
                                              <h3 style="color:black;">Isle to Glory</h3>
                                          </center>
                                                                <hr style="border-color: black;">

                                          <p style="color: black; text-align: justify;">

                                           <b> Description of the Event:</b>
                                        Join the most happening dance battle of the year and mesmerize the crowd with your moves.  <br>
                                <br></p>

                                <p style="color: black;">
                                <b>Rules and Regulations:</b>
                                <ul style="list-style-type:1;text-align: left;">
                                  <li>Valid College/School ID card is required at the time of Registration.</li>
                                  <li>All street dance forms are allowed and recommended.</li>
                                  <li>Only college students allowed. Cross college participation is allowed.</li>
                                  <li>Plagiarized choreography will not be appreciated.</li>
                                  <li>Style diversity, variability of elements and technical standard are preferred.</li>
                                  <li>Originality and Beat kills are highly prized.</li>
                                  <li>Dancers in battle part must respect the other dancer (Touching and use of Abusive languages are not allowed).</li>
                                  <li>One representative of your group/individual will be responsible for running the music during the competition. This person must remain at the sound area throughout the entire performance.</li>
                                  <li>In the event a routine is interrupted because of failure of equipment, facilities, etc., then the participant(s) affected will be permitted to restart the routine from the beginning.</li>
                                  <li>Performance Area Dimension: 30 feet x 30 feet.</li>

                                </ul>
                                <br><br><br>
                                <b>Technical Rules</b>
                                <ul style="list-style-type:1;text-align: left;">
                                  <li>Team limit: 5-15</li>
                                  <li>Please bring TWO HIGH-QUALITY copies of your music in a pen drive to the competition for the pre finals.</li>
                                  <li>Tracks for the battle round will be provided by the organizing team.</li>

                                </ul>
                                <br><br><br>
                                <h3>Rounds</h3>
                                <b>Pre-finals (Round-1): (Day-1)</b>

                                <ul style="list-style-type:1;text-align: left;">
                                  <li>The teams have to showcase. This is an elimination round.</li>
                                  <li>Time limit: 4min+1min.</li>
                                  <li>Props are allowed.</li>
                                </ul>
<br><br>

<b>Finals (Round-2): (Day-2)</b>

<ul style="list-style-type:1;text-align: left;">
  <li>The top 4 teams of the previous round will be qualifying for this round.</li>
  <li>First there will be a battle round among the four teams and then there will be the final battle.</li>
  <li>Usage of props is not allowed. However, dancing/playing with cap or clothes is allowed.</li>
<li>Substitutions may be made in the event of an injury or other serious circumstance. However, all substitutions must be pre-approved by organizers.</li>
</ul>
                                </p>
<p style="color: black;">
<b>Judging Criteria</b><br><br>
Choreography, Beat kills, Costumes, Coordination, Innovation, originality, and Overall impact on the crowd. For the battle round, crowd support and most of all, beat kills, kill offs, overshadowing opposite team will be important factors. (In case of a kill off the battle will end immediately and no further rounds will be held).

</p>
                                <p style="color: black;">
                                <b>PRIZE MONEY: RS 10,000</b><br>
                                </p>

                                <p style="color: black;list-style-type:1;float: center;"><b>Contact with phone numbers:</b><br>
                                  Aradhya-9648753567 <br>
    Rajat-9560838776 <br>
    Srinjoyi-9903521904 <br>
    Peenal-9078802826 <br>





                                        </p>
                                      </div>

                                    </div>
                                  </div>
                                </div>



                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="img/works/instantofie.png" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                           

                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2> Instant-o-fie</h2>
                                </div><!-- entry-header -->

                               <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span> Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Coming soon</span>
                                </div>

                                <div class="entry-description">
                                    <p style="text-align: justify;">Like one word follows another to complete one sentence to finally mean something...</p>
                                </div><!-- entry-description -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal9">Know More</button>

                                           <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(909) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal9" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                      <div class="modal-body"  style="background-color: aqua;">
                                          <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                        <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                        <center ><h5 style="color: black;">CULTURAL<br></h5></center>


                                          <center>
                                              <h3 style="color:black;">Instant-o-fie</h3>
                                          </center>
                                                                <hr style="border-color: black;">

                                          <p style="color: black; text-align: justify;">

                                           <b> Description of the Event:</b>
                                           Like one word follows another to complete one sentence to finally mean something, one picture follows the other to present one complete story. What effect pictures and the emotions captured in it have, mere words fail to achieve. The topic will be given on the spot and the picture entries will be taken from instant camera (polaroid). The topic will be given on the spot & the series of pictures you present need to be connected with each other.  <br>
          <br></p>

          <p style="color: black;">
          <b>Rules and Regulations:</b>
          <ul style="list-style-type:1;text-align: left;">
          <li>Cameras will be provided on spot (Polaroid).</li>
          <li>Each participant will be given 10 min to click a single picture and to explain their own picture.</li>
          <li>The pictures shall be submitted at the same time after the completion of work.</li>
          <li>Pictorial representation for clicking the picture through Polaroid camera will be explained through video presentation.</li>
          </ul>

          <br><br><br>
          <b>JUDGEMENT CRITERIA</b>
          <ul style="list-style-type:1;text-align: left;">
          <li> Creativity</li>
          <li>Frame</li>
          </ul>


        </p> <br><br>

          <p style="color: black;">
          <b>PRIZE MONEY: RS 15,000</b><br>
        </p> <br><br>

          <p style="color: black;list-style-type:1;float: center;"><b>Contact with phone numbers:</b><br>
            ROHIT KUMAR - 07504420257 , 9852882745 <br>
    AAYUSH JHA - 8455053882 <br>
    ANKIT AJAY - 8877809111 <br>







                                        </p>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="img/works/fuego.png" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                          

                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>FUEGO</h2>
                                </div><!-- entry-header -->

                                <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span> Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Coming soon</span>
                                </div>
                                <div class="entry-description">
                                    <p style="text-align: justify;">Fuego gives you a platform to showcase the inbuilt performer and
artist within you.</p>
                                </div><!-- entry-description -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal10">Know More</button>
                                <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(910) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal10" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                      <div class="modal-body"  style="background-color: aqua;">
                                          <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                        <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                        <center ><h5 style="color: black;">CULTURAL<br></h5></center>


                                          <center>
                                              <h3 style="color:black;">FUEGO</h3>
                                          </center>
                                                                <hr style="border-color: black;">

                                          <p style="color: black; text-align: justify;">

                                           <b> Description of the Event:</b>
                                          <p>Fuego gives you the platform to showcase the performer and the artist within you. Previously known as “Riff-E-Random”, this event has seen artists from the different corners of the country winning the hearts of people through some face smashing riffs as well as joyous melodies.</p>
                                           <br></p>

          <p style="color: black;">
          <b>Rules and Regulations:</b>
          <ol style="color:black;list-style-type:1;float: center;"></ol>
          There will be two rounds i.e. pre-finals and finals.<br>
            <b>Pre-finals:-</b><br>
           The participating bands will have to send their entries to entries.fuego@gmail.com by . The entries should consist of :
          <li>A YouTube link of the bands performance (live or jam session) preferably an own composition but covers are appreciated as well.</li>
          <li>The mail subject should be “FUEGO”.</li>
          <li>The mail should contain the contact detail of the participating band members.</li>
          <li>The deadline to submit the videos would be updated in the website</li>
          
<br>
The selection of the bands for the finals would be based on the video submission in the pre-final round. The criteria for the judgement will be:
<br>

         <li>Tightness of the performance </li>
          <li>Melody</li>
          <li>Arrangement</li>
          <li>Originality</li>
          
          </ol>
          <br>
          Top 10 bands will be selected for the final which is to be held at KIIT University, Bhubaneswar.

          <br>

          <b>Finals:-</b><br>
          The selected bands from the pre-finals stage will be required to register for the event. The registration for each and every band members will be compulsory and any changes to be made in the participating members should be reported to the concerned event heads (provided below). Once the registration is done, the band should send their KFID (generated after the successful registration) of all the members to the event heads.
          <br>
          The bands will be given a stage time of 20mins (Amp-on to Amp-0ff) including soundcheck. Bands have to produce a minimum of 3 songs within the given time limit with minimum of one Original Composition of the band.
          <br>
          The given limit should not be exceeded and if exceeded would result in the deduction of marks and may lead to disqualification. No obscenity is allowed in the lyrics or the performance of the band. Doing so will result in disqualification.
          <br>
<br>
          <b style="color: black;">The judges decision shall be final and all bands must comply.</b>
          <br><br>
          <b>JUDGEMENT CRITERIA</b>
          <ol style="color:black;list-style-type:1;float: center;"></ol>

          <li>Stage Presence</li>
          <li>Tightness</li>
          <li>Composition & Arrangement</li>
          <li>Melody</li>
          <li>Originality</li>
          <p><b style="color: black;">Note: The organizing committee holds the right to change the rules any time and the bands must
obey.</b>

          </p>

          <p style="color: black;">
          <b >PRIZE MONEY WORTH:</b> Rs 25000<br>
          
          </p>

          <p style="color: black;list-style-type:1;float: center;"><b>Contact with phone numbers:</b><br>
       Arjun Sen (Phone- +91 9038625339/ +91 9123089612)<br>
Raksha Sinha (Phone- +91 9938287879)<br>




                                        </p>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="img/works/chitra vi chitra.png" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                           

                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>CHITRA-VI-CHITRA-CHITRAM</h2>
                                </div><!-- entry-header -->

                               <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span> Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Coming soon</span>
                                </div>

                                <div class="entry-description">
                                    <p style="text-align: justify;">Are you a person who can paint the canvas  with the art of writing, acting, cinematography, editing and directing .If yes,Then you are a filmmaker. .</p>
                                </div><!-- entry-description -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal11">Know More</button>
                                <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(911) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal11" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                      <div class="modal-body"  style="background-color: aqua;">
                                          <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                        <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                        <center ><h5 style="color: black;">CULTURAL<br></h5></center>


                                          <center>
                                              <h3 style="color:black;">CHITRA-VI-CHITRA-CHITRAM</h3>
                                          </center>
                                                                <hr style="border-color: black;">

                                          <p style="color: black; text-align: justify;">

                                           <b> Description of the Event:</b>
                                           Are you a person who can paint the canvas  with the art of writing, acting, cinematography, editing and directing .If yes,Then you are a filmmaker. 
                                        The UNDYING SPIRIT of KIITFEST gets its soul, this edition with the FILM-MAKING CONTEST.
                                        Here's your chance to CRAFT your ART of  FILM-MAKING at KIITFEST 5.0,CHITRA-VI- CHITRA,
                                        The filmmaking contest.

                                <br>
                                <br></p>

                                <p style="color: black;">
                                <b>Rules and Regulations:</b>
                                <ol style="color:black;list-style-type:1;">
                                <b>CATEGORY A:- CHITRA</b>
                                    <ol style="color:black;list-style-type:1;">
                                        <li>OPEN-THEME</li>
                                        <li>2DURATION-INCLUDING END CREDITS: 15 MINUTES</li>
                                    </ol>
                                   <b>CATEGORY B:- VI-CHITRA</b><br>
                                   <ol style="color:black;list-style-type:1;">
                                   <li>REGISTERED PARTICIPANTS WILL BE GIVEN A THEME OR SUBJECT AND 10 DAY SUBMISSION DEADLINE WILL BE PROVIDED TO SHOOT AND EDIT THE FILM.</li>
                                   <li>DURATION-15 minutes+2 minutes (grace time) INCLUDING END CREDITS.</li>
                                   </ol>
                                   <b>CATEGORY C:- CHITRAM</b><br>
                                   <ol style="color:black;list-style-type:1;float: center;">
                                   <li>1-The short film story should be weaved around KIITFEST 5.0.<br>
                                   


                                </ol>
                                <br>
                                <b>THEME - KIITFEST 5.0</b><br>
            The short film should contain atleast a 3 minute footage or clippings of KIITFEST 5.0.<br>
            DURATION-10 minutes+2 minutes (grace time) INCLUDING CREDITS.<br>
            Should not be a PROMO VIDEO of KIITFEST, should strictly be a SHORT FILM based on KIITFEST.<br>
            <ul>
            <li>PARTICIPATING TEAM CAN SUBMIT ANY NUMBER OF ENTRIES WITH SEPARATE REGISTRATIONS.
            <li>The Participants of the CATEGORY-A:-CHITRA. NEED TO REGISTER WITH A SINGLE REGISTRATION PER TEAM FOR ALL NON-KIITIANS AND ENTIRE TEAM REGISTRATION FOR KIIT  STUDENTS.
            <li>THE NON KIIT REGISTRATIONS IN CATEGORY-A:-CHITRA SUBMISSIONS OF SINGLE REGISTRATION PER TEAM,WILL NOT BE ELIGIBLE TO TAKE PART IN ANY OTHER EVENT.
             <li>THE PARTICIPANTS OF CATEGORY B:-VI-CHITRA & CATEGORY C-CHITRA ENTIRE TEAM SHOULD BE REGISTERED TO BE ELIGIBLE TO SUBMIT THE ENTRY.i.e-KIIT OR NON KIIT PARTICIPANTS.
            <li>THE REGISTRATION FEE IS APPLICABLE AS RS500 FOR NON KIIT AND RS 200 PER KIIT STUDENT.
            <li> THE PARTICIPATING TEAM MEMBERS NEED TO REGISTER FOR KIITFEST 5.0.
            <li>THE FILM CAN BE SHOT IN ANY DEVICE .i.e- MOBILE OR DSLR MAINTAINING GOOD STANDARDS OF AUDIO AND VISUAL QUALITY
             <li>ALL ENTRIES SHOULD BE AN ORIGINAL WORK OF THE FILMMAKER. YOUTUBE VIDEOS OR ANY COPYRIGHT CONTENT IN ANY PART OF THE FILM ARE TO BE PROHIBITED.
            <li>THE FILM SHOULD  CONTAIN APPROPRIATE DISCLAIMERS IF ANY.
            <li>ANY KIND OF VULGARITY AND OBSCENITY SHOULD BE STRICTLY AVOIDED.
            <li>THE FINAL VIDEO SHOULD BE MOST PREFERABLY OF AVI,MPEG OR MP4 FORMAT ONLY.
            <li>ONCE SUBMITTED, THE ORGANISERS HOLD THE RIGHTS TO USE THE VIDEO FOR PROMOTIONAL PURPOSES OF THE EVENT IF ANY.
           <li> ALL ENTRIES SHOULD BE REGISTERED AND SUBMITTED WITHIN THE STIPULATED DATES IN THE FORM OF GOOGLE DRIVE OR YOUTUBE LINKS ONLY.
            <li> ENTRIES WILL BE SUBJECTIVE TO SCREENING ONLY AFTER SCRUTINIZING BY THE PRE-SCREENING JURY TO MAKE IT TO THE FINAL-SCREENING.
            <li>THE DECISION OF THE PRESCREENING JURY, JURY COMMITTEE AND ORGANISING TEAM WILL BE FINAL AND BINDING


                </ul>
                                </p>

                                <p style="color: black;">
                                <b>PRIZE MONEY:</b><br>
                                CATEGORY-A:- CHITRA<br>
                                1st-Rs.5000<br>
                                2nd-Rs.3000<br>
                                CATEGORY B:-VI-CHITRA<br>
                                1st-Rs 5000<br>
                                2nd-Rs 3000<br>
                                CATEGORY-C:- CHITRAM<br>
                                1st-Rs 4000<br>
                                2nd-Rs 2000<br>

                                </p>

                                <p style="color: black;list-style-type:1;float: center;"><b>Contact with phone numbers:</b><br>
                                YANNAM DEEPAK-9494961579<br>
                                SWAPNIL DAS-7536924931<br>
                                PRATIK PANDEY-9162864839<br>






                                        </p>
                                      </div>

                                    </div>
                                  </div>
                                </div>



                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"> <img src="img/works/alankaar.png" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                          

                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>Alankaar</h2>
                                </div><!-- entry-header -->

                               <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span>Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Coming soon</span>
                                </div>
                                <div class="entry-description">
                                    <p style="text-align: justify;">Alankaar presents you with a platform to showcase the striving performer
within you. It is a solo singing competition which comprises of two rounds which are prelims and finals.
Sing to your heart&#39;s content and be the heartthrob you always wanted to be.</p>
                                </div><!-- entry-description -->

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal12">Know More</button>
                                <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(912) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal12" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                      <div class="modal-body"  style="background-color: aqua;">
                                          <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                        <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                        <center ><h5 style="color: black;">CULTURAL<br></h5></center>


                                          <center>
                                              <h3 style="color:black;">ALANKAAR</h3>
                                          </center>
                                                                <hr style="border-color: black;">

                                          <p style="color: black; text-align: justify;">

                                           <b> Description of the Event:</b>
                                           Alankaar presents you with a platform to showcase the striving performer
within you. It is a solo singing competition which comprises of two rounds which are prelims and finals.
Sing to your heart&#39;s content and be the heartthrob you always wanted to be.
          <br>
          <br></p>

          <p style="color: black;">
          <b>Rules and Regulations:</b>
          <ol style="color:black;list-style-type:1;float: center;">
            <b>Prelims</b>
            <ol style="color:black;list-style-type:1;float: center;">
            <li>Prelims will be conducted wherein participants will be given to perform for a time limit of 2+1 minutes including setup.</li>
            <li>Participants need to perform a single song/piece in hindi or English or both. The song or the
instrumental piece can be of any genre or an original composition.</li>
                <li>Participants can perform with one instrument accompaniment or backing track.</li>
            </ol>
            <b>Finals</b>
            <ol style="color:black;list-style-type:1;float: center;">
            <li>Participants need to perform a single song/piece in hindi or English or both. The song or the
instrumental piece can be of any genre or an original composition.</li>
<li>Time limit for the performance is 4+1 minutes including setup after which marks will be deducted or
the participant might be disqualified as per the jury decision.</li>
<li>Performers will be disqualified on spot for misconduct, obscenity or foul language.</li>
<li>Participants can perform with one instrument accompaniment.</li>
          </ol>
        </ol>
          <br>
          <b>JUDGEMENT CRITERIA</b>
          <ol style="color:black;list-style-type:1;float: center;">

          <li>MELODY</li>
          <li>Rythm</li>
          <li>EXPRESSION</li>
          <li>PERFORMANCE</li>
          </ol>

          </p>

          <p style="color: black;">
          <b>PRIZE MONEY:</b><br>
          Worth Rs.13,000/-
          </p>

          <p style="color: black;list-style-type:1;float: center;"><b>Contact with phone numbers:</b><br>
                 Ritam     (Ph. No.- 7209773806)
           <br>Sadakat                (Ph. No.-9938369784)





                                        </p>
                                      </div>

                                    </div>
                                  </div>
                                </div>

                            </div><!-- entry-content -->
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-12 col-md-4 single-blog-content">
                        <div class="blog-content">
                            <figure class="featured-image">
                                <a href="#"><img src="img/works/illustory.png" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                           
                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2>Illustory</h2>
                                </div><!-- entry-header -->

                               <div class="entry-meta">
                                    <span class="author-name"><span>Date:</span> Coming soon</span>
                                    <span class="space">|</span>
                                    <span class="space"><span>Time:</span> Coming soon</span><br/>
                                    <span class="comments-count"><span>Venue:</span> Coming soon</span>
                                </div>

                                <div class="entry-description">
                                    <p style="text-align: justify;">A team of two will comprise of a painter and a writer. A common topic will be given to all and one word, per group, that the writer has to use in their story.</p>
                                    <p>A team of two will comprise of a painter and a writer. A common topic will be given to all and one word, per group, that the writer has to use in their story.</p>
                                </div><!-- entry-description -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal13">Know More</button>
                                <?php 
             
             if($sql->isLogin() == 1)
             {
               echo '
                <a onClick=addToCart(916) id="cart" style="background-color:white;color:green;border:1px solid green;margin:10px;">Add To Cart</a>';
              
              }
          ?>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal13" role="dialog">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                      <div class="modal-body"  style="background-color: aqua;">
                                          <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                        <center ><img style="size: 10px;" src="events/kiitfest_logo.PNG"></center>
                                        <center ><h5 style="color: black;">CULTURAL<br></h5></center>

                                          <center>
                                              <h3 style="color:black;">Illustory</h3>
                                          </center>
                                                                <hr style="border-color: black;">

                                          <p style="color: black; text-align: justify;">
                                          <p style="color: black;">

                                           <b> Description of the Event:</b>
                                          A team of two will comprise of a painter and a writer. A common topic will be given to all and one word, per group, that the writer has to use in their story. The painter in the group will have to depict the story in their painting or sketch. <br>
                                </p>

                                <p style="color: black;">
                                <b>Rules and Regulations:</b>
                                <ul style="none;float:left;">
                                  <li>Word selection for each group will be done by chit system.</li>
                  <li>All stories must contain their allotted words.</li>
                  <li>Once the writer is done with their story, they have to tap in their partners, and only then can painters start their work.</li>
                  <li>Total time given to a team will strictly be 150 minutes.</li>
                  <li>Plagiarism will result to immediate disqualification.</li>
                                </ul>
                                <br><br><br>
                                <b>JUDGEMENT CRITERIA</b><br>
                                <b style="color:black">Writing</b>
                                  <ul style="color:black;">
                                    <li>Creativity (10)</li>
                  <li>Construction(10)</li>
                  <li>Relevance with topic and use of allotted word (10)</li>
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
            <h2>KIITFEST 5.0</h2>
        </div><!-- .site-footer -->

        <div class="footer-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <a href="#">KIITFEST</a>
                        </div><!-- entry-title -->

                        <div class="entry-mail">
                            <a href="#">techsupport@kiitfest.org</a>
                        </div><!-- .entry-mail -->

                        <div class="copyright-info">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                             <a href="webteam.php"> KIITFEST 5.0 WEB TEAM</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
