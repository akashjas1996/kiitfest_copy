<!DOCTYPE HTML>
<html>
<head>
  <style>
  @media
    only screen 
    and (max-width: 760px), (min-device-width: 768px) 
    and (max-device-width: 1024px)  {

    /* Force table to not be like tables anymore */
    table, thead, tbody, th, td, tr {
      display: block;
    }

    /* Hide table headers (but not display: none;, for accessibility) */
    thead tr {
      position: absolute;
      top: -9999px;
      left: -9999px;
    }

    tr {
      margin: 0 0 1rem 0;
    }
      
    tr:nth-child(odd) {
      background: #ccc;
    }
    
    td {
      /* Behave  like a "row" */
      border: none;
      border-bottom: 1px solid #eee;
      position: relative;
      padding-left: 50%;
    }

    td:before {
      /* Now like a table header */
      position: absolute;
      /* Top/left values mimic padding */
      top: 0;
      left: 6px;
      width: 45%;
      padding-right: 10px;
      white-space: nowrap;
    }

    /*
    Label the data
    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
    */
    td:nth-of-type(1):before { content: "First Name"; }
    td:nth-of-type(2):before { content: "Last Name"; }
    td:nth-of-type(3):before { content: "Job Title"; }
    td:nth-of-type(4):before { content: "Favorite Color"; }
    td:nth-of-type(5):before { content: "Wars of Trek?"; }
    td:nth-of-type(6):before { content: "Secret Alias"; }
    td:nth-of-type(7):before { content: "Date of Birth"; }
    td:nth-of-type(8):before { content: "Dream Vacation City"; }
    td:nth-of-type(9):before { content: "GPA"; }
    td:nth-of-type(10):before { content: "Arbitrary Data"; }
  }
</style>
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
      <td ><button class="btn btn-primary"><a href="tel://+91'.$row['phone'].'">'.$row['phone'].'</button></td>
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