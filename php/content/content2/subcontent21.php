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
		echo "<script>setTimeout(function(){document.forms['article_finance']['date'].disabled=false},1500);</script>";

}
?>
<script src="php/content/content2/content2.js"></script>

<script src="php/content/content2/validation.js"></script>

<div id="temp"></div>

<div class="templatemo-content-container" id="subcontent21">
    <div class="templatemo-content-widget white-bg">
        <form action="php/content/content2/article.php" name="article_finance" onsubmit="return form_verify()" class="templatemo-login-form" method="post" enctype="multipart/form-data">
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
                    <label for="inputConfirmNewPassword">Article Bill Number</label>
                    <input type="text" name="ref_no" class="form-control" id="inputConfirmNewPassword" placeholder="WHYNOT Bill No.">
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Article ID</label>
                    <input type="text" name="article_id" class="form-control" id="inputEmail" placeholder="ID">                  
                </div> 
            </div>

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Type</label>
                    <select  class="form-control" name="article_type">
                        <option value="">SELECT</option>
                        <option value="RF">Refrigerator ( RF )</option>
                        <option value="TV">Television ( TV )</option>
                        <option value="AC">Air Conditioner ( AC )</option>
                        <option value="WM">Washing Machine ( WM )</option>
                    </select>
                </div>          
            
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputUsername">Article_Model</label>
                    <input type="text" name="article_mod" class="form-control" id="model" placeholder="Samsung 49M5100">                  
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Article Cost</label>
                    <input type="Number" name="article_cost" class="form-control" id="a_cost" placeholder="In Rupees">
               </div>
            </div>

            <hr>

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Finance Reference Number</label>
                    <input type="number" name="article_refno" class="form-control" id="inputConfirmNewPassword" placeholder="Finance Number">
                </div>

                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Date ( YYYY-MM-DD )</label>
                    <input disabled type="text" name="date" id="date" class="form-control" placeholder="">
                    <script>document.getElementById('date').value = getTheDate()</script>
                </div>
            </div>
<script>
	function changeInstallment(){
	document.forms["article_finance"]["inst_amnt"].disabled=false;

	var abc = document.forms["article_finance"]["inst_amnt"].value

	if(abc%10<5 && abc!=0){
		console.log(abc)
		var x = abc/10;
		console.log(x)
		x = parseInt(x)*10;
		x +=5;
abc = x;
	}
else{
	var x = abc/100.00;
	x = x+0.1;
	x*=10;
	x = parseInt(x)*10;
	abc= x;
	
}
document.forms["article_finance"]["inst_amnt"].value = abc
document.forms["article_finance"]["inst_amnt"].disabled = true
}

</script>




            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputUsername">Given Amount </label>
                    <input type="Number" name="amount" onchange="getTotal()" class="form-control" id="inputUsername" placeholder="In Rupees Funded">                  
                </div>
         
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Documentation Charges</label>
                    <input type="Number" name="doc_charges" onchange="getTotal()" class="form-control" id="inputNewPassword" placeholder="processing fee">
                </div> 
            </div> 

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Rate Of Interest</label>
                    <input type="Number" name="rt_of_int" class="form-control" onchange="getTotal()"step="0.01" id="inputNewPassword" placeholder="1.5">
                </div>

                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Total Amount</label>
                    <input disabled type="Number" name="total_amount" class="form-control" id="inputConfirmNewPassword" placeholder="Interest+principle">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">EMI Scheme</label><br>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="emi_type" id="r1" onchange = "setInstScheme()" value="1">
                        <label for="r1" class="font-weight-400"><span></span>Months</label>
                    </div>

                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="emi_type" onchange = "setInstScheme()" id="r2" value="2">
                        <label for="r2" class="font-weight-400"><span></span>Amount</label>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Total EMI'S</label>
                    <input type="Number"  oninput="getInsta()" name="tot_emis" disabled class="form-control" id="inputNewPassword" placeholder="Number of Installments">
                </div>
                
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail"> Installment Amount</label>
                    <input type="Number" oninput="getEmi()" name="inst_amnt" disabled class="form-control" id="inputEmail" placeholder="Every Month Installment">                  
                </div> 
                <div class="col-lg-6 col-md-6 form-group" id="temp2" style="display:none">                  
                    <label for="inputEmail">Due Number</label>
                    <input type="Number" name="serial_num"class="form-control" onfocusout="changeInstallment()" id="inputEmail" placeholder="Every Month Installment"> 
                    <script>getSerialNumb()</script>             
                </div>                
            </div>

            <div class="form-group text-right">
                <button type="submit" name="submit" class="templatemo-blue-button">Submit</button>
            </div>
        </form>     
    </div>
</div>