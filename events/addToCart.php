<?php
    include "../sql.php";
    $sql = new sql();
    if($connect) {
        $itemId = $_POST['itemId']; 
        $unique_id = $sql->retriveSessionParticipant();
        $query1="SELECT `kf_id` FROM `participants_participant` WHERE `unique_id`='$unique_id'";
        $result = mysqli_query($connect,$query1);
        if($result>0)
        {
            $row = mysqli_fetch_assoc($result);
            $kf_id = $row['kf_id'];
            $get_dep_query = "SELECT events.dep_id from `events` INNER JOIN `participants_participant_events` on events.Id='$itemId' LIMIT 1";
            $dep_result = mysqli_query($connect, $get_dep_query);
            $dep_row = mysqli_fetch_assoc($dep_result);
            $dep_id = $dep_row['dep_id'];
            $query = "INSERT INTO participants_participant_events (participant_id, event_id, dep_id) VALUES ('$kf_id', '$itemId', '$dep_id')";
            $result1 = mysqli_query($connect,$query);
            if($result1)
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }

        // if($db->query($query)) {
        //     echo "Event added successfully"; 
        // }

    
    }
?>