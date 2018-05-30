
<?php
    session_start();
    $actn = $_POST['type'];
    $username = $_POST['username'];
    $customer_name = $_POST['cstmr_name'];
    $cntact_num = $_POST['cntact_num'];
    $serial_num = $_POST['serial_num'];
    $item_cond = $_POST['item_cond'];
    $item_type = $_POST['item_type'];
    $model_name = $_POST['model_name'];
    $date =  $_POST['date'];
    $cost = $_POST['cost'];
    $remarks = $_POST['remarks'];

    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->setDBName('mlf');

    $dbobj->connect();

    if($actn==0){

        $result = $dbobj->search('mlf_old_materials','serial_number','serial_number',$serial_num);

        $row = $result->fetch_assoc();

        if($row){
            $alert = '"'.'PRODUCT ALREADY PURCHASED.'.'"';
    $_SESSION['req_script']="<script>
    setTimeout(function(){
        document.getElementById('additional').innerHTML = 'sidemenu(4);setTimeout(function(){alert(".$alert.");},20);'
    },80);
    </script>";
    
    header('Location: ../../../mlf_home.php');
            die();
        }
    

        $columnNames = "(`serial_number`, `item_model`, `item_type`, `purchased_from`, `purchased_date`, `purchased_cost`, `purchased_condition`, `purchased_remark`, `is_sold`)";

        $values = "(`".$serial_num."`, `".$model_name."`, `".$item_type."`, `".$username."`, `".$date."`, `".$cost."`, `".$item_cond."`, `".$remarks."`, `".$actn."`) ";
        echo "INSERT INTO mlf_old_materials ".$columnNames." VALUES ".$values.";";
        $dbobj->insert('mlf_old_materials',$columnNames,$values);
    }
    else{
        $result = $dbobj->search('mlf_old_materials','serial_number, is_sold','serial_number',$serial_num);

        $row = $result->fetch_assoc();

        if(!$row){
            $alert = '"'.'SERIAL NUMBER DOES NOT EXIST.'.'"';
    $_SESSION['req_script']="<script>
    setTimeout(function(){
        document.getElementById('additional').innerHTML = 'sidemenu(4);setTimeout(function(){alert(".$alert.");},20);'
    },80);
    </script>";
    
    header('Location: ../../../mlf_home.php');
            die();
        }
        else if($row['is_sold']==1){
            $alert = '"'.'PRODUCT WAS ALREADY SOLD.'.'"';
    $_SESSION['req_script']="<script>
    setTimeout(function(){
        document.getElementById('additional').innerHTML = 'sidemenu(4);setTimeout(function(){alert(".$alert.");},20);'
    },80);
    </script>";
    
    header('Location: ../../../mlf_home.php');
            die();
        }
        $dbobj->update('mlf_old_materials','sold_to','"'.$username.'"','serial_number',$serial_num);
        $dbobj->update('mlf_old_materials','sold_date','"'.$date.'"','serial_number',$serial_num);
        $dbobj->update('mlf_old_materials','sold_cost','"'.$cost.'"','serial_number',$serial_num);
        $dbobj->update('mlf_old_materials','sold_condition','"'.$item_cond.'"','serial_number',$serial_num);
        $dbobj->update('mlf_old_materials','sold_remark','"'.$remarks.'"','serial_number',$serial_num);
        $dbobj->update('mlf_old_materials','is_sold','"'.$actn.'"','serial_number',$serial_num);

        $alert = '"'.'SUCESSFULLY SOLD THE PRODUCT'.'"';
    $_SESSION['req_script']="<script>
    setTimeout(function(){
        document.getElementById('additional').innerHTML = 'sidemenu(4);setTimeout(function(){alert(".$alert.");},20);'
    },80);
    </script>";
    
    header('Location: ../../../mlf_home.php');
    die();

    }
?>