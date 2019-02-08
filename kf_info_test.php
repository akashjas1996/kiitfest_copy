<!DOCTYPE HTML>
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
        <div class="id-card">
    <div class="profile-row">
      <div class="dp">
        <div class="dp-arc-outer"></div>
        <div class="dp-arc-inner"></div>
        <img src="https://via.placeholder.com/420x420">
      </div>
      <div class="desc">
        <h1>'.$row['name'].'</h1>
            <p>KFID : '.$row['kf_id'].'</p>
            <p>Email: '.$row['email'].'</p>
            <p>Payment:'.$row['roll_no']'</p>
      </div>
    </div>
  </div>
  </div>';
      }
?>