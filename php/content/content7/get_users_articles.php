<?php

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();

    $info = $_REQUEST['reference_number'];
        $result = $dbobj->sqlQury("select * from mlf_article_finance where reference_number=".$info.";");
        $string = '';
        while($row = $result -> fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row['customer_id']."</td>";
            echo "<td>".$row['article_id']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['reference_number']."</td>";
            echo "<td>".$row['total_emis']."</td>";
            echo "<td>".$row['total_amount']."</td>";
            echo "</tr>";
        }


?>