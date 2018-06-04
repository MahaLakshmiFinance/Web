
<?php

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();
    
        $result = $dbobj->searchByOrder('mlf_transactions',"`bill_number`",'bill_number');
        $serial = "00000";
        while($row = $result->fetch_assoc()){
            $serial = $row['bill_number'];
        }
        echo "<input id='abc' value=".$serial." style='display:none'>";
?>