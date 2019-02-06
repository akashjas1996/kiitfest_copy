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
echo "Connected successfully";
$kf_id = $_POST["kiitfest_id"];
echo $kf_id;
$sql = "SELECT * FROM participants_participant WHERE kf_id='$kf_id'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
        echo '
        <h1>'.$row['name'].'</h1>
            <p>KFID : '.$row['kf_id'].'</p>
            <p>Email: '.$row['email'].'</p>
            <p>Payment:'.$row['roll_no']'</p>';
      }
?>