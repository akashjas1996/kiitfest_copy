<?php
    include "../sql.php";
    $sql = new sql();
    if($connect) {
        $itemId = $_POST['itemId']; 
        $unique_id = $sql->retriveSessionParticipant();
        $query1="SELECT * FROM `participants_participant` WHERE `unique_id`='$unique_id'";
        $result = mysqli_query($connect,$query1);
        if($result)
        {
            $row = mysqli_fetch_assoc($result);
            $paid = $row['payment_complete'];
            $kf_id = $row['kf_id'];
            if($paid != 1){
                $query = "DELETE FROM participants_participant_events WHERE participant_id='$kf_id' AND event_id= $itemId";
                $result1 = mysqli_query($connect,$query);
                if($result1)
                {
                    return 1;
                }
                else
                {
                    return 0;
                    //echo mysqli_error($connect);
                }
            } else{
                return 0;
            }

        }
    
    }
?>