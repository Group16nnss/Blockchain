

<?php include("headerfund.php");
//error_reporting("0");
include("connection.php");
session_start();
?>
        
    <div class="page-nav no-margin row" style="background-image:url('images/slider-3.jpg');">

        <div class="container">
            <div class="row">
                <h2 style="color:#fff;">Fundraisers Request</h2>
                <ul>
                    <li > <a href="#" style="color:#fff;"><i style="color:#fff;"class="fas fa-home"></i> Home</a></li>
                </ul>
            </div>
        </div>
    </div>
	 <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
           
        <div class="event-ro row">    
    <?php
	
$res=mysqli_query($con,"SELECT fundraiser.*,fund_request.* FROM fundraiser INNER JOIN fund_request ON fundraiser.id = fund_request.fid ORDER BY fund_request.id ASC");
$totoal=mysqli_num_rows($res)>=0;
while($row=mysqli_fetch_array($res))
{
    
	$res2= mysqli_query($con,"select SUM(deposit_amount)as tot from transaction where fid='$row[fid]' and type='Fundraiser'");
$row2=mysqli_fetch_array($res2);

if($row2['tot']<$row['amount'])
{
	
	
	
   ?>
  
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                     <?php echo "<img src='images/$row[document]'/>";?>

					   <h4>Fundraiser name &nbsp;:&nbsp;<?php echo $row['name']?></h4>
                        <h4><?php echo $row['cause']?></h4>
                        
                       <p class="raises">Amount &nbsp;: &nbsp;<?php echo $row['amount']." / ".$row2['tot']; ?></p>
                        <p class="desic"><?php echo $row['purpose'];?></p>
					<button class="btn btn-success btn-sm">	<a href="donate.php?id=<?php echo $row["id"];?>&type=Fundriser">Donate</a></button>
	                

                    </div>
					
            </div>
			 
			 
              
    
      <?php
}
	  $total++;
}
?> </div>
     
            </div>
        </section>  
                 
  <!--  ************************* Footer Starts Here ************************** -->
          
  <?php
  include("footer.php");
  ?>