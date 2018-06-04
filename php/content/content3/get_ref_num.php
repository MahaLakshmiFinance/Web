
<?php

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();
    
        $result = $dbobj->searchByOrder('mlf_cash_finance',"`reference_number`",'reference_number');
        $serial = "00000";
        while($row = $result->fetch_assoc()){
            $serial = $row['reference_number'];
        }
        echo "<input id='def' value=".$serial." style='display:none'>";
?>