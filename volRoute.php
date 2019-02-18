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
</head>
<!------ Include the above in your HEAD tag ---------->
<style>
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
<body>
<?php
    if($sql->isVol()==1)
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
                       <center> <center> <img src="kf.png" width="100px" class="img-responsive center-block" alt="Logo"> </center>
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
                <li><a href="htevzbv.php">Pass Distribution</a></li>';
            }
            if($row['role']==0)
            {
                echo '
                <li><a href="htevzbv.php">Student Info</a></li>
                ';   
            }
            if($row['role']==98)
            {
                echo '
                <li><a href="htevzbv.php">Student Info</a></li>
                ';   
            }
            echo'
                        <li><a href="volLogout.php">Logout</a></li>
                        </ul>
    
                        <br>
                    </div>
                </div>';
            echo '
                <div class="col-md-10 col-sm-8 main-content">
                <!--Main content code to be written here --> 
                <h1>KIITFEST 2019 :)</h1>
                <h3>Welcome To Dashboard</h3>
            </div>
            </div>
        ';
        }
        else
           echo "CONTACT WEB TEAM";
        
    }
?>
</body>
