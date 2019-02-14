<?php
@require_once("../db_connection.php");
 if(isset($_POST['submit']) )  { 
    echo $link = 'https://www.instamojo.com/api/1.1/payments/'.$_POST["mojo_id"].'/'; 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:b99d20533b706864312305eb142c6ea8",
                    "X-Auth-Token:887515a0f019663aaf413c97904f0cca"));

    $response = curl_exec($ch);
    curl_close($ch); 
    json_encode($response);
    $response = json_decode($response,true);
    $pay_id = $response['payment']['payment_id'];
   //echo $pay_id;
   if($pay_id != NULL){
       $email = $_POST['email'];
     $query1 = "update participants_participant set payment_complete = 1,payment_id='$pay_id' where email= '$email'";
    // //$query1 = "select * from participants_participant where `unique_id`= '$unique_id'";
     $result = mysqli_query($connect,$query1);
    if(!$result)
    header('location:index.php');
    }
}

?>

<!DOCTYPE HTML>
<html>
<head>


  <head>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c5c42e77cf662208c948203/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</head>



  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
<style>
  body {
  margin:0px;
}
.id-card-wrapper {
  height: 100vh;
  width:100%;
  background-color: #091214;
  display: flex;
}
.id-card-wrapper-neg {
  height: 100vh;
  width:100%;
  background-color: #592121;
  display: flex;
}
.id-card {
  flex-basis: 100%;
  max-width: 30em;
  border: 1px solid rgb(97, 245, 245);
  margin: auto;
  color: #fff;
  padding: 1em;
  background-color: #0A2129;
  box-shadow: 0px 0px 3px 1px #12a0a0, inset 0px 0px 3px 1px #12a0a0;
}
.id-card-neg {
  flex-basis: 100%;
  max-width: 30em;
  border: 1px solid rgb(97, 245, 245);
  margin: auto;
  color: #fff;
  padding: 1em;
  background-color: #b24742;
  box-shadow: 0px 0px 3px 1px #12a0a0, inset 0px 0px 3px 1px #8e132a;
}


.profile-row {
  display: flex;
}
.profile-row .dp {
  flex-basis: 33.3%;
  position: relative;
  margin: 24px;
  align-self: center;
}
.profile-row .desc {
  flex-basis: 66.6%;
}

.profile-row .dp img {
  max-width: 100%;
  border-radius: 50%;
  display: block;
  box-shadow: 0px 0px 4px 3px #12a0a0;
}
.profile-row .desc {
  padding: 1em;
}

.profile-row .dp .dp-arc-inner {
  position: absolute;
  width: 100%;
  height: 100%;
  border: 6px solid transparent;
  border-top-color: #0AE0DF;
  border-radius: 50%;
  top: -6px;
  left: -6px;

  animation-duration: 2s;
  animation-name: rotate-clock;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}
@keyframes rotate-clock {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
.profile-row .dp .dp-arc-outer {
  position: absolute;
  width: calc(100% + 20px);
  height: calc(100% + 20px);
  border: 6px solid transparent;
  border-bottom-color: #0AE0DF;
  border-radius: 50%;
  top: -16px;
  left: -16px;

  animation-duration: 2s;
  animation-name: rotate-anticlock;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}
@keyframes rotate-anticlock {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(-360deg);
  }
}

.profile-row .desc {
  font-family: 'Orbitron', sans-serif;
  color: #ecfcfb;
  text-shadow: 0px 0px 4px #12a0a0;
  letter-spacing: 1px;
}
.profile-row .desc h1 {
  margin: 0px;
}


</style>
</head>
<body> 
<div class="id-card-wrapper">
<div class="id-card">


<form action="" METHOD="POST">
  <center> <input type="text" style="height:30px; font-size:30px; color: grey; text-align: center" name="email" placeholder="email"> </center>
  <br><br>
  <center> <input type="text" style="height:30px; font-size:30px; color: grey; text-align: center" name="mojo_id" placeholder="mojo id"> </center>
  <br><br>
  <center><input type="submit" name="submit" style="height:40px; width: 120px; border-radius: 20px; border-color:#008CBA; outline:none; font-color:white; font-style:bold; background-color: #008CBA;" value="Submit"></center>
</form> 
</div>
</div>
</body>
</html>