<style>
body{
	

	background-image:url("images/img13.jpg");
	background-size:cover;
	background-color:#f8f8f8;
	background-repeat:no-repeat;
}
</style>
</style>
 <head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<?php 
include("headerfund.php");
error_reporting("0");

?>
<body>
<br><br><br><br>
<center>
<table class="table table-bordered">
<thead align="center">
<tr><th>No</th>
<th>Fundraiser</th>
<th>Cause</th>
<th>Amount</th>
<th>Deposit Amount</th>
<th>Date</th>
</tr>
</thead>
<?php
include("connection.php");
session_start();

//$result=mysqli_query($con,"select * from transaction");
$result= mysqli_query($con,"select * from transaction where did='$_SESSION[did]'");
$total=mysqli_num_rows($result)>0;
$i=1;
while($row2=mysqli_fetch_array($result))
{
$res= mysqli_query($con,"select * from medical where id='$row2[fid]'");
$row=mysqli_fetch_array($res);
?>
<tr>
<td align="center" ><label><?php echo $i;?></label></td>
<td align="center"><label><?php echo $row['name'];?></label></td>
<td align="center"><label><?php echo $row2['cause'];?></label></td>
<td align="center"><label><?php echo $row2['amount'];?></label></td>
<td align="center"><label><?php echo $row2['deposit_amount'];?></label></td>
<td align="center"><label><?php echo $row2['date'];?></label></td>
</tr>


<?php
$i++;
}
?>
</table>
<br><br><br>
</body>
</html>


</center>


 <?php include("footer.php");


?>