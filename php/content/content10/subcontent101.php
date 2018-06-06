<?php 
  session_start();

  if($_SESSION['role']==1){
    echo  "<script>setTimeout(function(){ document.getElementById('final_set').style = '';},200); </script>";
  }

?>

<script src="php/content/content10/content10.js"></script>
<script src="php/content/content10/validation.js"></script>

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
          <label for="inputUsername">Finance Reference</label>
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
    <th>Due Number</th>
    <th>Due Date</th>
    <th>Due Amount</th>
    <th>Penality Days</th>
    <th>Penality Amount</th>
    <th>Amount Paid</th>
    <th>Last Transaction</th>
    <th>Status</th>
  </tr>
  <tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
  <tfoot>
    <tr>
      <th id="total" colspan="2">Overall Details</th>
      <td  colspan="6" ></td>
    </tr>
   </tfoot>
</table>
</div>
</div>
<hr>
<div class="row form-group">
      
<div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputUsername">Due Date</label>
          <select name="due_num" class="form-control" onfocusout="getInstallmentDetails()">  <select>                
        </div>
        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputNewPassword">Date</label>
          <input disabled type="text" class="form-control" name="today_date">
          <script> document.forms['transaction']['today_date'].value = getTheDate()</script>
        </div>

        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputUsername">Amount Receving</label>
          <input type="Number"value="0" name="amount" class="form-control" placeholder="Amount Received">                  
        </div>  
    
        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputEmail">Penality Receving</label>
          <input type="Number" value="0" name="penality"class="form-control"placeholder="Penality Received">                  
        </div> 
      </div>

      <div class="row form-group"  style="display:none">
      <div class="col-lg-6 col-md-6 form-group">                  
          <div class="templatemo-block margin-bottom-5">
            <input type="checkbox" name="status" id="status" value="CLOSED"> 
            <label for="status" class="font-weight-400"><span></span>Due Complete</label> 
          </div>
        </div>
        <div class="col-lg-6 col-md-6 form-group" style="display:none"id="final_set">                  
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