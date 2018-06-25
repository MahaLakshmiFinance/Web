<?php
    session_start();

    $emp_id = $_POST['emp_id'];
    $cstmr_id = $_POST['cstmr_id'];
    $expense = $_POST['expense'];
    $col_amt = $_POST['col_amt'];
    $remarks = $_POST['remarks'];
   
    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->connect();

    $result = $dbobj->search(' mlf_emp_expenses','emp_id','emp_id','"'.$emp_id.'"');

    $row = $result->fetch_assoc();

    $dbobj->insert('mlf_emp_expenses','(emp_id,cstmr_id,expense,amt_collected,remarks)','("'.$emp_id.'","'.$cstmr_id.'","'.$expense.'","'.$col_amt.'","'.$remarks.'")');

    $alert = '"'.'SUCESSFULLY UPDATED THE EXPENSE DETAILS'.'"';
    $_SESSION['req_script']="<script>
        $(document).ready(function(){
            setTimeout(function(){
                document.getElementById('additional').innerHTML = 'sidemenu(5);setTimeout(function(){\
                    nav(52);alert(".$alert.");},200);';
            },180);
            console.log(".$alert.");
        });
        </script>";
    
    echo "<script>         window.top.location = '../../../mlf_home.php';     </script>";
    die();

?>