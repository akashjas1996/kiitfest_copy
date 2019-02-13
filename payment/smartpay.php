<?php 
    @require_once("../db_connection.php");
    include "../sql.php";
    $sql = new sql();
    if($_SERVER["REQUEST_METHOD"]=="POST") {

        if(empty($_POST["kfid"])) {
            echo '<script>';
            echo 'function(){swal("Error!", "KFID Required", "error")}';
            echo '</script>';
        
        }
    $kfid = $_POST['kfid'];
    $query = "select payment_complete from participants_participant  where id='$kfid'";
    $result = mysqli_query($GLOBALS['connect'], $query);
    if($result){
        $row = mysqli_fetch_assoc($result);
        if($row['payment_complete'] == 1){
            echo '<script>';
            echo 'function(){swal("Congratulations!", "Paid", "success")}';
            echo '</script>';
        }
        else{
            echo "<a href='https://www.instamojo.com/@kiitfest'>Click here to pay</a>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Pay | KIITFEST 5.0</title>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="kfid">
    <input type="submit" value="Check Now" class="btn btn-primary">
</form>


</body>
</html>