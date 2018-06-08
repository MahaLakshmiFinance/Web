<?php
    $refer_num = $_REQUEST['refer_num'];
    $finance_type = $_REQUEST['finance_type'];
    $customer_id = $_REQUEST['customer_id'];
    $emi_num = $_REQUEST['emi_num'];
    
    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();

    $date_issue = "";
    $total_emis="";
    if($finance_type == 1){
    
        $result = $dbobj->search('mlf_article_finance',"`customer_id`, `date`, `reference_number`, `approved_amount`, `documentation_charges`, `rate_of_interest`, `total_emis`, `installment_amount`, `total_amount`",'reference_number','"'.$refer_num.'"');
        
        $row = $result->fetch_assoc();
        $inst_due = (int)$row['installment_amount'] ;
        $inst_due *= (int)$emi_num;
        echo '<input style="display:none" value="'.$inst_due.'" id="ab12">';
        $res = '<script>';
        $date_issue = $row["date"];
        $total_emis = (int)$row["total_emis"];
        $res = $res."</script>";
        echo $res;
        }
        else{
            $result = $dbobj->search('mlf_cash_finance',"`customer_id`, `authorised_by`, `date`, `reference_number`, `approved_amount`, `rate_of_interest`, `total_emis`, `installment_amount`, `total_amount`",'reference_number','"'.$refer_num.'"');
        
        $row = $result->fetch_assoc();
        $inst_due = (int)$row['installment_amount'] ;
        $inst_due *= (int)$emi_num;
        echo '<input style="display:none" value="'.$inst_due.'" id="ab12">';

        $res = '<script>document.forms["transaction"]["issued_amount"].value="'.$row["approved_amount"].'";';
        $res = $res.'document.forms["transaction"]["issue_date"].value="'.$row["date"].'";';
        $res = $res.'document.forms["transaction"]["emis"].value="'.$row["total_emis"].'";';
        $res = $res.'document.forms["transaction"]["installment"].value="'.$row["installment_amount"].'";';
        $date_issue = $row["date"];
        $total_emis = (int)$row["total_emis"];
        $res = $res."</script>";
        echo $res;
        }
        


?>