<?php 
  session_start();

  if(!isset($_SESSION['role'])){
    session_unset();
    session_destroy();
    echo "<script>         window.top.location = 'index.php';     </script>";
            die();
  }

  if($_SESSION['role']==1){
    echo  "<script>setTimeout(function(){ document.getElementById('final_set').style = '';},200); </script>";
	echo  "<script>setTimeout(function(){ document.forms['transaction']['today_date'].disabled = false;},1200); </script>";

  }

?>

<script src="php/content/content10/content10.js?t=1531227893031"></script>
<script src="php/content/content10/validation.js?t=1531227893031"></script>

<div id="temp"></div>

<div class="templatemo-content-container">
  <div class="templatemo-content-widget white-bg">
    <form action="php/content/content10/transaction.php" onsubmit="return check()" name="transaction" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
      <div class="row form-group">
      <div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Customer ID</label><br>

<input type="text"onfocusout="user()" class="form-control" name="username" id="inputFirstName" placeholder="Aadhar / Mobile Number">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Type of Finance</label><br>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="finance_type" id="r1" value="1" onchange="getFinanceRefer()">
<label for="r1" class="font-weight-400"><span></span>Article</label>
</div>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="finance_type" id="r2" value="2" onchange="getFinanceRefer()">
<label for="r2" class="font-weight-400"><span></span>Cash</label>
</div>                
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
        
      <div class="col-lg-12 col-md-6 form-group">                  
          <label for="inputUsername">Reference</label>
          <select class="form-control" name="refer_num" onfocusout="getTransactionDetails()"></select>                
        </div>
        </div>
      <hr>
      <div class="row form-group" id="article1" style="display:none">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Article ID</label>
                    <input disabled type="text" name="id" class="form-control" id="inputEmail" placeholder="ID">                  
                </div> 
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Type</label>
                    <select disabled  class="form-control" name="item_type">
                        <option value="">SELECT</option>
                        <option value="RF">Refrigerator ( RF )</option>
                        <option value="TV">Television ( TV )</option>
                        <option value="AC">Air Conditioner ( AC )</option>
                        <option value="WM">Washing Machine ( WM )</option>
                    </select>
                </div>          
            
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputUsername">Article_Model</label>
                    <input disabled type="text" class="form-control" name="model" placeholder="Article Name">                  
                </div>
            
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Article Cost</label>
                    <input  disabled type="Number" class="form-control" name="cost" placeholder="In Rupees">
               </div>
              </div>
              <div  class="row form-group" >
              <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Finance Reference</label>
                    <input  disabled type="Number" class="form-control" name="finace_ref" placeholder="Article Bill No.">
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Issued Amount</label>
                    <input  disabled type="Number" class="form-control" name="issued_amount" placeholder="Article Bill No.">
                </div>

                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Issued Date ( YYYY-MM-DD )</label>
                    <input type="text" disabled name="issue_date" class="form-control" placeholder="YYYY-MM-DD">
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Total EMIs</label>
                    <input  disabled type="Number" class="form-control" name="emis" placeholder="Article Bill No.">
                </div>

                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Installment Amount</label>
                    <input type="text" disabled name="installment" class="form-control" placeholder="YYYY-MM-DD">
                </div>
      </div>
      <hr>
      <div class="row form-group">
      <div class="col-lg-12 col-md-6 form-group">
        <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
tfoot {
    background-color: #2f435c;
    color:white;
}
</style>

<table id="table_transactions">
  <tr>
    <th>Transaction Id</th>
    <th>Receipt Id</th>
    <th>Due Date</th>
    <th>Due Amount</th>
    <th>Penality Days</th>
    <th>Penality Amount</th>
    <th>Due Amount Paid</th>
    <th>Penality Amount Paid</th>
    <th>Transaction Date</th>
  </tr>
  <tfoot>
    <tr>
      <th id="total" colspan="3">Overall Details</th>
      <td  colspan="6" ></td>
    </tr>
   </tfoot>
</table>
</div>
</div>
<hr>
<div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputNewPassword">Transaction Id</label>
          <input disabled type="text" class="form-control" placeholde="year_serial" name="transaction_id">
          <script>gettransactionid()</script>
        </div>
        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputNewPassword">Receipt Id</label>
          <input type="number" class="form-control" placeholder="Receipt Number" name="receipt_id">
        </div>
        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputUsername">Amount Received So Far</label>
          <input name="due_amnt_total" class="form-control" value="0" disabled>          
        </div>     
      
<div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputUsername">Due Date (YYYY/MM/DD)</label>
          <select name="due_num" id="due_date" class="form-control" onfocusout="getInstallmentDetails()"> <select>    
          <input name="due_dat" id="due_dat" style="display:none">
        </div>
        
        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputNewPassword">Date of Pay (YYYY-MM-DD)</label>
          <input disabled type="text" oninput="penalitydays()" class="form-control" name="today_date" placeholder="YYYY-MM-DD" required 
pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))">
          <script> document.forms['transaction']['today_date'].value = getTheDate()</script>
        </div>
        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputEmail">Penalised Days</label>
          <input type="Number" disabled value="0" name="penality_days"class="form-control"placeholder="Penality Received">                  
        </div>
        </div>

        <div class="row form-group">


        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputUsername">Amount to be Paid</label>
<script>
	function changeInstallment(){
	document.forms["transaction"]["d_amount"].disabled=false;

	var abc = document.forms["transaction"]["d_amount"].value

	if(abc%10<=5 && abc%10!=0){
		console.log(abc)
		var x = abc/10;
		console.log(x)
		x = parseInt(x)*10;
		x +=5;
		abc = x;
	}
	else if(abc%10!=0){
	var x = abc/100.00;
	x = x+0.1;
	x*=10;
	x = parseInt(x)*10;
	abc= x;
	
	}
document.forms["transaction"]["d_amount"].value = abc
document.forms["transaction"]["d_amount"].disabled = true
}

</script>
          <input type="Number" disabled value="0" name="d_amount" onchange="changeInstallment()" class="form-control" placeholder="Amount Received">                  
        </div>  
        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputUsername">Amount Paid</label>
          <input type="Number"value="0" name="amount" class="form-control" placeholder="Amount Received">                  
        </div>
        <div class="col-lg-6 col-md-6 form-group">                  
          <div class="templatemo-block margin-bottom-5">
            <input type="checkbox" name="ispen" id="ispenlity" value="1" onchange="addpen()"> 
            <label for="ispenlity" class="font-weight-400"><span></span>Add Penality</label> 
          </div>
        </div>
        </div>
        <div class="row form-group" id="penality_group" style="display:none">


        <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Penality Rate</label>
                    <select class="form-control" name="penality_rate" onfocusout="ispenality()">
                    <option value="">SELECT</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="105">105</option>
              </select>
          </div>
    
        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputEmail">Penality Amount to be Paid</label>
          <input type="Number" disabled value="0" name="d_penality"class="form-control"placeholder="Penality Received">                  
        </div>   
    
        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputEmail">Penality Amount Paid</label>
          <input type="Number" value="0" name="penality"class="form-control"placeholder="Penality Received">                  
        </div> 
      </div>
      <div class="row form-group"  style="display:none">
      <div class="col-lg-6 col-md-6 form-group" >                  
          <div class="templatemo-block margin-bottom-5">
            <input type="checkbox" name="status" id="status" value="CLOSED"> 
            <label for="status" class="font-weight-400"><span></span>Due Complete</label> 
          </div>
        </div>
        <div class="col-lg-6 col-md-6 form-group" id="final_set">                  
          <div class="templatemo-block margin-bottom-5">
            <input type="checkbox" name="emailOptions" id="final" value="1"> 
            <label for="final" class="font-weight-400"><span></span>Final Settlement</label> 
          </div>
        </div>
      </div>
      <div class="form-group text-right">
<button type="submit" class="templatemo-blue-button">SUBMIT</button>
</div>
    </form>
  </div>
</div>