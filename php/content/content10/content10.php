<?php
  session_start();
  if(isset($_SESSION['username']))
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
      echo "<div id='scrpts'></div>";
      echo "<script>
      var aef = 'php/content/content10/content10.js?v='
      dte(aef)
      aef = 'php/content/content10/validation.js?v='
      dte(aef)
    function dte(abc){
      var abc = aef;
      var n = new Date().getTime();
      abc += n;
      var scripta = document.createElement('script');
    
      console.log(scripta);
    
      scripta.src = ''+abc+'';
    
      var main = document.getElementById('scrpts');
    
      main.appendChild(scripta);
    }
    
    </script>";
?>

<div class="templatemo-content col-1 light-gray-bg">
  <div class="templatemo-top-nav-container-1">
    <div class="row">
      <nav class="templatemo-top-nav col-lg-12 col-md-12">
        <ul class="text-uppercase">
          <li><a href="#transaction" onclick="nav(22)"><font style="color: black">TRANSACTIONS</font></a></li>  
        </ul>  
        <div align="right"style='font-size:20px'>Hello, <b style='font-size:20px'id="hello"></b></div>
      </nav> 
    </div>

    <div id="subcontent">
      <script>
        $(function(){
          $('#subcontent').load('php/content/content10/subcontent101.php');
        });
      </script>
    </div>
  </div>
</div>