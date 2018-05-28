<?php
session_start();

if(isset($_SESSION['id_available'])){
    if($_SESSION['id_available']==True){
        echo '<script>
            document.forms["verify_user"].style="display:none"
            document.forms["view_user"].style=""
        </script>';
        fetchDetails($_SESSION['id']);
    }

}
if(isset($_SESSION['error_typed_view'])){
    if($_SESSION['error_typed_view']==True)
        echo '<script>
            document.getElementById("error").style=""
        </script>';
    
}


function fetchDetails($id){
    
      include_once '../../db_operations.php';
    
      $dbobj = new DBConnect;
    
      $dbobj->setDBName('mlf');
    
      $dbobj->connect();
      
      $columnNames = '`username`, `first_name`, `last_name`, `contact_num`, `alternate_num`, `d_no`, `street`, `locality`, `town_or_city`, `district`, `pincode`, `refer_username`, `refer_name`';
    
      $findByColumnName = "username";
    
      $fndByValue = '"'.$id.'"';
    
      $result = $dbobj->search('mlf_users_info',$columnNames,$findByColumnName,$fndByValue);
    
      while($row = $result->fetch_assoc()){
        if(isset($_SESSION['content'])){
          if($_SESSION['content']!=1){
            break;
          }
        }
    
       echo "<script>
        setTimeout(function(){
            document.forms['view_user']['username'].value = '".$row['username']."';
            document.forms['view_user']['fname'].value = '".$row['first_name']."';
            document.forms['view_user']['lname'].value = '".$row['last_name']."';
            document.forms['view_user']['cntact_num'].value = '".$row['contact_num']."';
            document.forms['view_user']['alt_cntact_num'].value = '".$row['alternate_num']."';
            document.forms['view_user']['dno'].value = '".$row['d_no']."';
            document.forms['view_user']['street'].value = '".$row['street']."';
            document.forms['view_user']['locality'].value = '".$row['locality']."';
            document.forms['view_user']['location'].value = '".$row['town_or_city']."';
            document.forms['view_user']['district'].value = '".$row['district']."';
            document.forms['view_user']['pincode'].value = '".$row['pincode']."';
            document.forms['view_user']['refer_id'].value = '".$row['refer_username']."';
            document.forms['view_user']['refer_name'].value = '".$row['refer_name']."';
       },20);
       </script>" ;
       break;
      }
    
}



$_SESSION['id_available'] = False;
$_SESSION['error_typed_view'] = False;
?>
<div class="templatemo-content-container">
<div class="templatemo-content-widget white-bg">
    <form class="templatemo-login-form" name="verify_user" method="GET"onsubmit="document.getElementById('x').style=''" action="php/content/content1/verify_user.php?subcontent_num=3" enctype="multipart/form-data" id="unverified11">
    <div class="row form-group">
    <div class="col-lg-6 col-md-6 form-group">                  
    <label for="inputFirstName">Unique ID</label><br>
    <input type="text" class="form-control" name="id" placeholder="Aadhar / Phone Number">                  
    </div>
    <input type="number" id="x" class="form-control" name="subcontent_num" value="4" style="display:none;" placeholder="Aadhar / Phone Number">
    </div>
    <div class="row form-group" id="error" style="display: none">
    <div class="col-lg-6 col-md-6 form-group" style="font-size: 12px;color:red;">                  
    USER NOT FOUND!!!           
    </div>
    </div>
    <div class="form-group text-right">
    <button type="submit" class="templatemo-blue-button">Check</button>
    </div> 
    </form>
    <form action="php/content/content1/view_user.php" name="view_user" style="display:none;"class="templatemo-login-form" method="POST" enctype="multipart/form-data">

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