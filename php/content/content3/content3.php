<?php
  session_start();
  echo "<script>
  setTimeout(function(){
    document.getElementById('hello').innerHTML = '".$_SESSION['username']." ';
  },20);
  </script>";
?>

<script src="php/content/content3/content3.js"></script>

<div class="templatemo-content col-1 light-gray-bg">
  <div class="templatemo-top-nav-container-1">
    <div class="row">
      <nav class="templatemo-top-nav col-lg-12 col-md-12">
        <ul class="text-uppercase">
          <li><a href="#cash_finance" onclick="nav(31)"><font style="color:  black">FINANCE</font></a></li>
        </ul>  
        <div align="right"style='font-size:20px'>Hello, <b style='font-size:20px'id="hello"></b></div>
      </nav> 
    </div>

    <div id="subcontent">
      <script>
        $(function(){
          $('#subcontent').load('php/content/content3/subcontent31.php');
        });
      </script>
    </div>
  </div>
</div>