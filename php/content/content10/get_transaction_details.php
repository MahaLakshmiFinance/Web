<?php
    $refer_num = $_REQUEST['refer_num'];
    $finance_type = $_REQUEST['finance_type'];

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();

    $date_issue = "";
    $total_emis="";
    if($finance_type == 1){
    
        $result = $dbobj->search('mlf_article_finance',"`customer_id`, `authorised_by`, `article_id`, `article_type`, `article_model`, `article_cost`, `date`, `reference_number`, `approved_amount`, `documentation_charges`, `rate_of_interest`, `total_emis`, `installment_amount`, `total_amount`",'reference_number','"'.$refer_num.'"');
        
        $row = $result->fetch_assoc();


        $res = '<script>document.forms["transaction"]["item_type"].value="'.$row["article_type"].'";';
        $res = $res.'document.forms["transaction"]["id"].value="'.$row["article_id"].'";';
        $res = $res.'document.forms["transaction"]["model"].value="'.$row["article_model"].'";';
        $res = $res.'document.forms["transaction"]["cost"].value="'.$row["article_cost"].'";';
        $res = $res.'document.forms["transaction"]["issued_amount"].value="'.$row["approved_amount"].'";';
        $res = $res.'document.forms["transaction"]["issue_date"].value="'.$row["date"].'";';
        $res = $res.'document.forms["transaction"]["emis"].value="'.$row["total_emis"].'";';
        $res = $res.'document.forms["transaction"]["installment"].value="'.$row["installment_amount"].'";';
        $date_issue = $row["date"];
        $total_emis = (int)$row["total_emis"];
        $res = $res."</script>";
        echo $res;
        }
        else{
            $result = $dbobj->search('mlf_cash_finance',"`customer_id`, `authorised_by`, `date`, `reference_number`, `approved_amount`, `rate_of_interest`, `total_emis`, `installment_amount`, `total_amount`",'reference_number','"'.$refer_num.'"');
        
        $row = $result->fetch_assoc();


        $res = '<script>document.forms["transaction"]["issued_amount"].value="'.$row["approved_amount"].'";';
        $res = $res.'document.forms["transaction"]["issue_date"].value="'.$row["date"].'";';
        $res = $res.'document.forms["transaction"]["emis"].value="'.$row["total_emis"].'";';
        $res = $res.'document.forms["transaction"]["installment"].value="'.$row["installment_amount"].'";';
        $date_issue = $row["date"];
        $total_emis = (int)$row["total_emis"];
        $res = $res."</script>";
        echo $res;

        }
        
$year = $date_issue[0].$date_issue[1].$date_issue[2].$date_issue[3];
$month = $date_issue[5].$date_issue[6];
$day = $date_issue[8].$date_issue[9];
$res = '<script>document.forms["transaction"]["due_num"].innerHTML = "<option value=\"\"></option>';
        for($count=0;$count<$total_emis;$count+=1){
            $month=((int)$month) + 1;
        if($month==13){
    $month = 1;
    $year = (int)$year+1;
        }
    $x =  mktime(23, 0, 0, $month,$day, $year);
$duedate = date("Y/m/d",$x);
            // $columnNames = "(`customer_id`, `authorised_by`, `reference_number`, `bill_number`, `due_date`, `due_amount`, `penality_days`, `penality_amount`, `amount_paid`, `last_transaction`, `status`)";
            // $values = '("'.$username.'", "'.$_SESSION['username'].'", "'.$ref_num.'", "'.$year.$serials_list[$count].'", "'.$duedate.'", "'.$inst_amount.'", "0", "0", "0", "'.$date.'", "1")';
            // $dbobj->insert('mlf_transactions',$columnNames,$values);
            $res = $res.'<option value=\"'.$duedate.'\">'.$duedate.'</option>';
        }

    // $result = $dbobj->search('mlf_transactions',"`customer_id`,`reference_number`, `bill_number`, `status`",'reference_number','"'.$refer_num.'"');
        
    //     $res = '<script>document.forms["transaction"]["due_num"].innerHTML = "<option value=\"\"></option>';
    //     while($row = $result->fetch_assoc()){
    //         if($row['status']==1)
    //        $res = $res.'<option value=\"'.$row["bill_number"].'\">'.$row["bill_number"].'</option>';
    //     }

    $res = $res.'"</script>';
    echo $res;
        

?>