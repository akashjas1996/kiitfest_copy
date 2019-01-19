<?php
    include "../sql.php";
    $sql = new sql();
    if($connect) {
        $itemId = $_POST['itemId']; 
        $unique_id = $sql->retriveSessionParticipant();
        $query1="SELECT `kf_id` FROM `participants_participant` WHERE `unique_id`='$unique_id'";
        $result = mysqli_query($connect,$query1);
        if($result)
        {
            $row = mysqli_fetch_assoc($result);
            $kf_id = $row['kf_id'];
            $query = "INSERT INTO participants_participant_events (participant_id, event_id) VALUES ('$kf_id', $itemId)";
            $result1 = mysqli_query($connect,$query);
            if($result1)
            {
                echo 1;
            }
            else
            {
                echo mysqli_error($connect);
            }
        }
    
    }
?>