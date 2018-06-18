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

    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->connect();

    $dbobj->update('mlf_users','username','"'.$username.'"');

    $dbobj->update('mlf_users_info',"`username`",'"'.$username.'"','username','"'.$username.'"');
    $dbobj->update('mlf_users_info',"`first_name`",'"'.$fname.'"','username','"'.$username.'"');
    $dbobj->update('mlf_users_info',"`last_name`",'"'.$lname.'"','username','"'.$username.'"');
    $dbobj->update('mlf_users_info',"`contact_num`",'"'.$cntact_num.'"','username','"'.$username.'"');
    $dbobj->update('mlf_users_info',"`alternate_num`",'"'.$alt_cntact_num.'"','username','"'.$username.'"');
    $dbobj->update('mlf_users_info',"`d_no`",'"'.$dno.'"','username','"'.$username.'"');
    $dbobj->update('mlf_users_info',"`street`",'"'.$street.'"','username','"'.$username.'"');
    $dbobj->update('mlf_users_info',"`locality`",'"'.$locality.'"','username','"'.$username.'"');
    $dbobj->update('mlf_users_info',"`town_or_city`",'"'.$location.'"','username','"'.$username.'"');
    $dbobj->update('mlf_users_info',"`district`",'"'.$district.'"','username','"'.$username.'"');
    $dbobj->update('mlf_users_info',"`pincode`",'"'.$pincode.'"','username','"'.$username.'"');
    $dbobj->update('mlf_users_info',"`refer_username`",'"'.$refer_id.'"','username','"'.$username.'"');
    $dbobj->update('mlf_users_info',"`refer_name`",'"'.$refer_name.'"','username','"'.$username.'"');

    $alert = '"'.'SUCESSFULLY UPDATED'.'"';
    $_SESSION['req_script']="<script>
        $(document).ready(function(){
            setTimeout(function(){
                document.getElementById('additional').innerHTML = 'sidemenu(1);setTimeout(function(){\
                    alert(".$alert.");},200);';
            },180);
            console.log(".$alert.");
        });
        </script>";

        echo "<script>
        window.top.location = '../../../mlf_home.php';
    </script>";
    die();
    
?>