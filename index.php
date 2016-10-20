<?php
	include_once('header.html');
	include_once('connect_dagbokDB.php');  //tilviksbreytur : $con
	include_once('Login.php');
	
	session_start(); 
	
	$us = new user();
	$us->isConnect($con); 

	if(isset($_POST['submit'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		if($us->innskra($con, $user, $pass)){
			$us->redirect('Welcome.php');
		}
		else{
			echo 'ekki rett';
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
			            	<input type="submit" name="submit" value="innskra" class="btn btn-primary btn-lg btn-block">		        
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