
<?php

session_start();

$serial = $_GET['serial_num'];

include_once '../../db_operations.php';

$dbobj = new DBConnect;

$dbobj->connect();

    $result = $dbobj->search('mlf_accessories_purchase',"`serial_number`, `item_name`, `item_type`, `purchased_cost`",'serial_number','"'.$serial.'"');

    $string ='<script>';
    $row = $result->fetch_assoc();
    if($row){
        if($row['serial_number']==$serial){
            $string = $string.'document.forms["small_appliances"]["model_name"].value="'.$row['item_name'].'";';
            $string = $string.'document.forms["small_appliances"]["item_type"].value="'.$row['item_type'].'";';
            $string = $string.'document.forms["small_appliances"]["cost"].value="'.$row['purchased_cost'].'";';
        }
    }
    else{
        $string = $string.'document.forms["small_appliances"]["model_name"].value="";';
            $string = $string.'document.forms["small_appliances"]["item_type"].value="";';
            $string = $string.'document.forms["small_appliances"]["cost"].value="";';
    }
    $string = $string.'</script>';
    echo $string;
?>