<style>
.our-blog{
	background-image:url("images/img13.jpg");
	background-size:cover;
	background-color:#f8f8f8;
	background-repeat:no-repeat;	
}
td{
	width:5%;
	
}

</style>

<?php
include("headerfund.php");
include("connection.php");
session_start();
?>
<body>

<section class="our-blog">
         	<div class="container">
         		<center><h2 Style="color:#1e2436"> View Request</h2></center><br>
        		<div class="blog-row row">
				<?php

$result= mysqli_query($con,"select * from request where status='Pending'");
$total=mysqli_num_rows($result)>0;
$i=1;
while($row2=mysqli_fetch_array($result))
{
	?>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					
                       
        					<div class="blog-detail"> <br>
							<center>
							<table width="250">
                            
							<tr><td>  Product </td><td></td><td>:</td><td><h4 style="color:green;"><?php echo $row2['product'];?>  </h4></td></tr>

							<tr><td>  Fundraiser Id </td><td></td><td>:</td><td><h4 style="color:green;"><?php echo $row2['fid'];?></h4></td></tr>
                            <tr><td>  Description </td><td></td><td>:</td><td><h4 style="color:green;"><?php echo $row2['category'];?></h4></td></tr>
							<tr></tr>
							</table>
							</center>
							<br>
							<center><h4><button class="btn btn-primary"><a href="activerequest.php?id=<?php echo $row2['id']; ?>" style="color:#fff;"><b>Approve</b></a></button></h4></center>
								
        					</div>
        					
        					
        				</div>
						
        			</div>
					<?php
	  $total++;
}
?>
        			
        	   </div>
         	</div>
         </section>
      
      
       
  
        </body>  
  <?php
  include("footer.php");
  ?>