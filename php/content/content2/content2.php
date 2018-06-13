<?php
  session_start();
  echo "<script>
  setTimeout(function(){
    document.getElementById('hello').innerHTML = '".$_SESSION['username']." ';
  },20);
  </script>";
    if(!isset($_SESSION['role'])){
        session_unset();
        session_destroy();
        echo "<script>         window.top.location = 'index.php';     </script>";
                die();
      }
?>

<script src="php/content/content2/content2.js"></script>

<div class="templatemo-content col-1 light-gray-bg">
  <div class="templatemo-top-nav-container-1">
    <div class="row">
      <nav class="templatemo-top-nav col-lg-12 col-md-12">
        <ul class="text-uppercase">
          <li><a href="#articles_add" onclick="nav(21)"><font style="color:  black">ARTICLES</font></a></li>
        </ul>  
        <div align="right"style='font-size:20px'>Hello, <b style='font-size:20px'id="hello"></b></div>
      </nav> 
    </div>

    <div id="subcontent">
      <script>
        $(function(){
          $('#subcontent').load('php/content/content2/subcontent21.php');
        });
      </script>
    </div>
  </div>
</div>