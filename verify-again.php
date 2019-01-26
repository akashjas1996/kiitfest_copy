<?php
    @require_once("db_connection.php");
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $email =  " ";
    $usererror = $passerror1= $passerror2 = $passerror3 = $passerror4 = $cpasserror = " ";
    $boolen = false;

    if($_SERVER["REQUEST_METHOD"]=="POST") {

    //Checking the validation for username
    if(empty($_POST["email"])) {
      $usererror = "Email Required";
      $boolen = false;
    }else {
        $email = validate_input($_POST["email"]);
        
        $boolen = true;
        }
    }
    function validate_input($data) {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
    }



    function sendMail($email,$url,$KF_ID){
        //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
        $mail = new PHPMailer;
        $mail->isSMTP();     
        //$mail->SMTPDebug = 1;                                 // Set mailer to use SMTP
        $mail->Host = 'smtp.sendgrid.net';                       // Specify main and backup server
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'akshat_kiitfest';                   // SMTP username
        $mail->Password = 'a9udFHaRNrNF488';               // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
        $mail->Port = 587;
        //$mail->AuthType = 'LOGIN';                               //Set the SMTP port number - 587 for authenticated
        $mail->setFrom('no-reply@kiitfest.org', 'Verify Email | KIITFEST 5.0');
        $mail->addAddress($email);     // Add a recipient
                       // Name is optional
        $mail->Subject = 'Verify your Email';
        $mail->Body    = 'Greetings from KIITFEST!!
           <br>You have successfully registered for KIITFEST 5.0 and now, you are a part of our very own legacy of over 4 years of jubilant celebration of arts, music, creativity. We hope to see your Undying Spirit relive the Chronicles of True Participation, Immense Zest and Pure Valediction. These are your credentials:<br> KF ID: '.$KF_ID.' <br> EMAIL: '.$email.'
           
           <br>The next step to be a true part of KIITFEST 5.0 and for our verification VERIFICATION LINK:'.$url .
           '<br><br><br><small><b>**Note: </b> This is a server generated mail. Do not reply to this email.<br> For any queries contact us at <a href="mailto=\'kiit.fest@kiit.ac.in\'">kiit.fest@kiit.ac.in</a>';
                       $mail->AltBody = $url . $KF_ID;
            // $mail->subject = "My subject";
            // $mail->txt = "Hello world!";
            // $mail->headers = "From: webmaster@example.com" . "\r\n" .
            // "CC: somebodyelse@example.com";


            if(!$mail->send()) {
                echo '<script>';
                echo 'setTimeout(function(){swal("Erorr!", "Mail not Sent. Please Retry", "error")},150)';
                echo '</script>';
                //echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
               echo '<script>';
               echo 'setTimeout(function(){swal("Congratulations!", "Mail Sent", "success")},150)';
               echo '</script>';

            }

    }

    if($boolen)
    {
        
     function checkUser($email) {
        if(isset($_POST["email"])){
            $query = "select * from participants_participant where email='$email' limit 1";
            $res = mysqli_query($GLOBALS['connect'],$query);
            
            if(!$res){
                echo '<script>';
                echo 'setTimeout(function(){swal("Erorr!", "User was not found", "error")},150)';
                echo '</script>';
            } else {
                $row = $res->fetch_assoc();
                //$token = generateRandomString();
                if($row['verified'] == 0){
                // $query = "update participants_participant set resetPassToken='$token' where email='$email'";
                // mysqli_query($GLOBALS['connect'],$query);
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
                $url = $actual_link . "/verify.php?id=" . $row["unique_id"];
                //echo $url;
                sendMail($email,$url,$row["kf_id"]);
                //sendMail($email,$url);
                }
                else{
                    echo '<script>';
                    echo 'setTimeout(function(){swal("Erorr!", "Looks like you have done that already.", "error")},150)';
                    echo '</script>'; 
                }
            }

        }

    }


     if(isset($_POST["submit"])) {
       checkUser($email);
       unset($_POST);
       mysqli_close($GLOBALS['connect']);
       $boolen = false;
    }
}





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
  Welcome to KIITFEST 5.0 Resend Verfication Email
</font>
</center>
 </div>

<div class="container">
    <form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group" style="margin-top: 20vh;">
            <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">Please enter your registered email-id</small>
                <div style="color:red;"><?php echo $usererror?></div>
               
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="footer">

</div><center><div style="margin-top: 30px;bottom: 0px;height: 30px;width: 100%; font-size: 12px;color: gray">Made with <i class="fas fa-heart" style="color: red;"></i> by <b>KIITFEST WEB TEAM</b>
</div></center>




</body>
</html>
