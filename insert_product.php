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
$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
$image_name = addslashes($_FILES['image']['name']);
$sql = "INSERT INTO `product_images` (`id`, `image`, `image_name`) VALUES ('1', '{$image}', '{$image_name}')";
if (!mysql_query($sql)) { // Error handling
    echo "Something went wrong! :("; 
}
?>
