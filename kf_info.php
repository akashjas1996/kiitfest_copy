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

<?php
$kf_id = $_POST["kiitfest_id"];
$servername = "51.68.139.41";
$username = "kiitfest";
$password = "hi9jkH27Gb1sEkRj";
$dbname = "kiitfest_5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo $kf_id;

$sql = "SELECT * FROM participants_participant WHERE kf_id='$kf_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "Name : " . $row["name"]. " - email: " .$row["email"]."<br>";
        if($row["payment_complete"]==1){
        	$color="red";
        	echo ' 
        <div class="id-card">
    <div class="profile-row">
      <div class="dp">
        <div class="dp-arc-outer"></div>
        <div class="dp-arc-inner"></div>
        <img src="https://via.placeholder.com/420x420">
      </div>
      <div class="desc">
        <h1>'.$row['name'].'</h1>
            <p>KFID : '.$row['kf_id'].'</p>
            <p>Email: '.$row['email'].'</p>
            <p>Payment:'.$row['roll_no'].'</p>
      </div>
    </div>
    <form action="" method="POST">
  <input type="text" name="barcode">
  <br><br>
  <input type="submit" value="save">
</form> 
  </div>';
}
        else
        {
        	echo ' 
        <div class="id-card-neg">
    <div class="profile-row">
      <div class="dp">
        <div class="dp-arc-outer"></div>
        <div class="dp-arc-inner"></div>
        <img src="https://via.placeholder.com/420x420">
      </div>
      <div class="desc">
        <h1>'.$row['name'].'</h1>
            <p>KFID:'.$row['kf_id'].'</p>
            <p>Email:'.$row['email'].'</p>
            <p>Payment:'.$row['payment_complete'].'</p>
      </div>
    </div>
  </div>
';

        }
        
    }
} 


else {
    echo "<h1> 0 results </h1> ";
}

if(isset($_POST['barcode'])){
	$barc = $_POST["barcode"];
	echo '$kf_id';
	//echo "You clicked on: ".$row['kf_id'];
	$sql = "INSERT INTO kf_barcode(kfid, barcode)VALUES('$kf_id', '$barc')";
		$result = $conn->query($sql);

        }


$conn->close(); ?>


</div>
</body>
</html>