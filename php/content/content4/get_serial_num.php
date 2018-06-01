
<?php

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();
    
        $result = $dbobj->searchByOrder('mlf_old_materials_purchase',"`serial_number`",'serial_number');
        $serial = "00000";
        while($row = $result->fetch_assoc()){
            $serial = $row['serial_number'];
        }
        echo "<input id='abc' value=".$serial." style='display:none'>";
?>