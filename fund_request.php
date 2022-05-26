<style>
body{
	background-image:url("images/img13.jpg");
	background-size:cover;
	background-color:#f8f8f8;
	background-repeat:no-repeat;
}

</style>

<?php include("headerfund.php");
error_reporting("0");
include("connection.php");
session_start();		
?>

<center>

<div class='container'>
<br><br>
<h2>FUND REQUEST</h2>
<form method="POST">



<div class='row'>
<div class='col-sm-2'>Purpose </div>
<div class='col-sm-3'>
<input placeholder="Purpose" type="text"  name="purpose" id="name" class='form-control'pattern="[a-z]{3,}">
</div>
   
<div class='col-sm-2'>Cuase </div>
<div class='col-sm-3'>

			<input placeholder="cause" type="text"  name="cause" id="email" class='form-control'required>
						
	</div>
</div>	   
											

<div class='row'>
<div class='col-sm-2'>Amount </div>
					
	     <div class='col-sm-3'>

		<input placeholder="Amount" type="number"  name="amount" id="email" class='form-control' required>
		</div>

  <div class='col-sm-6'>
	   <input type="submit" value="SUBMIT"  name="submit" class='btn btn-primary'>
		</div>
</div>
		
</form>
</div>
</center>	
<div class="clearfix"></div>
		 
<?php

$con=mysqli_connect("localhost","root","","charity");

if (isset( $_POST['submit'] ) ) {	

$cause=$_POST['cause'];
$purpose=$_POST['purpose'];
$amount=$_POST['amount'];

$ins="INSERT INTO fund_request(fid, purpose, cause, amount)VALUES('$_SESSION[fid]','$purpose','$cause','$amount')";
$run=mysqli_query($con,$ins);
if($run)
{
	echo " Inserted succesfully";
}

} 
?> 
		 
		 
	


<?php include("footer.php");


?>