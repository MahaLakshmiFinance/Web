
<?php

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();
    
        $result = $dbobj->searchByOrder('mlf_transactions',"`transaction_id`",'transaction_id');
        $serial = "00000";
        while($row = $result->fetch_assoc()){
            $serial = $row['transaction_id'];
        }
        echo "<input id='abc' value=".$serial." style='display:none'>";
?>