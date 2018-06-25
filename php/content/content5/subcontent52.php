<script src="php/content/content5/content5.js"></script>
<script>function form_verify(){

var emp_id = document.forms['expenses']['emp_id'];
if(emp_id.value == ""){
alert('PLEASE ENTER EMPLOYEE ID.');
emp_id.focus()
return false;
}

var cstmr_id = document.forms['expenses']['cstmr_id']
if(cstmr_id.value == ""){
alert('PLEASE ENTER CUSTOMER ID.');
cstmr_id.focus()
return false;
}

var expense = document.forms['expenses']['expense']
if(expense.value == ""){
alert('PLEASE ENTER EXPENSE AMOUNT.');
expense.focus()
return false;
}

var col_amt = document.forms['expenses']['col_amt']
if(col_amt.value == ""){
alert('PLEASE ENTER COLLECTED AMOUNT.');
col_amt.focus()
return false;
}

var remarks = document.forms['expenses']['remarks']
if(remarks.value == ""){
alert('PLEASE ENTER REMARKS');
remarks.focus()
return false;
}

}</script>
<div id="temp"></div>
<div class="templatemo-content-container">
    <div class="templatemo-content-widget white-bg">
        <form action="php/content/content5/expenses.php" class="templatemo-login-form" name="expenses" onsubmit="return form_verify()" method="POST" enctype="multipart/form-data">
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Employee Id</label><br>
                    <input  type="text" name="emp_id" onfocusout="emp()" class="form-control" placeholder="Id">                  
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Employee Name</label>
                    <input disabled type="text" name="emp_name" class="form-control" placeholder="Name">                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Contact Number</label>
                    <input disabled type="tel" name="emp_cntact_num" class="form-control" placeholder="+91">                  
                </div> 
            </div>
            <hr>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Customer ID</label><br>
                    <input type="text" name="cstmr_id" class="form-control" id="inputFirstName" onfocusout="cstmr()" placeholder="Aadhar / Phone Number">                  
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
                    <label for="inputNewPassword">Expense</label>
                    <input type="number" class="form-control" name="expense" id="inputNewPassword" placeholder="Rupees">
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Collected</label>
                    <input type="number" class="form-control" name="col_amt" id="inputNewPassword" placeholder="Rupees">
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Remarks</label>
                    <input type="text" class="form-control" name="remarks" id="inputNewPassword" placeholder="">
                </div>
            </div>
            <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">Submit</button>
            </div>
        </form>
    </div>
</div>
