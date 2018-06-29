<?php
    session_start();

    $emp_id = $_POST['emp_id'];
    $usal = $_POST['usal'];
       
    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->connect();

    $result = $dbobj->search('mlf_emp_info','username','username','"'.$emp_id.'"');

    $row = $result->fetch_assoc();

    if($row){
        $dbobj->update('mlf_emp_info','salary','"'.$usal.'"','username','"'.$emp_id.'"');
    }
        
    $alert = '"'.'SUCESSFULLY UPDATED THE SALARY DETAILS'.'"';
    $_SESSION['req_script']="<script>
        $(document).ready(function(){
            setTimeout(function(){
                document.getElementById('additional').innerHTML = 'sidemenu(5);setTimeout(function(){\
                    alert(".$alert.");},180);'});
            console.log(".$alert.");
        });
        </script>";
    
    echo "<script>         window.top.location = '../../../mlf_home.php';     </script>";
    die();

?>