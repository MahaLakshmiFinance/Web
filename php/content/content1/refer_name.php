<?php
    $refer_name = $_REQUEST['refer_name'];

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->setDBName('mlf');
    
    $dbobj->connect();
    
        $result = $dbobj->search('mlf_users_info',"`username`, `first_name`",'username','"'.$refer_name.'"');
    
        if($row = $result->fetch_assoc()){
            $_SESSION['refer_name'] = $row['first_name'];
            
        }
?>