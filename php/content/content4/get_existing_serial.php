
<?php

session_start();

include_once '../../db_operations.php';

$dbobj = new DBConnect;

$dbobj->setDBName('mlf');

$dbobj->connect();

    $result = $dbobj->fetch('mlf_old_materials',"`serial_number`, `is_sold`");

    $string ='<script>document.getElementById("serial").innerHTML=`';

    while($row = $result->fetch_assoc()){
        if($row['is_sold']!=1){
            $string = $string.'<option value="'.$row["serial_number"].'">'.$row["serial_number"].'</option>';
        }
    }
    $string = $string.'`</script>';
    echo $string;
?>