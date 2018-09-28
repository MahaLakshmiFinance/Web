

<script src="php/content/content7/content7.js?v=3.0"></script>
<script  src="php/content/content7/validation.js?v=3.0"></script>

<div id="temp"></div>

<div class="templatemo-content-container">
    <div class="templatemo-content-widget white-bg">
        <form action="php/content/content7/details.php" name="expenses" onsubmit="return form_verify(1)" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
        <div class="row form-group">
        <div class="col-lg-6 col-md-6 form-group">                  
            <label for="inputFirstName">Available Funds</label><br>

            <input type="text"onfocusout="user()" class="form-control" name="avail_funds" disabled placeholder="99,99,99,999">                  
            </div>
            <div class="col-lg-6 col-md-6 form-group">                  
            <label for="inputFirstName">Funds Resided at People</label><br>

            <input type="text"onfocusout="user()" class="form-control" name="resided_funds" disabled placeholder="99,99,99,999">                  
        </div>
        </div>
        <div class="row form-group">
        <div class="col-lg-8 col-md-6 form-group">                  
            <label for="inputFirstName">Add Funds</label><br>

            <input type="number"onfocusout="user()" class="form-control" name="username" id="inputFirstName" placeholder="99,99,99,999">                  
            <button type="submit" class="templatemo-blue-button">ADD</button>
        </div>
        </div>
        <script>
            getBalance();
            getPendingFunds();
        </script>
        </form>
    </div>
</div>