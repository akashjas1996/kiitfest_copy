<?php
//103.209.144.233
$servername = "51.68.139.41";
$username = "kiitfest";
$password = "hi9jkH27Gb1sEkR";
$dbname = "kiitfest_5";

/*$servername = "103.209.144.233";
$username = "learnast_kiit";
$password = "Hello@7004909759";
$dbname = "learnast_profile_pic";*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
$image_name = addslashes($_FILES['image']['name']);
$sql = "INSERT INTO `product_images` (`id`, `image`, `image_name`) VALUES ('1', '{$image}', '{$image_name}')";
if (!mysqli_query($sql)) { // Error handling
    echo "Something went wrong!";
}
?>
