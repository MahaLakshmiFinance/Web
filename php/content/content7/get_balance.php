<?php

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();
    
        $result = $dbobj->search('mlf_roles',"`role_id`, `role_name`",'role_id',100);
        $row = $result->fetch_assoc();
        if($row){
            $cash = $row['role_name'];
        }
        else{
            $dbobj->insert('mlf_roles',"`role_id`, `role_name`","100, 0");
            $cash = 0;
        }

        
        echo '<script>document.forms["expenses"]["avail_funds"].value = '.$cash.';</script>';
?>