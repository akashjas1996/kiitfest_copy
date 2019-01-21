<?php
     @require_once("db_connection.php");
    $token = " ";
    if($_GET['token']){
        $token = $_GET['token'];
        //echo $token;
        $sql = "select * from participants_participant where resetPassToken='$token'";
        $isTokenPresent = mysqli_query($GLOBALS['connect'],$sql);
        if(mysqli_num_rows($isTokenPresent) > 0){
           
            echo '<script>';
            echo 'setTimeout(function(){swal("Success!", "Verification successfull", "success")},150)';
            echo '</script>';
            $url_text =  "/reset.php?token=" . $token;
            echo "<script>";
            echo "setTimeout(function(){window.location.href = '$url_text';},700)";
            echo "</script>";
            
        }

        else
        
        echo '<script>setTimeout(function(){swal("Failure", "Not verified", "error")},50)</script>';
        echo "<script>";
        echo "setTimeout(function(){window.location.href = '$url_text';},700)";
        echo "</script>";
       
    }
    else{
        echo '<script>setTimeout(function(){swal("Failure", "Not verified", "error")},50)</script>';
        echo "<script>";
        echo "setTimeout(function(){window.location.href = '$url_text';},700)";
        echo "</script>";
    }
    
?>



<html lang="en">
<?php include "trac.php"; ?>    
<head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="manifest" href="manifest.json">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<title>KIITFEST18</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style the footer */
.footer {
    background-color: white;
    padding: 10px;
    padding-top: 10px;
}
</style>
</head>
<body>




</body>
</html>