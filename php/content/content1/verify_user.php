<?php
    session_start();

    $username = $_GET['id'];
    $_SESSION['id'] = $username;
    $subcontent = 2;
    if(isset($_GET['subcontent_num'])){
    $subcontent = $_GET['subcontent_num'];
    }

    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->setDBName('mlf');

    $dbobj->connect();

    $result = $dbobj->search('mlf_users_info',"`username`",'username','"'.$username.'"');
    $row = $result->fetch_assoc();

    if($row['username']==$username){
        $_SESSION['id_available'] = True;
    }
    else{
        $_SESSION['error_typed_edit'] = True;
    }

    if($subcontent==2) 
            $form_name = "edit_user";
        if($subcontent == 3)
            $form_name = "delete_user";
        if($subcontent == 4)
            $form_name = "view_user";

        if(isset($_SESSION['id_available'])){
            if($_SESSION['id_available']==True){
                echo '<script>
                    document.getElementById("verify_user").style="display:none";
                    document.forms["'.$form_name.'"].style=""
                </script>';
                $_SESSION['id_available'] = False;
    $_SESSION['error_typed_edit'] = False;
                fetchDetails($_SESSION['id']);
            }
        }

        if(isset($_SESSION['error_typed_edit'])){
            if($_SESSION['error_typed_edit']==True){
                echo '<script>
                    document.getElementById("error").style=""
                </script>';
                $_SESSION['id_available'] = False;
    $_SESSION['error_typed_edit'] = False;
                die();
            }
            
        }

    function fetchDetails($id){
        global $form_name;
        
          include_once '../../db_operations.php';
        
          $dbobj = new DBConnect;
        
          $dbobj->connect();
          
          $columnNames = '`username`, `first_name`, `last_name`, `contact_num`, `alternate_num`, `d_no`, `street`, `locality`, `town_or_city`, `district`, `pincode`, `refer_username`, `refer_name`';
        
          $findByColumnName = "username";
        
          $fndByValue = '"'.$id.'"';
        
          $result = $dbobj->search('mlf_users_info',$columnNames,$findByColumnName,$fndByValue);

          $row = $result->fetch_assoc();
          while($row){
        
           echo "<script>
            
                document.forms['".$form_name."']['username'].value = '".$row['username']."';
                document.forms['".$form_name."']['fname'].value = '".$row['first_name']."';
                document.forms['".$form_name."']['lname'].value = '".$row['last_name']."';
                document.forms['".$form_name."']['cntact_num'].value = '".$row['contact_num']."';
                document.forms['".$form_name."']['alt_cntact_num'].value = '".$row['alternate_num']."';
                document.forms['".$form_name."']['dno'].value = '".$row['d_no']."';
                document.forms['".$form_name."']['street'].value = '".$row['street']."';
                document.forms['".$form_name."']['locality'].value = '".$row['locality']."';
                document.forms['".$form_name."']['location'].value = '".$row['town_or_city']."';
                document.forms['".$form_name."']['district'].value = '".$row['district']."';
                document.forms['".$form_name."']['pincode'].value = '".$row['pincode']."';
                document.forms['".$form_name."']['refer_id'].value = '".$row['refer_username']."';
                document.forms['".$form_name."']['refer_name'].value = '".$row['refer_name']."';
           
           </script>" ;
          }
        
    }

?>