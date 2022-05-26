<!DOCTYPE html>
<html lang="en">
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
                   
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-lg-3 col-md-12 logo">
                    <a href="index.php">
                        <img src="assets/images/logo.jpg" alt="" />
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">

                            <ul class="navbad">
                               
							
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/CHARITY_BLOCKCHAIN/index.php">Back To Home</a>
                                </li>
               


                            </ul>


                </div>
            </div>
        </div>
    </div> 
</header>
  <body>
      <div class='container'>
   <h1>Charity Chain Information</h1>
   <table class="table">
     
     <tr>
     
       <td ><button class="btn btn-primary" onclick="App.readFromBC()">Read From Block Chain</button></td>
     </tr>
   </table>
<div id="displayemplp">
  <table class="table">
    <tr>
      <th>Id</th>
      <th>Informations</th>
      <th>Request Amt</th>
    </tr>
    <tbody id="emps"></tbody>
  </table>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/web3.min.js"></script>
    <script src="js/truffle-contract.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
