<?php
session_start();
@require_once('db_connection.php');

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
//$myusername = mysqli_real_escape_string($myusername);
//$mypassword = mysqli_real_escape_string($mypassword);

$sql="SELECT * FROM volunteer_db WHERE username='$myusername' and pin=$mypassword";
$result=mysqli_query($GLOBALS['connect'],$sql);

// Mysql_num_row is counting table row
$row=mysqli_fetch_assoc($result);
if(!$result)
echo("Error description: " . mysqli_error($GLOBALS['connect']));
else {
  if($row>0)
     $count=1;
}
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

$_SESSION["myusername"] = $row["username"];
header("location:volRoute.php");

}
else {
echo "Wrong Username or Password";
}
?>
