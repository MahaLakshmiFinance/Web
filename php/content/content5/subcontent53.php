<script src="php/content/content5/content5.js"></script>

<div class="templatemo-content-container">
    <div class="templatemo-content-widget white-bg">
        <form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">Employee ID </label><br>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="Employee ID">                  
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
                            <th>Date</th>
                            <th>Salary</th>
                            <th>Increment Amount</th>
                            <th>Current Salary</th>
                        </tr>
                    </table>
                </div>
                <hr>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <div class="templatemo-block margin-bottom-5">
                        <input type="checkbox" name="incrememnt" id="incrememnt" value="1" onchange="addpen()"> 
                        <label for="incrememnt" class="font-weight-400"><span></span>Incrememnt</label> 
                    </div>
                </div>
                <div class="row form-group" id="penality_group" style="display:none">
                    <div class="col-lg-6 col-md-6 form-group">                  
                        <label for="inputEmail">Increment Amount</label>
                        <input type="Number" disabled value="0" name="d_penality"class="form-control"placeholder="Penality Received">                  
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>