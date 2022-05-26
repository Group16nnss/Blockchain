
<html>
<script>
    $('#validate').validate({
        roles: {
            deposit: {
                required: true,
            },
            
        messages: {
            
        },
    });
</script>

<style>
    
.container	{
	background-color:#fff;
	}
</style>
<body>
<?php
include("headerfund.php");
include("connection.php");
//error_reporting(0);
session_start();

$id=$_REQUEST['id'];
$res=mysqli_query($con,"SELECT id,cause,amount FROM medical where id='".$id."' ");
$row=mysqli_fetch_array($res);
//$id=$_REQUEST['id'];
$s="select * from donor where id='$_SESSION[did]'";

$res2= mysqli_query($con,$s);
$row2=mysqli_fetch_assoc($res2);
?>
<?php
if ( isset( $_POST['submit'] ) ) {	

$a=$_POST['fid'];
$b=$_POST['cause'];
$c=$_POST['amount'];
$d=$_POST['did'];
$e=$_POST['bank'];
$f=$_POST['deposit'];
$g=$_POST['date'];
$type=$_POST['type'];




$ins="INSERT INTO transaction(fid,cause,amount,did,bank,deposit_amount,date,type)VALUES('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$type."')";

mysqli_query($con,$ins);

header("location:https://erpsoftwares.in/charity-block/docs/index.php?fid=$a&amt=$c");

}
?>


<center>
<br>
<div class="container">
<br><br>
<div class='col-sm-6'>
				<form method="post" id="validate" action="">
				
					<input type="hidden"  name="fid" id="fid" class='form-control' value="<?php echo $row['id'];?>">
	<input type="hidden"  name="did" id="did" class='form-control' value="<?php echo $row2['id'];?>"readonly>
						
				<div class='row' >
                    <div class='col-sm-3'>Cause 
					</div>
                    <div class='col-sm-9'>
					<input type="text"  name="cause" id="cause" class='form-control' value="<?php echo $row['cause'];?>"readonly>
					</div>
                    
                </div>  		
											
                <div class='row'>
                    <div class='col-sm-3'>Need Amount 
					</div>
                    <div class='col-sm-9'>					
				    <input  type="text" name="amount" id="amount" class='form-control'value="<?php echo $row['amount'];?>"readonly >
					</div>
				</div>		

                <div class='row'>
                       <div class='col-sm-3'>Deposit 
                       </div>
                       <div class='col-sm-9'>
					
					  <input type="text"  name="deposit" id="deposit" class='form-control'>
					</div>						
				</div>


							
			
                    
                	
											
<div class='row'>
<div class='col-sm-3'>Bank  </div>
<div class='col-sm-9'>					
							<input  type="text" name="bank" id="bank" class='form-control' value="<?php echo $row2['bank'];?>">
						</div>
					</div>
			
<div class='row'>
<div class='col-sm-3'>Date  </div>
<div class='col-sm-9'>					
							<input  type="date" name="date" id="date" class='form-control' value='<?php echo date('Y-m-d'); ?>' readonly>
						
						<input  type="hidden" name="type"  value='<?php echo $_REQUEST['type']; ?>' >
						
						</div>
					</div>		
					

<br>
				
			<center><input type="submit" value="submit" name="submit" class='btn btn-success' ></center>
			
					
		 </form>
		 <br>
		 </div>
					
		
				<!-- /Form -->
			 </div>
		
		 </center>
		 	 
		 

<?php
include("footer.php");

?>

