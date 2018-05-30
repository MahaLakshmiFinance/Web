<?php
    session_start();
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cntact_num = $_POST['cntact_num'];
    $alt_cntact_num = $_POST['alt_cntact_num'];
    $dno = $_POST['dno'];
    $street = $_POST['street'];
    $locality = $_POST['locality'];
    $location = $_POST['location'];
    $district = $_POST['district'];
    $pincode = $_POST['pincode'];
    $refer_id = $_POST['refer_id'];
    $refer_name = $_POST['refer_name'];
    $role_id = $_POST['role_id'];

    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->connect();

    $dbobj->delete('mlf_users','username','"'.$username.'"');

    $dbobj->delete('mlf_users_info',"`username`",'"'.$username.'"');

    $alert = '"'.'SUCESSFULLY DELETED'.'"';
    $_SESSION['req_script']="<script>
    setTimeout(function(){
        document.getElementById('additional').innerHTML = 'sidemenu(1);setTimeout(function(){alert(".$alert.");},20);'
    },80);
    </script>";

    header('Location: ../../../mlf_home.php');
    
?>