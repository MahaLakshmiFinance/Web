
<?php

session_start();

$serial = $_GET['serial_num'];

include_once '../../db_operations.php';

$dbobj = new DBConnect;

$dbobj->connect();

    $result = $dbobj->search('mlf_old_materials_purchase',"`serial_number`, `item_model`",'serial_number','"'.$serial.'"');

    $string ='<script>document.forms["exchange"]["model_name"].value=`';

    while($row = $result->fetch_assoc()){
        if($row['serial_number']==$serial){
            $string = $string.$row['item_model'];
        }
    }
    $string = $string.'`</script>';
    echo $string;
?>