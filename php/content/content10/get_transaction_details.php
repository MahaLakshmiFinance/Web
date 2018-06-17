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
    
        $result = $dbobj->search('mlf_article_finance',"`customer_id`, `authorised_by`, `article_id`, `article_type`, `article_model`, `article_cost`, `date`, `reference_number`, `article_bill_number`, `approved_amount`, `documentation_charges`, `rate_of_interest`, `total_emis`, `installment_amount`, `total_amount`",'reference_number','"'.$refer_num.'"');
        
        $row = $result->fetch_assoc();


        $res = '<script>document.forms["transaction"]["item_type"].value="'.$row["article_type"].'";';
        $res = $res.'document.forms["transaction"]["id"].value="'.$row["article_id"].'";';
        $res = $res.'document.forms["transaction"]["model"].value="'.$row["article_model"].'";';
        $res = $res.'document.forms["transaction"]["cost"].value="'.$row["article_cost"].'";';
        $res = $res.'document.forms["transaction"]["issued_amount"].value="'.$row["approved_amount"].'";';
        $res = $res.'document.forms["transaction"]["issue_date"].value="'.$row["date"].'";';
        $res = $res.'document.forms["transaction"]["emis"].value="'.$row["total_emis"].'";';
        $res = $res.'document.forms["transaction"]["finace_ref"].value="'.$row["article_bill_number"].'";';
        $res = $res.'document.forms["transaction"]["installment"].value="'.$row["installment_amount"].'";';
        $date_issue = $row["date"];
        $total_emis = (int)$row["total_emis"];
        $res = $res."</script>";
        echo $res;
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
        $test = (int)$count +1;
            $res = $res.'<option value=\"'.$test.'\">'.$duedate.'</option>';
        }

    $res = $res.'"</script>';
    echo $res;

        }
        if($finance_type == 2){
            $result = $dbobj->search('mlf_cash_finance',"`customer_id`, `date`, `reference_number`, `approved_amount`, `rate_of_interest`,`interest_amount`,`bill_number`",'reference_number','"'.$refer_num.'"');
        
        $row = $result->fetch_assoc();


        $res = '<script>document.forms["transaction"]["issued_amount"].value="'.$row["approved_amount"].'";';
        $res = $res.'document.forms["transaction"]["issue_date"].value="'.$row["date"].'";';
        $res = $res.'document.forms["transaction"]["finace_ref"].value="'.$row["bill_number"].'";';
        $res = $res.'document.forms["transaction"]["installment"].value="'.$row["interest_amount"].'";';
        $date_issue = $row["date"];

        }
        $result = $dbobj->search('mlf_transactions',"`reference_number`, `transaction_id`, `due_date`, `due_amount`, `penality_days`, `penality_amount`, `due_amount_paid`, `penality_amount_paid`, `transaction_date`",'reference_number','"'.$refer_num.'"');
        
       $res = '<script>document.getElementById("table_transactions").innerHTML = "<tr>\
       <th>Transaction Id</th>\
       <th>Due Date</th>\
       <th>Due Amount</th>\
       <th>Penality Days</th>\
       <th>Penality Amount</th>\
       <th>Due Amount Paid</th>\
       <th>Penality Amount Paid</th>\
       <th>Transaction Date</th>\
     </tr>';
     $paid = 0;
      while($row = $result->fetch_assoc()){
            $res = $res.'<tr><td>'.$row["transaction_id"].'</td>';
            $res = $res.'<td>'.$row["due_date"].'</td>';
            $res = $res.'<td>'.$row["due_amount"].'</td>';
            $res = $res.'<td>'.$row["penality_days"].'</td>';
            $res = $res.'<td>'.$row["penality_amount"].'</td>';
            $res = $res.'<td>'.$row["due_amount_paid"].'</td>';
            $paid = $paid + (int) $row["due_amount_paid"];
            $res = $res.'<td>'.$row["penality_amount_paid"].'</td>';
            $res = $res.'<td>'.$row["transaction_date"].'</td></tr>';
         }

         $res = $res.'<tfoot>\
         <tr>\
           <th id=\"total\" colspan=\"2\">Overall Details</th>\
           <td  colspan=\"6\" ></td>\
         </tr>\
        </tfoot>";document.forms["transaction"]["due_amnt_total"].value = '.$paid.'</script>';
    echo $res;

    function cashdue($date_issue){
        global $date_issue;

        $res = $res."</script>";
        echo $res;

        $date = date("Y/m/d");

        $date1 = $date_issue;
        $date2 = $date;

$ts1 = strtotime($date1);
$ts2 = strtotime($date2);

$year1 = date('Y', $ts1);
$year2 = date('Y', $ts2);

$month1 = date('m', $ts1);
$month2 = date('m', $ts2);

$diff =(int) (($year2 - $year1) * 12) + ($month2 - $month1);

        $year = $date_issue[0].$date_issue[1].$date_issue[2].$date_issue[3];
        $month = $date_issue[5].$date_issue[6];
        $day = $date_issue[8].$date_issue[9];
        $res = '<script>document.forms["transaction"]["due_num"].innerHTML = "<option value=\"\"></option>';
        $test = 0;
        for($count=0;$count<$diff;$count+=1){
            $month=(int)$month + 1;
        if($month==13){
            $month = 1;
            $year = (int)$year+1;
        }
        $x =  mktime(23, 0, 0, $month,$day, $year);
        $duedate = date("Y/m/d",$x);
        $test = (int)$count +1;
        }
        $duedate = date($year.'/'.$month.'/'.$day);
        $res = $res.'<option value=\"'.$test.'\">'.$duedate.'</option>';
        

    $res = $res.'"</script>';
    echo $res;
    }
        
        

?>