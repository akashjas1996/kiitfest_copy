<?php
@require_once('db_connection.php');
$unique_id  = $_GET["id"];
$sql = "SELECT * FROM participants_participant WHERE unique_id = '$unique_id'";
$result = mysqli_query($GLOBALS['connect'],$sql);

if($result)
{
	$query = "UPDATE participants_participant SET verified = 1 WHERE unique_id = '$unique_id'";
	$result1 = mysqli_query($GLOBALS['connect'],$query);
	if($result1)
	{
		echo '<script>';
        echo 'setTimeout(function(){swal("Congratulations!", "Sucessfuly verified", "success")},50)';
        echo '</script>';
        if($result1)
        {
        	echo '<script>';
            echo 'setTimeout(function(){window.location.href = "index.php";},700)'; 
            echo '</script>';
        }
	}
	else
		echo 'Failde to verify';
}
else
{
	header('location:index.html');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>KIIT FEST 2018</title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

</body>
</html>