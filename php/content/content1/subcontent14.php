<script src="php/content/content1/validation.js">
</script>
<script>
function verify_usr(){
         $.ajax({
               type: "GET",
               url: "php/content/content1/verify_user.php",
               data: "subcontent_num=4&&id="+document.getElementById("id").value,
               error: function(msg){
                   alert('error')
                   console.log(msg);
               },
               success: function(msg){
                   document.getElementById('temp').innerHTML = "";
                    $("#temp").html(msg);
               }
            });
}

</script>
<div class="templatemo-content-container">
    <div id="temp"></div>
    <div class="templatemo-content-widget white-bg">
        <div class="templatemo-login-form" id="verify_user"enctype="multipart/form-data">
        <div class="row form-group">
        <div class="col-lg-6 col-md-6 form-group">                  
        <label for="inputFirstName">User ID</label><br>
        <input type="text" class="form-control" id="id" placeholder="Aadhar / Phone Number">                  
        </div>
        </div>
        <div class="row form-group" id="error" style="display: none">
        <div class="col-lg-6 col-md-6 form-group" style="font-size: 12px;color:red;">                  
        USER NOT FOUND!!!           
        </div>
        </div>
        <div class="form-group text-right">
        <button onclick="verify_usr()" class="templatemo-blue-button">Check</button>
        </div> 
        </div>
    <form action="php/content/content1/view_user.php"onsubmit="return user_form_modified('view_user')" name="view_user" style="display:none;"class="templatemo-login-form" method="POST" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Unique ID</label><br>
<input disabled type="text" name="username" class="form-control" id="inputFirstName" placeholder="Aadhar / Phone Number">                  
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">First Name</label>
<input disabled type="text" name="fname" class="form-control" name="FirstName" placeholder="First Name">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputLastName">Last Name</label>
<input disabled type="text" name="lname" class="form-control" name="LastName" placeholder="Last Name">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Contact Number</label>
<input disabled type="tel" name="cntact_num" class="form-control" name="Username" placeholder="+91">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputEmail">Alternate Number</label>
<input  disabled type="tel" name="alt_cntact_num" class="form-control" name="Email" placeholder="+91">                  
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">D/No</label>
<input  disabled type="text" name="dno" class="form-control" name="Door_num" placeholder="Door Number">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Street</label>
<input disabled type="text" name="street" class="form-control" name="Street" placeholder="ABC Street">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">Locality</label>
<input disabled type="text" name="locality"class="form-control" name="locality" placeholder="Locality">
</div>
</div>
<div class="row form-group">

<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Village / Town / City</label>
<input disabled type="text" name="location"class="form-control" name="Village" placeholder="Location">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">District</label>
<input disabled type="text" name="district" class="form-control" name="district" placeholder="District">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Pincode</label>
<input disabled type="text" name="pincode" class="form-control" name="Pincode" placeholder="Pincode">
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-6 form-group">                  
<label for="inputNewPassword">Reference ID</label>
<input disabled type="text" name="refer_id" class="form-control" name="ref_id" placeholder="Reference ID">
</div>
<div class="col-lg-6 form-group">                  
<label for="inputConfirmNewPassword">Reference Name</label>
<input disabled type="text" name="refer_name" class="form-control" name="ref_name" placeholder="Reference Name">
</div>
</div>


<div class="form-group text-right">
</div>                           
</form>
</div>
</div>
</div>