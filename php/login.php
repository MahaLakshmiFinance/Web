<?php
    session_start();
    session_unset();
    session_destroy();

    session_start();
    
    $username = "";

    $password = "";

    if(isset($_POST['username'])){
        $username = $_POST['username'];
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }

    include_once 'db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->connect();

    $result = $dbobj->search('mlf_users',"username, password",'username','"'.$username.'"');

    while($row = $result->fetch_assoc()){
        if($row['password'] == md5($password)){
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = True;
            $_SESSION['content'] = 0;
            $result2 = $dbobj->search('mlf_users_roles',"username, role_id",'username','"'.$username.'"');
            while($row2 = $result2->fetch_assoc()){
                $_SESSION['role'] = $row2['role_id'];
            }
            echo "<script>
        window.top.location ='../mlf_home.php';
    </script>";
            die();
        }
    }
    $_SESSION['req_script']="<script>
    $(document).ready(function(){
        setTimeout(function(){
            setTimeout(function(){
                document.getElementById('alert').style='opacity:0.5;font-style:bold'},200);
            },180);
    });
    </script>";
    
    echo "<script>
        window.top.location = '../index.php';
    </script>";
    die();
?>