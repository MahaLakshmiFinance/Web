function check(){

    document.forms['transaction']['transaction_id'].disabled = false

    gettransactionid()

    document.forms['transaction']['transaction_id'].disabled = true

    var username= document.forms['transaction']['username'];

    if(username.value == ""){
        alert("PLEASE ENTER USER ID.")
        username.focus()
        return false
    }

    var cstmer_name = document.forms['transaction']['cstmr_name'];
        if(cstmer_name.value == "" || cstmer_name.value == " "){
            alert("PLEASE CHECK USER ID.")
            username.focus()
            return false
        }

    var finance_type = document.forms['transaction']['finance_type'];

    if(finance_type.value == ""){
        alert("PLEASE SELECT FINANCE TYPE.")
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
    var due_num = document.forms['transaction']['due_num'];

    if(due_num.value == ""){
        alert("PLEASE SELECT THE DUE DATE.")
        due_num.focus()
        return false
    }
    var amount = document.forms['transaction']['amount'];

    if(amount.value == ""){
        alert("PLEASE ENTER AMOUNT THE PAID.")
        amount.focus()
        return false
    }

    var ispen = document.forms['transaction']['ispen'];

    if(ispen.checked){

        var penality_rate = document.forms['transaction']['penality_rate'];

        if(penality_rate.value == ""){
            alert("PLEASE SELECT PENALITY RATE.")
            penality_rate.focus()
            return false
        }

        var penality = document.forms['transaction']['penality'];

        if(penality.value == ""){
            alert("PLEASE ENTER PENAILTY AMOUNT PAID.")
            penality.focus()
            return false
        }
        
    }

    document.forms['transaction']['d_amount'].disabled = false;
    document.forms['transaction']['due_amnt_total'].disabled = false;
    document.forms['transaction']['today_date'].disabled = false;
    document.forms['transaction']['transaction_id'].disabled = false;
    document.forms['transaction']['penality_days'].disabled = false;
    document.forms['transaction']['d_penality'].disabled = false;
    document.getElementById('due_dat').style = "";
    document.getElementById('due_dat').value = $("#due_date option:selected").text();



}