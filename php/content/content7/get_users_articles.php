<?php

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();

    $info = $_REQUEST['reference_number'];

    if($info%20 < 10){

        $info = $info % 20;

        $result = $dbobj->sqlQury("select * from mlf_article_finance where reference_number=".$info.";");
        $string = '';
        while($row = $result -> fetch_assoc()){
            echo $row['customer_id']."<br>";
        }

    }

?>