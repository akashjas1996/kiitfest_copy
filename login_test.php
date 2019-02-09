<?php
session_start();
$host="51.68.139.41"; // Host name
$username="kiitfest"; // Mysql username
$password="hi9jkH27Gb1sEkRj"; // Mysql password
$db_name="kiitfest_5"; // Database name
$tbl_name="volunteer_db"; // Table name

// Connect to server and select databse.
$conn = new mysqli($host, $username, $password, $db_name);
  // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
//$myusername = mysqli_real_escape_string($myusername);
//$mypassword = mysqli_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and pin='$mypassword'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$row=mysqli_fetch_assoc($result);
if(!$result)
echo("Error description: " . mysqli_error($conn));
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
