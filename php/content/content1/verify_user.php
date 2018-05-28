<?php
    session_start();

    $username = $_GET['id'];
    $_SESSION['id'] = $username;
    $subcontent = $_GET['subcontent_num'];

    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->setDBName('mlf');

    $dbobj->connect();

    $result = $dbobj->search('mlf_users_info',"`username`",'username','"'.$username.'"');

    if($row = $result->fetch_assoc()){
        $_SESSION['id_available'] = True;
    }
    else{
        $_SESSION['error_typed_edit'] = True;
    }
    session_start();

        if(isset($_SESSION['id_available'])){
            if($_SESSION['id_available']==True){
                echo '<script>
                    document.forms["verify_user"].style="display:none"
                    document.forms["edit_user"].style=""
                </script>';
                fetchDetails($_SESSION['id']);
            }
    
        }
        if(isset($_SESSION['error_typed_edit'])){
            if($_SESSION['error_typed_edit']==True)
                echo '<script>
                    document.getElementById("error").style=""
                </script>';
            
        }

    function fetchDetails($id){
        
          include_once '../../db_operations.php';
        
          $dbobj = new DBConnect;
        
          $dbobj->setDBName('mlf');
        
          $dbobj->connect();
          
          $columnNames = '`username`, `first_name`, `last_name`, `contact_num`, `alternate_num`, `d_no`, `street`, `locality`, `town_or_city`, `district`, `pincode`, `refer_username`, `refer_name`';
        
          $findByColumnName = "username";
        
          $fndByValue = '"'.$id.'"';
        
          $result = $dbobj->search('mlf_users_info',$columnNames,$findByColumnName,$fndByValue);

          if($subcontent==2) 
            $form_name = "edit_username";
        
          while($row = $result->fetch_assoc()){
        
           echo "<script>
            setTimeout(function(){
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
           },20);
           </script>" ;
           break;
          }
        
    }



    $_SESSION['id_available'] = False;
    $_SESSION['error_typed_edit'] = False;

?>