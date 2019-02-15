<!--?php 
    echo "<h1 style='text-align: center;'>Registration Closed</h1>";
    exit();
?-->
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


<?php
    @require_once("db_connection.php");
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
    //Checking session for valid user
    if(!array_key_exists("valid_user", $_SESSION) && empty($_SESSION["valid_user"]))
    {
        header('location:index.php');
    }
    if(array_key_exists("id", $_GET) && !empty($_GET["id"]))
    {
        header('Location:../verify.php?id='.$_GET["id"].'');
    }
    $nameerror = $emailerror = $phonenumbererror = $gendererror = $doberror = $rollnoerror = $institutionerror = " ";
    $name = $email = $phonenumbererror = $gender = $dob = $rollno = $institution =" ";
    $boolen = false;
    if($_SERVER["REQUEST_METHOD"]=="POST") {
    //Checking the validation for name
    if(empty($_POST["name"])) {
      $nameerror = "Name Required...";
      $boolen = false;
    }else {
        $name = validate_input($_POST["name"]);
        $boolen = true;
    }
    //Checking the validation for email
    if(empty($_POST["email"])) {
       $emailerror = "E-mail Required...";
       $boolen = false;
    }else if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
        // $emailerror = "Invalid E-mail...";
        // $boolen = false;
    }else {
      $email = $_POST["email"];
      $boolen = true;
    }
    //Checking the validation for gender
    if(empty($_POST["gender"])) {
        $gendererror = "Gender Required...";
        $boolen = false;
    }else {
        $gender = $_POST["gender"];
        $boolen = true;
    }
    //Checking the validation for number
    if(empty($_POST["phonenumber"])) {
        $phonenumbererror = "Gender Required...";
        $boolen = false;
    }else {
        $phonenumber = $_POST["phonenumber"];
        $boolen = true;
    }
    //Checking the validation for roll number
    if(empty($_POST["dob"])) {
        $doberror = "Date Of Birth Required...";
        $boolen = false;
    }else {
        $dob = $_POST["dob"];
        $boolen = true;
    }
    //Checking the validation for institution
    if(empty($_POST["institution"])) {
        $institutionerror = "Institution Required...";
        $boolen = false;
    }else {
        $institution = $_POST["institution"];
        $boolen = true;
    }
    //Checking the validation for institution
    if(empty($_POST["rollno"])) {
        $rollnoerror = "Roll Number Required...";
        $boolen = false;
    }else {
        $rollno = $_POST["rollno"];
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
    if($boolen)
    {
     function AddUser() {
        $email = $_POST["email"];
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $phonenumber = $_POST["phonenumber"];
        $dob = $_POST["dob"];
        $institution = $_POST["institution"];
        $rollno = $_POST["rollno"];
        $user_id = $_SESSION['valid_user'];
        $unique_id = generateRandomString();
        $verifyLink = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."/?id=".$unique_id."";
        //Generating the KF ID
        $id="KF".rand(1,99999);
        $query= "SELECT id FROM participants_participant  where id='$id'";
        $result = mysqli_query($GLOBALS['connect'], $query);
        if ($result === true ){
            $KF_ID = $id;
            $email = $_POST["email"];
            $sql1 = "SELECT * FROM participants_participant WHERE email = '$email'";
            $result1 = mysqli_query($GLOBALS['connect'], $sql1);
            if(!$result1)
            {
                echo mysqli_error($GLOBALS['connect']);
            }
            if(!$row = mysqli_fetch_assoc($result1))
            {
               AddUser();
            }
            else {
                echo '<script>alert("Already Registered")</script>';
            }
        }
        else{
            $KF_ID="KF".rand(1,99999);
        }
        if($email && $name && $gender && $phonenumber && $dob && $institution && $unique_id && $rollno)
        {
            $sql1 = "SELECT * FROM participants_participant WHERE email = '$email'";
            $result1 = mysqli_query($GLOBALS['connect'], $sql1);
            if(!$result1)
            {
                echo mysqli_error($GLOBALS['connect']);
            }
            if(!$row = mysqli_fetch_assoc($result1))
            {
            
        $sql = "INSERT INTO participants_participant (`name`,`email`,`phone`,`dob`,`gender`,`roll_no`,`institution`,`unique_id`,`verified`,`user_id`,`kf_id`) VALUES
            ('$name','$email','$phonenumber','$dob','$gender','$rollno','$institution','$unique_id',0,'$user_id','$KF_ID')";
        $result = $GLOBALS['connect']->query ($sql);
        if(!$result)
            echo mysqli_error($GLOBALS['connect']);
        if($result)
        {
            unset ($_SESSION["valid_user"]);
            session_destroy();
        }
        else {
            echo '<script>alert("Already Registered")</script>';
        }
// $mail->setFrom('amit@gmail.com', 'Amit Agarwal');     //Set who the message is to be sent from
// $mail->addReplyTo('labnol@gmail.com', 'First Last');  //Set an alternative reply-to address
// $mail->addAddress('josh@example.net', 'Josh Adams');  // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');
// $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
// $mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
// $mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML
// $mail->Subject = 'Here is the subject';
// $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
// //Read an HTML message body from an external file, convert referenced images to embedded,
// //convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
// if(!$mail->send()) {
//    echo 'Message could not be sent.';
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
//    exit;
// }
// echo 'Message has been sent';
            if($result)
            {
                //info@kiitfest.org->57t0n$lJ86%6
                $mail = new PHPMailer;
                $mail->isSMTP();  
                //$mail->SMTPDebug = 1;                                      // Set mailer to use SMTP
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
    //             $mail->Body    = 'Greetings from KIITFEST!!
    // <br>You have successfully registered for KIITFEST 5.0 and now, you are a part of our very own legacy of over 4 years of jubilant celebration of arts, music, creativity. We hope to see your Undying Spirit relive the Chronicles of True Participation, Immense Zest and Pure Valediction. These are your credentials:<br> KF ID: '.$KF_ID.' <br> EMAIL: '.$email.'
    
    // <br>The next step to be a true part of KIITFEST 5.0 and for our verification VERIFICATION LINK:'.$verifyLink .
    // '<br><br><br><small><b>**Note: </b> This is a server generated mail. Do not reply to this email.<br> For any queries contact us at <a href="mailto=\'kiit.fest@kiit.ac.in\'">kiit.fest@kiit.ac.in</a>';
    $mail->Body = '
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                        <h1>Verify your email address</h1>
                        <p>Greetings from KIITFEST!!<br>You have successfully registered for KIITFEST 5.0 and now, you are a part of our very own legacy of over 4 years of jubilant celebration of arts, music, creativity. We hope to see your Undying Spirit relive the Chronicles of True Participation, Immense Zest and Pure Valediction. These are your credentials:<br><br><b> KF ID: '.$KF_ID.' <br> EMAIL: '.$email.'</b><br>
    
                          <br>The next step to be a true part of KIITFEST 5.0 and for our verification<br>
                          
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
                                <a href='.$verifyLink.' class="button button--blue" style="color: white;">Verify Email</a>
                              </div>
                            </td>
                          </tr>
                        </table>
                          If you’re having trouble clicking the button, copy and paste the URL below into your web browser.<br>'.$verifyLink .
                          '<br><br><br><small><b>**Note: </b> This is a server generated mail. Do not reply to this email.<br> For any queries contact us at <a href="mailto=\'kiit.fest@kiit.ac.in\'">kiit.fest@kiit.ac.in</a>\';</p>
    
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
    $mail->IsHTML(true);
                $mail->AltBody = $verifyLink . $KF_ID;
                    // $mail->subject = "My subject";
                    // $mail->txt = "Hello world!";
                    // $mail->headers = "From: webmaster@example.com" . "\r\n" .
                    // "CC: somebodyelse@example.com";
    
    
                    if(!$mail->send()) {
                    //echo 'Message could not be sent.';
                    //echo 'Mailer Error: ' . $mail->ErrorInfo;
                    echo '<script>';
                    echo 'setTimeout(function(){swal("Opps! Something went wrong!", "Please try again later", "error")},150)';
                    echo '</script>';
                    } else {
                       echo '<script>';
                       echo 'setTimeout(function(){swal("Congratulations!", "Mail Sent", "success")},150)';
                       echo '</script>';
    
                    }
                      echo '<script>';
                    echo 'setTimeout(function(){window.location.href = "https://kiitfest.org/index.php";},900)';
                      echo '</script>';
                    // echo '<script>';
                    // echo 'setTimeout(function(){window.location.href = "/";},700)';
                    // echo '</script>';
            }
        }
        else
        {
            mysqli_error($GLOBALS['connect']);
        }
        }
    }
     function SignUp() {
        // $user = $_POST["username"];
        $email = $_POST["email"];
        $sql1 = "SELECT * FROM participants_participant WHERE email = '$email'";
        $result1 = mysqli_query($GLOBALS['connect'], $sql1);
        if(!$result1)
        {
            echo mysqli_error($GLOBALS['connect']);
        }
        if(!$row = mysqli_fetch_assoc($result1))
        {
           AddUser();
        }
        else {
            echo '<script>alert("Already Registered")</script>';
        }
    }
     if(isset($_POST["submit"])) {
       SignUp();
       unset($_POST);
       // header(location:$_SERVER["PHP_SELF"]);
       //header('Location: '.$_SERVER["PHP_SELF"]);
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106122426-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-106122426-5');
</script>

</head>
<body>

<div class="content"><center>
<img src="kf.png" height="150px" style="padding-bottom: 10px"><br>
<font style="font-family: 'Open Sans', sans-serif;font-size: 22px;color: #292929;">KIIT FEST 5.0</font><br><br>
<font style="font-family: 'Open Sans', sans-serif;font-size: 12px;color: #a09f9f;">
  <?php
    if(array_key_exists("valid_user_name", $_SESSION) && !empty($_SESSION["valid_user_name"]))
    {
        echo '<h3>Username :'.$_SESSION["valid_user_name"].' Dob format: yyyy/mm/dd</h3>';
    }
  ?>
</font>
</center>
 </div>

<div class="container">
    <form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Name">
            <div style="color:red;"><?php echo $nameerror;?></div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">E-MAIL</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required placeholder="E-mail address">
            <div style="color:red;"><?php echo $emailerror;?></div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="number" class="form-control" name="phonenumber" aria-describedby="emailHelp" placeholder="Phone Number">
            <div style="color:red;"><?php echo $phonenumbererror?></div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Gender</label>
            <select  name="gender" class="form-control">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Others</option>
            </select>
            <div style="color:red;"><?php echo $gendererror;?></div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Date Of Birth</label>
            <input type="date" class="form-control" name="dob" aria-describedby="emailHelp" placeholder="Date Of Birth">
        </div>
        <div style="color:red;"><?php echo $doberror?></div>
        <div class="form-group">
            <label for="exampleInputEmail1">Institution</label>
            <!-- <input type="text" class="form-control" name="institution" aria-describedby="emailHelp" placeholder="Institution"> -->
            <select id="insName" onchange="instituteChange()" class="form-control" name="institution" aria-describedby="emailHelp" placeholder="Institution" required>
                <option value="" selected disabled>--choose one--</option>
                <option value="KIIT">Kalinga Institute Of Industrial Technology(Includes all schools)</option>
                <option value="others">Others..</option>
            </select>
            <div style="color:red;"><?php echo $institutionerror?></div>
        </div>
        <div id="afterIns" class="form-group"> </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="footer">

</div><center><div style="margin-top: 30px;bottom: 0px;height: 30px;width: 100%; font-size: 12px;color: gray">Made with <i class="fas fa-heart" style="color: red;"></i> by <b>KIITFEST WEB TEAM</b>
</div></center>


<script>
    function instituteChange() {

        var institute = document.getElementById('insName').value;
        var afterIns = document.getElementById('afterIns');

        if (institute === "KIIT" || institute === "KIMS" || institute === "KIDS" || institute === "KSOM")
            afterIns.innerHTML = `
                <label for="exampleInputEmail1">Roll Number</label>
                <input type="text" class="form-control" name="rollno" aria-describedby="emailHelp" placeholder="Roll Number">
                <div style="color:red;"><?php echo $rollnoerror?></div>
            `
        else if (institute === "others")
            afterIns.innerHTML = `
                <label for="exampleInputEmail1">Institute Name</label>
                <input type="text" class="form-control" name="rollno" aria-describedby="emailHelp" placeholder="Institution Name">
                <div style="color:red;"><?php echo $nameerror;?></div>
            `
        else
            swal("Opps! Something went wrong!", "Please try again later", "error");
    }
    </script>
</body>
</html>
