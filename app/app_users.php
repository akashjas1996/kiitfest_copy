<?php
include_once 'app_connect.php';
	
	class User {
		
		private $db;
		private $connection;
		
		function __construct() {
			$this -> db = new DB_Connection();
			$this -> connection = $this->db->getConnection();
		}
		
		public function does_user_exist($kfid,$pass)
		{
			$sql = "select * from participants_participant where kf_id='$kfid'";
          $result = mysqli_query($this -> connection,$sql);
					$row = mysqli_fetch_assoc($result);

					$sql1 = "select * from auth_user where id='$row[user_id]'";
					$result1 = mysqli_query($this -> connection,$sql1);
					$row1 = mysqli_fetch_assoc($result1);
					if($result1 && $row1>0)
          {
              if($row1['password'] == sha1($pass))
              {
				
				$json['success'] = ' Welcome '.$kfid;
				$sql2 = "SELECT * FROM participants_participant_events,events WHERE participants_participant_events.participant_id = '$kfid' and participants_participant_events.event_id = events.id";
				$result2 = mysqli_query($this -> connection,$sql2);
				$json_array = array(); 
				$i = 1 ;
           while($row2 = mysqli_fetch_assoc($result2))  
           {  
				$json_array['events '.$i] = $row2['event_id'];  
				$i=$i+1;
           }  
				echo json_encode($json+$json_array);
				//return $json;
				mysqli_close($this -> connection);
			}
							else
							{
								$json['error'] = 'Wrong Password';
								echo json_encode($json);
								mysqli_close($this->connection);
							}
          }
          else
          {
			$json['error'] = 'Wrong KFID';
			echo json_encode($json);
			mysqli_close($this->connection);
          }
	}
}
	
	$user = new User();
	if(isset($_POST['kf_id'],$_POST['pass'])) {
		$kfid = $_POST['kf_id'];
		$password = $_POST['pass'];
		
		if(!empty($kfid) && !empty($password)){
			//$encrypted_password = hash('sha1', $password, false);
			//$encrypted_password = sha1($password);
			$user-> does_user_exist($kfid,$password);
			
		}else{
			echo json_encode("you must type both inputs");
		}
		
	}
?>
