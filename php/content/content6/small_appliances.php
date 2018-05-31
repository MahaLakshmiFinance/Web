
<?php
    session_start();
    $actn = $_POST['type'];
    $username = $_POST['username'];
    $customer_name = $_POST['cstmr_name'];
    $cntact_num = $_POST['cntact_num'];
    $quantity = $_POST['quantity'];
    if(isset($_POST['serial_num1']))
        $serial_num = $_POST['serial_num1'];
    if($serial_num == "")
        $serial_num = $_POST['serial_num2'];
    $item_type = $_POST['item_type'];
    $model_name = $_POST['model_name'];
    $date =  $_POST['date'];
    $total_cost = $_POST['cost'];

    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->connect();

    if($actn==0){

        $result = $dbobj->search('mlf_old_materials_purchase','serial_number','serial_number',$serial_num);

        $row = $result->fetch_assoc();

        if($row){
            $alert = '"'.'PRODUCT ALREADY PURCHASED.'.'"';
    $_SESSION['req_script']="<script>
    setTimeout(function(){
        document.getElementById('additional').innerHTML = 'sidemenu(4);setTimeout(function(){alert(".$alert.");},20);'
    },80);
    </script>";
    
    // header('Location: ../../../mlf_home.php');
    //         die();
        }
    

        $columnNames = "(`serial_number`, `transaction_by` , `item_model`, `item_type`, `purchased_from`, `purchased_date`, `purchased_cost`, `purchased_condition`, `purchased_remark`, `is_sold`)";

        $values = '("'.$serial_num.'", "'.$_SESSION['username'].'", "'.$model_name.'", "'.$item_type.'", "'.$username.'", "'.$date.'", "'.$cost.'", "'.$item_cond.'", "'.$remarks.'", "'.$actn.'") ';
        $dbobj->insert('mlf_old_materials_purchase',$columnNames,$values);
        $alert = '"'.'PURCHASE COMPLETED.'.'"';
        $_SESSION['req_script']="<script>
        setTimeout(function(){
            document.getElementById('additional').innerHTML = 'sidemenu(4);setTimeout(function(){alert(".$alert.");},20);'
        },80);
        </script>";
        
        // header('Location: ../../../mlf_home.php');
        //         die();
    }
    // else{
    //     $result = $dbobj->search('mlf_old_materials_purchase','serial_number, is_sold','serial_number',$serial_num);

    //     $row = $result->fetch_assoc();

    //     if(!$row){
    //         $alert = '"'.'SERIAL NUMBER DOES NOT EXIST.'.'"';
    // $_SESSION['req_script']="<script>
    // setTimeout(function(){
    //     document.getElementById('additional').innerHTML = 'sidemenu(4);setTimeout(function(){alert(".$alert.");},20);'
    // },80);
    // </script>";
    
    // header('Location: ../../../mlf_home.php');
    //         die();
    //     }
    //     else if($row['is_sold']==1){
    //         $alert = '"'.'PRODUCT WAS ALREADY SOLD.'.'"';
    // $_SESSION['req_script']="<script>
    // setTimeout(function(){
    //     document.getElementById('additional').innerHTML = 'sidemenu(4);setTimeout(function(){alert(".$alert.");},20);'
    // },80);
    // </script>";
    
    // header('Location: ../../../mlf_home.php');
    //         die();
    //     }

    //     $columnNames = "(`serial_number`, `transaction_by` , `item_model`, `item_type`, `sold_to`, `sold_date`, `sold_cost`, `sold_condition`, `sold_remark`)";
        
    //     $values = '("'.$serial_num.'", "'.$_SESSION['username'].'", "'.$model_name.'", "'.$item_type.'", "'.$username.'", "'.$date.'", "'.$cost.'", "'.$item_cond.'", "'.$remarks.'") ';
        
    //     $dbobj->insert('mlf_old_materials_sell',$columnNames,$values);

    //     $dbobj->update('mlf_old_materials_purchase','is_sold','1','serial_number',$serial_num);

    //     $alert = '"'.'SUCESSFULLY SOLD THE PRODUCT'.'"';
    // $_SESSION['req_script']="<script>
    // setTimeout(function(){
    //     document.getElementById('additional').innerHTML = 'sidemenu(4);setTimeout(function(){alert(".$alert.");},20);'
    // },80);
    // </script>";
    
    // header('Location: ../../../mlf_home.php');
    // die();

    // }
?>