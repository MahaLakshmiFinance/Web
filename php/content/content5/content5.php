<?php
  session_start();
  echo "<script>
  setTimeout(function(){
    document.getElementById('hello').innerHTML = '".$_SESSION['username']." ';
  },20);
  </script>";
?>

<div class="templatemo-content col-1 light-gray-bg">
  <div class="templatemo-top-nav-container-1">
    <div class="row">
      <nav class="templatemo-top-nav col-lg-12 col-md-12">
        <ul class="text-uppercase">
          <li><a href="#add" onclick="nav(51)"><font style="color:  black">EMPLOYEE DETAILS</font></a></li>
          <li><a href="#edit" onclick="nav(52)"><font style="color: black">EXPENSE DETAILS</font></a></li>
          <li><a href="#delete" onclick="nav(53)"><font style="color: black">SALARY DETAILS</font></a></li>
        </ul> 
        <div align="right"style='font-size:20px'>Hello, <b style='font-size:20px'id="hello"></b></div>
      </nav> 
    </div>
    <div id="subcontent">
      <script>
        $('#subcontent').load('php/content/content5/subcontent51.php');
      </script>
    </div>
  </div>
</div>