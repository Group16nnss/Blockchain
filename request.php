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



<div class='container'>
<br><br>
<center>

<form method="POST">
<div class='col-sm-6'>

<div class='row' >
<div class='col-sm-3'>Fundraiser Id </div>
<div class='col-sm-5'>

			<input type="text"  name="fid" id="fid" class='form-control' value="<?php echo $_SESSION['fid'];?>">
						
	</div>
	</div>
<div class='row'>
<div class='col-sm-3'>Product Type </div>
       <div class='col-sm-5'>
                      <select  id="fund" class='form-control' name="type">
                           <option value="medicine">Medicine</option>
                           <option value="dress">Dress</option>
                           <option value="food">Food</option>
						    <option value="Other">Others</option>
                       </select>
         </div>
     </div>
<div class='row' >
<div class='col-sm-3'>Description </div>
<div class='col-sm-5'>

			<input placeholder="Describe the Product" type="text"  name="category" id="category" class='form-control'>
						
	</div>
	</div>
	<div>
	 <input type="submit" value="SUBMIT"  name="submit" class='btn btn-primary'>
		</div>
<br><br>
</div>	
</form>
</div>
</center>	
<div class="clearfix"></div>
		 
<?php

$con=mysqli_connect("localhost","root","","charity");

if (isset( $_POST['submit'] ) ) {	

$a=$_POST['type'];
$b=$_POST['category'];
$c=$_POST['fid'];
$ins="INSERT INTO request(product,category,fid,status)VALUES('$a','$b','$c','pending')";
$run=mysqli_query($con,$ins);
if($run)
{
	echo " Inserted succesfully";
}

} 
?> 
<?php include("footer.php");


?>