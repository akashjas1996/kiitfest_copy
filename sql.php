<?php 
@require_once("db_connection.php");
class sql {
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

}
?>
