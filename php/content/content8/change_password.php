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
        $(document).ready(function(){
            setTimeout(function(){
                document.getElementById('additional').innerHTML = 'sidemenu(8);setTimeout(function(){\
                    alert(".$alert.");},200);';
            },180);
            console.log(".$alert.");
        });
        </script>";
        }
        else{
            $alert = '"'.'PASSWORD CHANGE FAILED.'.'"';
            $_SESSION['req_script']="<script>
        $(document).ready(function(){
            setTimeout(function(){
                document.getElementById('additional').innerHTML = 'sidemenu(8);setTimeout(function(){\
                    alert(".$alert.");},200);';
            },180);
            console.log(".$alert.");
        });
        </script>";
        }
    }

    echo "<script>         window.top.location = '../../../mlf_home.php';     </script>";
    die();
    
?>