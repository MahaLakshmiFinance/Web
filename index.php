<?php
	session_start();
session_unset();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">  
		<title>MLF - Login</title>
		<meta name="description" content="">
		<meta name="author" content="templatemo">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/templatemo-style.css" rel="stylesheet">
<script src="js/jquery-1.11.2.min.js">Cache.delete()</script>      <!-- jQuery -->
<script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
<script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->

<script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
		<style type="text/css">
		*{
			margin:0;
			padding: 0;
			border:0;
		}
			#logo{
				width:250px;
				height:380px;
			}

		</style>
		
	</head>
	<body class="light-gray-bg-1" id="homebody">
	<script>
		var myIndex = 0;
		setTimeout(function(){
			carousel(1);
		},2000);
		var aimg = ['back2.jpg','back1.jpg','back3.jpg','back4.jpg','back5.jpg'];
		var len = aimg.length;
		function carousel(x) {
		var i = parseInt(x) % (len);
		document.getElementById('homebody').style = 'background-image : url('+aimg[i]+');background-repeat: no-repeat;background-size: cover;';
		x = i;
		setTimeout(function(){
			carousel(x+1)}, 2000); // Change image every 2 seconds
		}
</script>
<div id="additional"></div>
	<div class="templatemo-content-widget templatemo-login-widget yellow-bg-1 " style="float:right;">
		<div class="templatemo-content-widget templatemo-login-widget white-bg-1">
			<header class="text-center">
				<div class="profile-photo-container">
				<img src="images/logo.png" alt="Profile Photo" id="logo">  
			
				</div>  
			
			</header>
			<div class="row form-group" style="opacity:0.5;font-style:bold;display:none" id="alert">
				<div class="form-control" style="opacity:5.0;text-align:center;color:red">
					Invalid Username or Password
				</div>
			</div>
			<form action="php/login.php" method="POST" class="templatemo-login-form">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
						<input name="username" type="text" class="form-control" placeholder="9999999999">
					</div>	
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
						<input name="password" type="password" class="form-control" placeholder="********">
					</div>	
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="templatemo-blue-button width-100">Login</button>
				</div>
			</form>
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