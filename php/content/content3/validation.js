function foundEmpty(x){
    alert("MAKE SURE ALL FIELDS ARE FILLED.")
    x.focus()
}

function form_verify(){
    getRefNumb()
    var username = document.forms['cash_finance']['username'];
    if(username.value == ""){
        foundEmpty(username)
        return false;
    }

    var cstmr_name = document.forms['cash_finance']['cstmr_name'];
    cstmr_name.disabled = false;
    if(cstmr_name.value == ""){
        alert("INVALID CUSTOMER ID")
        username.focus();
        return false;
    }
    cstmr_name.disabled = true;
    var article_refno = document.forms['cash_finance']['article_refno'];
    if(article_refno.value == ""){
        foundEmpty(article_refno)
        return false;
    }

    var date = document.forms['cash_finance']['date'];
    if(date.value == ""){
        foundEmpty(date)
        return false;
    }

    var amount = document.forms['cash_finance']['amount'];
    if(amount.value == ""){
        foundEmpty(amount)
        return false;
    }

    var rt_of_int = document.forms['cash_finance']['rt_of_int'];
    if(rt_of_int.value == ""){
        foundEmpty(rt_of_int)
        return false;
    }

    var total_amount = document.forms['cash_finance']['total_amount'];
    total_amount.disabled = false
    if(total_amount.value == ""){
        foundEmpty(total_amount)
        return false;
    }
    total_amount.disabled = true
    //return false

    var refno = document.forms['cash_finance']['refno'];

    if(refno.value == ""){
        foundEmpty(refno)
        return false;
    }
    
    document.forms['cash_finance']['date'].disabled=false;
    document.forms['cash_finance']['total_amount'].disabled=false;
    document.forms['cash_finance']['article_refno'].disabled=false;

    document.getElementById('temp2').style="";

    return false
}