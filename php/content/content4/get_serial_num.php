
<?php

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->setDBName('mlf');
    
    $dbobj->connect();
    
        $result = $dbobj->searchByOrder('mlf_old_materials',"`serial_number`",'serial_number');
        while($row = $result->fetch_assoc()){
            $serial = $row['serial_number'];
        }
        echo "<input id='abc' value=".$serial." style='display:none'>";
?>