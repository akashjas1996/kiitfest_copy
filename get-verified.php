<?php
  @require_once("db_connection.php");
  $numberError = $numberInDb = $kf_id =  $verifyLink = $email = "";
  $number = " ";
  $boolen = false;
  if($_SERVER["REQUEST_METHOD"]=="POST") {
    if(empty($_POST["number"])) {
      $numberError = "Enter Your mobile number";
      $boolen = false;
    }
    else{
      $number = validate_input($_POST["number"]);
      $boolen = true;
    }
  }

  function validate_input($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function findByNumber($number){



}
if($boolen){
  $sql = "SELECT * FROM `participants_participant` where phone='$number' limit 1";
  $user_id = mysqli_query($GLOBALS['connect'],$sql);
  $row = $user_id->fetch_assoc();
  $numberInDb = $row['phone'];
  $email = $row['email'];
  $kf_id = $row['kf_id'];
  $verifyLink = $row['unique_id'];
    if($numberInDb){
    $fullLink = "https://kiitfest.org/signup2.php/?id=$verifyLink";

    $message = "Greetings from KIITFEST!! You have successfully registered for KIITFEST 5.0%0aThese are your credentials:%0aKF ID:".$kf_id."%0aEMAIL:".$email."%0aThe next step to be a true part of KIITFEST 5.0 and for our verification VERIFICATION LINK:%0a".$fullLink;
  
  $curl = curl_init();

curl_setopt_array($curl, array(
  
  CURLOPT_URL => "https://control.msg91.com/api/postsms.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "<MESSAGE> <AUTHKEY>210060AF42xNpcG5be05a86</AUTHKEY> <SENDER>KTFEST</SENDER> <ROUTE>4</ROUTE> <CAMPAIGN>XML API</CAMPAIGN> <COUNTRY>91</COUNTRY> <SMS TEXT=\"$message\" > <ADDRESS TO=\"$number\"></ADDRESS> </SMS> </MESSAGE>",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTPHEADER => array(
    "content-type: application/xml"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo '<script>setTimeout(function(){swal("Error", "Verification link was not sent", "error")},150)</script>';
} else {
  echo '<script>setTimeout(function(){swal("Success", "Verification link was sent", "success")},150)</script>';
  // echo "<script>";
  // echo "setTimeout(function(){window.location.href = '/get-verified.php';},700)";
  // echo "</script>";
}
}
else{
  echo '<script>setTimeout(function(){swal("Error", "Verification link was not sent, as you are not registered", "error")},150)</script>';
}
}



?>

<?php


?>

<html lang="en">
<?php include "trac.php"; ?>    
<head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="manifest" href="manifest.json">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<title>KIITFEST18</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style the footer */
.footer {
    background-color: white;
    padding: 10px;
    padding-top: 10px;
}
</style>
</head>
<body>

<div class="content"><center>
<img src="kf.png" height="150px" style="padding-bottom: 10px"><br>
<font style="font-family: 'Open Sans', sans-serif;font-size: 22px;color: #292929;">KIIT FEST 5.0</font><br><br>
<font style="font-family: 'Open Sans', sans-serif;font-size: 12px;color: #a09f9f;">
  Welcome to KIITFEST 5.0 Password Reset
</font>
</center>
 </div>

<div class="container">
    <form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group" style="margin-top: 20vh;">
            <label for="exampleInputEmail1">Enter Your Registered Mobile No.</label>
                <input type="number" class="form-control" name="number" aria-describedby="emailHelp" placeholder="Enter Registered Mobile No.">
                <small id="emailHelp" class="form-text text-muted">You will be recieveing a text message on your phone</small>
                <div style="color:red;"><?php echo $numberError?></div>
               
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="footer">

</div><center><div style="margin-top: 30px;bottom: 0px;height: 30px;width: 100%; font-size: 12px;color: gray">Made with <i class="fas fa-heart" style="color: red;"></i> by <b>KIITFEST WEB TEAM</b>
</div></center>




</body>
</html>
