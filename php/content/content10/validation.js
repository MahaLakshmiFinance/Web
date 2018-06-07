function check(){
    document.forms['transaction']['d_amount'].disabled = false;
    document.forms['transaction']['due_amnt_total'].disabled = false;
    document.forms['transaction']['today_date'].disabled = false;
    document.forms['transaction']['transaction_id'].disabled = false;
    document.forms['transaction']['penality_days'].disabled = false;
    document.forms['transaction']['d_penality'].disabled = false;
    document.getElementById('due_dat').style = "";
    
    document.getElementById('due_dat').value = $("#due_date option:selected").text();

}