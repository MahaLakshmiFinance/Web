<?php
  session_start();

  include_once 'php/db_operations.php';

  $dbobj = new DBConnect;

  $dbobj->setDBName('mlf');

  $dbobj->connect();
  
  $columnNames = '`username`, `first_name`, `last_name`, `contact_num`, `alternate_num`, `d_no`, `street`, `locality`, `town_or_city`, `district`, `pincode`, `refer_username`, `refer_name`';

  $findByColumnName = "username";

  $fndByValue = '"'.$_SESSION['username'].'"';

  $result = $dbobj->search('mlf_users_info',$columnNames,$findByColumnName,$fndByValue);

  while($row = $result->fetch_assoc()){

   echo "<script>
    setTimeout(function(){
    document.forms['profile']['username'].value = '".$row['username']."';
    document.forms['profile']['fname'].value = '".$row['first_name']."';
    document.forms['profile']['lname'].value = '".$row['last_name']."';
    document.forms['profile']['cntact_num'].value = '".$row['contact_num']."';
    document.forms['profile']['alt_cntact_num'].value = '".$row['alternate_num']."';
    document.forms['profile']['dno'].value = '".$row['d_no']."';
    document.forms['profile']['street'].value = '".$row['street']."';
    document.forms['profile']['locality'].value = '".$row['locality']."';
    document.forms['profile']['location'].value = '".$row['town_or_city']."';
    document.forms['profile']['district'].value = '".$row['district']."';
    document.forms['profile']['pincode'].value = '".$row['pincode']."';
    document.forms['profile']['refer_id'].value = '".$row['refer_username']."';
    document.forms['profile']['refer_name'].value = '".$row['refer_name']."';
   },500);
   </script>" ;
  }

?>



<html>
<div class="templatemo-content col-1 light-gray-bg"><div class="templatemo-top-nav-container-1">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<li><a href="#profile"><font style="color:  black">Profile</font></a></li>

</ul>  
</nav> 
</div>
<div class="templatemo-content-container" id="subcontent01">
<div class="templatemo-content-widget white-bg">


<form action="" name="profile" onsubmit="return user_form('new_user')"class="templatemo-login-form" method="POST" enctype="multipart/form-data">

<div class="row form-group">
  <div class="col-lg-6 col-md-6 form-group">                  
    <label for="inputFirstName">Username</label><br>
    <input disabled name="username" type="text"  class="form-control" id="inputFirstName" placeholder="Aadhar / Phone Number">                  
  </div>
  <div class="col-lg-6 col-md-6 form-group">
  </div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">First Name</label>
<input disabled  name="fname" type="text" class="form-control" id="inputFirstName" placeholder="First Name">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputLastName">Last Name</label>
<input disabled  name="lname" type="text" class="form-control" id="inputLastName" placeholder="Last Name">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Contact Number</label>
<input  disabled name="cntact_num" type="tel" class="form-control" id="inputUsername" placeholder="+91">                  
</div>
<div class="col-lg-6 form-group">                  
<label for="inputEmail">Alternate Number</label>
<input  disabled name="alt_cntact_num" type="tel" class="form-control" id="inputEmail" placeholder="+91">                  
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">D/No</label>
<input disabled name="dno" type="text" class="form-control" id="inputNewPassword" placeholder="Door Number">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Street</label>
<input disabled name="street" type="text" class="form-control" id="inputConfirmNewPassword" placeholder="ABC Street">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">Locality</label>
<input disabled name="locality" type="text" class="form-control" id="inputNewPassword" placeholder="Locality">
</div>
</div>
<div class="row form-group">

<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Village / Town / City</label>
<input disabled name="location" type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Location">
</div> 
<div class="col-lg-4 col-md-4 form-group">                  
<label for="inputNewPassword">District</label>
<input disabled name="district" type="text" class="form-control" id="inputNewPassword" placeholder="District">
</div>
<div class="col-lg-4 form-group">                  
<label for="inputConfirmNewPassword">Pincode</label>
<input disabled name="pincode" type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Pincode">
</div> 
</div><hr>
<div class="row form-group">
<div class="col-lg-6 form-group">                  
<label for="inputConfirmNewPassword">Reference Name</label>
<input disabled name="refer_id" type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Reference Id">
</div> 
<div class="col-lg-6 form-group">                  
<label for="inputConfirmNewPassword">Reference Name</label>
<input disabled name="refer_name" type="text" class="form-control" id="inputConfirmNewPassword" placeholder="Reference Name">
</div>
</div>


<div class="form-group text-right">
</div>                           
</form>
</div>
</div>

</div>
</html>