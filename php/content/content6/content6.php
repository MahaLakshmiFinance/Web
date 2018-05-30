<?php
  session_start();
  echo "<script>
  setTimeout(function(){
    document.getElementById('hello').innerHTML = '".$_SESSION['username']." ';
  },20);
  </script>";
?>

<div class="templatemo-content col-1 light-gray-bg"><div class="templatemo-top-nav-container-1">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<li><a href="#exchange" onclick="nav(61)"><font style="color: black">ACCESSORIES</font></a></li>
</ul> 
<div align="right"style='font-size:20px'>Hello, <b style='font-size:20px'id="hello"></b></div> 
</nav> 
</div>

<div id="subcontent">
    <script>
        $('#subcontent').load('php/content/content6/subcontent61.php');
    </script>
</div>


</div>
</div>