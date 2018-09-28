<?php

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();

    $info = $_REQUEST['condition'];

    if($info%20 < 10){

        $info = $info % 20;

        $result = $dbobj->sqlQury("select reference_number from mlf_article_finance;");
        $string = '';
        while($row = $result -> fetch_assoc()){
            echo $row['reference_number']."<br>";
        }

    }
    else if($info%30 < 10){

        $info = $info % 30;

        $result = $dbobj->sqlQury("select customer_id from mlf_cash_finance;");
        $string = '';
        while($row = $result -> fetch_assoc()){
            echo $row['reference_number']."<br>";
        }

    }

?>