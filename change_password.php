<?php
    session_start();
    $old_pwd = $_POST['old_pwd'];
    $new_pwd = $_POST['new_pwd'];
    $retype_new_pwd = $_POST['retype_new_pwd'];

    if($new_pwd != $retype_new_pwd){
        header('Location: mlf_home.php');
        die();
    }

    include_once 'php/db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->setDBName('mlf');

    $dbobj->connect();

    $result = $dbobj->search('mlf_users',"username, password",'username','"'.$_SESSION["username"].'"');

    while($row = $result->fetch_assoc()){
        if($row['password'] == $old_pwd){
            $dbobj->update('mlf_users','password','"'.$new_pwd.'"','username','"'.$_SESSION['username'].'"');
        
        }
    }

    header('Location: mlf_home.php');
    die();
    
?>