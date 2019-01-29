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



    function generateRandomString($length = 30) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function sendMail($url,$email){
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
        $mail->setFrom('reset-pass@kiitfest.org', 'Reset Password | KIITFEST 5.0');
        $mail->addAddress($email);     // Add a recipient
                       // Name is optional
        $mail->Subject = 'Reset your Password';
        // $mail->Body    = "Greetings from KIITFEST!!
        // <br>We recieved a request to reset your password. If you did not make this request feel free to ignore this email. <br> Otherwise you can reset your password using this link: <br>" . $url .
        // '<br><br><br><small><b>**Note: </b> This is a server generated mail. Do not reply to this email.<br> For any queries contact us at <a href="mailto=\'kiit.fest@kiit.ac.in\'">kiit.fest@kiit.ac.in</a>'; 
        $mail->Body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
          <title>Verify your email address</title>
          <style type="text/css" rel="stylesheet" media="all">
            /* Base ------------------------------ */
            *:not(br):not(tr):not(html) {
              font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;
              -webkit-box-sizing: border-box;
              box-sizing: border-box;
            }
            body {
              width: 100% !important;
              height: 100%;
              margin: 0;
              line-height: 1.4;
              background-color: #F5F7F9;
              color: #839197;
              -webkit-text-size-adjust: none;
            }
            a {
              color: #414EF9;
            }
            /* Layout ------------------------------ */
            .email-wrapper {
              width: 100%;
              margin: 0;
              padding: 0;
              background-color: #F5F7F9;
            }
            .email-content {
              width: 100%;
              margin: 0;
              padding: 0;
            }
            /* Masthead ----------------------- */
            .email-masthead {
              padding: 25px 0;
              text-align: center;
            }
            .email-masthead_logo {
              max-width: 400px;
              border: 0;
            }
            .email-masthead_name {
              font-size: 16px;
              font-weight: bold;
              color: #839197;
              text-decoration: none;
              text-shadow: 0 1px 0 white;
            }
            /* Body ------------------------------ */
            .email-body {
              width: 100%;
              margin: 0;
              padding: 0;
              border-top: 1px solid #E7EAEC;
              border-bottom: 1px solid #E7EAEC;
              background-color: #FFFFFF;
            }
            .email-body_inner {
              width: 570px;
              margin: 0 auto;
              padding: 0;
            }
            .email-footer {
              width: 570px;
              margin: 0 auto;
              padding: 0;
              text-align: center;
            }
            .email-footer p {
              color: #839197;
            }
            .body-action {
              width: 100%;
              margin: 30px auto;
              padding: 0;
              text-align: center;
            }
            .body-sub {
              margin-top: 25px;
              padding-top: 25px;
              border-top: 1px solid #E7EAEC;
            }
            .content-cell {
              padding: 35px;
            }
            .align-right {
              text-align: right;
            }
            /* Type ------------------------------ */
            h1 {
              margin-top: 0;
              color: #292E31;
              font-size: 19px;
              font-weight: bold;
              text-align: left;
            }
            h2 {
              margin-top: 0;
              color: #292E31;
              font-size: 16px;
              font-weight: bold;
              text-align: left;
            }
            h3 {
              margin-top: 0;
              color: #292E31;
              font-size: 14px;
              font-weight: bold;
              text-align: left;
            }
            p {
              margin-top: 0;
              color: #839197;
              font-size: 16px;
              line-height: 1.5em;
              text-align: left;
            }
            p.sub {
              font-size: 12px;
            }
            p.center {
              text-align: center;
            }
            /* Buttons ------------------------------ */
            .button {
              display: inline-block;
              width: 200px;
              background-color: #414EF9;
              border-radius: 3px;
              color: #ffffff;
              font-size: 15px;
              line-height: 45px;
              text-align: center;
              text-decoration: none;
              -webkit-text-size-adjust: none;
              mso-hide: all;
            }
            .button--green {
              background-color: #28DB67;
            }
            .button--red {
              background-color: #FF3665;
            }
            .button--blue {
              background-color: #414EF9;
            }
            /*Media Queries ------------------------------ */
            @media only screen and (max-width: 600px) {
              .email-body_inner,
              .email-footer {
                width: 100% !important;
              }
            }
            @media only screen and (max-width: 500px) {
              .button {
                width: 100% !important;
              }
            }
          </style>
        </head>
        <body>
          <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center">
                <table class="email-content" width="100%" cellpadding="0" cellspacing="0">
                  <!-- Logo -->
                  <tr>
                    <td class="email-masthead">
                      <img src="https://kiitfest.org/kf.png" height="150" width="120" alt="KIIT Fest Logo"><br>
                      <a class="email-masthead_name">KIITFEST 5.0</a>
                    </td>
                  </tr>
                  <!-- Email Body -->
                  <tr>
                    <td class="email-body" width="100%">
                      <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0">
                        <!-- Body content -->
                        <tr>
                          <td class="content-cell">
                            <h1>Reset Your Password</h1>
                            <p>Greetings from KIITFEST!!<br><br>We recieved a request to reset your password. If you did not make this request feel free to ignore this email. <br><br> Otherwise you can reset your password using this link: <br>" '. $url .'<br>
        
                            <center>OR</center>
                              
                            <!-- Action -->
                            <table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="center">
                                  <div>
                                    <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{action_url}}" style="height:45px;v-text-anchor:middle;width:200px;" arcsize="7%" stroke="f" fill="t">
                                    <v:fill type="tile" color="#414EF9" />
                                    <w:anchorlock/>
                                    <center style="color:#ffffff;font-family:sans-serif;font-size:15px;">Verify Email</center>
                                  </v:roundrect><![endif]-->
                                    <a href='.$url.' class="button button--blue" style="color:  white;">Reset Password</a>
                                  </div>
                                </td>
                              </tr>
                            </table>
                             
                            <br><br><br><small><b>**Note: </b> This is a server generated mail. Do not reply to this email.<br> For any queries contact us at <a href="mailto=\'kiit.fest@kiit.ac.in\'">kiit.fest@kiit.ac.in</a>;</p>
        
                            <p>Thanks,<br>Web Team<br>KIIT Fest 2019</p>
                            <!-- Sub copy -->
                            <!-- <table class="body-sub">
                              <tr>
                                <td>
                                  <p class="sub">If you’re having trouble clicking the button, copy and paste the URL below into your web browser.
                                  </p>
                                  <p class="sub"><a href="{{action_url}}">{{action_url}}</a></p>
                                </td>
                              </tr>
                            </table> -->
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0">
                        <tr>
                          <td class="content-cell">
                            <p class="sub center">
                              KIITFEST 5.0
                              <br>15TH-17TH FEB 2019
                            </p>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </body>
        </html>';
        $mail->AltBody = 'Reset Link : ' . $url;
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
            //   echo '<script>';
            // echo 'setTimeout(function(){window.location.href = "https://kiitfest.org/index.html";},900)';
            //   echo '</script>';
            // echo '<script>';
            // echo 'setTimeout(function(){window.location.href = "index.php";},700)';
            // echo '</script>';
    }

    if($boolen)
    {
        
     function checkUser($email) {
        if(isset($_POST["email"])){
            $query = "select * from participants_participant where email='$email'";
            $res = mysqli_query($GLOBALS['connect'],$query);
            if(!$res){
                echo '<script>';
                echo 'setTimeout(function(){swal("Erorr!", "User was not found", "error")},150)';
                echo '</script>';
            }

            else{
                $token = generateRandomString();
                $query = "update participants_participant set resetPassToken='$token' where email='$email'";
                mysqli_query($GLOBALS['connect'],$query);
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
                $url = $actual_link . "/verify-pass-token.php?token=" . $token;
                //echo $url;
                sendMail($url,$email);
                //sendMail($email,$url);
            }

        }

    }

     /*function SignUp() {
        // echo '<script>console.log("in signup");</script>';
        $user = $_POST["username"];
        $sql = "SELECT * FROM auth_user WHERE username = '$user'";
        $result = mysqli_query($GLOBALS['connect'], $sql);
        //         $sql = "SELECT * FROM auth_user WHERE username = 'techieCool'";
        // $result = mysqli_query($GLOBALS['connect'], $sql);

        // if (mysqli_num_rows($result) > 0) {
        //    $row = mysqli_fetch_assoc($result);
        //       echo "Name: " . $row["username"]. "<br>";
        // } else {
        //    echo "0 results";
        // }
        if(!$result)
        {   
            // echo '<script>console.log("in error result");</script>';
            echo mysqli_error($GLOBALS['connect']);
        }
        if(!$row = mysqli_fetch_assoc($result))
        {
            AddUser();

        }
        else {
            echo '<script>alert("Already Registered")</script>';

        }
    }*/
     if(isset($_POST["submit"])) {
       checkUser($email);
       unset($_POST);
    //    echo '<script>console.log("in submit");</script>';
       // header(location:$_SERVER["PHP_SELF"]);
       //header('Location: '.$_SERVER["PHP_SELF"]);
       mysqli_close($GLOBALS['connect']);
       $boolen = false;
    }
}


/**
 * 
 * This is the implementation of getEventList()
 * 
 */

// $event_list = $sql->getEventList($sql->getKFID());
// for($i = 0; $i< count($event_list);$i++)
// echo "\n" . $event_list[$i];


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
            <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Don't worry we will reset your password within no time!</small>
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
