<?php
	class user{
		public function isConnect($con){
			if($con){
				echo 'true';
			}			
			else{
				echo 'false';
			}
		}

		public function askrifa($con, $new_user, $new_pass){
			$new_passwoord = password_hash($new_pass, PASSWORD_DEFAULT);
			$sql = "INSERT INTO USER VALUES('$new_user','$new_passwoord');"; 
			$res = mysql_query($sql,$con); 
		}

		public function innskra($con, $user, $pass){
				mysql_select_db("dagbokMySQL", $con);
				$res = mysql_query("SELECT * FROM USER WHERE NAME = '$user' AND PASS = '$pass';");
				$row = mysql_fetch_array($res); 
			
				if($row[0] == $user){
					$_SESSION['NAME'] = $row[0];
					return true; 
				}
				else{
					return false; 
					//$message = 'Ekki rett';
				}
			} 
		
		public function redirect($url){
			header("Location: $url");
		}

		public function logout(){
			session_destroy();
			header("Location: index.php");
		}
	}
?>