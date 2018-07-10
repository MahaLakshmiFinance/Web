<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
  header('Location: index.php');
  die();
}
clearstatcache();
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
<!-- jQuery
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>  jQuery Migrate Plugin -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
<ul id="nav">
<script>
$(function(){
	$('#nav').load('php/nav.php')
		});

</script>
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
<h5 style="color: #FFDF00" align="middle">PALAKOLLU | TADERU | NARASAPURAM</h5>
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


<?php 
if(isset($_SESSION['req_script'])){
	echo $_SESSION['req_script'];
	$_SESSION['req_script']="";
}
?>