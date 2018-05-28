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
    $username_type = $_POST['username_type'];
    $role_id = $_POST['role_id'];
    if(!$role_id){
        $role_id = 4;
    }

    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->setDBName('mlf');

    $dbobj->connect();

    $result = $dbobj->search('mlf_users_info',"`username`",'username','"'.$username.'"');
    
        if($row = $result->fetch_assoc()){
            $alert = '"'.'USER ALREADY EXIXTS.'.'"';
            $_SESSION['req_script']="<script>
            setTimeout(function(){
                document.getElementById('additional').innerHTML = 'sidemenu(1);setTimeout(function(){alert(".$alert.");},20);'
            },80);
            </script>";
            header('Location: ../../../mlf_home.php');
            die();
    }

    $result = $dbobj->search('mlf_users_info',"`username`, `first_name`",'username','"'.$refer_id.'"');
    $row = $result->fetch_assoc();
    if(!$row){
        $alert = '"'.'PLEASE REGISTER REFERENCE ID FIRST.'.'"';
        $_SESSION['req_script']="<script>
        setTimeout(function(){
            document.getElementById('additional').innerHTML = 'sidemenu(1);setTimeout(function(){alert(".$alert.");},20);'
        },80);
        </script>";
        header('Location: ../../../mlf_home.php');
        die();
    }else{
        $refer_name = $row['first_name'];
    }

    $dbobj->insert('mlf_users','(username)','("'.$username.'")');
    $dbobj->insert('mlf_users_roles','(username, role_id)','("'.$username.'", '.$role_id.')');

    $values = '("'.$username.'", "'.$fname.'", "'.$lname.'", "'.$cntact_num.'", "'.$alt_cntact_num.'", "'.$dno.'", "'.$street.'", "'.$locality.'", "'.$location.'", "'.$district.'", "'.$pincode.'", "'.$refer_id.'", "'.$refer_name.'")';

    $dbobj->insert('mlf_users_info',"(`username`, `first_name`, `last_name`, `contact_num`, `alternate_num`, `d_no`, `street`, `locality`, `town_or_city`, `district`, `pincode`, `refer_username`, `refer_name`)",$values);
    
    $alert = '"'.'SUCESSFULLY ADDED THE CUSTOMER <br>PLEASE VERIFY USING VIEW TAB'.'"';
    $_SESSION['req_script']="<script>
    setTimeout(function(){
        document.getElementById('additional').innerHTML = 'sidemenu(1);setTimeout(function(){alert(".$alert.");},20);'
    },80);
    </script>";
    
    header('Location: ../../../mlf_home.php');
    die();
?>