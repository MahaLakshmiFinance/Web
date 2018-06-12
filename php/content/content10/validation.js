function check(){

    document.forms['transaction']['transaction_id'].value = gettransactionid()

    var username= document.forms['transaction']['username'];

    if(username.value == ""){
        alert("PLEASE ENTER USER ID.")
        username.focus()
        return false
    }

    var cstmer_name = document.forms['transaction']['cstmr_name'];
    cstmer_name.disabled = false
    if(username.value != ""){
        if(cstmer_name.value == ""){
            alert("PLEASE ENTER CHECK USER ID.")
            username.focus()
            return false
        }
    }
    cstmer_name.disabled = true

    var finance_type = document.forms['transaction']['finance_type'];

    if(finance_type.value == ""){
        alert("PLEASE SELECT FINANCE TYPE.")
        finance_type.focus()
        return false
    }

    var refer_num = document.forms['transaction']['refer_num'];

    if(refer_num.value == ""){
        alert("PLEASE SELECT REFERNECE NUMBER.")
        refer_num.focus()
        return false
    }

    var receipt_id = document.forms['transaction']['receipt_id'];

    if(receipt_id.value == ""){
        alert("PLEASE ENTER THE RECEIPT ID.")
        receipt_id.focus()
        return false
    }


    document.forms['transaction']['transaction_id'].value = gettransactionid()

    document.forms['transaction']['d_amount'].disabled = false;
    document.forms['transaction']['due_amnt_total'].disabled = false;
    document.forms['transaction']['today_date'].disabled = false;
    document.forms['transaction']['transaction_id'].disabled = false;
    document.forms['transaction']['penality_days'].disabled = false;
    document.forms['transaction']['d_penality'].disabled = false;
    document.getElementById('due_dat').style = "";
    
    document.getElementById('due_dat').value = $("#due_date option:selected").text();

}