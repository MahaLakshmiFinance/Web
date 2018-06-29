<?php
  session_start();
  echo "<script>
  setTimeout(function(){
    document.getElementById('hello').innerHTML = '".$_SESSION['username']." ';
  },20);
  </script>";
?>

<div class="templatemo-content-container">
<div class="templatemo-content-widget white-bg">


<h1 align="center"> SERVICE WILL BE AVAILABLE SOON...</h1>

</div>
</div>
