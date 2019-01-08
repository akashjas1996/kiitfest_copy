<?php
$db = mysqli_connect('localhost','root','','kiitfest18');
if(!$db){
    $message = 'Contact KIITFEST WebTeam';
    echo "<script type='text/javascript'>alert('$message');window.location.href = '../index.php';</script>";
}

?>
