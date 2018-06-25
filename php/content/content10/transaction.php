<?php
session_start();
    $ref_num = $_POST['refer_num'];
    $customer_id = $_POST['username'];
    $transaction_id = $_POST['transaction_id'];
    echo $transaction_id;
    $due_date = $_POST['due_dat'];
    $due_amount = $_POST['d_amount'];
    $amount_paid = $_POST['amount'];
    $date = $_POST['today_date'];
    $total_due_paid = $_POST['due_amnt_total'];
    $receipt_id = $_POST['receipt_id'];
    $penality_days = $_POST['penality_days'];
    $penality = 0;
    $penality_paid = 0;
    if(isset($_POST['ispen'])){
        $penality = $_POST['d_penality'];
        $penality_paid = $_POST['penality'];
    }
    $total_due_paid = (int)$total_due_paid+(int)$amount_paid;
    $finance_type = $_POST['finance_type'];
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();

    $x = 0;

    if($finance_type==2){

        if((int)$amount_paid>1500){
            $x = (int)$amount_paid-1500;
        }

        $total_due_paid = (int)$total_due_paid+(int)$amount_paid-$x;

    }

    $columnNames = "(`customer_id`, `authorised_by`, `reference_number`, `transaction_id`, `due_date`, `due_amount`, `penality_days`, `penality_amount`, `due_amount_paid`, `penality_amount_paid`, `total_due_amount_paid`, `transaction_date`, `receipt_id`)";
    $VALUES = '("'.$customer_id.'","'.$_SESSION['username'].'","'.$ref_num.'","'.$transaction_id.'","'.$due_date.'","'.$due_amount.'","'.$penality_days.'","'.$penality.'","'.$amount_paid.'","'.$penality_paid.'","'.$total_due_paid.'","'.$date.'", "'.$receipt_id.'")';

    $dbobj->insert('mlf_transactions',$columnNames,$VALUES);

    if($finance_type == 1){
        $result = $dbobj->search('mlf_article_finance','`reference_number`,`total_amount`','reference_number','"'.$ref_num.'"');
        $row = $result->fetch_assoc();

        if($row){
            if($total_due_paid == $row['total_amount']){
                $dbobj->sqlQury('UPDATE `mlf_article_finance` SET `status`=0 WHERE reference_number="'.$ref_num.'"');
            }
        }
    
    }
    if($finance_type == 2){
        $result = $dbobj->search('mlf_cash_finance','`reference_number`,`cleared_balance`','reference_number','"'.$ref_num.'"');
        $row = $result->fetch_assoc();
        $y = (int)$row['cleared_balance']+$x;
        $dbobj->sqlQury('UPDATE `mlf_cash_finance` SET `cleared_balance`='.$y.' WHERE reference_number="'.$ref_num.'"');

        $result = $dbobj->search('mlf_cash_finance','`reference_number`,`cleared_balance`','reference_number','"'.$ref_num.'"');
        $row = $result->fetch_assoc();

        if($row){
            if($y >= $row['approved_amount']){
                $dbobj->sqlQury('UPDATE `mlf_cash_finance` SET `status`=0 WHERE reference_number="'.$ref_num.'"');
            }
        }
    
    }


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