<?php
session_start();
?>
<!DOCTYPE html>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66101749-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-66101749-2');
</script>



<html lang="en" dir="ltr">
<head>
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="KIITFEST 5.0">
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
  
<style type="text/css">
  @media only screen and (min-width:375px) and (max-width: 765px) {
    #image{
      padding-left: 60px;
    }

    .countdown-holder{
      padding-left: 50px;

    }

}

  @media only screen and (max-width:370px)
  {
    .countdown-holder{
      max-width:60px;
      padding-left:50px;
    }
    .ds{
      padding-bottom: 100px;
    }


    #image{
      padding-left:50px;
    }

    .inline{
      padding-left: 20%;
    }
}



</style>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
</head>

<body class="about-us">
    <header class="site-header">
        <div class="header-bar" style="z-index: 9999999">
            <div class="container-fluid">
                <div class="row align-items-center">
                <?php 
                  if(array_key_exists("valid_participant", $_SESSION) && !empty($_SESSION["valid_participant"]))
                  {
                      echo '<div class="col-10 col-lg-3">
                                <a style="margin-bottom: 15px; font-size:16px; color: white;text-decoration:none;" href="logout.php">LOGOUT</a>
                            </div>';
                  } 
                  else
                  {
                    echo '<div class="col-10 col-lg-3">
                        <div class="dropdown show">
                            <a  href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span style="margin-bottom: 15px; font-size: 25px; color: white"><i class="far fa-user-circle"></i> </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="signup.php">Sign Up</a>
                                <a class="dropdown-item" href="login.php">Login</a>
                            </div>
                        </div>
                    </div>';
                  }
                ?>    

                   

                    <div class="col-2 col-lg-9">
                        <nav class="site-navigation">
                            <div class="hamburger-menu d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- .hamburger-menu -->
                            <div>
                              <ul>
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="404/about.php">ABOUT US</a></li>
                                <li><a href="404/sponsors.php">SPONSORS</a></li>
                                <li><a href="webteam.php">WEB TEAM</a></li>
                                <li><a href="contact.php">CONTACT</a></li>
                                <li></li>
              
                            </ul><!-- flex -->
                            </div>
                            
                        </nav><!-- .site-navigation -->
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- container-fluid -->
        </div><!-- header-bar -->
    </header><!-- .site-header -->

    <div style="height:100vh;" class="hero-content">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-lg-2 col-lg-10">
                    <div id="scene" class="scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="1" data-scalar-y="15" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;" class="entry-header">
                        <!-- <h2>KIITFEST 5.0</h2> -->
                        <img id="image" data-depth="0.4" src="img/kiitfest_logo.png" style="width: 80%" />
                        <div class="entry-meta-date">
  
                        </div><!-- .entry-meta-date -->
                    </div><!-- .entry-header -->

                    <div class="countdown flex flex-wrap justify-content-between" data-date="2019/2/15">
                        <div class="countdown-holder">
                            <div class="dday"></div>
                            <label>Days</label>
                        </div><!--.countdown-holder-->

                        <div class="countdown-holder">
                            <div class="dhour"></div>
							<label> Hours </label>
                        </div><!-- .countdown-holder -->

                        <div class="countdown-holder">
                            <div class="dmin"></div>
							<label>minutes</label>
                        </div><!--.countdown-holder-->

                        <div id="ds" class="countdown-holder">
                            <div class="dsec"></div>
                            <label>Seconds</label>
                        </div><!--.countdown-holder-- >
                    </div><!--.countdown -->
                </div><!-- .col-12 -->
            </div><!-- row -->

            <div class="container">
            	<center> <h1 style="color : #922D61"> 15th - 17th Feb 2019 </h1> </center>
            </div>

            <div class="row d-none d-md-block" style="">
                <div class="col-md-12 fixed-bottom" style="position: fixed;">
                    <div class="entry-footer">
                      
                        <div class="container">
  <!-- Trigger the modal with a button -->

  
   <!-- kiss Modal 
<div class="modal fade" id="kissModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8">
        <h3 class="modal-title" style="padding-top: 25px" id="exampleModalLabel">About KISS</h3>
        </div>
        <div class="col-md-4"><img src="http://kiss.ac.in/wp-content/uploads/2017/07/logo-icon.png" style="width: 40%"></div>
    </div>
</div>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
<p>
KISS has been declared a Deemed University (U/S 3 of UGC Act, 1956) by the Ministry of Human Resource Development, Govt. of India on August 25, 2017. With this, it has become the Fi­rst tribal university in India and in the entire world.
</p>
 <br/>

<li>Organization in Special Consultative Status with the Economic and Social Council (ECOSOC) since 2015.
</li>
<li>
NGO Associated with the United Nations Department of Public Information ( UNDPI).
</li>
 <br/>
<p>
Kalinga Institute of Social Sciences (KISS), the largest tribal institute of the world, provides food, accommodation, health care and all the basic necessities of life absolutely free to 50,000 (27,500 existing students, 12,500 well placed alumni and 10,000 students in its various satellite centres) poorest of the poor tribal children to pursue their studies here from KG to PG as well as vocational training. KISS, as a unique experiment to eradicate poverty through education and use of education as a tool to empower the underprivileged section of the society and provide sustainable employment, is being hailed by statesmen, policy makers, planners, social workers from India and abroad.
</p>
 

<li>        Special Consultative Status with the Economic and Social Council (ECOSOC) since 2015 – the highest recognition to a non-government organization from the United Nations.
</li>
 

<li>        Champion Level-Platinum Certification by GuideStar India for NGO Transparency (2016)
</li>
 

<li>        Among top 223 NGOs of the world and 10 best NGOs of India in the prestigious ranking of world NGOs published in 2016 by NGO Advisor, a Geneva-based independent media organization.
</li>
 

<li>        Programmes and activities aligned to Sustainable Development Goals (SDGs) of the UN and proactively working to achieve the goals.
</li>
 

<li>        Expansive self-contained eco-friendly campus
</li>
 

<li>    Plans to educate 2,00,000 indigenous (tribal) children over the next decade and in the process of setting up branches in 10 states, with the support of respective state governments, and all 30 districts of Odisha.
</li>
 

<li>        Students are high achievers in academics, co-curricular activities and national and international sports, making it a highly successful model of tribal empowerment through education.
</li>
 

<li>        Tie-ups with many world organizations including UNESCO, UNICEF, UNFPA, and US Federal Government.
</li>
 

<li>        Visited and appreciated by high dignitaries, including Heads of State, Ambassadors, from 70 countries.
</li>
 

<li>15 Nobel Laureates have visited the Institute.
</li>
 

<li>Widely covered in leading national and international media, including National Geographic, The Time, Wall Street Journal, South China Morning Post, Readers' Digest, Asia Post and Public Broadcasting Service (PBS).</li>
      </div>
      <div class="modal-footer">
        <a href="https://kiss.ac.in/" target="_blank"><button type="button" class="btn btn-primary">More about KISS</button></a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
  </div> -->
  <!-- KISS MODAL -->
<!-- Button trigger modal -->


<div style="margin-bottom:3%;">
    <div class="col-md-2">
    <a href="" data-toggle="modal" data-target="#kiitModal" class=""><img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/ef/KIIT_logo.svg/1200px-KIIT_logo.svg.png" style="width: 70%;"></a></div>

  <div class="col-md-3" style="margin-left: 20%;">
  <a href="" data-toggle="modal" data-target="#myeventModal" class=""><img src="img/explore_more_btn.png" style="width: 90%; margin-left: 10%;"></a>
  <font style="" class="pull-center">&copy; <a href="webteam.php"> KIITFEST 5.0 WEBTEAM</a></font>
  </div>

   <div style="color:white">
     
   </div>
  <div class="col-md-2" style="margin-left: 20%;">
    <a href="" data-toggle="modal" data-target="#kissModal" class=""><img src="kiss.png" style="width: 70%;margin-left: 10%;"></a>
  </div>
</div>
  </div>

                      <!--Modal End-->
                    </div>
                </div>
            </div>
              <div class="fixed-bottom centered d-block d-md-none" style="width: 100%; position: fixed-bottom; align-items: center;">

              
 <span style="padding-bottom: 20%; float: center"><!-- <a href="404/registration.php"><img class="pull-left" src="http://kiss.ac.in/wp-content/uploads/2017/07/logo-icon.png" style="width: 23%; margin-right: 2%" />  </a> -->  

   <a href="" data-toggle="modal" data-target="#kiitModal" class=""><img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/ef/KIIT_logo.svg/1200px-KIIT_logo.svg.png" style="width: 16%; margin-right: 12%; margin-left: 2%"></a>

    <a href="" data-toggle="modal" data-target="#myeventModal" class=""><img src="img/explore_more_btn.png" style="width: 40%; margin-right: 10%; float: center";> </a>
  
    <a href="" data-toggle="modal" data-target="#kissModal" class=""><img class="pull-right" src="http://kiss.ac.in/wp-content/uploads/2017/07/logo-icon.png" style="width: 13%; margin-right: 2%"></a>
    <!-- 
    <a href="https://kiit.ac.in/" class="inline"><img class="pull-right" src="https://upload.wikimedia.org/wikipedia/en/thumb/e/ef/KIIT_logo.svg/1200px-KIIT_logo.svg.png" style="width: 23%;"></a> -->
  </span>
  </div>


<!-- KISS MODAL -->
<!-- Button trigger modal -->
<!-- Modal -->


<div class="modal fade" id="kissModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9999999999">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
            <div class="col-md-12" style="align-items: center;">
        <img class="" src="kiss.png" style="width: 40%; margin-left: 30%">
    </div>
</div>
      </div>
      <div class="modal-body" style="text-align: justify;"> 
<p>
KISS has been declared a Deemed University (U/S 3 of UGC Act, 1956) by the Ministry of Human Resource Development, Govt. of India on August 25, 2017. With this, it has become the Fi­rst tribal university in India and in the entire world.
</p>
 <br/>

<li>Organization in Special Consultative Status with the Economic and Social Council (ECOSOC) since 2015.
</li>
<li>
NGO Associated with the United Nations Department of Public Information ( UNDPI).
</li>
 <br/>
<p>
Kalinga Institute of Social Sciences (KISS), the largest tribal institute of the world, provides food, accommodation, health care and all the basic necessities of life absolutely free to 50,000 (27,500 existing students, 12,500 well placed alumni and 10,000 students in its various satellite centres) poorest of the poor tribal children to pursue their studies here from KG to PG as well as vocational training. KISS, as a unique experiment to eradicate poverty through education and use of education as a tool to empower the underprivileged section of the society and provide sustainable employment, is being hailed by statesmen, policy makers, planners, social workers from India and abroad.
</p>
 

<li>        Special Consultative Status with the Economic and Social Council (ECOSOC) since 2015 – the highest recognition to a non-government organization from the United Nations.
</li>
 

<li>        Champion Level-Platinum Certification by GuideStar India for NGO Transparency (2016)
</li>
 

<li>        Among top 223 NGOs of the world and 10 best NGOs of India in the prestigious ranking of world NGOs published in 2016 by NGO Advisor, a Geneva-based independent media organization.
</li>
 

<li>        Programmes and activities aligned to Sustainable Development Goals (SDGs) of the UN and proactively working to achieve the goals.
</li>
 

<li>        Expansive self-contained eco-friendly campus
</li>
 

<li>    Plans to educate 2,00,000 indigenous (tribal) children over the next decade and in the process of setting up branches in 10 states, with the support of respective state governments, and all 30 districts of Odisha.
</li>
 

<li>        Students are high achievers in academics, co-curricular activities and national and international sports, making it a highly successful model of tribal empowerment through education.
</li>
 

<li>        Tie-ups with many world organizations including UNESCO, UNICEF, UNFPA, and US Federal Government.
</li>
 

<li>        Visited and appreciated by high dignitaries, including Heads of State, Ambassadors, from 70 countries.
</li>
 

<li>15 Nobel Laureates have visited the Institute.
</li>
 

<li>Widely covered in leading national and international media, including National Geographic, The Time, Wall Street Journal, South China Morning Post, Readers' Digest, Asia Post and Public Broadcasting Service (PBS).</li>
      </div>
      <div class="modal-footer">
        <a href="https://kiss.ac.in/" target="_blank" class="pull-left"><button type="button" class="btn btn-primary">More about KISS</button></a>
        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- KIIT MODAL -->
<div class="modal fade bd-example-modal-lg" id="kiitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 999999999">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
            <div class="col-md-12">
              <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/ef/KIIT_logo.svg/1200px-KIIT_logo.svg.png" style="width: 40%; margin-left: 30%">
    </div>
</div>
      </div>
      <div class="modal-body" style="text-align: justify;">
        <p>
        Established in 1992 by eminent educationist and social activist Prof. Achyuta Samanta and opened five years later as a centre for higher learning, KIIT Deemed to be University is today one of the most prestigious universities in India. Its commitment to teaching excellence led to the grant of university status under Section 3 of UGC Act, 1956 by the Ministry of Human Resources Development, Govt. of India in 2004, within only seven years of its inception. KIIT is relatively young, but prizes excellence and ambition. The contributions of KIIT's faculty, students and alumni have been earning national and international recognition.
</p>
 
<p>
It serves more than 30,000 students through its 19 Schools imparting globally recognised bachelor's, master's and doctoral degree programmes in 100 plus disciplines, spanning engineering, medicine, management, biotechnology, law and more. Apart from global recognition and pedagogical excellence, the University provides the best possible academic and non-academic grooming and empowerment that enable one to become a global citizen and make an impact in the global workplace.
</p>
 
<p>
KIIT is an internationally-focussed university and welcomes students from all corners of the globe. With international students enrolled from around 50 countries, it prides itself on being a cosmopolitan and multicultural campus. Laying claim to a global mindset, the university actively partners with other leading higher education institutions around the world to provide international opportunities to its students and faculty. With tie-ups with over 175 leading institutions of the world, KIIT has a presence in over 50 countries, including USA, UK, Germany, Russia, Czech Republic, Japan, South Korea and Kenya.
</p>
 
<p>
KIIT is a multi-campus university. Its 23 campuses span 25 sq. km. and have a built up area of 13 million sq. ft. Apart from academic blocks, administrative blocks and student residences, attractions on campus include a Rose Garden, Art Gallery, Sculpture Garden, Tribal Museum and a 35000-capacity multisport stadium.
</p>
 
<p>
KIIT emphasises close collaborations between faculty and students to address academic, technological and societal challenges. A strong and effective tutor-mentoring system is among many innovative teaching-learning and student-friendly initiatives taken by KIIT. Students of the University have not only gone on to join some of the world's most successful companies, but also excelled in fields of their choosing, including participating in Olympic games as a member of Indian contingent.
</p>
 
<p>
KIIT is unique in integrating professional education with social concern. Its protégé, Kalinga Institute of Social Sciences (KISS), provides holistic education from KG to PG, food accommodation, health care and all basic necessities absolutely free to 27,500 poorest of the poor tribal children.
</p>
 
<b>
National & International Standing
</b>
 

<li>Declared a University under Section 3 of UGC Act, 1956</li>

<li>Ranked in The Times Higher Education World University Rankings 2019
</li>
<li>
Ranked in QS BRICS World University Rankings 2018
</li>
<li>
'A' Category University as per Ministry of HRD, Govt. of India
</li>
<li>
'A' Grade by NAAC
</li>
<li>
'Tier 1' (Washington Accord) accreditation by NBA
</li>
<li>
Accredited by IET, U.K. (B.Tech Programme)
</li>
<li>
Respective Courses Approved by Statutory Bodies of Govt. of India: MCI, DCI, BCI, INC, etc.
</li>
 

 <br/>
<p>
Committed to excellence and global cooperation in higher education, KIIT Deemed to be University is member of prominent national and international university networks such as:
</p>
 
<li>
International Association of Universities (IAU)
</li>
<li>
Association of Indian Universities (AIU)
</li>
<li>
Association of Commonwealth Universities (ACU)
</li>
<li>
University Mobility of Asia and the Pacific (UMAP)
</li>
<li>
International Association of University Presidents (IAUP)
</li>
<li>
Association of Universities of Asia and the Pacific (AUAP)
</li>
<li>
International Institute of Education (IIE), New York
</li>
<li>
United Nations Academic Impact (UNAI)
</li>
<li>
Eurasian Silk Road Universities Consortium (ESRUC)
    </li>  </div>
    <div class="modal-footer">
        <a href="https://kiit.ac.in/" target="_blank"><button type="button" class="btn btn-primary pull-right">More about KIIT</button></a>
        <button type="button" class="btn btn-secondary pull-right" data-dismiss="modal">Close</button>
      </div>
          </div>
  </div>
</div>



<!-- EVENT MODAL -->
<!-- Button trigger modal -->
<div class="modal fade" style="background: transparent;" id="myeventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 999999999999">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
   <div class="modal-content" style="background: transparent; box-shadow: none;">
      <div class="modal-body">
         <div class="row">
            <div class="col-md-12">
               <div class="col-md-4">
                  <div class="info-card">
                     <div class="front">
                        <img class="card-image" src="img/tech.png">
                     </div>
                     <div class="back">
                        <center>
                           <h2>Technical</h2>
                           <p><b>"A small step. A giant leap for mankind."</b></p>
                        </center>
                        <div style="text-align: justify;"><br/> A hub for all denizens and enthusiasts of Technology who believe that they can mould this world into a better place to be a part of. A click is what matters!
                        </div>
                     </div>
                     <a href="technical.php"><button type="button" style="width: 100%; text-align: center;" class="btn btn-danger btn-lg active">See events</button></a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="info-card">
                     <div class="front">
                        <img class="card-image" src="img/cul.png">
                     </div>
                     <div class="back">
                        <center>
                           <h2>Cultural</h2>
                           <p><b>"Imagination and Ideas are ever-expanding and immortal."</b>
                        </center>
                        <div style="text-align: justify;"><br/>A cue for all aspirants who are imaginative, creative and artisans to amalgamate and be a part to. So, dance and sway to the tunes of glory. We are open.</p>
                        </div>
                     </div>
                     <a href="cultural.php"><button type="button" style="width: 100%; text-align: center;" class="btn btn-primary btn-lg active">See events</button></a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="info-card">
                     <div class="front">
                        <img class="card-image" src="img/quiz.png">
                     </div>
                     <div class="back">
                        <center>
                           <h2>Quiz Fest</h2>
                           <p><b>"My mind rebels at stagnation."</b>
                        </center>
                        <div style="text-align: justify;"><br/>     
                           And with that witty thought in mind, your curiosity is satiated. The Quiz Carnival is back to churn your neurons with questions and answers that would determine the best. Be a part!
                        </div>
                        </p>
                     </div>
                     <a href="quizfest.php"><button type="button" style="width: 100%; text-align: center;" class="btn btn-success btn-lg active">See events</button></a>  
                  </div>
               </div>
            </div>
         </div>
      </div>
      <button type="button" class="btn btn-secondary" style="width: 80%; align-items: center; margin-left: 10%; margin-right: 10%" data-dismiss="modal">Close</button>
   </div>
</div>






                      <script type='text/javascript' src='js/jquery.js'></script>
                      <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
                      <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
                      <script type='text/javascript' src='js/swiper.min.js'></script>
                      <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
                      <script type='text/javascript' src='js/circle-progress.min.js'></script>
                      <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
                      <script type='text/javascript' src='js/custom.js'></script>


                      </body>
                      </html>
