<?php
error_reporting(E_ALL);
  $servername = "51.68.139.41";
  $username = "kiitfest";
  $password = "hi9jkH27Gb1sEkRj";
  $dbname = "kiitfest_5";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
$sql = "SELECT kf_id, name, roll_no, phone FROM participants_participant"; 
$result = $conn->query($sql);
$sl=1;
while($row = $result->fetch_assoc()) {
      if($row["payment_complete"]!=1){
        echo ' 
        <h1></h1>
            <p>'.$sl.'  '.$row['kf_id'].'  '.$row['name'].'  '.$row['email'].'  '.$row['payment_complete'].'  '.$row['phone'].'</p>';} 
            $sl=$sl+1;
      }
?>