<?php
session_start();
    if(!isset($_SESSION['role'])){
        session_unset();
        session_destroy();
        echo "<script>         window.top.location = 'index.php';     </script>";
                die();
      }
else{
	if($_SESSION['role']==1)
		echo "<script>setTimeout(function(){document.forms['cash_finance']['date'].disabled=false},1500);</script>";

}

?>
<script src="php/content/content3/content3.js"></script>

<script src="php/content/content3/validation.js"></script>

<div id="temp"></div>

<div class="templatemo-content-container">
    <div class="templatemo-content-widget white-bg">
        <form action="php/content/content3/cash.php" name="cash_finance" onsubmit="return form_verify()" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Customer ID</label><br>
                    <input type="text" name="username" class="form-control" id="inputFirstName" onfocusout="user()" placeholder="Aadhar / Phone Number">                  
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Customer Name</label>
                    <input disabled type="text" name="cstmr_name" class="form-control" id="inputFirstName" placeholder="Customer Name">                  
                </div>

                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Contact Number</label>
                    <input disabled type="tel" name="cntact_num" class="form-control" id="inputLastName" placeholder="+91">                  
                </div> 
            </div>

            <hr>

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Reference Number</label>
                    <input type="number" disabled name="article_refno" class="form-control" id="inputConfirmNewPassword" placeholder="Article Bill No.">
                    <script> getRefNumb()</script>
                </div>

                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Date ( YYYY-MM-DD )</label>
                    <input type="text" disabled name="date" id="date" class="form-control" placeholder="">
                    <script>document.getElementById('date').value = getTheDate()</script>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputUsername">Given Amount </label>
                    <input type="Number" name="amount" onchange="getTotal()" class="form-control" id="inputUsername" placeholder="In Rupees Funded">                  
                </div>
         
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Finance Reference Number</label>
                    <input type="number" name="refno" class="form-control" id="inputConfirmNewPassword" placeholder="Article Bill No.">
                </div>
            </div> 

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Rate Of Interest</label>
                    <input type="Number" name="rt_of_int" class="form-control" onchange="getTotal()" id="inputNewPassword" placeholder="1.5">
                </div>

                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Interest Amount</label>
                    <input disabled type="Number" name="total_amount" class="form-control" id="inputConfirmNewPassword" placeholder="Interest">
                </div>
            </div>
            <div class="form-group text-right">
                <button type="submit" name="submit" class="templatemo-blue-button">Submit</button>
            </div>
        </form>     
    </div>
</div>