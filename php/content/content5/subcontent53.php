<script src="php/content/content5/content5.js?v=1.0"></script>
<div id="temp"></div>

<div class="templatemo-content-container">
    <div class="templatemo-content-widget white-bg">
        <form action="php/content/content5/salary.php" name="expenses" onsubmit="return form_verify(3)" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Employee ID </label><br>
                    <input type="text" name="emp_id" onfocusout="emp_sal()" class="form-control" id="inputFirstName" placeholder="Employee ID">                  
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
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Current Salary</label>
                    <input disabled type="number" name="csal" class="form-control" placeholder="Rupees">                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Update Salary</label>
                    <input type="number" name="usal" class="form-control" placeholder="Rupees">                  
                </div>
            </div>
            <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">Submit</button>
            </div>
        </form>
    </div>
</div>