<style>
body{
	background-image:url("images/img13.jpg");
	background-size:cover;
	background-color:#f8f8f8;
	background-repeat:no-repeat;
}

</style>

<?php include("header2.php");
error_reporting("0");
include("connection.php");
session_start();		
?>

<center>

<div class='container'>
<br><br>
<form method="POST">



<div class='row'>
<div class='col-sm-2'>Name </div>
<div class='col-sm-3'>
<input placeholder="Name" type="text"  name="name" id="name" class='form-control'pattern="[A-Za-z]{3,}">
</div>
   
<div class='col-sm-2'>Email </div>
<div class='col-sm-3'>

			<input placeholder="Email" type="text"  name="email" id="email" class='form-control'required>
						
	</div>
</div>	   
											
<div class='row'>
<div class='col-sm-2'>Password </div>
<div class='col-sm-3'>					
		<input placeholder="Create a Password" type="password" name="password" id="password" class='form-control'required >
	</div>

<div class='col-sm-2'>Mobile </div>
<div class='col-sm-3'>
					
		<input placeholder="Mobile" type="text"  name="phno" id="phno" class='form-control' pattern="[56789][0-9]{9}" required>
</div>
</div>
<div class='row'>
<div class='col-sm-2'>Document </div>
					
	     <div class='col-sm-3'>

		<input placeholder="Document" type="file" name="document" class='form-control'required>
					
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

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phno=$_POST['phno'];
$document=$_POST['document'];
$status=$_POST['status'];
$ins="INSERT INTO fundraiser(name,email,password,phno,document,status)VALUES('$name','$email','$password','$phno','$document','$status')";
$run=mysqli_query($con,$ins);
if($run)
{
	echo " Inserted succesfully";
}

} 
?> 
		 
		 
	


<?php include("footer.php");


?>