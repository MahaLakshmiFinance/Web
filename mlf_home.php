<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
  header('Location: index.php');
  die();
}

if(isset($_SESSION['req_script'])){
	echo $_SESSION['req_script'];
	$_SESSION['req_script']="";
}
if(isset($_SESSION['role'])){
	$role = $_SESSION['role'];
	if($role == 3){
		echo "<script>
		setTimeout(function(){
			for(var i=1;i<=9;i++){
				var x = document.getElementById('link'+i)
				if(x)
					x.style='display:none;'
			}
			document.getElementById('link1').style=''
			document.getElementById('link2').style=''
			document.getElementById('link3').style=''
			document.getElementById('link4').style=''
			document.getElementById('link6').style=''
			document.getElementById('link8').style=''
			document.getElementById('link9').style=''
		},100);
		</script>";
	}
	if($role == 4){
		echo "<script>
		setTimeout(function(){
			for(var i=1;i<=9;i++){
				var x = document.getElementById('link'+i)
				if(x)
					x.style='display:none;'
			}
			document.getElementById('link8').style=''
			document.getElementById('link9').style=''
		},100);
		</script>";
	}
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
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/templatemo-style.css" rel="stylesheet">
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
<li><a href="#profile" id="link0" onclick="sidemenu(0);" class="active">Profile</a></li>
<li><a href="#users" id="link1" onclick="sidemenu(1)">Customer</a></li>
<li><a href="#article_finance" id="link2" onclick="sidemenu(2)" >Article Finance</a></li>
<li><a href="#cash_finance" id="link3" onclick="sidemenu(3)" >Cash Finance</a></li>
<li><a href="#buy_back_items" id="link4" onclick="sidemenu(4)" >Buy Back Items</a></li>
<li><a href="#employee_expenses" id="link5" onclick="sidemenu(5)" >Employee Expenses</a></li>
<li><a href="#accessories" id="link6" onclick="sidemenu(6)" >Accessories</a></li>
<li><a href="#summary" id="link7"  onclick="sidemenu(7)" >Summary</a></li>
<li><a href="#change_password" id="link8"  onclick="sidemenu(8)" >Change Password</a></li>
<li><a href="php/signout.php" id="link9"  onclick="sidemenu(9)" >Sign Out</a></li>
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

	<div id="content">
	<script>
		$(function(){
		$('#content').load('php/content/content0/content0.php')
		});
	</script>
	</div>

	<script id="additional"></script>
</div>
</div>
</body>
</html>