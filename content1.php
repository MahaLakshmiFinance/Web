id="content1" class="templatemo-content col-1 light-gray-bg"><div class="templatemo-top-nav-container-1">
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


<form action="php/new_user.php" name="new_user" onsubmit="return user_form('new_user')"class="templatemo-login-form" method="POST" enctype="multipart/form-data">

<div class="row form-group">
  <div class="col-lg-6 col-md-6 form-group">                  
    <label for="inputFirstName">Unique ID</label><br>
    <div class="margin-right-15 templatemo-inline-block">
      <input type="radio" name="username_type" id="r1" value="1" checked>
      <label for="r1" class="font-weight-400"><span></span>Aadhar</label>
    </div>
    <div class="margin-right-15 templatemo-inline-block">
      <input type="radio" name="username_type" id="r2" value="2">
      <label for="r2" class="font-weight-400"><span></span>Phone Number</label>
    </div>
    <input name="username" type="text"  class="form-control" id="inputFirstName" placeholder="Aadhar / Phone Number">                  
  </div>
  <div class="col-lg-6 col-md-6 form-group">                  
    <label for="inputFirstName">Role ID</label><br>
    <div class="margin-right-15 templatemo-inline-block">
      <input type="radio" name="role_id" id="r3" value="3" >
      <label for="r3" class="font-weight-400"><span></span>Employee</label>
    </div>
    <div class="margin-right-15 templatemo-inline-block">
      <input type="radio" name="role_id" id="r4" value="4">
      <label for="r4" class="font-weight-400"><span></span>Customer</label>
    </div><br>
    <div class="margin-right-15 templatemo-inline-block">
      <input type="radio" name="role_id" id="r5" value="5" checked>
      <label for="r5" class="font-weight-400"><span></span>Other</label>
    </div>
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
<form class="templatemo-login-form" action="view_user.php" method="POSt"enctype="multipart/form-data" id="unverified13">

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