<script src="php/content/content5/content5.js"></script>

<div class="templatemo-content-container">
    <div class="templatemo-content-widget white-bg">
        <form action="index.html" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
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
                    <label for="inputUsername">Location </label>
                    <select class="form-control" name="services">
                        <option value="">Select</option>
                        <option value="CF">Palakollu</option>
                        <option value="BBI">Taderu</option>
                        <option value="ACC">Narsapuram</option>
                    </select >
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12 col-md-6 form-group">
                    <p><label for="inputFirstName">Services</label></p>
                </div>
                <div class="col-lg-2 col-md-2 form-group">
                    <div class="templatemo-block margin-bottom-5">
                        <input type="checkbox" name="customer" id="customer" value="1"> 
                        <label for="customer" class="font-weight-400"><span></span>Customer</label>
                    </div>
                    <div class="templatemo-block margin-bottom-5">
                        <input type="checkbox" name="article_finace" id="article_finace" value="2">
                        <label for="article_finace" class="font-weight-400"><span></span>Article Finace</label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 form-group">
                    <div class="templatemo-block margin-bottom-5">
                        <input type="checkbox" name="cash_finance" id="cash_finance" value="3"> 
                        <label for="cash_finance" class="font-weight-400"><span></span>Cash Finance</label>
                    </div>
                    <div class="templatemo-block margin-bottom-5">
                        <input type="checkbox" name="old_items" id="old_items" value="4"> 
                        <label for="old_items" class="font-weight-400"><span></span>Buy Back Items</label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 form-group">
                    <div class="templatemo-block margin-bottom-5">
                        <input type="checkbox" name="accessories" id="accessories" value="6"> 
                        <label for="accessories" class="font-weight-400"><span></span>Accessories</label>
                    </div>
                    <div class="templatemo-block margin-bottom-5">
                        <input type="checkbox" name="transactions" id="transactions" value="10"> 
                        <label for="transactions" class="font-weight-400"><span></span>Transactions</label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>