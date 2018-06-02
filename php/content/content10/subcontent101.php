<script src="php/content/content10/content10.js"></script>

<div id="temp"></div>

<div class="templatemo-content-container">
  <div class="templatemo-content-widget white-bg">
    <form action="index.html" name="transaction" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
      <div class="row form-group">
      <div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Customer ID</label><br>

<input type="text"onfocusout="user()" class="form-control" name="username" id="inputFirstName" placeholder="Aadhar / Mobile Number">                  
</div>
<div class="col-lg-6 col-md-6 form-group">                  
<label for="inputFirstName">Type of Finance</label><br>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="username_type" id="r1" value="1" checked>
<label for="r1" class="font-weight-400"><span></span>Article</label>
</div>
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="username_type" id="r2" value="2">
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
          <select class="form-control"></select>                
        </div>
        </div>
      <hr>
      <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Article ID</label>
                    <input disabled type="text" class="form-control" id="inputEmail" placeholder="ID">                  
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
                    <input disabled type="Number" class="form-control" id="model" placeholder="Article Name">                  
                </div>
            
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Article Cost</label>
                    <input  disabled type="Number" class="form-control" id="a_cost" placeholder="In Rupees">
               </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Issued Amount</label>
                    <input  disabled type="Number" class="form-control" id="inputConfirmNewPassword" placeholder="Article Bill No.">
                </div>

                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Issued Date ( YYYY-MM-DD )</label>
                    <input type="text" disabled name="issue_date"id="issue_date"class="form-control" placeholder="YYYY-MM-DD">
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
</style>

<table>
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
  <td>201800001</td>
    <td>YYYY-MM-DD</td>
    <td>1000</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>YYYY-MM-DD</td>
    <td>OPEN</td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td>Germany</td>
  </tr>
  <br>
  <tfoot>
    <tr>
      <th id="total" colspan="4">Total Paid:</th>
      <td>200</td>
      <td></td>
      <td></td>
    </tr>
   </tfoot>
</table>
</div>
</div>
<hr>
<div class="row form-group">
      
      

        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputUsername">Total Interest</label>
          <input type="Number" class="form-control" id="inputUsername" placeholder="Only Interest">                  
        </div>  
    
        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputEmail">Interest Received so far</label>
          <input type="Number" class="form-control" id="inputEmail" placeholder="Total Interest/ No. of EMI">                  
        </div> 
      </div>

      <div class="row form-group">
        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputNewPassword">Due Date</label>
          <input type="date" class="form-control" id="inputNewPassword" placeholder="Door Number">
        </div>

        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputConfirmNewPassword">Installment Receiveed Date</label>
          <input type="date" class="form-control" id="inputConfirmNewPassword" placeholder="ABC Street">
        </div> 
      </div>

      <div class="row form-group">
        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputNewPassword">Penalty Days</label>
          <input type="Number" class="form-control" id="inputNewPassword" placeholder="No. of Days">
        </div>
      
        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputConfirmNewPassword">Penalty Installment Recevied Date</label>
          <input type="date" class="form-control" id="inputConfirmNewPassword" placeholder="Location">
        </div> 
      </div>

      <div class="row form-group">
        <div class="col-lg-6 col-md-6 form-group">                  
          <label for="inputNewPassword">Remark</label>
          <input type="text" class="form-control" id="inputNewPassword" placeholder="Remark">
        </div><br>
        
        <div class="col-lg-6 col-md-6 form-group">                  
          <div class="templatemo-block margin-bottom-5">
            <input type="checkbox" name="emailOptions" id="c1" value="new" checked> 
            <label for="c1" class="font-weight-400"><span></span>Final Settlement</label> 
          </div>
        </div>
        
      </div>
    </form>
  </div>
</div>