<?php 
@require_once("../db_connection.php");
include "../sql.php";
$sql = new sql();

include 'src/instamojo.php';

function stopMulPay($kfid){
    $queryPaidDb = "select * from participants_participant where kf_id = '$kfid'";
    $res = mysqli_query($GLOBALS['connect'],$queryPaidDb);
    $row = mysqli_fetch_assoc($res);
    if($row['payment_complete'] == 1)
        return 1;
    else
        return 0;
    
}


$api = new Instamojo\Instamojo('b99d20533b706864312305eb142c6ea8', '887515a0f019663aaf413c97904f0cca');
if($connect && $sql->isLogin()==1 ) {
    $kfid = $sql->getKFID();
                    
    $sql1 = "SELECT * FROM participants_participant_events,events WHERE participants_participant_events.participant_id = '$kfid' and participants_participant_events.event_id = events.id";
    $result = mysqli_query($GLOBALS['connect'],$sql1);

    if($result)
    {
    $c = mysqli_num_rows($result);
    if($c<0 || stopMulPay($kfid)){
      
      echo '<script>';
      echo 'window.location.href = "../index.php";';
      echo '</script>';
      exit();
    }
    }

    $unique_id = $sql->retriveSessionParticipant();
    $query1="SELECT * FROM `participants_participant` WHERE `unique_id`='$unique_id'";
    $result = mysqli_query($connect,$query1);
    if($result>0)
    {
        $row = mysqli_fetch_assoc($result);
        $institution = strtoupper($row['institution']);
        if($institution == 'KIIT' || $institution == 'KIIT UNIVERSITY' || $institution == 'KIIT DEEMED TO BE UNIVERSITY' || $institution == 'KALINGA INSTITUTE OF INDUSTRIAL TECHNOLOGY'|| $institution == 'Kiit' || $institution == 'Kiit, bbsr'|| $institution == 'kiit')
          $amt = 208;
        else
          $amt = 515;

        
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "KIIT Fest 5.0",
        "amount" => $amt,
        "buyer_name" => $row["name"],
        "phone" => $row["phone"],
        "send_email" => true,
        "send_sms" => true,
        "email" => $row["email"],
        'allow_repeated_payments' => false,
        "redirect_url" => "https://kiitfest.org/payment/thankyou.php",
        "webhook" => "https://kiitfest.org/payment/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}    
    }
    else{
        header('location:index.php');
    }

// $product_name = $_POST["product_name"];
// $price = $_POST["product_price"];
// $name = $_POST["name"];
// $phone = $_POST["phone"];
// $email = $_POST["email"];



 


  } else{
    echo '<script>';
    echo 'setTimeout(function(){swal("Erorr!", "Login to continue", "error")},150)';
    echo '</script>';
    echo "<script>";
    echo 'setTimeout(function(){window.location.href = "../login.php";},700)';
    echo "</script>";
  }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Pay Now</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>
      
  </body>
  </html>