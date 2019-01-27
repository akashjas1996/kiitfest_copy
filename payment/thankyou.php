<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    
    <title>Thank You | KIIT Fest 5.0</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </head>

  <body>
    <div class="container">

      <div class="page-header">
        <h1><a href="index.php">Payment Successful</a></h1>
        <p class="lead">Thank You for registering in KIIT Fest 5.0</p>
      </div>

      <h3 style="color:#6da552">Thank You, Payment success!!</h3>
  

 <?php

include 'src/instamojo.php';
@require_once("../db_connection.php");
include "../sql.php";
$sql = new sql();

$api = new Instamojo\Instamojo('b99d20533b706864312305eb142c6ea8', '887515a0f019663aaf413c97904f0cca');

$payid = $_GET["payment_request_id"];

if($payid){
try {
    $response = $api->paymentRequestStatus($payid);


    echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
    echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
    echo "<h4>Payment Email: " . $response['payments'][0]['buyer_email'] . "</h4>" ;
    if($response['payments'][0]['status'] == "Credit")
    {
      $unique_id = $sql->retriveSessionParticipant();
      $pay_id = $response['payments'][0]['payment_id'];
     // Payment was successful, mark it as completed in your database  
              $query1 = "update participants_participant set payment_complete = 1,payment_id='$pay_id' where unique_id= '$unique_id'";
              //$query1 = "select * from participants_participant where `unique_id`= '$unique_id'";
              $result = mysqli_query($connect,$query1);
              if(!$result)
              header('location:index.php');
              
              // $to = 'akshatanurag1998@gmail.com';
              // $subject = 'Website Payment Request ' .$data['buyer_name'].'';
              // $message = "<h1>Payment Details</h1>";
              // $message .= "<hr>";
              // $message .= '<p><b>ID:</b> '.$data['payment_id'].'</p>';
              // $message .= '<p><b>Amount:</b> '.$data['amount'].'</p>';
              // $message .= "<hr>";
              // $message .= '<p><b>Name:</b> '.$data['buyer_name'].'</p>';
              // $message .= '<p><b>Email:</b> '.$data['buyer'].'</p>';
              // $message .= '<p><b>Phone:</b> '.$data['buyer_phone'].'</p>';
              
              
              // $message .= "<hr>";

            
              // $headers .= "MIME-Version: 1.0\r\n";
              // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
              // // send email
              // mail($to, $subject, $message, $headers);





  }
  else{
     // Payment was unsuccessful, mark it as failed in your database
     echo '<script>';
     echo 'setTimeout(async function(){await swal("Error!", "Payment was not successfull, contatc us at kiit.fest@kiit.ac.in", "error")},50)';
     echo '</script>';
  }

//   echo "<pre>";
//    print_r($response);
// echo "</pre>";
    ?>


    <?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

} else {

  echo '<script>';
  echo 'window.location.href = "../index.php";';
  echo '</script>';
}

  ?>


      
    </div> <!-- /container -->


  </body>
</html>