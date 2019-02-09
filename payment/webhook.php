<?php
@require_once("../db_connection.php");
include "../sql.php";
$sql = new sql();
if($connect){

$data = $_POST;
$mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.

$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];

if($major >= 5 and $minor >= 4){
     ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
     uksort($data, 'strcasecmp');
}

// You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
// Pass the 'salt' without the <>.
print_r($mac_provided . "<br>");

$mac_calculated = hash_hmac("sha1", implode("|", $data), "2bd83b9044274a48b870f2111987374a");
if($mac_provided == $mac_calculated){
    echo "MAC is fine";
    // Do something here
    if($data['status'] == "Credit"){
        $unique_id = $sql->retriveSessionParticipant();
        $pay_id = $data['payment_id'];
       // Payment was successful, mark it as completed in your database  
                $query1 = "update participants_participant set payment_complete = 1,payment_id='$pay_id' where unique_id= '$unique_id'";
                //$query1 = "select * from participants_participant where `unique_id`= '$unique_id'";
                $result = mysqli_query($connect,$query1);
                if($result)
                echo "done";
                else{
                    header('location:index.php');
                }
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


                echo "Paid";




    }
    else{
       // Payment was unsuccessful, mark it as failed in your database
       echo "not paid";
    }
}
else{
    echo "Invalid MAC passed";
}

}
?>
