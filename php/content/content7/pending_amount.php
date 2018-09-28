<?php

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();
        $cash = 0;
        $result = $dbobj->sqlQury('SELECT sum(total_amount) FROM `mlf_article_finance` WHERE 1');
        $row = $result->fetch_assoc();
        if($row){
            $cash += $row['sum(total_amount)'];
        }

        $result = $dbobj->sqlQury('SELECT sum(total_amount) FROM `mlf_article_finance` WHERE 1');
        $row = $result->fetch_assoc();
        if($row){
            $cash += $row['sum(total_amount)'];
        }

        $result = $dbobj->sqlQury('SELECT sum(amt_collected) FROM `mlf_emp_expenses` WHERE 1');
        $row = $result->fetch_assoc();
        if($row){
            $cash -= $row['sum(amt_collected)'];
        }

        $result = $dbobj->sqlQury('SELECT sum(expense) FROM `mlf_emp_expenses` WHERE 1');
        $row = $result->fetch_assoc();
        if($row){
            $cash += $row['sum(expense)'];
        }

        $result = $dbobj->sqlQury('SELECT sum(total_due_amount_paid) FROM `mlf_transactions` WHERE 1');
        $row = $result->fetch_assoc();
        if($row){
            $cash -= $row['sum(total_due_amount_paid)'];
        }

        echo '<script>document.forms["expenses"]["resided_funds"].value = '.$cash.';</script>';
?>