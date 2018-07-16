<?php
    session_start();
    if(!isset($_SESSION['role'])){
        session_unset();
        echo "<script>         window.top.location = 'index.php';     </script>";
                die();
      }
      else if($_SESSION['role']==2){
        echo "<script>
                setTimeout(function(){
                    document.getElementById('rle_type').style='';
                    alert('hello');
                },1200);     
            </script>";
      }
?>
<script src="php/content/content1/validation.js?v=1.0"></script>
<div class="templatemo-content-container">
    <div id="temp"></div>
    <div class="templatemo-content-widget white-bg">
        
        <form action="php/content/content1/update_user.php" onsubmit="return user_form_modified('edit_user')" name="edit_user"class="templatemo-login-form" method="POST" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">User ID</label><br>
<input type="text" name="username" class="form-control" id="inputFirstName"  onfocusout="verify_usr('edit_user',2)"placeholder="Aadhar / Phone Number">                  
</div>
<div class="col-lg-6 col-md-6 form-group" id="rle_type" style="display:none;">                  
<label for="inputFirstName">Role ID</label><br>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="role_id" id="r3" value="2" >
<label for="r3" class="font-weight-400"><span></span>Employee</label>
</div><br>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="role_id" id="r4" value="3">
<label for="r4" class="font-weight-400"><span></span>Customer</label>
</div><br>
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">First Name</label>
<input type="text" name="fname" class="form-control" name="FirstName" placeholder="First Name">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputLastName">Last Name</label>
<input type="text" name="lname" class="form-control" name="LastName" placeholder="Last Name">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Contact Number</label>
<input type="tel" name="cntact_num" class="form-control" name="Username" placeholder="+91">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputEmail">Alternate Number</label>
<input type="tel" name="alt_cntact_num" class="form-control" name="Email" placeholder="+91">                  
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">D/No</label>
<input type="text" name="dno" class="form-control" name="Door_num" placeholder="Door Number">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Street</label>
<input type="text" name="street" class="form-control" name="Street" placeholder="ABC Street">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">Locality</label>
<input type="text" name="locality"class="form-control" name="locality" placeholder="Locality">
</div>
</div>
<div class="row form-group">

<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Village / Town / City</label>
<input type="text" name="location"class="form-control" name="Village" placeholder="Location">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">District</label>
<input type="text" name="district" class="form-control" name="district" placeholder="District">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Pincode</label>
<input type="text" name="pincode" class="form-control" name="Pincode" placeholder="Pincode">
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-6 form-group">                  
<label for="inputNewPassword">Reference ID</label>
<input type="text" name="refer_id" class="form-control" name="ref_id" placeholder="Reference ID">
</div>
<div class="col-lg-6 form-group">                  
<label for="inputConfirmNewPassword">Reference Name</label>
<input type="text" name="refer_name" class="form-control" name="ref_name" placeholder="Reference Name">
</div> 
</div>


<div class="form-group text-right">
<button type="submit" class="templatemo-blue-button">UPDATE</button>
</div>                           
</form>
</div>
</div>
</div>