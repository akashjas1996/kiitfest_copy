<?php
@require_once("db_connection.php");
class sql {
     function getRole() {
        if(array_key_exists("myusername", $_SESSION) && !empty($_SESSION["myusername"]))
        {
            $uname = $_SESSION["myusername"];
            $query = "SELECT * FROM volunteer_db WHERE username='$uname'";
            $result = mysqli_query($GLOBALS['connect'],$query);
            $row = mysqli_fetch_assoc($result);
            if($row>0)
            {
               return $row['role'];
            }
            else
              return 0;
        }
     }
	 function isVol() {
		 if(array_key_exists("myusername", $_SESSION) && !empty($_SESSION["myusername"]))
			 {
					 return 1;
			 }
			 else
			 {
				   return 0;
			 }

	 }
	 function isLogin() {
	     if(array_key_exists("valid_participant", $_SESSION) && !empty($_SESSION["valid_participant"]))
         {
             return 1;
         }
         else
         {
    	     return 0;
         }
    }

    function retriveSessionParticipant() {
	    if(array_key_exists("valid_participant", $_SESSION) && !empty ($_SESSION["valid_participant"]))
        {
            return $_SESSION["valid_participant"];
        }
        else
        {
    	    return null;
        }
    }

    function getKFID() {
        if(array_key_exists("valid_participant", $_SESSION) && !empty($_SESSION["valid_participant"])) {
            $id = $_SESSION["valid_participant"];
            $query = "SELECT kf_id FROM participants_participant WHERE unique_id = '$id'";
            $result = mysqli_query($GLOBALS['connect'],$query);
            if($result)
            {
               $row = mysqli_fetch_assoc($result);
               if($row>0)
               {
                   return $row['kf_id'];
               }
               else
               {
                    return 0;
               }
            }
            else
            {
                return 0;
            }
        }
        else
        {
            return 0;
        }
    }


    function getEventList($kfid){
        if(!$kfid)
            return 0;
        else{
            $i =0;
            $event_array = [];
            $query = "select event_id from participants_participant_events where participant_id = '$kfid'";
            $result = mysqli_query($GLOBALS['connect'],$query);
            foreach ( $result as $var ) {
                $event_array[$i] = $var['event_id'];
                $i++;
            }
            if(count($event_array) > 0)
                return $event_array;
            else
                return $event_array;
        }
    }

}
?>
