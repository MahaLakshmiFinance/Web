<?php
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
    $username_type = $_POST['username_type'];
    $role_id = $_POST['role_id'];

    include_once 'db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->setDBName('mlf');

    $dbobj->connect();

    $dbobj->insert('mlf_users','(username)','("'.$username.'")');
    $dbobj->insert('mlf_users_roles','(username, role_id)','("'.$username.'", '.$role_id.')');

    $values = '("'.$username.'", "'.$fname.'", "'.$lname.'", "'.$cntact_num.'", "'.$alt_cntact_num.'", "'.$dno.'", "'.$street.'", "'.$locality.'", "'.$location.'", "'.$district.'", "'.$pincode.'", "'.$refer_id.'", "'.$refer_name.'")';

    $dbobj->insert('mlf_users_info',"(`username`, `first_name`, `last_name`, `contact_num`, `alternate_num`, `d_no`, `street`, `locality`, `town_or_city`, `district`, `pincode`, `refer_username`, `refer_name`)",$values);
    
    header('Location: ../mlf_home.php');
    die();
?>