<?php
    $ref_num = $_POST['refer_num'];
    $customer_id = $_POST['username'];
    $transaction_id = $_POST['transaction_id'];
    $due_date = $_POST['due_date'];
    $amount_paid = $_POST['amount'];
    $date = $_POST['today_date'];
    $penality = $_POST['penality'];

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();

    $alert = '"'.'TRANSACTION COMPLETE.'.'"';
    $_SESSION['req_script']="<script>
    $(document).ready(function(){
        setTimeout(function(){
            document.getElementById('additional').innerHTML = 'sidemenu(10);setTimeout(function(){\
                alert(".$alert.");},200);';
        },180);
        console.log(".$alert.");
    });
    </script>";
    
    echo "<script>         window.top.location = '../../../mlf_home.php';     </script>";
            die();
    

?>