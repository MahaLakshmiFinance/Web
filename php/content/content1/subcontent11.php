<script src="php/content/content1/validation.js"></script>

<div class="templatemo-content-widget white-bg">
<script>
    function findname(){
    $('#refer_id').keyup(function(){
         $.ajax({
               type: "GET",
               url: "php/content/content1/refer_name.php",
               data: "refer_name="+document.forms['new_user']['refer_id'].value,
               error: function(msg){
                   console.log(msg);
               },
               success: function(msg){
                   <?php
                    session_start();
                    echo "
                    console.log('".$_SESSION['refer_name']."')
                    ";
                   echo "
                   document.getElementById('refer_name').value = '".$_SESSION['refer_name']."'
                   ";
                   $_SESSION['refer_name'] = "";
                    
                    ?>
            }
        })
    });
}
</script>
<form action="php/content/content1/new_user.php" name="new_user" onsubmit="return user_form('new_user')"class="templatemo-login-form" method="POST" enctype="multipart/form-data">

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
<input name="username" type="text"  class="form-control"placeholder="Aadhar / Phone Number">                  
</div>
<div class="col-lg-6 col-md-6 form-group" style="display:none;">                  
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
<input name="fname" type="text" class="form-control"placeholder="First Name">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputLastName">Last Name</label>
<input name="lname" type="text" class="form-control"placeholder="Last Name">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Contact Number</label>
<input name="cntact_num" type="tel" class="form-control"placeholder="+91">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputEmail">Alternate Number</label>
<input name="alt_cntact_num" type="tel" class="form-control"placeholder="+91">                  
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">D/No</label>
<input name="dno" type="text" class="form-control"placeholder="Door Number">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Street</label>
<input name="street" type="text" class="form-control"placeholder="ABC Street">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">Locality</label>
<input name="locality" type="text" class="form-control"placeholder="Locality">
</div>
</div>
<div class="row form-group">

<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Village / Town / City</label>
<input name="location" type="text" class="form-control" placeholder="Location">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">District</label>
<input name="district" type="text" class="form-control"  placeholder="District">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Pincode</label>
<input name="pincode" type="text" class="form-control" placeholder="Pincode">
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-6 form-group">                  
<label for="inputNewPassword">Reference ID</label>
<input name="refer_id" onkeyup="findname()" id="refer_id" type="text" class="form-control" placeholder="Reference ID">
</div>
<div class="col-lg-6 form-group">                  
<label for="inputConfirmNewPassword">Reference Name</label>
<input name="refer_name" type="text" id="refer_name" class="form-control" placeholder="Reference Name">
</div> 
</div>
<div class="form-group text-right">
<button type="submit" class="templatemo-blue-button">Submit</button>
<button type="reset" class="templatemo-white-button">Reset</button>
</div>                           
</form>
</div>
</div>