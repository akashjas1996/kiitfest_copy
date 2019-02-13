
<html lang="en">  
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106122426-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-106122426-5');
</script>

</head>
<body>
<div class="container">
<div class="form-group">
<form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="kfid">
    <input type="submit" value="Check Now" class="btn btn-primary">
</form>
</div>
</div>
</body>
</html>
<?php 
        @require_once("../db_connection.php");
        include "../sql.php";
        $sql = new sql();
        if($_SERVER["REQUEST_METHOD"]=="POST") {
    
            if(empty($_POST["kfid"])) {
                echo '<script>';
                echo 'swal("Error!", "KFID Required", "error")';
                echo '</script>';
            
            }
        $kfid = $_POST['kfid'];
        $query = "select payment_complete from participants_participant  where kf_id='$kfid'";
        $result = mysqli_query($GLOBALS['connect'], $query);
        if($result){
            $row = mysqli_fetch_assoc($result);
            if($row['payment_complete'] == 1){

                echo '<script>';
                echo 'swal("Congratulations!", "Paid", "success")';
                echo '</script>';
            }
            else{
                echo "<a href='https://www.instamojo.com/@kiitfest'>Click here to pay</a>";
            }
        }
    }
?>