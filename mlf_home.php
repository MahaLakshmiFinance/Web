<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
  header('Location: index.php');
  die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title>MLF - Home</title>
<meta name="description" content="">
<meta name="author" content="templatemo">
<!-- 
Visual Admin Template
http://www.templatemo.com/preview/templatemo_455_visual_admin
-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/templatemo-style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- JS -->
<script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
<script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
<script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->

<script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

<script type="text/javascript" src="js/clicks.js"></script>

<style>
.templatemo-left-nav{
line-height:0;
}

#logo{
width:150px;
height:250px;
}

</style>

</head>
<body >  
<!-- Left column -->
<div class="templatemo-flex-row" >
<div class="templatemo-sidebar">
<header class="templatemo-site-header" align="center"></header>
<div class="profile-photo-container" align="center">
<img src="images/logo.png" alt="Profile Photo" id="logo">  

</div>      

<div class="mobile-menu-icon">
<i class="fa fa-bars"></i>
</div>
<nav class="templatemo-left-nav" >          
<ul>
<li><a href="#customer" id="link1" onclick="sidemenu(1)" class="active">Customer</a></li>
<li><a href="#article_finance" id="link2" onclick="sidemenu(2)" >Article Finance</a></li>
<li><a href="#cash_finance" id="link3" onclick="sidemenu(3)" >Cash Finance</a></li>
<li><a href="#buy_back_items" id="link4" onclick="sidemenu(4)" >Buy Back Items</a></li>
<li><a href="#employee_expenses" id="link5" onclick="sidemenu(5)" >Employee Expenses</a></li>
<li><a href="#accessories" id="link6" onclick="sidemenu(6)" >Accessories</a></li>
<li><a href="#summary" id="link7"  onclick="sidemenu(7)" >Summary</a></li>
<li><a href="#change_password" id="link8"  onclick="sidemenu(8)" >Change Password</a></li>
<li><a href="signout.php" id="link9"  onclick="sidemenu(9)" >Sign Out</a></li>

</ul>  
</nav>
</div>
<!-- Main content --> 
<div class="templatemo-content col-1 light-gray-bg">
<div class="templatemo-top-nav-container">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<h1 style="color: #FFDF00" align="middle">Maha Lakshmi Finance</h1>
<h5 style="color: #FFDF00" align="middle">PALAKOLLU | BHIMAVARAM | NARASAPURAM</h5>
<h5 style="color: #FFDF00" align="middle">ANDHRA PRADESH , INDIA . </h5>
</ul>  
</nav> 
</div>
</div>



<div id="content1" class="templatemo-content col-1 light-gray-bg"><div class="templatemo-top-nav-container-1">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<li><a href="#new" onclick="nav(11)"><font style="color:  black">NEW</font></a></li>
<li><a href="#edit" onclick="nav(12)"><font style="color: black">EDIT</font></a></li>
<li><a href="#delete" onclick="nav(13)"><font style="color: black">DELETE</font></a></li>
<li><a href="#view" onclick="nav(14)"><font style="color: black">VIEW</font></a></li>

</ul>  
</nav> 
</div>
<div class="templatemo-content-container" id="subcontent11">
<div class="templatemo-content-widget white-bg">


<form action="new_customer.php" class="templatemo-login-form" method="POST" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="radio" id="r4" value="">
<label for="r4" class="font-weight-400"><span></span>Aadhar</label>
</div>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="radio" id="r5" value="" checked>
<label for="r5" class="font-weight-400"><span></span>Phone Number</label>
</div>
<input name="username" type="text"  class="form-control" id="inputFirstName" placeholder="Aadhar / Phone Number">                  
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">First Name</label>
<input name="fname" type="text" class="form-control" id="inputFirstName" placeholder="First Name">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputLastName">Last Name</label>
<input name="lname" type="text" class="form-control" id="inputLastName" placeholder="Last Name">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Contact Number</label>
<input name="cntact_num" type="tel" class="form-control" id="inputUsername" placeholder="+91">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputEmail">Alternate Number</label>
<input name="alt_cntact_num" type="tel" class="form-control" id="inputEmail" placeholder="+91">                  
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">D/No</label>
<input name="dno" type="text" class="form-control" id="inputNewPassword" placeholder="Door Number">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Street</label>
<input name="street" type="text" class="form-control" id="inputConfirmNewPassword" placeholder="ABC Street">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">Locality</label>
<input name="locality" type="text" class="form-control" id="inputNewPassword" placeholder="Locality">
</div>
</div>
<div class="row form-group">

<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Village / Town / City</label>
<input name="location" type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Location">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">District</label>
<input name="district" type="text" class="form-control" id="inputNewPassword" placeholder="District">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Pincode</label>
<input name="pincode" type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Pincode">
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-6 form-group">                  
<label for="inputNewPassword">Reference ID</label>
<input name="refer_id" type="Number" class="form-control" id="inputNewPassword" placeholder="Reference ID">
</div>
<div class="col-lg-6 form-group">                  
<label for="inputConfirmNewPassword">Reference Name</label>
<input name="refer_name" type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Reference Name">
</div> 
</div>


<div class="form-group text-right">
<button type="submit" class="templatemo-blue-button">Submit</button>
<button type="reset" class="templatemo-white-button">Reset</button>
</div>                           
</form>
</div>
</div>
<div class="templatemo-content-container" id="subcontent12" style="display: none">
<div class="templatemo-content-widget white-bg">

<form class="templatemo-login-form" enctype="multipart/form-data" id="unverified11">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>
<input type="text" class="form-control" id="uniqueid_edit_customer" placeholder="Aadhar / Phone Number">                  
</div>
</div>
<div class="row form-group" id="error_edit_customer" style="display: none">
<div class="col-lg-6 col-md-6 form-group" style="font-size: 20px;color:red;">                  
USER NOT FOUND              
</div>
</div>

<div class="form-group text-right">
<button onclick="verify(11)" class="templatemo-blue-button">Check</button>
</div>                           
</form>
<div class="templatemo-content-widget white-bg" id="verified11" style="display:none">


<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="radio" id="r4" value="">
<label for="r4" class="font-weight-400"><span></span>Aadhar</label>
</div>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="radio" id="r5" value="" checked>
<label for="r5" class="font-weight-400"><span></span>Phone Number</label>
</div>
<input type="text" class="form-control" id="inputFirstName" placeholder="Aadhar / Phone Number">                  
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">First Name</label>
<input type="text" class="form-control" id="inputFirstName" placeholder="First Name">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputLastName">Last Name</label>
<input type="text" class="form-control" id="inputLastName" placeholder="Last Name">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Contact Number</label>
<input type="tel" class="form-control" id="inputUsername" placeholder="+91">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputEmail">Alternate Number</label>
<input type="tel" class="form-control" id="inputEmail" placeholder="+91">                  
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">D/No</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="Door Number">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Street</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="ABC Street">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">Locality</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="Locality">
</div>
</div>
<div class="row form-group">

<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Village / Town / City</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Location">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">District</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="District">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Pincode</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Pincode">
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-6 form-group">                  
<label for="inputNewPassword">Reference ID</label>
<input type="Number" class="form-control" id="inputNewPassword" placeholder="Reference ID">
</div>
<div class="col-lg-6 form-group">                  
<label for="inputConfirmNewPassword">Reference Name</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Reference Name">
</div> 
</div>


<div class="form-group text-right">
<button type="submit" class="templatemo-blue-button">Submit</button>
<button type="reset" class="templatemo-white-button">Reset</button>
</div>                           
</form>
</div>
</div>
</div>
<div class="templatemo-content-container" id="subcontent13" style="display: none">
<div class="templatemo-content-widget white-bg">
<form class="templatemo-login-form" enctype="multipart/form-data" id="unverified12">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>
<input type="text" class="form-control" id="uniqueid_edit_customer" placeholder="Aadhar / Phone Number">                  
</div>
</div>
<div class="row form-group" id="error_edit_customer" style="display: none">
<div class="col-lg-6 col-md-6 form-group" style="font-size: 20px;color:red;">                  
USER NOT FOUND              
</div>
</div>

<div class="form-group text-right">
<button onclick="verify(12)" class="templatemo-blue-button">Check</button>
</div>                           
</form>
<div class="templatemo-content-widget white-bg" id="verified12" style="display:none">


<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="radio" id="r4" value="">
<label for="r4" class="font-weight-400"><span></span>Aadhar</label>
</div>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="radio" id="r5" value="" checked>
<label for="r5" class="font-weight-400"><span></span>Phone Number</label>
</div>
<input type="text" class="form-control" id="inputFirstName" placeholder="Aadhar / Phone Number">                  
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">First Name</label>
<input type="text" class="form-control" id="inputFirstName" placeholder="First Name">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputLastName">Last Name</label>
<input type="text" class="form-control" id="inputLastName" placeholder="Last Name">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Contact Number</label>
<input type="tel" class="form-control" id="inputUsername" placeholder="+91">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputEmail">Alternate Number</label>
<input type="tel" class="form-control" id="inputEmail" placeholder="+91">                  
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">D/No</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="Door Number">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Street</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="ABC Street">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">Locality</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="Locality">
</div>
</div>
<div class="row form-group">

<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Village / Town / City</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Location">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">District</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="District">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Pincode</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Pincode">
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-6 form-group">                  
<label for="inputNewPassword">Reference ID</label>
<input type="Number" class="form-control" id="inputNewPassword" placeholder="Reference ID">
</div>
<div class="col-lg-6 form-group">                  
<label for="inputConfirmNewPassword">Reference Name</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Reference Name">
</div> 
</div>


<div class="form-group text-right">
<button type="submit" class="templatemo-blue-button">Submit</button>
<button type="reset" class="templatemo-white-button">Reset</button>
</div>                           
</form>
</div>
</div>
</div>
<div class="templatemo-content-container" id="subcontent14" style="display: none">
<div class="templatemo-content-widget white-bg">
<form class="templatemo-login-form" action="view_customer.php" method="POSt"enctype="multipart/form-data" id="unverified13">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>
<input type="text" class="form-control" id="uniqueid_edit_customer" placeholder="Aadhar / Phone Number">                  
</div>
</div>
<div class="row form-group" id="error_edit_customer" style="display: none">
<div class="col-lg-6 col-md-6 form-group" style="font-size: 20px;color:red;">                  
USER NOT FOUND              
</div>
</div>

<div class="form-group text-right">
<button onclick="verify(13)" class="templatemo-blue-button">Check</button>
</div>                           
</form>
<div class="templatemo-content-widget white-bg" id="verified13" style="display:none">


<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="radio" id="r4" value="">
<label for="r4" class="font-weight-400"><span></span>Aadhar</label>
</div>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="radio" id="r5" value="" checked>
<label for="r5" class="font-weight-400"><span></span>Phone Number</label>
</div>
<input type="text" class="form-control" id="inputFirstName" placeholder="Aadhar / Phone Number">                  
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">First Name</label>
<input type="text" class="form-control" id="inputFirstName" placeholder="First Name">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputLastName">Last Name</label>
<input type="text" class="form-control" id="inputLastName" placeholder="Last Name">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Contact Number</label>
<input type="tel" class="form-control" id="inputUsername" placeholder="+91">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputEmail">Alternate Number</label>
<input type="tel" class="form-control" id="inputEmail" placeholder="+91">                  
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">D/No</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="Door Number">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Street</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="ABC Street">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">Locality</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="Locality">
</div>
</div>
<div class="row form-group">

<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Village / Town / City</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Location">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">District</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="District">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Pincode</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Pincode">
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-6 form-group">                  
<label for="inputNewPassword">Reference ID</label>
<input type="Number" class="form-control" id="inputNewPassword" placeholder="Reference ID">
</div>
<div class="col-lg-6 form-group">                  
<label for="inputConfirmNewPassword">Reference Name</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Reference Name">
</div> 
</div>


<div class="form-group text-right">
<button type="submit" class="templatemo-blue-button">Submit</button>
<button type="reset" class="templatemo-white-button">Reset</button>
</div>                           
</form>
</div>
</div>

</div>
</div>
</div>

<div id="content2" style="display: none;"  class="templatemo-content col-1 light-gray-bg"><div class="templatemo-top-nav-container-1">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<li><a href="#articles_add" onclick="nav(21)"><font style="color:  black">ARTICLES</font></a></li>
<li><a href="#articles_finance_" onclick="nav(22)"><font style="color: black">FINANCE</font></a></li>
<li><a href="#articles_transaction" onclick="nav(23)"><font style="color: black">TRANSACTIONS</font></a></li>  
</ul>  
</nav> 
</div>
<div class="templatemo-content-container" id="subcontent21">
<div class="templatemo-content-widget white-bg">
<h2 class="margin-bottom-10" align="middle" style="color: #47bac1">Article Details</h2>

<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>

<input type="text" class="form-control" id="inputFirstName" placeholder="Aadhar / Phone Number">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Customer Name</label>
<input type="text" class="form-control" id="inputFirstName" placeholder=" Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Contact Number</label>
<input type="tel" class="form-control" id="inputLastName" placeholder="Contact Number">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Article ID</label>
<input type="Number" class="form-control" id="inputUsername" placeholder="ID">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail">Article Name</label>
<input type="text" class="form-control" id="inputEmail" placeholder="Article Name">                  
</div> 
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Article Type</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="Type">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Article Cost</label>
<input type="Number" class="form-control" id="inputConfirmNewPassword" placeholder="In Rupees">
</div> 
</div>


<div class="form-group text-right">
<button type="submit" class="templatemo-blue-button">Submit</button>

</div>                           
</form>
</div>

</div>
<div class="templatemo-content-container" id="subcontent22" style="display: none">
<div class="templatemo-content-widget white-bg">
<h2 class="margin-bottom-10" align="middle" style="color: #47bac1">Finance Details</h2>

<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>

<input type="text" class="form-control" id="inputFirstName" placeholder="Aadhar / Phone Number">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Customer Name</label>
<input type="text" class="form-control" id="inputFirstName" placeholder="Customer Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Contact Number</label>
<input type="tel" class="form-control" id="inputLastName" placeholder="+91">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Given Amount </label>
<input type="Number" class="form-control" id="inputUsername" placeholder="In Rupees Funded">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail"> Installment Amount</label>
<input type="Number" class="form-control" id="inputEmail" placeholder="Every Month Installment">                  
</div> 
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Documentation Charges</label>
<input type="Number" class="form-control" id="inputNewPassword" placeholder="processing fee">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Reference Number</label>
<input type="Number" class="form-control" id="inputConfirmNewPassword" placeholder="Bill Number">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Total EMI'S</label>
<input type="Number" class="form-control" id="inputNewPassword" placeholder="Number of Installments">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Total Amount</label>
<input type="Number" class="form-control" id="inputConfirmNewPassword" placeholder="Interest+principle">
</div> 
</div>



</form>
</div>
</div>
</div>
<div class="templatemo-content-container" id="subcontent23" style="display: none">

<div class="templatemo-content-widget white-bg">
<h2 class="margin-bottom-10" align="middle" style="color: #47bac1">Transaction Details</h2>

<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>

<input type="text" class="form-control" id="inputFirstName" placeholder="Aadhar / Phone Number">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Customer Name</label>
<input type="text" class="form-control" id="inputFirstName" placeholder="Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Contact Number</label>
<input type="tel" class="form-control" id="inputLastName" placeholder="+91">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Total Interest</label>
<input type="Number" class="form-control" id="inputUsername" placeholder="Only Interest">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail">Interest Received so far</label>
<input type="Number" class="form-control" id="inputEmail" placeholder="Total Interest/ No. of EMI">                  
</div> 
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Due Date</label>
<input type="date" class="form-control" id="inputNewPassword" placeholder="Door Number">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Installment Receiveed Date</label>
<input type="date" class="form-control" id="inputConfirmNewPassword" placeholder="ABC Street">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Penalty Days</label>
<input type="Number" class="form-control" id="inputNewPassword" placeholder="No. of Days">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Penalty Installment Recevied Date</label>
<input type="date" class="form-control" id="inputConfirmNewPassword" placeholder="Location">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Remark</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="Remark">
</div><br>
<div class="col-lg-6 col-md-6 form-group">                  
<div class="templatemo-block margin-bottom-5">
<input type="checkbox" name="emailOptions" id="c1" value="new" checked> 
<label for="c1" class="font-weight-400"><span></span>Final Settlement</label> 

</div> 
</div>


</form>
</div>


</div>
</div></div>



<div id="content3" style="display: none;" class="templatemo-content col-1 light-gray-bg">
<div class="templatemo-top-nav-container-1">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<li><a href="#cash_finance_" onclick="nav(31)"><font style="color:  black">FINANCE</font></a></li>
<li><a href="#cash_transaction" onclick="nav(32)"><font style="color: black">TRANSACTIONS</font></a></li>    
</ul>  
</nav> 
</div>
<div class="templatemo-content-container" id="subcontent31">
<div class="templatemo-flex-row flex-content-row">
<div class="templatemo-content-widget white-bg col-2">


<div class="templatemo-content-container" id="subcontent21">
<div class="templatemo-content-widget white-bg">
<h2 class="margin-bottom-10" align="middle" style="color: #47bac1">Cash Finance</h2>

<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>

<input type="text" class="form-control" id="inputFirstName" placeholder="Aadhar / Phone Number">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Customer Name</label>
<input type="text" class="form-control" id="inputFirstName" placeholder=" Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Contact Number</label>
<input type="tel" class="form-control" id="inputLastName" placeholder="Contact Number">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Issued Date</label>
<input type="date" class="form-control" id="inputUsername" placeholder="ID">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail">Interest Issue Date</label>
<input type="date" class="form-control" id="inputEmail" placeholder="Article Name">                  
</div> 
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Issued Amount</label>
<input type="number" class="form-control" id="inputNewPassword" placeholder="Amount in Rupees">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Interest Amount</label>
<input type="Number" class="form-control" id="inputConfirmNewPassword" placeholder="In Rupees">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Issued Date</label>
<input type="date" class="form-control" id="inputUsername" placeholder="ID">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail">Interest Issue Date</label>
<input type="date" class="form-control" id="inputEmail" placeholder="Article Name">                  
</div> 
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Interest received Date</label>
<input type="date" class="form-control" id="inputNewPassword" placeholder="Amount in Rupees">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Received Amount</label>
<input type="Number" class="form-control" id="inputConfirmNewPassword" placeholder="In Rupees">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">In / Out</label>
<input type="number" class="form-control" id="inputNewPassword" placeholder="Interest received">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">In / Out</label>
<input type="Number" class="form-control" id="inputConfirmNewPassword" placeholder="Interest Given">
</div> 
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Remark</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="">
</div> 
</div>


<div class="form-group text-right">
<button type="submit" class="templatemo-blue-button">Submit</button>

</div>                           
</form>
</div>

</div>
</div>
</div>


<div class="templatemo-content-container" id="subcontent32" style="display: none">
<div class="templatemo-content-widget white-bg">
<h2 class="margin-bottom-10" align="middle" style="color: #47bac1">Transaction Details</h2>

<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>

<input type="text" class="form-control" id="inputFirstName" placeholder="Aadhar / Phone Number">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Customer Name</label>
<input type="text" class="form-control" id="inputFirstName" placeholder="Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Contact Number</label>
<input type="tel" class="form-control" id="inputLastName" placeholder="+91">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Total Interest</label>
<input type="Number" class="form-control" id="inputUsername" placeholder="Only Interest">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail">Interest Received so far</label>
<input type="Number" class="form-control" id="inputEmail" placeholder="Total Interest/ No. of EMI">                  
</div> 
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Due Date</label>
<input type="date" class="form-control" id="inputNewPassword" placeholder="Door Number">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Installment Receiveed Date</label>
<input type="date" class="form-control" id="inputConfirmNewPassword" placeholder="ABC Street">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Penalty Days</label>
<input type="Number" class="form-control" id="inputNewPassword" placeholder="No. of Days">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Penalty Installment Recevied Date</label>
<input type="date" class="form-control" id="inputConfirmNewPassword" placeholder="Location">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Remark</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="Remark">
</div><br>
<div class="col-lg-6 col-md-6 form-group">                  
<div class="templatemo-block margin-bottom-5">
<input type="checkbox" name="emailOptions" id="c1" value="new" checked> 
<label for="c1" class="font-weight-400"><span></span>Final Settlement</label> 

</div> 
</div>


</form>
</div>


</div>
</div></div></div>




<div id="content4" style="display: none;" class="templatemo-content col-1 light-gray-bg"><div class="templatemo-top-nav-container-1">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<li><a href="#add" onclick="nav(41)"><font style="color:  black">ARTICLES SOLD</font></a></li>
<li><a href="#edit" onclick="nav(42)"><font style="color: black">ARTICLES BOUGHT</font></a></li>
<li><a href="#delete" onclick="nav(43)"><font style="color: black">TRANSACTIONS</font></a></li>
</ul>  
</nav> 
</div>
<div class="templatemo-content-container" id="subcontent41">
<div class="templatemo-content-widget white-bg">
<h2 class="margin-bottom-10" align="middle" style="color: #47bac1">Article Sold</h2>

<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>

<input type="text" class="form-control" id="inputFirstName" placeholder="Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Customer Name</label>
<input type="text" class="form-control" id="inputFirstName" placeholder="Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Contact Number</label>
<input type="tel" class="form-control" id="inputLastName" placeholder="+91">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Article Name</label>
<input type="text" class="form-control" id="inputUsername" placeholder="Name of the Item">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail">Serial Number</label>
<input type="Number" class="form-control" id="inputEmail" placeholder="Serial number">                  
</div> 
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Date of selling</label>
<input type="date" class="form-control" id="inputNewPassword" placeholder="">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Condition</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="working / not working">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">selling Amount</label>
<input type="Number" class="form-control" id="inputNewPassword" placeholder="sold rate">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Profit / Loss</label>
<input type="number" class="form-control" id="inputConfirmNewPassword" placeholder="percent">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Remark</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="Remark">
</div><br>


</form>
</div>


</div>
</div></div>
<div class="templatemo-content-container" id="subcontent42" style="display: none">
<div class="templatemo-content-widget white-bg">
<h2 class="margin-bottom-10" align="middle" style="color: #47bac1">Article Bought</h2>

<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>

<input type="text" class="form-control" id="inputFirstName" placeholder="Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Customer Name</label>
<input type="text" class="form-control" id="inputFirstName" placeholder="Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Contact Number</label>
<input type="tel" class="form-control" id="inputLastName" placeholder="+91">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Article Name</label>
<input type="text" class="form-control" id="inputUsername" placeholder="Name of the Item">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail">Serial Number</label>
<input type="Number" class="form-control" id="inputEmail" placeholder="Serial number">                  
</div> 
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Purchase Date</label>
<input type="date" class="form-control" id="inputNewPassword" placeholder="">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Condition</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="working / not working">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Purchase Amount</label>
<input type="Number" class="form-control" id="inputNewPassword" placeholder="Purchase rate">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Profit / Loss</label>
<input type="number" class="form-control" id="inputConfirmNewPassword" placeholder="percent">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Remark</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="Remark">
</div><br>


</form>
</div>


</div>
</div>
<div class="templatemo-content-container" id="subcontent43" style="display: none">
<div class="templatemo-content-widget white-bg">
<h2 class="margin-bottom-10" align="middle" style="color: #47bac1">Transaction Details</h2>

<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>

<input type="text" class="form-control" id="inputFirstName" placeholder="Aadhar / Phone Number">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Customer Name</label>
<input type="text" class="form-control" id="inputFirstName" placeholder="Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Contact Number</label>
<input type="tel" class="form-control" id="inputLastName" placeholder="+91">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Total Interest</label>
<input type="Number" class="form-control" id="inputUsername" placeholder="Only Interest">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail">Interest Received so far</label>
<input type="Number" class="form-control" id="inputEmail" placeholder="Total Interest/ No. of EMI">                  
</div> 
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Due Date</label>
<input type="date" class="form-control" id="inputNewPassword" placeholder="Door Number">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Installment Receiveed Date</label>
<input type="date" class="form-control" id="inputConfirmNewPassword" placeholder="ABC Street">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Penalty Days</label>
<input type="Number" class="form-control" id="inputNewPassword" placeholder="No. of Days">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Penalty Installment Recevied Date</label>
<input type="date" class="form-control" id="inputConfirmNewPassword" placeholder="Location">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Remark</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="Remark">
</div><br>


</form>
</div>


</div>
</div></div>
<div id="content5" style="display: none;" class="templatemo-content col-1 light-gray-bg"><div class="templatemo-top-nav-container-1">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<li><a href="#add" onclick="nav(51)"><font style="color:  black">EMPLOYEE DETAILS</font></a></li>
<li><a href="#edit" onclick="nav(52)"><font style="color: black">EXPENSE DETAILS</font></a></li>
<li><a href="#delete" onclick="nav(53)"><font style="color: black">SALARY DETAILS</font></a></li>

</ul>  
</nav> 
</div>
<div class="templatemo-content-container" id="subcontent51">
<div class="templatemo-content-widget white-bg">
<h2 class="margin-bottom-10" align="middle" style="color: #47bac1">Employee Details</h2>

<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Employee Number / ID</label><br>

<input type="text" class="form-control" id="inputFirstName" placeholder=" Number / ID">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Employee Name</label>
<input type="text" class="form-control" id="inputFirstName" placeholder="Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Contact Number</label>
<input type="tel" class="form-control" id="inputLastName" placeholder="+91">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">D / No : </label>
<input type="text" class="form-control" id="inputUsername" placeholder="Door Number">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail">Street</label>
<input type="text" class="form-control" id="inputEmail" placeholder="ABC">                  
</div> 
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Locality</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="Area">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Village / Town / City</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Location">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Pin Code</label>
<input type="number" class="form-control" id="inputNewPassword" placeholder="Pincode">
</div>



</form>
</div>


</div>
</div>
<div class="templatemo-content-container" id="subcontent52" style="display: none">
<div class="templatemo-content-widget white-bg">
<h2 class="margin-bottom-10" align="middle" style="color: #47bac1">Expense Details</h2><br>

<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Serial Number </label><br>

<input type="text" class="form-control" id="inputFirstName" placeholder="Serial Number">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Date of Amount Given</label>
<input type="date" class="form-control" id="inputFirstName" placeholder="">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Date of Amount Received</label>
<input type="date" class="form-control" id="inputLastName" placeholder="">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Type </label>
<input type="text" class="form-control" id="inputUsername" placeholder="In / Out">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail">Reference Number</label>
<input type="text" class="form-control" id="inputEmail" placeholder="Reference Number">                  
</div> 
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">HP</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="HP">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Total</label>
<input type="number" class="form-control" id="inputConfirmNewPassword" placeholder="Total">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Remark</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="">
</div>



</form>
</div>


</div>
</div>
<div class="templatemo-content-container" id="subcontent53" style="display: none">
<div class="templatemo-content-widget white-bg">
<h2 class="margin-bottom-10" align="middle" style="color: #47bac1">Employee Salary Details</h2><br>

<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Employee ID </label><br>

<input type="text" class="form-control" id="inputFirstName" placeholder="Employee ID">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Salary</label>
<input type="number" class="form-control" id="inputFirstName" placeholder="Amount Given">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Salary Given Date</label>
<input type="date" class="form-control" id="inputLastName" placeholder="">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Salary Given </label>
<input type="number" class="form-control" id="inputUsername" placeholder="Salary Given">                  
</div>

</form>
</div>
</div>
</div></div></div>
<div id="content6" style="display: none;" class="templatemo-content col-1 light-gray-bg">
<div class="templatemo-top-nav-container-1">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<li><a href="#add" onclick="nav(61)"><font style="color:  black">ACCESSORIES</font></a></li>                     
</ul>  
</nav> 
</div>
<div class="templatemo-content-container" id="subcontent61">
<div class="templatemo-content-widget white-bg">
<h2 class="margin-bottom-10" align="middle" style="color: #47bac1">Accessories</h2>

<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Serial Number</label><br>

<input type="text" class="form-control" id="inputFirstName" placeholder="Serial Number">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Article Name </label>
<input type="text" class="form-control" id="inputFirstName" placeholder="Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Purchase Date</label>
<input type="date" class="form-control" id="inputLastName" placeholder="">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Purchase Amount </label>
<input type="number" class="form-control" id="inputUsername" placeholder="In Rupees">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail">Quantity</label>
<input type="number" class="form-control" id="inputEmail" placeholder="Number">                  
</div> 
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Sold Amount</label>
<input type="number" class="form-control" id="inputNewPassword" placeholder="Sold Price">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Sold Date</label>
<input type="date" class="form-control" id="inputConfirmNewPassword" placeholder="">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Sold Quantity</label>
<input type="number" class="form-control" id="inputNewPassword" placeholder="Number">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Available Quantity</label>
<input type="number" class="form-control" id="inputConfirmNewPassword" placeholder="Available Quantity">
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Total Available Amount</label>
<input type="number" class="form-control" id="inputNewPassword" placeholder="Total Amount">
</div>




</form>
</div>


</div>
</div></div></div>
<div id="content7" style="display: none;" class="templatemo-content col-1 light-gray-bg"><div class="templatemo-top-nav-container-1">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<li><a href="#add" onclick="nav(71)"><font style="color:  black">SUMMARY</font></a></li>

</ul>  
</nav> 
</div>
<div class="templatemo-content-container" id="subcontent71">
<div class="templatemo-content-widget white-bg">
<h2 class="margin-bottom-10" align="middle" style="color: #47bac1">Summary</h2>

<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">



<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Total Investment Amount </label>
<input type="number" class="form-control" id="inputFirstName" placeholder="Amount Invested">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Available Cash In Hand</label>
<input type="number" class="form-control" id="inputLastName" placeholder="Cash In Hand">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Outward Amount </label>
<input type="number" class="form-control" id="inputUsername" placeholder="In Rupees">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail">Interest Amount</label>
<input type="number" class="form-control" id="inputEmail" placeholder="Interest Amount">                  
</div> 
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Total Turnover</label>
<input type="number" class="form-control" id="inputNewPassword" placeholder="Total">
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputConfirmNewPassword">Remark</label>
<input type="text" class="form-control" id="inputConfirmNewPassword" placeholder="">
</div> 
</div>


</form>
</div>


</div>
</div></div>
<div id="content8" style="display: none;" class="templatemo-content col-1 light-gray-bg"><div class="templatemo-top-nav-container-1">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<li><a href="#add" onclick="nav(81)"><font style="color:  black">CHANGE PASSOWRD</font></a></li>

</ul>  
</nav> 
</div>
<div class="templatemo-content-container" id="subcontent81">
<div class="templatemo-content-widget white-bg">


<form action="change_password.php" class="templatemo-login-form" method="POST" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label>Old Password</label>
<input name="old_pwd" type="password" class="form-control" placeholder="********">                  
</div>
<div class="col-lg-6 form-group">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label>New Password</label>
<input name="new_pwd" type="password" class="form-control" placeholder="********">                  
</div>
<div class="col-lg-6 form-group">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label>Re-type New Password</label>
<input name="retype_new_pwd" type="password" class="form-control" placeholder="********">                  
</div>
<div class="col-lg-6 form-group">                  
</div> 
</div>

<div class="form-group text-right">
<button type="submit" class="templatemo-blue-button">Submit</button>
</div>                           
</form>
</div>
</div>
</div></div>
<div id="content9" style="display: none;" class="templatemo-content col-1 light-gray-bg"><div class="templatemo-top-nav-container-1">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<li><a href="#add" onclick="nav(91)"><font style="color:  black">SIGNOUT</font></a></li>

</ul>  
</nav> 
</div>
<div class="templatemo-content-container" id="subcontent91">
</div>
</div></div>
</div>
</div>

</body>
</html>