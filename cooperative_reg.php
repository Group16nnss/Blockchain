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
<div class='col-sm-2'>Name </div>
<div class='col-sm-6'>
							<input placeholder="Name" type="text"  name="name" id="name" class='form-control'pattern="[a-z]{3,}">
						</div>
					</div>
					
			<div class='row' >
<div class='col-sm-2'>Email </div>
<div class='col-sm-6'>

							<input placeholder="Email" type="text"  name="email" id="email" class='form-control'required>
						
					</div>
                    
                      </div>  		
											
<div class='row'>
<div class='col-sm-2'>Password </div>
<div class='col-sm-6'>					
							<input placeholder="Create a Password" type="password" name="password" id="password" class='form-control' required>
						</div>
					</div>		

<div class='row'>
<div class='col-sm-2'>Mobile </div>
<div class='col-sm-6'>
					
							<input placeholder="Mobile" type="text"  name="phno" id="phno" class='form-control' pattern="[56789][0-9]{9}" required>
					</div>						
					</div>		
					
					
					
					
					
					
					<div class='row'>
<div class='col-sm-2'>Address </div>
<div class='col-sm-6'>

							<input placeholder="address" type="text"  name="address" id="address" class='form-control'required>
						
					</div>
                    
                      </div>  		
											
<div class='row'>
<div class='col-sm-2'>Location </div>
<div class='col-sm-6'>					
							<input placeholder="location" type="text" name="location" id="location" class='form-control' required>
						</div>
					</div>		

<div class='row'>
<div class='col-sm-2'>Document </div>
<div class='col-sm-6'>
					
							<input placeholder="Submit valid Document" type="file"  name="documet" id="documet" class='form-control'required>
					</div>						
					</div>
				
					
	<input type="submit" value="SAVE" name="sub" class='btn btn-success'style="width:100" >
<br><br>
					</div>
					
		
				<!-- /Form -->
			 </div>
		 </form>
		 
		 </div>
		 </center>
         </div>

         
		
					
				
		
		 </div>
		 <div class="clearfix"></div>



 
<?php
if ( isset( $_POST['sub'] ) ) {	


$ins="INSERT INTO cooperative(name,email,password,phno,address,location,document)VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['phno']."','".$_POST['address']."','".$_POST['location']."','".$_POST['document']."')";
mysqli_query($con,$ins);
echo"<script>alert('Sucessfully Registered')</script>";

} 

?> 


<!----> <?php include("footer.php");


?>