<?php
@require_once("db_connection.php");
require "sql.php";
$sql = new sql();
?>
<head>
<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->
<style>
/*-----------ID PANNEL--------*/
body {
  margin:0px;
}
.id-card-wrapper {
  height: 100vh;
  width:100%;
  background-color: #091214;
  display: flex;
}
.id-card-wrapper-neg {
  height: 100vh;
  width:100%;
  background-color: #592121;
  display: flex;
}
.id-card {
  flex-basis: 100%;
  max-width: 30em;
  border: 1px solid rgb(97, 245, 245);
  margin: auto;
  color: #fff;
  padding: 1em;
  background-color: #0A2129;
  box-shadow: 0px 0px 3px 1px #12a0a0, inset 0px 0px 3px 1px #12a0a0;
}
.id-card-neg {
  flex-basis: 100%;
  max-width: 30em;
  border: 1px solid rgb(97, 245, 245);
  margin: auto;
  color: #fff;
  padding: 1em;
  background-color: #b24742;
  box-shadow: 0px 0px 3px 1px #12a0a0, inset 0px 0px 3px 1px #8e132a;
}

.profile-row {
  display: flex;
}
.profile-row .dp {
  flex-basis: 33.3%;
  position: relative;
  margin: 24px;
  align-self: center;
}
.profile-row .desc {
  flex-basis: 66.6%;
}

.profile-row .dp img {
  max-width: 100%;
  border-radius: 50%;
  display: block;
  box-shadow: 0px 0px 4px 3px #12a0a0;
}
.profile-row .desc {
  padding: 1em;
}

.profile-row .dp .dp-arc-inner {
  position: absolute;
  width: 100%;
  height: 100%;
  border: 6px solid transparent;
  border-top-color: #0AE0DF;
  border-radius: 50%;
  top: -6px;
  left: -6px;

  animation-duration: 2s;
  animation-name: rotate-clock;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}
@keyframes rotate-clock {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
.profile-row .dp .dp-arc-outer {
  position: absolute;
  width: calc(100% + 20px);
  height: calc(100% + 20px);
  border: 6px solid transparent;
  border-bottom-color: #0AE0DF;
  border-radius: 50%;
  top: -16px;
  left: -16px;

  animation-duration: 2s;
  animation-name: rotate-anticlock;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}
@keyframes rotate-anticlock {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(-360deg);
  }
}

.profile-row .desc {
  font-family: 'Orbitron', sans-serif;
  color: #ecfcfb;
  text-shadow: 0px 0px 4px #12a0a0;
  letter-spacing: 1px;
}
.profile-row .desc h1 {
  margin: 0px;
}
/*=======SIDEBAR=========*/
.sidebar1 {
    background: #F17153;
    /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#F17153, #F58D63, #f1ab53);
    /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#F17153, #F58D63, #f1ab53);
    /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#F17153, #F58D63, #f1ab53);
    /* For Firefox 3.6 to 15 */
    background: linear-gradient(#F17153, #F58D63, #f1ab53);
    /* Standard syntax */
    padding: 0px;
    min-height: 100%;
}
.logo {
    max-height: 130px;
}
a{
    text-decoration: none;
    color:white;
}
.logo>img {
    margin-top: 30px;
    padding: 3px;
    border: 3px solid white;
    border-radius: 100%;
}
.list {
    color: #fff;
    list-style: none;
    padding-left: 0px;
}
.list::first-line {
    color: rgba(255, 255, 255, 0.5);
}
.list> li, h5 {
    padding: 5px 0px 5px 40px;
}
.list>li:hover {
    background-color: rgba(255, 255, 255, 0.2);
    border-left: 5px solid white;
    color: white;
    font-weight: bolder;
    padding-left: 35px;
}.main-content{
text-align:center;
}
</style>
</head>
<body>
<?php
    if($sql->isVol()==1 && ($sql->getRole()==999 || $sql->getRole()==0))
    {
        $uname = $_SESSION["myusername"];
        $query = "SELECT * FROM volunteer_db WHERE username='$uname'";
        $result = mysqli_query($GLOBALS['connect'],$query);
        $row = mysqli_fetch_assoc($result);
        if($row>0)
        {
            echo '
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-4 sidebar1">
                    <div class="logo">
                        <img src="kf.png" width="100px" class="img-responsive center-block" alt="Logo">
                    </div>
                    <br>
                    <div class="left-navigation">
                        <ul class="list">
                            <h5><strong>'.$row['username'].'</strong></h5>';
            if($row['role']==999)
            {
                echo '
                <li><a href="paid.php">Paid Candidates</a></li>
                <li><a href="calltopay.php">Unpaid Candidates</a></li>
                <li><a href="htevzbv.php">Student Info</a></li>';
            }
            if($row['role']==0)
            {
                echo '
                <li><a href="calltopay.php">Unpaid Candidates</a></li>
                <li><a href="htevzbv.php">Student Info</a></li>
                ';   
            }
            echo'
                        <li><a href="volLogout.php">Logout</a></li>
                        </ul>
    
                        <br>
                    </div>
                </div>';
          ?>  


            <div style="padding-left:0px;" class="col-md-10 col-sm-8 main-content">
            <div class="id-card-wrapper">

<?php
if(!empty($_POST["kiitfest_id"]))
{
  $kf_id = $_POST["kiitfest_id"];
  $query = "SELECT * FROM participants_participant WHERE kf_id='$kf_id'";
  $result = $GLOBALS['connect']->query($query);
  
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          //echo "Name : " . $row["name"]. " - email: " .$row["email"]."<br>";
          if($row["payment_complete"]==1){
            $color="red";
            echo ' 
          <div class="id-card">
              <div class="profile-row">
                  
              <center><div class="desc">
                   <h1>'.$row['name'].'</h1>
                  <p>KFID : '.$row['kf_id'].'</p>
                  <p>Roll No. :'.$row['roll_no'].'</p>
                  <p>Phone :'.$row['phone'].'</p>
                  <p>Email: '.$row['email'].'</p> 
                  
              </div></center>
              </div>
          <!--form action="" method="POST">
              <input  style="color:black;" type="text" name="kiitfestid" value="'.$row['kf_id'].'">
              <input  style="color:black;" type="text" name="barcode">
              <br><br>
              <input style="display:none; color:black;" type="submit" value="save">
          </form--> 
        </div>';
  }
          else
          {
            echo ' 
          <div class="id-card-neg">
            <div class="profile-row">
            <div class="dp">
                <div class="dp-arc-outer"></div>
                <div class="dp-arc-inner"></div>
                <img src="https://via.placeholder.com/420x420">
            </div>
            <div class="desc">
              <h1>'.$row['name'].'</h1>
                  <p>KFID:'.$row['kf_id'].'</p>
                  <p>Roll No. :'.$row['roll_no'].'</p>
                  <p>Roll No. :'.$row['phone'].'</p>
                  <p>Email:'.$row['email'].'</p>
            </div>
            </div>
	    <br>
            <button><a style="color:black;text-decoration:none;" href="htevzbv.php">Go Back</a></button>
          </div>
  ';
  
          }
          
      }
  } 
}   

if(isset($_POST['barcode'])){
	$barc = $_POST["barcode"];
  $kf = $_POST["kiitfestid"];
	if($barc == 'unbounded' || $barc == 'UNBOUNDED' ){
    echo '<script>';
    echo 'setTimeout(async function(){await swal("WARNING!", "Pass Invalid", "warning")},50)';
    echo '</script>';
  } else{
	$sql_u = "SELECT * FROM kf_barcode WHERE kfid='$kf'";
  $result = $GLOBALS['connect']->query($sql_u);
  $row = mysqli_fetch_assoc($result);
	if($row>0){
		echo '<script>';
    echo 'setTimeout(async function(){await swal("WARNING!", "Pass already taken", "warning")},50)';
    echo '</script>';
    if($row>0)
    {
      echo '<script>';
      echo 'setTimeout(function(){window.location.href = "htevzbv.php";},700)';
      echo '</script>';
    }
	}
	else{
    $vol_id = $_SESSION["myusername"];
    $query = "INSERT INTO kf_barcode(`kfid`, `barcode`)VALUES('$kf', '$barc')";
    $query1 = "INSERT INTO pass_log(`vol_kfid`,`student_kfid`,`time_log`) VALUES ('$vol_id','$kf',now())";
    $result = $GLOBALS['connect']->query($query);
    $result1 = $GLOBALS['connect']->query($query1);
		if($result && $result1)
		{
			echo '<script>';
      echo 'setTimeout(async function(){await swal("Congratulations!", "Pass Allotted", "success")},50)';
      echo '</script>';
      if($result && $result1)
      {
        echo '<script>';
        echo 'setTimeout(function(){window.location.href = "htevzbv.php";},700)';
        echo '</script>';
      }
			

		}
	

	}
}
	}


?>


</div>

            </div>
          </div>
<?php
  }
      }
        else{
          echo '<script>';
          echo 'setTimeout(async function(){await swal("WARNING!", "Access Denied", "warning")},50)';
          echo '</script>';
          if($sql->isVol()==0 || $sql->isVol()==1 && ($sql->getRole()!=0 || $sql->getRole()!=999))
          {
            echo '<script>';
            echo 'setTimeout(function(){window.location.href = "index.php";},700)';
            echo '</script>';
          }
        }
        
?>

</body>
</html>

