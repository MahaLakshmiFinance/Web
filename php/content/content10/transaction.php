<?php
    $due_num = $_POST['due_num'];
    $amount_paid = $_POST['amount'];
    $date = $_POST['today_date'];
    $penality = $_POST['penality'];

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();
    $now = time(); // or your date as well
    $pdays = 0;

    $result = $dbobj->search('mlf_transactions',"`bill_number`, `status`, `due_date`, `amount_paid`, `due_amount`",'bill_number','"'.$due_num.'"');
    $row = $result->fetch_assoc();
    if($row['status']==0){
        $alert = '"'.'DUE IS ALREADY CLOSED.'.'"';
        $_SESSION['req_script']="<script>
        setTimeout(function(){
            document.getElementById('additional').innerHTML = 'sidemenu(10);setTimeout(function(){alert(".$alert.");},20);'
        },80);
        </script>";
        
        header('Location: ../../../mlf_home.php');
                die();
    }
    $your_date = strtotime($row["due_date"]);
    $datediff = $now - $your_date;
    $pdays = floor($datediff / (60 * 60 * 24));
    $penality_req =0;
    if($pdays>0)
        $penality_req = $pdays*50;
    $already_paid = $row['amount_paid'];

    $due = $row['due_amount'];

    $amt = (int)$amount_paid+$already_paid;
    if($pdays>0){
        $amt += (int)$penality;
    $dbobj->update('mlf_transactions',"`penality_days`",$pdays,'bill_number','"'.$due_num.'"');
    $dbobj->update('mlf_transactions',"`penality_amount`",$penality_req,'bill_number','"'.$due_num.'"');
    }
    $dbobj->update('mlf_transactions',"`amount_paid`",$amt,'bill_number','"'.$due_num.'"');
    $dbobj->update('mlf_transactions',"`authorised_by`",$_SESSION['username'],'bill_number','"'.$due_num.'"');
    if(((int)$due+$penality_req) < $amt){
        $dbobj->update('mlf_transactions',"`status`","0",'bill_number','"'.$due_num.'"');
    }
    $alert = '"'.'TRANSACTION COMPLETE.'.'"';
        $_SESSION['req_script']="<script>
    setTimeout(function(){
        document.getElementById('additional').innerHTML = 'sidemenu(10);setTimeout(function(){alert(".$alert.");},20);'
    },80);
    </script>";
    
    header('Location: ../../../mlf_home.php');
            die();
    

?>