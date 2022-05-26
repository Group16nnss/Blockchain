<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
<?php
error_reporting(0);
session_start();		
?>

<header class="continer-fluid ">
    <div  class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-5 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            sales@smarteyeapps.com
                            <span>|</span></li>
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            +876 987 666 5433</li>
                    </ul>
                </div>
               <div class="col-lg-7 d-none d-md-block col-md-7 btn-bhed">
			   
			   <?php 
			   
			   if(!isset($_SESSION['user']))
			   {
				   ?>
                    <button class="btn btn-sm btn-success"><a href="Fundraiser_reg.php">Fundraiser Register</a></button>
					 <button class="btn btn-sm btn-success"><a href="Donor_reg.php">Donor Register</a></button>

                    <button class="btn btn-sm btn-success"><a href="Cooperative_reg.php">Cooperative Register</a></button>
			   <?php
			   }
			   ?>
                </div>
                
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-lg-3 col-md-12 logo">
                    <a href="index.php">
                        <img src="assets/images/logo.jpg" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">

                            <ul class="navbad">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home
                                    </a>
                                </li>
								
							
								<?php
								if($_SESSION['user']=="Donor")
								{
									?>
                                
                               
								 <li class="nav-item">
                                    <a class="nav-link" href="donor.php">Fundraiser Request</a>
                                </li>
								 <li class="nav-item">
                                    <a class="nav-link" href="c_request.php">Cooperative Request</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="viewtrans.php">View Transaction</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" href="logout.php">LogOut</a>
                                </li>

								<?php
								}

								elseif($_SESSION['user']=="Admin")
								{
									?>
									<li class="nav-item">
                                    <a class="nav-link" href="fundraiser.php">Fundraiser</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" href="doner_view.php">Doner</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" href="cooperative_view.php">Cooperative</a>
                                </li>
								
								 <li class="nav-item">
                                    <a class="nav-link" href="donor.php">Fundraiser Request</a>
                                </li>
								 <li class="nav-item">
                                    <a class="nav-link" href="c_request.php">Cooperative Request</a>
                                </li>
								 <li class="nav-item">
                                    <a class="nav-link" target='_blank' href="https://erpsoftwares.in/charity-block/docs/read.php">READ DATA</a>
                                </li>
								
								
								
  <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Log Out</a>
                                </li>
<?php
								}
								elseif($_SESSION['user']=="Fundriser")
								{
									?>
									<li class="nav-item">
                                    <a class="nav-link" href="viewfundtrans.php">View Tansaction </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="viewrequest.php">View Request</a>
                                </li>
								</li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="fund_request.php">Request</a>
                                </li>
								
                                 <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Log Out</a>
                                </li>

								<?php
								}
                              elseif($_SESSION['user']=="Cooperative")
								{
									?>
									<li class="nav-item">
                                    <a class="nav-link" href="viewfundtrans.php">View Tansaction </a>
                                </li>
                                
								</li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="cviewrequest.php">View Request</a>
                                </li>
								</li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="cfund_request.php">Request</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Log Out</a>
                                </li>

								<?php
								}
								else
								{
                                ?> 

								<!--
                                <li class="nav-item">
                                    <a class="nav-link" href="services.php">Browser Fundraiser</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="donor.php">Fundraiser</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="services.php">Cooperative Store</a>
                                </li>
-->
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Sign In</a>
                                </li>
                               
                               
                               



                </div>
								
								
								<?php
								}
								?>


                            </ul>


                </div>
            </div>
        </div>
    </div> 
</header>