<?php
    session_start();
    $old_pwd = $_POST['old_pwd'];
    $new_pwd = $_POST['new_pwd'];
    $retype_new_pwd = $_POST['retype_new_pwd'];

    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->setDBName('mlf');

    $dbobj->connect();

    $result = $dbobj->search('mlf_users',"username, password",'username','"'.$_SESSION["username"].'"');

    while($row = $result->fetch_assoc()){
        if($row['password'] == md5($old_pwd)){
            $dbobj->update('mlf_users','password','"'.md5($new_pwd).'"','username','"'.$_SESSION['username'].'"');
            $alert = '"'.'PASSWORD CHANGED SUCESSFULLY.'.'"';
            $_SESSION['req_script']="<script>
            setTimeout(function(){
                document.getElementById('additional').innerHTML = 'sidemenu(8);setTimeout(function(){alert(".$alert.");},20);'
            },80);
            </script>";
        }
        else{
            $alert = '"'.'PASSWORD CHANGE FAILED.'.'"';
            $_SESSION['req_script']="<script>
            setTimeout(function(){
                document.getElementById('additional').innerHTML = 'sidemenu(8);setTimeout(function(){alert(".$alert.");},20);'
            },80);
            </script>";
        }
    }

    header('Location: ../../../mlf_home.php');
    die();
    
?>