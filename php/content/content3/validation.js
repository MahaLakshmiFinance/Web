function foundEmpty(x){
    alert("MAKE SURE ALL FIELDS ARE FILLED.")
    x.focus()
}

function form_verify(){
    var username = document.forms['cash_finance']['username'];
    if(username.value == ""){
        foundEmpty(username)
        return false;
    }

    var cstmr_name = document.forms['cash_finance']['cstmr_name'];
    if(cstmr_name.value == ""){
        alert("INVALID CUSTOMER ID")
        username.focus();
        return false;
    }
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
    if(total_amount.value == ""){
        foundEmpty(total_amount)
        return false;
    }

    var emi_type = document.forms['cash_finance']['emi_type'];
    if(emi_type.value == ""){
        foundEmpty(emi_type)
        return false;
    }

    var tot_emis = document.forms['cash_finance']['tot_emis'];
    if(tot_emis.value == ""){
        foundEmpty(tot_emis)
        return false;
    }

    var inst_amnt = document.forms['cash_finance']['inst_amnt'];
    if(inst_amnt.value == ""){
        foundEmpty(inst_amnt)
        return false;
    }
    
    document.forms['cash_finance']['date'].disabled=false;
    document.forms['cash_finance']['total_amount'].disabled=false;
    document.forms['cash_finance']['tot_emis'].disabled=false;
    document.forms['cash_finance']['inst_amnt'].disabled=false;
    document.getElementById('temp2').style="";
    
}