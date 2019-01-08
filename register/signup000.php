<?php include 'php/connect.php'; ?>
<html lang="en"><head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link rel="manifest" href="manifest.json">



<title>KIITFEST 5.0 Registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
::placeholder {
    color:gray;
    opacity: 1;font-family: 'Open Sans', sans-serif;

    padding-left: 20px;/* Firefox */
}
/* Style the content */
.content {
    background-color: white;
    font-family: 'Open Sans', sans-serif;

    padding: 20px;
    height: 200px; /* Should be removed. Only for demonstration */
}

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
<img src="kf.png" height="140px" style="padding-bottom: 10px"><br>
<font style="font-family: 'Open Sans', sans-serif;font-size: 22px;color: #292929;">KIIT FEST 5.0</font><br><br>
<font style="font-family: 'Open Sans', sans-serif;font-size: 12px;color: #a09f9f;">
  Lorem Ipsum dane doe leo ispum hola holi 
</font>

</center>
 </div>

<div class="footer"><center>

<form method="POST" action="signup.php">
   <input type="text" placeholder="Full Name" name="fullName" style="border: 0.7px #b9b7b7 solid;border-radius: 20px;width: 80%;height: 38px;text-align: center;outline: none;color: gray">
  <br><br>
  <input type="email" placeholder="Email Id" name="email" style="border: 0.7px #b9b7b7 solid;border-radius: 20px;width: 80%;height: 38px;text-align: center;outline: none;color: gray">
  <br><br>
  <input type="number" placeholder="Phone Number" name="phoneNumber" style="border: 0.7px #b9b7b7 solid;border-radius: 20px;width: 80%;height: 38px;text-align: center;outline: none;color: gray">
  <br><br>
  
  <input type="text" placeholder="Institution" name="institution" style="border: 0.7px #b9b7b7 solid;border-radius: 20px;width: 80%;height: 38px;text-align: center;outline: none;color: gray">
  <br><br>
<input type="password" placeholder="Password" name="password" style="border: 0.7px #b9b7b7 solid;border-radius: 20px;width: 80%;height: 38px;text-align: center;outline: none;color: gray">
  <br><br>
<button type="submit" name= "regButton" style="border: 0.7px  #5e91f8 solid;border-radius: 20px;width: 80%;height: 38px;background-color: #5e91f8;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);color:white;font-family: 'Open Sans', sans-serif;

  " ;="">REGISTER
</button>
</form>
  </center>
   

</div><center><div style="margin-top: 30px;bottom: 0px;height: 30px;width: 100%; font-size: 12px;color: gray">Made with <i class="fas fa-heart" style="color: red;"></i> by <b>KIITFEST WEB TEAM</b>
</div></center>

<?php

               
               //echo 'IN PHP';

               if(isset($_POST['regButton'])){
                   //echo 'in php2';
                   if (!($_POST['fullName'])||(empty($_POST['fullName']))) {
                       $error = "Enter your name";
                       echo "<script type='text/javascript'>alert('$error');</script>";
                   }
                   else{
                       $uFname = $_POST['fullName'];
                       //echo $uFname;
                   }
                   $filter = '/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/';
                   if(!preg_match($filter, $_POST['phoneNumber']))
                   {
                       $error ="Enter a valid contact no. of 10 digits";
                       echo "<script type='text/javascript'>alert('$error');</script>";
                   }else{
                       $uPhone = $_POST['phoneNumber'];
                   }
                   if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                       $email = $_POST['email'];
                   } else {$error ="Enter a valid email";
                           echo "<script type='text/javascript'>alert('$error');</script>";
                          }
                   // $email = $_POST['email'];
                   //$uInsti = $_POST['qualification'];
                   $uInstiName = $_POST['institution'];
				   if(isset($_POST['password']))
				   {
					   $pass = $_POST['password'];
                       
                   }
			   
			    if ($uPhone == 0)
				{
					$uPhone = "";
				}

                   if (mysqli_num_rows(mysqli_query($db,"SELECT * FROM `users` WHERE e_mail = '$email'"))>0){
                       $message = 'User Already Exists';
                       echo "<script type='text/javascript'>alert('$message');</script>";
                   }
                   else{

                       $insertUserSql= "INSERT INTO `users`(`f_name`, `e_mail`, `phone_number`, `institution`,`password`) VALUES

        ('$uFname','$email','$uPhone','$uInstiName','$pass')";
                      // echo $insertUserSql; 
					  /**
					  if (!mysqli_query($con,"INSERT INTO Persons (FirstName) VALUES ('Glenn')"))
  {
  echo("Error description: " . mysqli_error($con));
  }
					  
					  */if(!mysqli_query($db,$insertUserSql))
					  {
						  //echo ("ErrorNA: ". mysqli_error($db)); 
					  }
					  /**
                       $result = mysqli_query($db, $insertUserSql);
					   if(!result)
					   {
						   echo "Error";
						   echo mysqli_error($db);
					   }
					   */
                      }
               }
			   


               ?>


</body></html>