<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<table class="table table-bordered table-hover table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">KF ID</th>
      <th scope="col">Name</th>
      <th scope="col">Roll No</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>

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
$sql = "SELECT kf_id, name, roll_no, phone, institution FROM participants_participant"; 
$result = $conn->query($sql);
$sl=1;
while($row = $result->fetch_assoc()) {
      if($row["payment_complete"]!=1){
        echo '
  <tbody id=col'.$sl.'>
    <tr>
      <th scope="row">'.$sl.'</th>
      <td>'.$row['kf_id'].'</td>
      <td>'.$row['name'].'</td>
      <td>'.$row['institution'].'</td>
      <td style="color:white"><button class="btn btn-success"><a href="tel://+91'.$row['phone'].'">'.$row['phone'].'</button></td>
    </tr>';
        /*echo ' 
        <h1></h1>
            <p>'.$sl.'  '.$row['kf_id'].'  '.$row['name'].'  '.$row['email'].'  '.$row['payment_complete'].'  '.$row['phone'].'</p>';*/} 
            $sl=$sl+1;
      }
?>

</tbody>
</table>
</body>