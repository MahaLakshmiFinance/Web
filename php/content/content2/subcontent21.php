<script src="php/content/content2/content2.js"></script>

<div id="temp"></div>

<div class="templatemo-content-container" id="subcontent21">
    <div class="templatemo-content-widget white-bg">
        <form action="index.html" name="article_finance" class="templatemo-login-form" method="post" enctype="multipart/form-data">
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
                    <label for="inputEmail">Article ID</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="ID">                  
                </div> 
            </div>

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Type</label>
                    <select  class="form-control" name="item_type">
                        <option value="">SELECT</option>
                        <option value="RF">Refrigerator ( RF )</option>
                        <option value="TV">Television ( TV )</option>
                        <option value="AC">Air Conditioner ( AC )</option>
                        <option value="WM">Washing Machine ( WM )</option>
                    </select>
                </div>          
            
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputUsername">Article_Model</label>
                    <input type="Number" class="form-control" id="model" placeholder="Article Name">                  
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Article Cost</label>
                    <input type="Number" class="form-control" id="a_cost" placeholder="In Rupees">
               </div>
            </div>

            <hr>

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Reference Number</label>
                    <input type="Number" class="form-control" id="inputConfirmNewPassword" placeholder="Article Bill No.">
                </div>

                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Date ( YYYY-MM-DD )</label>
                    <input type="text" disabled name="date"id="date"class="form-control" placeholder="">
                    <script>document.getElementById('date').value = getTheDate()</script>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputUsername">Given Amount </label>
                    <input type="Number" class="form-control" id="inputUsername" placeholder="In Rupees Funded">                  
                </div>
         
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Documentation Charges</label>
                    <input type="Number" class="form-control" id="inputNewPassword" placeholder="processing fee">
                </div> 
            </div> 

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Rate Of Interest</label>
                    <input type="Number" class="form-control" id="inputNewPassword" placeholder="1.5">
                </div>

                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Total Amount</label>
                    <input disabled type="Number" class="form-control" id="inputConfirmNewPassword" placeholder="Interest+principle">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">EMI Scheme</label><br>
                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="emi_type" id="r1" value="1" checked>
                        <label for="r1" class="font-weight-400"><span></span>Months</label>
                    </div>

                    <div class="margin-right-15 templatemo-inline-block">
                        <input type="radio" name="emi_type" id="r2" value="2">
                        <label for="r2" class="font-weight-400"><span></span>Amount</label>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Total EMI'S</label>
                    <input type="Number" class="form-control" id="inputNewPassword" placeholder="Number of Installments">
                </div>
                
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail"> Installment Amount</label>
                    <input type="Number" class="form-control" id="inputEmail" placeholder="Every Month Installment">                  
                </div>                 
            </div>

            <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">Submit</button>
            </div>
        </form>     
    </div>
</div>