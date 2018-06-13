<?php
session_start();
    if(!isset($_SESSION['role'])){
        session_unset();
        session_destroy();
        echo "<script>         window.top.location = 'index.php';     </script>";
                die();
      }
?>
<script src="php/content/content4/validation.js"></script>
<script src="php/content/content4/content4.js"></script>
<div id="temp"></div>
<div class="templatemo-content-container">
<div class="templatemo-content-widget white-bg">

<form action="php/content/content4/exchange.php" name="exchange" onsubmit="return form_verify()" class="templatemo-login-form" method="POST" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="type" id="r1" value="0" checked onchange="revert_to_purchase()">
<label for="r1" class="font-weight-400"><span></span>Purchase</label>
</div>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="type" id="r2" value="1" onchange="get_existing_serial()">
<label for="r2" class="font-weight-400"><span></span>Sell</label>
</div>                
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Customer ID</label><br>

<input type="text"onfocusout="user()" class="form-control" name="username" id="inputFirstName" placeholder="Aadhar / Mobile Number">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Customer Name</label>
<input disabled type="text"class="form-control" name="cstmr_name" placeholder="Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Contact Number</label>
<input disabled type="tel" name="cntact_num"class="form-control" id="inputLastName" placeholder="+91">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail">Serial Number</label>
<input type="Number" class="form-control" id="in_serial" name="serial_num1" placeholder="Serial number">
<select id="serial" name="serial_num2" style="display:none" class="form-control" onchange="serial_change()"></select>
<script>serialNumb()</script>                  
</div> 
<div class="col-lg-6 col-md-6 form-group">                  
<label>Condition</label><br>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="item_cond" id="working" value="1" >
<label for="working" class="font-weight-400"><span></span>Working</label>
</div>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="item_cond" id="ntworking" value="0" >
<label for="ntworking" class="font-weight-400"><span></span>Not Working</label>
</div>
</div>
<div class="col-lg-6 col-md-6 form-group">                  

</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Type</label>
<select  class="form-control" name="item_type">
<option value="">SELECT</option>
  <option value="RF">Refrigerator ( RF )</option>
  <option value="TV">Television ( TV )</option>
  <option value="AC">Air Conditioner ( AC )</option>
  <option value="WM">Washing Machine ( WM )</option>
</select>          
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Model</label>
<input type="text" name="model_name" class="form-control" id="inputUsername" placeholder="Name of the Item">                  
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Date ( YYYY-MM-DD )</label>
<input type="text" disabled name="date"id="date"class="form-control" placeholder="">
<script>document.getElementById('date').value = getTheDate()</script>
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Amount</label>
<input type="Number" name="cost" class="form-control" placeholder="9999.99">
</div>
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
</div>
</div>
<div class="row form-group">
<div class="col-lg-12 col-md-12 form-group">                  
<label for="inputNewPassword">Remarks</label>
<input type="text" name="remarks"class="form-control" id="inputNewPassword" placeholder="Remark">
</div>
</div>

<div class="form-group text-right">
<button type="submit" class="templatemo-blue-button">SUBMIT</button>
</div> 
</form>
</div>


</div>
</div>