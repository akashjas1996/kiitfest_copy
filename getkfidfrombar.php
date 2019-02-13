
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
<div class="content"><center>
<img src="kf.png" height="150px" style="padding-bottom: 10px"><br>
<font style="font-family: 'Open Sans', sans-serif;font-size: 22px;color: #292929;">KIIT FEST 5.0</font><br><br>
<font style="font-family: 'Open Sans', sans-serif;font-size: 12px;color: #a09f9f;">
  Welcome to KIITFEST 5.0 Pay
</font>
</center>
 </div>
<body>
<div class="container">
<div class="form-group">
<form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <center> <input type="text" name="kfid" class="form-control" placeholder="Enter Barcode"> </center><br>
    <center> <input type="submit" value="Check Now" class="btn btn-primary"> </center>
</form>
</div>
</div>
</body>
</html>
<?php 
        @require_once("db_connection.php");
        include "sql.php";
        $sql = new sql();
        if($_SERVER["REQUEST_METHOD"]=="POST") {
    
            if(empty($_POST["kfid"])) {
                echo '<script>';
                echo 'swal("Error!", "KFID Required", "error")';
                echo '</script>';
            
            }
        $kfid = $_POST['kfid'];
        $query = "select kfid from kf_barcode  where barcode='$kfid'";
        $result = mysqli_query($GLOBALS['connect'], $query);
        if($result){
            $row = mysqli_fetch_assoc($result);
            if($row['kfid']){
                $kf_id = $row['kfid'];
                $query1 = "select * from participants_participant where kf_id = '$kf_id'";
                $result = mysqli_query($GLOBALS['connect'], $query1);
                $row = mysqli_fetch_assoc($result);
                echo '<div style="text-align: center;font-size: 20px;color: green;">';
                echo  'Name: ' . $row['name'] . '<br>';
                echo 'Email: ' . $row['email'] . '<br>';
                echo 'Roll No: ' . $row['roll_no']; 
                echo '</div>';
            }
            else{
                echo '<script>';
                echo 'swal("Error!", "Invalid User", "error")';
                echo '</script>';
            }
        }
    }
?>