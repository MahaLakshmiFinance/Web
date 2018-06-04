<?php
    $refer_num = $_REQUEST['refer_num'];
    $finance_type = $_REQUEST['finance_type'];

    session_start();
    
    include_once '../../db_operations.php';
    
    $dbobj = new DBConnect;
    
    $dbobj->connect();

    if($finance_type == 1){
    
        $result = $dbobj->search('mlf_article_finance',"`customer_id`, `authorised_by`, `article_id`, `article_type`, `article_model`, `article_cost`, `date`, `reference_number`, `approved_amount`, `documentation_charges`, `rate_of_interest`, `total_emis`, `installment_amount`, `total_amount`",'reference_number','"'.$refer_num.'"');
        
        $row = $result->fetch_assoc();


        $res = '<script>document.forms["transaction"]["item_type"].value="'.$row["article_type"].'";';
        $res = $res.'document.forms["transaction"]["id"].value="'.$row["article_id"].'";';
        $res = $res.'document.forms["transaction"]["model"].value="'.$row["article_model"].'";';
        $res = $res.'document.forms["transaction"]["cost"].value="'.$row["article_cost"].'";';
        $res = $res.'document.forms["transaction"]["issued_amount"].value="'.$row["approved_amount"].'";';
        $res = $res.'document.forms["transaction"]["issue_date"].value="'.$row["date"].'";';

        $res = $res."</script>";
        echo $res;
        }else{
            $result = $dbobj->search('mlf_cash_finance',"`customer_id`, `authorised_by`, `date`, `reference_number`, `approved_amount`, `rate_of_interest`, `total_emis`, `installment_amount`, `total_amount`",'reference_number','"'.$refer_num.'"');
        
        $row = $result->fetch_assoc();


        $res = '<script>document.forms["transaction"]["issued_amount"].value="'.$row["approved_amount"].'";';
        $res = $res.'document.forms["transaction"]["issue_date"].value="'.$row["date"].'";';

        $res = $res."</script>";
        echo $res;

        }

        $result = $dbobj->search('mlf_transactions',"`customer_id`, `authorised_by`, `reference_number`, `bill_number`, `due_date`, `due_amount`, `penality_days`, `penality_amount`, `amount_paid`, `last_transaction`, `status`",'reference_number','"'.$refer_num.'"');
        
        $res = '<script>document.getElementById("table_transactions").innerHTML = "<tr>\
        <th>Due Number</th>\
        <th>Due Date</th>\
        <th>Due Amount</th>\
        <th>Penality Days</th>\
        <th>Penality Amount</th>\
        <th>Amount Paid</th>\
        <th>Last Transaction</th>\
        <th>Status</th>\
      </tr>';
            $paid = 0;
            $status = "CLOSED";
            $amount = 0;
            $penality_amt = 0;
        while($row = $result->fetch_assoc()){
            $res = $res.'<tr>';
            $res = $res.'<td>'.$row["bill_number"].'</td>';
            $res = $res.'<td>'.$row["due_date"].'</td>';
            $amount += $row['due_amount'];
            $res = $res.'<td>'.$row["due_amount"].'</td>';
            $now = time(); // or your date as well
            $your_date = strtotime($row["due_date"]);
            $datediff = $now - $your_date;
            $days = floor($datediff / (60 * 60 * 24));
            if($days>0 && $row['status']==1){
                $res = $res.'<td>'.$days.'</td>';
                $penality = $days*50;
                $res = $res.'<td>'.$penality.'</td>';
                $penality_amt += $penality;
            }
            else{
                $res = $res.'<td>0</td>';
                $res = $res.'<td>0</td>';
            }
            $res = $res.'<td>'.$row["amount_paid"].'</td>';
            $amount += $row['amount_paid'];
            $res = $res.'<td>'.$row["last_transaction"].'</td>';
            if($row["status"]==1){
            $res = $res.'<td>OPEN</td>';
            $status = "OPEN";
            }
            else{
            $res = $res.'<td>CLOSED</td>';
            }
            $res = $res.'</tr>';
            $paid = (int)$paid+$row["amount_paid"];

        }
        $res = $res.'<tfoot><tr>\
      <th id=\"total\" colspan=\"2\">Overall Details</th>\
      <td  colspan=\"3\">'.$amount.'</td>\
      <td  colspan=\"2\">'.$paid.'</td>\
      <th>'.$status.'</th>\
    </tr></tfoot>';

    $res = $res.'</table>"</script>';
    echo $res;

    $result = $dbobj->search('mlf_transactions',"`customer_id`,`reference_number`, `bill_number`, `status`",'reference_number','"'.$refer_num.'"');
        
        $res = '<script>document.forms["transaction"]["due_num"].innerHTML = "<option value=\"\"></option>';
        while($row = $result->fetch_assoc()){
            if($row['status']==1)
           $res = $res.'<option value=\"'.$row["bill_number"].'\">'.$row["bill_number"].'</option>';
        }

    $res = $res.'"</script>';
    echo $res;
        

?>