
 <style>
 body{
	

	background-image:url("images/img13.jpg");
	background-size:cover;
	background-color:#f8f8f8;
	background-repeat:no-repeat;
}

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

<?php include("headerfund.php");
error_reporting("0");
include("connection.php");


session_start();
if(isset($_REQUEST['sid']))
{
$del_id=$_REQUEST['sid'];
mysqli_query($con,"UPDATE $table SET status='Active' where id='$del_id'");
//if($del_id!="")
}

?>
<body>
<br><br>

<h2>COOPRATIVE VIEW</h2>
<center>
<table border="1" class="table table-bordered">
<thead align="center" >
<tr><th>No</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Document</th>
<th>Address</th>
<th>Location</th>

</tr>
</thead>
<?php
$j=1;
$res=mysqli_query($con,"SELECT * FROM cooperative");
while($row=mysqli_fetch_array($res))
{
?>
<tr>
<td align="center"><label><?php echo $j;?></label></td>
<td align="center"><label><?php echo $row['name'];?></label></td>
<td align="center"><label><?php echo $row['email'];?></label></td>
<td align="center"><label><?php echo $row['phno'];?></label></td>

<td align="center"><label><?php echo "<a href='images/$row[document]'  target='_blank'> Click to view</a>";?></label></td>
<td align="center"><label><?php echo $row['address'];?></label></td>
<td align="center"><label><?php echo $row['location'];?></label></td>
</tr>
<?php
$j++;
}
?>
</tbody>
</table>
<br><br>
</body>
</center>
<?php 
 include("footer.php");
?>