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
<div class="container">
<br><br>
	  
	
			 <!-- [if IE] 
				< link rel='stylesheet' type='text/css' href='ie.css'/>  
			 [endif] -->  
			  
			 <!-- [if lt IE 7]>  
				< link rel='stylesheet' type='text/css' href='ie6.css'/>  
			 <! [endif] -->  
			 <script>
				(function() {
			
				// Create input element for testing
				var inputs = document.createElement('input');
				
				// Create the supports object
				var supports = {};
				
				supports.autofocus   = 'autofocus' in inputs;
				supports.required    = 'required' in inputs;
				supports.placeholder = 'placeholder' in inputs;
			
				// Fallback for autofocus attribute
				if(!supports.autofocus) {
					
				}
				
				// Fallback for required attribute
				if(!supports.required) {
					
				}
			
				// Fallback for placeholder attribute
				if(!supports.placeholder) {
					
				}
				
				// Change text inside send button on submit
				var send = document.getElementById('register-submit');
				if(send) {
					send.onclick = function () {
						this.innerHTML = '...Sending';
					}
				}
			
			 })();
			 </script>
			 <!-- Form -->
            <div class='col-sm-6'>
				<form method="post" >
					<div class='row'>
<div class='col-sm-3'>Name </div>
<div class='col-sm-5'>
			<input placeholder="Name" type="text"  name="name" id="name" class='form-control' pattern="[A_Za-z]{3,}">
		</div>
		</div>
					<div class='row' >
<div class='col-sm-3'>Email </div>
<div class='col-sm-5'>

		    <input placeholder="Email" type="text"  name="email" id="email" class='form-control' required>
						
		</div>
                    
        </div>  		
											
<div class='row'>
<div class='col-sm-3'>Password </div>
<div class='col-sm-5'>					
			<input placeholder="Create a Password" type="password" name="password" id="password" class='form-control' >
		</div>
		</div>		

<div class='row'>
<div class='col-sm-3'>Mobile </div>
<div class='col-sm-5'>
					
			<input placeholder="Mobile" type="text"  name="phno" id="phno" class='form-control' pattern="[56789][0-9]{9}" required>
		</div>						
		</div>
<div class='row'>
<div class='col-sm-3'>ID Proof </div>
<div class='col-sm-5'>

			<input placeholder="ID Proof" type="file"  name="proof" id="proof" class='form-control'>
						
		</div>
         </div>  		
											
<div class='row'>
<div class='col-sm-3'>Bank  </div>
<div class='col-sm-5'>					
			<input placeholder="Bank Details " type="text" name="bank" id="bank" class='form-control'required >
		</div>
		</div>		
<div class='row'>
<div class='col-sm-3'>Account_no </div>
<div class='col-sm-5'>					
			<input placeholder="Account_no " type="text" name="account_no" id="bank" class='form-control' >
		</div>
		</div>		
<div class='row'>
<div class='col-sm-3'>IFSC</div>
<div class='col-sm-5'>					
			<input placeholder="ifsc " type="text" name="ifsc" id="bank" class='form-control'   >
		</div>
		</div>		

				
<br>
				
<center><input type="submit" value="SAVE" name="sub" class='btn btn-success'style="width:100"></center>
<br><br>
</form>
</div></div></center>
<div class="clearfix"></div><?php
if ( isset( $_POST['sub'] ) ) {	


$ins="INSERT INTO donor(name,email,password,phone_no,proof,bank,account_no,ifsc)VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['phno']."','".$_POST['proof']."','".$_POST['bank']."','".$_POST['account_no']."','".$_POST['ifsc']."')";
echo $ins;
mysqli_query($con,$ins);
echo"<script>alert('Sucessfully Registered')</script>";

} 

?> 


<!----> <?php include("footer.php");


?>