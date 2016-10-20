<?php
	include_once('connect_dagbokDB.php');
	class user{
		/*private $con;
		function __construct($connet){
			$this->$con = $connect;
		}*/

		public function isConnect($con){
			if($con){
				echo 'true';
			}			
			else{
				echo 'false';
			}
		}

		public function hello(){
			echo 'hello class';
		}
	}

	$us = new user();
	$us->hello(); 
	$us->isConnect($con);
?>
