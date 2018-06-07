<?php
session_start();
    $ref_num = $_POST['refer_num'];
    $customer_id = $_POST['username'];
    $transaction_id = $_POST['transaction_id'];
    $due_date = $_POST['due_date'];
    $due_amount = $_POST['d_amount'];
    $amount_paid = $_POST['amount'];
    $date = $_POST['today_date'];
    $total_due_paid = $_POST['due_amnt_total'];
    $penality_days = 0;
    $penality = 0;
    $penality_paid = 0;
    if(isset($_POST['ispen'])){
        $penality_days = $_POST['penality_days'];
        $penality = $_POST['d_penality'];
        $penality_paid = $_POST['penality'];
    }
    $total_due_paid = (int)$total_due_paid+(int)$amount_paid;
    echo $due_date;
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();

    $columnNames = "(`customer_id`, `authorised_by`, `reference_number`, `transaction_id`, `due_date`, `due_amount`, `penality_days`, `penality_amount`, `due_amount_paid`, `penality_amount_paid`, `total_due_amount_paid`, `transaction_date`)";
    $VALUES = '("'.$customer_id.'","'.$_SESSION['username'].'","'.$ref_num.'","'.$transaction_id.'","'.$due_date.'","'.$due_amount.'","'.$penality_days.'","'.$penality.'","'.$amount_paid.'","'.$penality_paid.'","'.$total_due_paid.'","'.$date.'")';

    $dbobj->insert('mlf_transactions',$columnNames,$VALUES);

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