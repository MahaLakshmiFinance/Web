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
<li><a href="#add" onclick="nav(51)"><font style="color:  black">EMPLOYEE DETAILS</font></a></li>
<li><a href="#edit" onclick="nav(52)"><font style="color: black">EXPENSE DETAILS</font></a></li>
<li><a href="#delete" onclick="nav(53)"><font style="color: black">SALARY DETAILS</font></a></li>

</ul> 
<div align="right"style='font-size:20px'>Hello, <b style='font-size:20px'id="hello"></b></div>
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
</div></div>