<?php
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

echo '<form action="htezbv.php" METHOD="POST">
  KFID:<br>
  <input type="text" name="kfid" value="KF">
  <br>
  <input type="submit" value="Submit">
</form> '

$sql = "SELECT name, email, phone FROM participants_participant WHERE kf_id==$_POST["kfid"]";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name : " . $row["name"]. " - email: " .$row["email"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>