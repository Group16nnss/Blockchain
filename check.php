<?php
session_start();		
include('connection.php');

if ( isset( $_POST['login'] ) ) 	
{
	
	if($_POST['type']=="Admin")

        if($_POST['email']=="admin" && $_POST['password']=="admin"){
    
	 $_SESSION['user']=$_POST['type'];
	 	
  header("Location: index.php");
            // Redirect user to index.php
  
         }else{
  header("Location:login.php");
 }
 
	if($_POST['type']=="Fundriser")
	{
$sel="SELECT * FROM fundraiser WHERE email='".$_POST['email']."' and password='".$_POST['password']."' and status='Active'";
$result = mysqli_query($con,$sel) or die(mysql_error());
 $rows = mysqli_num_rows($result);
  $row1=mysqli_fetch_array($result);
     echo $row1;
        if($rows==1){
     $_SESSION['email'] = $_POST['email'];
	 $_SESSION['user']=$_POST['type'];
	 	 $_SESSION['fid']=$row1['id'];

            // Redirect user to index.php
    header("Location: viewfundtrans.php");
         }else{
  header("Location:login.php");
 }
 
	}
	if($_POST['type']=="Donor")
	{
$sel="SELECT * FROM donor WHERE email='".$_POST['email']."' and password='".$_POST['password']."'";
$result = mysqli_query($con,$sel) or die(mysql_error());
 $rows = mysqli_num_rows($result);
 $row=mysqli_fetch_array($result);
        if($rows==1){
     $_SESSION['email'] = $_POST['email'];
	 $_SESSION['user']=$_POST['type'];
	 $_SESSION['did']=$row['id'];
            // Redirect user to index.php
		header("Location: donor.php");
         }else{
  header("Location:login.php");
 }
 
	}
	if($_POST['type']=="Cooperative")
	{
$sel="SELECT * FROM cooperative WHERE email='".$_POST['email']."' and password='".$_POST['password']."'";
$result = mysqli_query($con,$sel) or die(mysql_error());
 $rows = mysqli_num_rows($result);
  $row=mysqli_fetch_array($result);
        if($rows==1){
     $_SESSION['email'] = $_POST['email'];
	 $_SESSION['user']=$_POST['type'];
	   $_SESSION['fid']=$row['id'];
            // Redirect user to index.php
    header("Location:index.php");
         }else{
  header("Location:login.php");
 }
 
	}
}
?>