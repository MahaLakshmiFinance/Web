<?php

    session_start();
    if (!isset($_SESSION['logged_in'])) {
        header('Location: index.php');
        die();
    }

     include_once 'db_operations.php';

     $dbobj = new DBConnect;

     $dbobj->connect();

     if($_SESSION['role']!=2){

     $query = "SELECT `role_id`, `service_id` FROM `mlf_roles_services` WHERE role_id=".$_SESSION['role']." ORDER BY service_id";

    $result = $dbobj->sqlQury($query);

    while($row = $result->fetch_assoc()){

        $result1 = $dbobj->search('mlf_services',"service_id, service_name",'service_id','"'.$row['service_id'].'"');

        while($row1 = $result1->fetch_assoc()){
    
            echo "<li><a href='#".$row1['service_name']."' id='link".(int)$row['service_id']."' onclick='sidemenu(".(int)$row['service_id'].");'</a>".$row1['service_name']."</li>";
        
            if($row['service_id']==0)
                echo '<script>document.getElementById("link0").setAttribute("class","active")</script>';
        }
    }
    }
    else{

        $query = 'SELECT `username`, `service_id` FROM `mlf_emp_services` WHERE username="'.$_SESSION['username'].'" ORDER BY service_id';

    $result = $dbobj->sqlQury($query);

    while($row = $result->fetch_assoc()){

        $result1 = $dbobj->search('mlf_services',"service_id, service_name",'service_id','"'.$row['service_id'].'"');

        while($row1 = $result1->fetch_assoc()){
    
            echo "<li><a href='#".$row1['service_name']."' id='link".$row['service_id']."' onclick='sidemenu(".$row['service_id'].");'</a>".$row1['service_name']."</li>";
        
            if($row['service_id']==0)
                echo '<script>document.getElementById("link0").setAttribute("class","active")</script>';
        }
    }

    }

?>