
<?php
    session_start();

    $emp_id = $_POST['emp_id'];
    $location = $_POST['loc'];
   
    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->connect();

    $result = $dbobj->search('mlf_emp_info','username','username','"'.$emp_id.'"');

    $row = $result->fetch_assoc();

    if($row) {
        $dbobj->update('mlf_emp_info','location','"'.$location.'"','username','"'.$emp_id.'"');
    }
    else {
        $date = date("Y/m/d");
       $dbobj->insert('mlf_emp_info','(`location`,`username`,`joining_date`)','("'.$location.'","'.$emp_id.'","'.$date.'")');
       
   }

   $dbobj->delete('mlf_emp_services','username','"'.$emp_id.'"');

   $dbobj->insert('mlf_emp_services','(username,service_id)','("'.$emp_id.'","0")');
   
   $dbobj->insert('mlf_emp_services','(username,service_id)','("'.$emp_id.'","19")');
   
   $dbobj->insert('mlf_emp_services','(username,service_id)','("'.$emp_id.'","20")');

   for($i=1;$i<=10;$i+=1){

        if(isset($_POST['check'.$i])){
            $dbobj->insert('mlf_emp_services','(username,service_id)','("'.$emp_id.'","'.$i.'")');
        }

   }
   $alert = '"'.'SUCESSFULLY UPDATED THE EMPLOYEE DETAILS'.'"';
   $_SESSION['req_script']="<script>
        $(document).ready(function(){
            setTimeout(function(){
                document.getElementById('additional').innerHTML = 'sidemenu(5);setTimeout(function(){\
                    alert(".$alert.");},200);';
            },180);
            console.log(".$alert.");
        });
        </script>";
    
    echo "<script>         window.top.location = '../../../mlf_home.php';     </script>";
    die();

?>