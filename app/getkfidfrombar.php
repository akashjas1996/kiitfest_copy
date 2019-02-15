<?php 
        @require_once("../db_connection.php");
        include "../sql.php";
        $sql = new sql();

        
        if(isset($_GET['kfid']) && isset($_GET['eventname']) && isset($_GET['token'])) {
            $token =  $_GET['token'];
            //var_dump($token);
            if($token == "9051799755"){
                $kfid = $_GET['kfid'];
                $query = "select kfid from kf_barcode  where barcode='$kfid'";
                $result = mysqli_query($GLOBALS['connect'], $query);
                if($result){
                    $row = mysqli_fetch_assoc($result);
                    if($row['kfid']){
                        $kf_id = $row['kfid'];
                        //GET KFID
                        $query1 = "select * from participants_participant where kf_id = '$kf_id'";
                        $result = mysqli_query($GLOBALS['connect'], $query1);
                        $row = mysqli_fetch_assoc($result);
                        
                        //UPDATE TABLE
                        if($row['Star Night'] == 0){
                            // echo $row['Star Night 1'];
                            // echo $row['Star Night'];

                            $eventName = $_GET['eventname'];
                            //echo $eventName;
                            $updateQuery = "update participants_participant set `$eventName` = 1 where kf_id = '$kf_id'";
                            $result = mysqli_query($GLOBALS['connect'], $updateQuery);
                            if($result){
                                $res = NULL;
                                $res -> name = $row['name'];
                                $res -> email = $row['email'];
                                $res -> success = true;
                                $res= json_encode($res);
                                echo $res;
                            }
                        } else {
                            $res = NULL;
                            $res-> message = 'error';
                            $res -> success = false;
                            $res= json_encode($res);
                            echo $res;
                        }

        
                    }
                    else{
                        $res = NULL;
                        $res -> name = NULL;
                        $res -> email = NULL;
                        $res -> success = false;
                        $res= json_encode($res);
                        echo $res;
                    }
                }
            }
    
            // if(empty($_POST["kfid"])) {
            //     echo '<script>';
            //     echo 'swal("Error!", "KFID Required", "error")';
            //     echo '</script>';
            
            // }
    } else {
        $res = NULL;
        $res -> success = false;
        $res= json_encode($res);
        echo $res;
    }
?>