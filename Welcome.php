<?php
	include_once('header_login.php');
?>
<div class="modal-body">
	 <div class="row">
	 	<div class="col-md-3">
	 		
	 	</div>
	 	   <div class="col-md-6 midja">
	 	      <form method="POST" action="" class="form col-md-10 center-block">
			   	    <div class="form-group">
		      		  <label>Titill</label>
		              <input type="text" class="form-control input-lg" placeholder="Titill" name="titll">
		            </div>
		            <div class="form-group">
		              <label>Grein</label>
		              <textarea class="form-control input-lg" name="grein" placeholder="Grein"></textarea>
		            </div>
		            <div class="form-group">
		            	<input type="submit" name="submit" value="vista" class="btn btn-primary btn-lg btn-block">		        
		            </div>
		        <?php
		      		echo $message;
		      	?>
		      </form>
	       </div>
	     <div class="col-md-3">
	     	
	     </div>
     </div>
</div>