
<?php

session_start();

$serial = $_GET['serial_num'];

include_once '../../db_operations.php';

$dbobj = new DBConnect;

$dbobj->connect();

    $result = $dbobj->search('mlf_old_materials_purchase',"`serial_number`, `purchased_condition`, `item_model`, `item_type`, `purchased_cost`",'serial_number','"'.$serial.'"');

    $string ='<script>document.forms["exchange"]["model_name"].value=`';

    $string ='<script>';
    $row = $result->fetch_assoc();
    if($row){
        if($row['serial_number']==$serial){
            $string = $string.'document.forms["exchange"]["model_name"].value="'.$row['item_model'].'";';
            $string = $string.'document.forms["exchange"]["item_cond"].value="'.$row['purchased_condition'].'";';
            $string = $string.'document.forms["exchange"]["item_type"].value="'.$row['item_type'].'";';
            $string = $string.'document.forms["exchange"]["cost"].value="'.($row['purchased_cost']+(0.2*$row['purchased_cost'])).'";';
        }
    }
    else{
        $string = $string.'document.forms["exchange"]["model_name"].value="";';
            $string = $string.'document.forms["exchange"]["item_type"].value="";';
            $string = $string.'document.forms["exchange"]["cost"].value="";';
    }
    $string = $string.'</script>';
    echo $string;
?>