
<div class="templatemo-content-container" id="subcontent12">
<div class="templatemo-content-widget white-bg">

<form class="templatemo-login-form" enctype="multipart/form-data" id="unverified11">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>
<input type="text" class="form-control" name="Aadhar" placeholder="Aadhar / Phone Number">                  
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
<input type="text" class="form-control" name="FirstName" placeholder="First Name">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputLastName">Last Name</label>
<input type="text" class="form-control" name="LastName" placeholder="Last Name">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Contact Number</label>
<input type="tel" class="form-control" name="Username" placeholder="+91">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputEmail">Alternate Number</label>
<input type="tel" class="form-control" name="Email" placeholder="+91">                  
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">D/No</label>
<input type="text" class="form-control" name="Door_num" placeholder="Door Number">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Street</label>
<input type="text" class="form-control" name="Street" placeholder="ABC Street">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">Locality</label>
<input type="text" class="form-control" name="locality" placeholder="Locality">
</div>
</div>
<div class="row form-group">

<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Village / Town / City</label>
<input type="text" class="form-control" name="Village" placeholder="Location">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">District</label>
<input type="text" class="form-control" name="district" placeholder="District">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Pincode</label>
<input type="text" class="form-control" name="Pincode" placeholder="Pincode">
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-6 form-group">                  
<label for="inputNewPassword">Reference ID</label>
<input type="Number" class="form-control" name="ref_id" placeholder="Reference ID">
</div>
<div class="col-lg-6 form-group">                  
<label for="inputConfirmNewPassword">Reference Name</label>
<input type="text" class="form-control" name="ref_name" placeholder="Reference Name">
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