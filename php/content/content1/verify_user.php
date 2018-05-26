<?php
    session_start();

    $username = $_GET['id'];
    $_SESSION['id'] = $username;
    $subcontent = $_GET['subcontent_num'];

    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->setDBName('mlf');

    $dbobj->connect();

    $result = $dbobj->search('mlf_users_info',"`username`, `first_name`, `last_name`, `contact_num`, `alternate_num`, `d_no`, `street`, `locality`, `town_or_city`, `district`, `pincode`, `refer_username`, `refer_name`",'username','"'.$username.'"');
    $_SESSION['content'] = 1;

    if($row = $result->fetch_assoc()){
        $_SESSION['id_available'] = True;

        echo "<script>

        </script>";
    }
    else{

        $_SESSION['error_typed_edit'] = True;
    }
    $_SESSION['req_script']="<script>
    setTimeout(function(){
        document.getElementById('additional').innerHTML = 'sidemenu(1);setTimeout(function(){nav(1".$subcontent.");},50);'
    },80);
    </script>";
    header('Location: ../../../mlf_home.php');
?>