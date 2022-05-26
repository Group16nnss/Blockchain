
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title></title>

    <meta name="author" content="Codeconvey" />
    <!-- Message Box CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!--Only for demo purpose - no need to add.-->
	

</head>
<style>
body{
	background-image:url("images/img13.jpg");
	background-size:cover;
	background-color:#f8f8f8;
	background-repeat:no-repeat;	
}
</style>
<body>
<center>
<?php
include("connection.php");
include("headerfund.php");

$res= mysqli_query($con,"select * from cooperative where id='$_SESSION[cid]'");
$row=mysqli_fetch_array($res);
$s= $row['id'];
$id=$_REQUEST['id'];
$s = "update request set status='approve', cid='$s' where id ='".$id."'";
 mysqli_query($con, $s);
   header('location:cooperative.php');
   ?>
    <section class="ab">
    <div class="container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<div id='card' class="animated fadeIn">
  <div id='upper-side'>
    
      <h3 id='status' style="color:#fff;">
      Success
    </h3>
  </div>
  <div id='lower-side'>
    <p id='message'>
      Congratulations, your Request has been successfully approved.
    </p>
    <a href="cooperative.php" id="contBtn">Continue</a>
  </div>
</div>
<!-- partial -->
    		
           </div>
    		</div>
		</div>
    </div>
</section>
     
<body>
</html>
<?php
include("footer.php");
?>