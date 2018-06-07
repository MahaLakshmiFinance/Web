<?php
    $refer_name = $_REQUEST['refer_name'];

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();
    
        $result = $dbobj->search('mlf_users_info',"`username`, `first_name`, `last_name`",'username','"'.$refer_name.'"');
        $row = $result->fetch_assoc();
        if($row){
            $_SESSION['refer_name1'] = $row['first_name'];
            $_SESSION['refer_name2'] = $row['last_name'];
        }
        else{
            $_SESSION['refer_name1'] = " ";
            $_SESSION['refer_name2'] = " ";
        }
        echo '<label for="inputConfirmNewPassword">Reference Name</label>
        <input name="refer_name" type="text" onfocus="findname()" id="refer_name" class="form-control" placeholder="Reference Name" 
        value="'.$_SESSION['refer_name1'].' '.$_SESSION['refer_name2'].'">';

        $_SESSION['refer_name1'] = null;
            $_SESSION['refer_name2'] = null;
?>