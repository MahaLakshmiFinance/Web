<script src="php/content/content5/content5.js"></script>

<div class="templatemo-content-container">
    <div class="templatemo-content-widget white-bg">
        <form action="" class="templatemo-login-form" name="expenses" method="post" enctype="multipart/form-data">
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Employee Id</label><br>
                    <input  type="text" class="form-control" placeholder="Id">                  
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Employee Name</label>
                    <input disabled type="text" class="form-control" placeholder="Name">                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Contact Number</label>
                    <input disabled type="tel" class="form-control" placeholder="+91">                  
                </div> 
            </div>
            <hr>
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
                    <label for="inputNewPassword">Expense</label>
                    <input type="text" class="form-control" id="inputNewPassword" placeholder="">
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">Remark</label>
                    <input type="text" class="form-control" id="inputNewPassword" placeholder="">
                </div>
            </div>
        </form>
    </div>
</div>
