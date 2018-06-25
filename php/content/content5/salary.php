<?php
    session_start();

    $emp_id = $_POST['emp_id'];
    $inc_amt = $_POST['increment_amt'];
    $usal = $_POST['usal'];
       
    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->connect();

    $result = $dbobj->search('mlf_emp_info','username','username','"'.$emp_id.'"');

    $row = $result->fetch_assoc();

    if($row){
        $dbobj->update('mlf_emp_info','salary','"'.$sal.'"','username','"'.$emp_id.'"');
    }
        
    $alert = '"'.'SUCESSFULLY UPDATED THE EXPENSE DETAILS'.'"';
    $_SESSION['req_script']="<script>
        $(document).ready(function(){
            setTimeout(function(){
                document.getElementById('additional').innerHTML = 'sidemenu(5);setTimeout(function(){\
                    nav(53);alert(".$alert.");},200);';
            },180);
            console.log(".$alert.");
        });
        </script>";
    
    echo "<script>         window.top.location = '../../../mlf_home.php';     </script>";
    die();

?>