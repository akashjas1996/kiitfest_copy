<?php
@require_once("db_connection.php");
require "sql.php";
$sql = new sql();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
/*CSS FOR SIDE ONE*/
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
/*end*/
/*CSS FOR SIDEBAR*/

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
/*end*/

</style>
<body>
<?php
    if($sql->isVol()==1 && $sql->getRole()==999 || $sql->isVol()==1 && $sql->getRole()==0)
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
                         <center> <img src="kf.png" width="100px" class="img-responsive center-block" alt="Logo"> </center>
                    </div>
                    <br>
                    <div class="left-navigation">
                        <ul class="list">
                           <h5><strong>'.$row['vol_name'].'</strong></h5>';
            if($row['role']==999)
            {
                echo '
                <li><a href="paid.php">Paid Candidates</a></li>
                <li><a href="calltopay.php">Unpaid Candidates</a></li>
                <li><a href="passCollect.php">Pass Distribution</a></li>';
            }
            if($row['role']==0)
            {
                echo '
                <!--li><a href="calltopay.php">Unpaid Candidates</a></li-->
                <li><a href="passCollect.php">Student Info</a></li>
                ';   
            }
            echo'
                        <li><a href="volLogout">Logout</a></li>
                        </ul>
    
                        <br>
                    </div>
                </div>';
            echo '
                <div style="padding-left:0px;"class="col-md-10 col-sm-8 main-content">
                  <div class="id-card-wrapper">
                    <div class="id-card">
                        <form action="kf_info.php" METHOD="POST">
                          <center> <input type="text" style="height:30px; font-size:30px; color: grey; text-align: center" name="kiitfest_id" value="KF"> </center>
                          <br><br>
                          <center><input type="submit" style="height:40px; width: 120px; border-radius: 20px; border-color:#008CBA; outline:none; font-color:white; font-style:bold; background-color: #008CBA;" value="Submit"></center>
                        </form> 
                        </div>
                        </div>   
                      </div>
                </div>
        ';
        }
      }
        else {
          echo '<script>';
          echo 'setTimeout(async function(){await swal("WARNING!", "Access Denied", "warning")},50)';
          echo '</script>';
          if($sql->isVol()==0 || $sql->getRole()!=999 || $sql->getRole()!=0)
          {
            echo '<script>';
            echo 'setTimeout(function(){window.location.href = "index.php";},700)';
            echo '</script>';
          }
        
        
        }
        
?>
</body>