<?php
  session_start();
  echo "<script>
  setTimeout(function(){
    document.getElementById('hello').innerHTML = '".$_SESSION['username']." ';
  },20);
  </script>";
?>

<div class="templatemo-content col-1 light-gray-bg">
<div class="templatemo-top-nav-container-1">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<li><a href="#add" onclick="nav(61)"><font style="color:  black">ACCESSORIES</font></a></li>                     
</ul>
<div align="right"style='font-size:20px'>Hello, <b style='font-size:20px'id="hello"></b></div> 
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
</div></div>