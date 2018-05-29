<?php
    $username = $_REQUEST['username'];

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->setDBName('mlf');
    
    $dbobj->connect();
    
        $result = $dbobj->search('mlf_users_info',"`username`, `first_name`, `last_name`, `contact_num`",'username','"'.$username.'"');
        $row = $result->fetch_assoc();
        if($row){
            $fname = $row['first_name'];
            $lname = $row['last_name'];
            $contact_number = $row['contact_num'];
        }
        else{
            $fname = " ";
            $lname = " ";
        }
        echo '<script>document.forms["exchange"]["cstmr_name"].value = "'.$fname.' '.$lname.'";
        document.forms["exchange"]["cntact_num"].value = "'.$contact_number.'";</script>';

        $fname = null;
        $lname = null;
?>