<?php
    $finance_type = $_REQUEST['fin_type'];
    $username = $_REQUEST['username'];

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();

        if($finance_type == 1){
    
        $result = $dbobj->search('mlf_article_finance',"`customer_id`, `reference_number`",'customer_id','"'.$username.'"');
        $res = '<script>document.forms["transaction"]["refer_num"].innerHTML="<option value=\'\'></option>';
        while($row = $result->fetch_assoc()){
            $res = $res.'<option value=\''.$row['reference_number'].'\'>'.$row['reference_number'].'</option>';
        }
        $res = $res.'"</script>';

        echo $res;
    }

?>