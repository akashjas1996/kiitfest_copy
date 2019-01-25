<?php 
@require_once("../db_connection.php");
include "../sql.php";
$sql = new sql();

include 'src/instamojo.php';

$kfid = $sql->getKFID();
                    
$sql = "SELECT * FROM participants_participant_events,events WHERE participants_participant_events.participant_id = '$kfid' and participants_participant_events.event_id = events.id";
$result = mysqli_query($GLOBALS['connect'],$sql);
if($result)
{
    $c = mysqli_num_rows($result);
    if($c==0){
      
      echo '<script>';
      echo 'window.location.href = "../index.php";';
      echo '</script>';
      exit();
    }
}

$api = new Instamojo\Instamojo('b99d20533b706864312305eb142c6ea8', '887515a0f019663aaf413c97904f0cca');
if($connect && $sql->isLogin()==1 ) {
    $unique_id = $sql->retriveSessionParticipant();
    $query1="SELECT * FROM `participants_participant` WHERE `unique_id`='$unique_id'";
    $result = mysqli_query($connect,$query1);
    if($result>0)
    {
        $row = mysqli_fetch_assoc($result);
        $institution = strtoupper($row['institution']);
        if($institution == 'KIIT' || $institution == 'KIIT UNIVERSITY' || $institution == 'KIIT DEEMED TO BE UNIVERSITY' || $institution == 'KALINGA INSTITUTE OF INDUSTRIAL TECHNOLOGY')
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



 


  }
  ?>