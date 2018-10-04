

<script src="php/content/content7/content7.js?v=2.0"></script>
<script src="php/content/content7/subcontent72.js?v=1.0"></script>
<script  src="php/content/content7/validation.js?v=3.0"></script>

<div id="temp"></div>

<div class="templatemo-content-container">
    <div class="templatemo-content-widget white-bg">
        <form action="php/content/content5/details.php" name="reports_article_finance" onsubmit="return form_verify(1)" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
        <div class="row form-group">
<div class="col-lg-6 col-md-6 form-group">         
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="condition1" id="r2" value="21" onchange="getUsers()">
<label for="r2" class="font-weight-400"><span></span>Inprogress</label>
</div>         
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="condition1" id="r1" value="20" checked onchange="getUsers()">
<label for="r1" class="font-weight-400"><span></span>Completed</label>
</div><!--
<div class="margin-right-15 templatemo-inline-block">
<input type="radio" name="condition1" id="r3" value="22" checked onchange="getUsers()">
<label for="r3" class="font-weight-400"><span></span>Over Due</label>
</div>        -->     
</div>
<div class="col-lg-6 col-md-6 form-group">                                   
</div>
</div>
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
    <th>??</th>
    <th>??</th>
    <th>??</th>
    <th>??</th>
    <th>??</th>
  </tr>
  <tfoot>
    <tr>
      <th id="total" colspan="6" style="text-align:center">DATA WILL BE LOADED HERE</th>
      <!--<td  colspan="6" ></td>-->
    </tr>
   </tfoot>
</table>
</div>
</div>
<hr>
        </form>
    </div>
</div>

<script>
    getUsers()
</script>