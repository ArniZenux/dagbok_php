<?php
	include_once('header.html');
	include_once('connect_dagbokDB.php');
	include_once('Login.php');
	$us = new user();
	$us->isConnect($con); 

	if(isset($_POST['submit'])){
			
			$unname = trim($_POST['$user']);
			$unpass = trim($_POST['$pass']); 

			if($unname == ""){ return false; }
			else if($unpass == ""){ return false; }
			else if(strlen($unpass) < 6) { return false; } 
			else{
					mysql_select_db("dagbokMySQL", $con);
					$res = mysql_query("SELECT * FROM USER WHERE NAME = '$unname';");
					$row = mysql_fetch_array($res); 
				
					if($row['NAME'] == $uname){
						return false; 
					}
					else{
						$us->askrifa($con, $unname, $unpass);
					}
				}
	}
?>
<div class="modal-body">
		<div class="row">
	 		<div class="col-md-3"></div>
	 	   		<div class="col-md-6 midja">
	 	      		<form method="POST" action="" class="form col-md-10 center-block">
				   	    <div class="form-group">
			      		  <label>User</label>
			              <input type="text" class="form-control input-lg" placeholder="User" name="user">
			            </div>
			            <div class="form-group">
			              <label>Password</label>
			              <input type="password" class="form-control input-lg" placeholder="Password" name="pass">
			            </div>
			            <div class="form-group">
			            	<input type="submit" name="submit" value="Nyskra" class="btn btn-primary btn-lg btn-block">		        
			            </div>
		        <?php
		      		echo $message;
		      	?>
		      		</form>
	     		</div>
	  		 <div class="col-md-3"></div>
    	</div>
    </div>
 <?php
 include('footer.html');
 ?>