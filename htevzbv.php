<!DOCTYPE HTML>
<html>
<head>
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


<form action="kf_info.php" METHOD="POST">
  <center> <input type="text" style="height:30px; font-size:30px; color: grey; text-align: center" name="kiitfest_id" value="KF"> </center>
  <br><br>
  <center><input type="submit" style="height:40px; width: 120px; border-radius: 20px; border-color:#008CBA; outline:none; text-color:white; font-style:bold; background-color: #ffffff;" value="Submit"></center>
</form> 
</div>
</div>
</body>
</html>