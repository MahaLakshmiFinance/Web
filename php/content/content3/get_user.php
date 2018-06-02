<?php
    $username = $_REQUEST['username'];

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();
    
        $result = $dbobj->search('mlf_users_info',"`username`, `first_name`, `last_name`, `contact_num`",'username','"'.$username.'"');
        $row = $result->fetch_assoc();
        if($row){
            $fname = $row['first_name'];
            $lname = $row['last_name'];
            $contact_number = $row['contact_num'];
        }
        else{
            $fname = "";
            $lname = "";
            $contact_number = "";
        }
        echo '<script>document.forms["cash_finance"]["cstmr_name"].value = "'.$fname.''.$lname.'";
        document.forms["cash_finance"]["cntact_num"].value = "'.$contact_number.'";</script>';
?>