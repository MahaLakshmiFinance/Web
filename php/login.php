<?php
    session_start();
    session_unset();
    session_destroy();
    
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

    $dbobj->setDBName('mlf');

    $dbobj->connect();

    $result = $dbobj->search('mlf_users',"username, password",'username',"'".$username."'");

    while($row = $result->fetch_assoc()){
        if($row['password'] == $password){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = True;
            $_SESSION['content'] = 0;
            header('Location: ../mlf_home.php');
            die();
        }
    }
    header('Location: ../index.php');
    die();
?>