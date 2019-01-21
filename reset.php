<?php
    error_reporting(E_ERROR | E_PARSE);
    if(!$_GET['token'])
    {

        echo '<script>setTimeout(function(){swal("Failure", "Opps! Something went wrong.", "error")},50)</script>';
        echo "<script>";
        echo "setTimeout(function(){window.location.href = '/';},700)";
        echo "</script>";
    }
    @require_once("db_connection.php");



    $email =  " ";
    $usererror = $passerror1= $passerror2 = $passerror3 = $passerror4 = $cpasserror = " ";
    $boolen = false;

    if($_SERVER["REQUEST_METHOD"]=="POST") {



    //Checking the validation for username
    //Checking the validation for password
    if(empty($_POST["password"])) {
        $passerror1 = "Password Required";
        $boolen = false;
     }else {
         if (strlen($_POST["password"]) < 8) {
             $passerror2 = "Password too short!";
             $boolen = false;
         }
 
         else if (!preg_match("#[0-9]+#", $_POST["password"])) {
             $passerror3 = "Password must include at least one number!";
             $boolen = false;
         }
 
         else if (!preg_match("#[a-zA-Z]+#", $_POST["password"])) {
             $passerror4 = "Password must include at least one letter!";
             $boolen = false;
         }
 
         else
         {
             $password = $_POST["password"];
             $boolen = true;
         }
       }
 
 
       //Checking the validation for cpassword
       if(empty($_POST["cpassword"])) {
             $cpasserror = "Confirm Password Required";
             $boolen = false;
       }else {
         if($_POST["cpassword"]!=$_POST["password"])
         {
              $cpasserror = "Password does not match";
              $boolen = false;
         }
       }
    }
    /*
    function validate_input($data) {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
    }*/

    if($boolen)
    {
        function updatePassword($url_token,$password) {
            
            $sql = "SELECT user_id FROM `participants_participant` where resetPassToken='$url_token' limit 1";
            $user_id = mysqli_query($GLOBALS['connect'],$sql);
            $row = $user_id->fetch_assoc();
            $user_id = $row['user_id'];
            //echo $user_id;
                if($user_id){
                $hashedPassword = sha1($password);
                $query_user_db = "update auth_user set password='$hashedPassword' where id='$user_id'";
                $update_pass_res = mysqli_query($GLOBALS['connect'],$query_user_db);
                if($update_pass_res){
                    $query = "update participants_participant set resetPassToken = NULL where user_id = '$user_id'";
                    mysqli_query($GLOBALS['connect'],$query);
                    echo '<script>setTimeout(function(){swal("Success", "Password reset successfull", "success")},150)</script>';
                    echo "<script>";
                    echo "setTimeout(function(){window.location.href = '/login.php';},700)";
                    echo "</script>";

                }
                else{
                    echo '<script>setTimeout(function(){swal("Failure", "Opps! Something went wrong.", "error")},50)</script>';
                    echo "<script>";
                    echo "setTimeout(function(){window.location.href = '/';},700)";
                    echo "</script>";
                }
            }
            else{
                echo '<script>setTimeout(function(){swal("Failure", "Opps! Something went wrong.", "error")},50)</script>';
                echo "<script>";
                echo "setTimeout(function(){window.location.href = '/';},700)";
                echo "</script>";
            }



    
        }
    

         if(isset($_POST["submit"])) {
        if(isset($_POST['password'])&& isset($_POST['cpassword']))
           updatePassword($_GET['token'],$password);
           unset($_POST);
           //echo '<script>console.log("in submit");</script>';
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
</head>
<body>

<div class="content"><center>
<img src="kf.png" height="150px" style="padding-bottom: 10px"><br>
<font style="font-family: 'Open Sans', sans-serif;font-size: 22px;color: #292929;">KIIT FEST 5.0</font><br><br>
<font style="font-family: 'Open Sans', sans-serif;font-size: 12px;color: #a09f9f;">
  Welcome to KIITFEST 5.0 REGISTRATION
</font>
</center>
 </div>

<div class="container">

    <form enctype="multipart/form-data" method="post" action="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>">
    <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted">
                <ul>
                    <li>Your password can't be too similar to your other personal information.</li>
                    <li>Your password must contain at least 8 characters.</li>
                    <li>Your password can't be a commonly used password.</li>
                    <li>Your password can't be entirely numeric.</li>
                </ul>
            </small>
            <div style="color:red;"><?php echo $passerror1;?></div>
            <div style="color:red;"><?php echo $passerror2;?></div>
            <div style="color:red;"><?php echo $passerror3;?></div>
            <div style="color:red;"><?php echo $passerror4;?></div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" name="cpassword" placeholder="Password">
            <div style="color:red;"><?php echo $cpasserror;?></div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="footer">

</div><center><div style="margin-top: 30px;bottom: 0px;height: 30px;width: 100%; font-size: 12px;color: gray">Made with <i class="fas fa-heart" style="color: red;"></i> by <b>KIITFEST WEB TEAM</b>
</div></center>




</body>
</html>
