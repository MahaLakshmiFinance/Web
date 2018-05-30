<?php
  session_start();
  echo "<script>
  setTimeout(function(){
    document.getElementById('hello').innerHTML = '".$_SESSION['username']." ';
  },20);
  </script>";
  if($_SESSION['role']>2) 
  echo '<script>
  setTimeout(function(){
    document.getElementById("delete").style="display:none;"
  },100);
  </script>';
?>

<script src="php/content/content1/content1clicks.js"></script>

<div class="templatemo-content col-1 light-gray-bg">
<div class="templatemo-top-nav-container-1">
<div class="row">
<nav class="templatemo-top-nav col-lg-12 col-md-12">
<ul class="text-uppercase">
<li><a href="#new" onclick="nav(11)"><font style="color:  black">NEW</font></a></li>
<li><a href="#edit" onclick="nav(12)"><font style="color: black" >EDIT</font></a></li>
<li id="delete"><a href="#delete" onclick="nav(13)"><font style="color: black">DELETE</font></a></li>
<li><a href="#view" onclick="nav(14)"><font style="color: black">VIEW</font></a></li>

</ul> 
<div align="right"style='font-size:20px'>Hello, <b style='font-size:20px'id="hello"></b></div>
</nav> 
</div>

<div id="subcontent">
  <script>
    $(function(){
      $('#subcontent').load('php/content/content1/subcontent11.php');
    });
  </script>
</div>

</div>
</div>