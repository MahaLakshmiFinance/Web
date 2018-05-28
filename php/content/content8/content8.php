<?php
  session_start();
  echo "<script>
  setTimeout(function(){
    document.getElementById('hello').innerHTML = '".$_SESSION['username']." ';
  },20);
  </script>";
?>

<div class="templatemo-content col-1 light-gray-bg"><div class="templatemo-top-nav-container-1">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<li><a href="#add" onclick="nav(81)"><font style="color:  black">CHANGE PASSOWRD</font></a></li>

</ul> 
<div align="right"style='font-size:20px'>Hello, <b style='font-size:20px'id="hello"></b></div>
</nav> 
</div>
<div class="templatemo-content-container" id="subcontent81">
<div class="templatemo-content-widget white-bg">


<form action="php/change_password.php" class="templatemo-login-form" method="POST" enctype="multipart/form-data">

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
</div>