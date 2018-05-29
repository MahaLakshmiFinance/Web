<div class="templatemo-content-container">
<div class="templatemo-content-widget white-bg">
<div id="temp"></div>
<form action="" name="exchange" class="templatemo-login-form" method="post" enctype="multipart/form-data">

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="username_type" id="r1" value="1" checked>
<label for="r1" class="font-weight-400"><span></span>Purchase</label>
</div>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="username_type" id="r2" value="2">
<label for="r2" class="font-weight-400"><span></span>Sell</label>
</div>                
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">User ID</label><br>

<input type="text" class="form-control" name="username" id="inputFirstName" placeholder="Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Customer Name</label>
<input type="text" onfocus="user()" class="form-control" name="cstmr_name" placeholder="Name">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputLastName">Contact Number</label>
<input type="tel" name="cntact_num"class="form-control" id="inputLastName" placeholder="+91">                  
</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputEmail">Serial Number</label>
<input type="Number" class="form-control" name="serial_num" placeholder="Serial number">
<script>serialNumb();</script>                  
</div> 
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Condition</label><br>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="item_cond" id="r1" value="1" >
<label for="r1" class="font-weight-400"><span></span>Working</label>
</div>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="item_cond" id="r2" value="0" >
<label for="r2" class="font-weight-400"><span></span>Not Working</label>
</div>
</div>
<div class="col-lg-6 col-md-6 form-group">                  

</div> 
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Type</label>
<select  class="form-control">
  <option value="1">Refrigerator</option>
  <option value="2">Television</option>
  <option value="3">Air Conditioner</option>
  <option value="4">Washing Machine</option>
</select>          
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputUsername">Model</label>
<input type="text" class="form-control" id="inputUsername" placeholder="Name of the Item">                  
</div>
</div>

<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Date</label>
<input type="text" disabled id="date"class="form-control" placeholder="">
<script>document.getElementById('date').value = getTheDate();</script>
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputNewPassword">Amount</label>
<input type="Number" class="form-control" placeholder="Purchase rate">
</div>
</div>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
</div>
</div>
<div class="row form-group">
<div class="col-lg-12 col-md-12 form-group">                  
<label for="inputNewPassword">Remark</label>
<input type="text" class="form-control" id="inputNewPassword" placeholder="Remark">
</div>
</div>

<div class="form-group text-right">
<button type="submit" class="templatemo-blue-button">SUBMIT</button>
</div> 
</form>
</div>


</div>
</div>