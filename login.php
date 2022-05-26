<style>
body{
	

	background-image:url("images/img6.jpg");
	background-size:cover;
	background-color:#f8f8f8;
	background-repeat:no-repeat;
}

</style>
<?php 
include("headerfund.php");
error_reporting(0);
?>
<!---->	

<div class="login_sec">
	 <div class="container">
	 <center>
		<br><br><br>
		 <div class="col-md-4 log">			 
			<form  method="post" action="check.php">
					 <input type="text" placeholder="Enter Email Id" value="" name="email" id="email" class='form-control' >
					 <input type="password" placeholder="Enter Password" value="" name="password" id="password" class='form-control'>
				 <select name='type' class='form-control'>
<option>Admin</option>
<option>Donor</option>
<option>Fundriser</option>
<option>Cooperative</option>

</select>					 
				<center> <input type="submit"  value="Login" name="login" class='btn btn-primary' style="width:100px; height:50"></center>	
				 </form>
				 <br>
				<!-- <a href="#">Forgot Password ?</a>-->
					
		 </div>	
				</center>
				
		 <div class="clearfix"></div>
	 </div>
</div>
<br><br>	   
	   <?php
  include("footer.php")
  ?>
       