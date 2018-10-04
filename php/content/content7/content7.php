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
          <!--<li><a href="#add" onclick="nav(71)"><font style="color:  black">STATSTICS</font></a></li>-->
          <li><a href="#add" onclick="nav(72)"><font style="color:  black">ARTICLE FINANCE</font></a></li>
          <li><a href="#add" onclick="nav(73)"><font style="color:  black">CASH FINANCE</font></a></li>
        </ul> 
        <div align="right"style='font-size:20px'>Hello, <b style='font-size:20px'id="hello"></b></div>
      </nav> 
    </div>
    <div id="subcontent">
      <script>
        $('#subcontent').load('php/content/content7/subcontent72.php');
      </script>
    </div>
  </div>
</div>