<!--?php 
    echo "<h1 style='text-align: center;'>Registration Closed</h1>";
    exit();
?-->
<head>
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
</head>



<?php
    @require_once("db_connection.php");
    if($connect){
        // echo "<script>console.log('connected');</script>";
        // $sql = "SELECT * FROM auth_user WHERE username = 'techieCool'";
        // $result = mysqli_query($connect, $sql);

        // if (mysqli_num_rows($result) > 0) {
        //    $row = mysqli_fetch_assoc($result);
        //       echo "Name: " . $row["username"]. "<br>";
        // } else {
        //    echo "0 results";
        // }
    }
    if(array_key_exists("valid_user", $_SESSION) && !empty($_SESSION["valid_user"]))
    {
        echo '<script>';
        echo 'setTimeout(function(){window.location.href = "signup2.php";},200)';
        echo '</script>';
    }

    $username = $password = $cpassword = $already = " ";
    $usererror = $passerror1= $passerror2 = $passerror3 = $passerror4 = $cpasserror = " ";
    $boolen = false;

    if($_SERVER["REQUEST_METHOD"]=="POST") {

    //Checking the validation for username
    if(empty($_POST["username"])) {
      $usererror = "Username Required";
      $boolen = false;
    }else {
        $username = validate_input($_POST["username"]);
        $boolen = true;
    }

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

    function validate_input($data) {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    if($boolen)
    {

     function AddUser() {
        // echo '<script>console.log("in adduser");</script>';
        if(isset($_POST["username"]) && isset($_POST["password"]))
        {
            $u = $_POST["username"];
            $p = $_POST["password"];
        }
        if($u && $p)
        {
        $sql = "INSERT INTO auth_user(`username`,`password`,`last_login`,`is_superuser`,`is_staff`,`is_active`,`date_joined`) VALUES
        ('$u',sha1('$p'),now(),'0','0','1',now())";

            if (mysqli_query($GLOBALS['connect'], $sql)) {
            echo '<script>console.log("in result test done");</script>';
            $query = "SELECT id FROM auth_user WHERE username = '$u'";
            $result1 =  mysqli_query($GLOBALS['connect'],$query);
            if($result1)
            {
                // echo '<script>console.log("in adduser redirecting to signup2");</script>';
                $row = mysqli_fetch_assoc($result1);
                $_SESSION["valid_user"] = $row['id'];
                $_SESSION["valid_user_name"] = $_POST["username"];
                echo '<script>';
                echo 'setTimeout(function(){swal("Congratulations!", "Sucessfuly Confirmed", "success")},50)';
                echo '</script>';
            }
            else
            {
                echo '<script>';
                echo 'setTimeout(function(){swal("Error!", "Some error occured", "warning")},50)';
                echo '</script>';
            }
            if($result1)
            {
                // echo '<script>console.log("in adduser redirecting to signup2");</script>';
                echo '<script>';
                echo 'setTimeout(function(){window.location.href = "signup2.php";},700)';
                echo '</script>';
            }
        }
        else{
            echo '<script>console.log("error zone");</script>';
            echo mysqli_error($GLOBALS['connect']);
        }
        }

    }

     function SignUp() {
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
    }
     if(isset($_POST["submit"])) {
       SignUp();
       unset($_POST);
       echo '<script>console.log("in submit");</script>';
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
  Welcome to KIITFEST 5.0 REGISTRATION
</font>
</center>
 </div>

<div class="container">
    <form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
                <small id="emailHelp" class="form-text text-muted">Required. 150 characters or fewer. Letters, digits and @/./+/-/_ only.</small>
                <div style="color:red;"><?php echo $usererror?></div>
                <div style="color:red;"><?php echo $already?></div>
            </div>
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
        <span style='float: right;'>Forgot your password? <a href="/forgot.php" class="">Click here to reset</a></span> <br>
        <span style='float: right;'>Didn't recieve your KFID or verification mail? <a href="/verify-again.php" class="">Click here</a></span> 
    </form>
</div>

<div class="footer">

</div><center><div style="margin-top: 30px;bottom: 0px;height: 30px;width: 100%; font-size: 12px;color: gray">Made with <i class="fas fa-heart" style="color: red;"></i> by <b>KIITFEST WEB TEAM</b>
</div></center>




</body>
</html>
