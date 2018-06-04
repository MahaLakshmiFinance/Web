function foundEmpty(x){
    alert("MAKE SURE ALL FIELDS ARE FILLED.")
    x.focus()
}

function form_verify(){
    var username = document.forms['article_finance']['username'];
    if(username.value == ""){
        foundEmpty(username)
        return false;
    }

    var cstmr_name = document.forms['article_finance']['cstmr_name'];
    if(cstmr_name.value == ""){
        alert("INVALID CUSTOMER ID")
        username.focus();
        return false;
    }

    var cntact_num = document.forms['article_finance']['cntact_num'];
    if(cntact_num.value == ""){
        alert("INVALID CUSTOMER")
        username.focus();
        return false;
    }

    var article_id = document.forms['article_finance']['article_id'];
    if(article_id.value == ""){
        foundEmpty(article_id)
        return false;
    }

    var article_type = document.forms['article_finance']['article_type'];
    if(article_type.value == ""){
        foundEmpty(article_type)
        return false;
    }

    var article_mod = document.forms['article_finance']['article_mod'];
    if(article_mod.value == ""){
        foundEmpty(article_mod)
        return false;
    }

    var article_cost = document.forms['article_finance']['article_cost'];
    if(article_cost.value == ""){
        foundEmpty(article_cost)
        return false;
    }

    var article_refno = document.forms['article_finance']['article_refno'];
    if(article_refno.value == ""){
        foundEmpty(article_refno)
        return false;
    }

    var date = document.forms['article_finance']['date'];
    if(date.value == ""){
        foundEmpty(date)
        return false;
    }

    var amount = document.forms['article_finance']['amount'];
    if(amount.value == ""){
        foundEmpty(amount)
        return false;
    }

    if(amount.value>article_cost.value){
        alert('COST OF ARTICLE IS LESS THAN FINANCE ANMOUNT.')
        amount.focus()
        return false
    }

    var doc_charges = document.forms['article_finance']['doc_charges'];
    if(doc_charges.value == ""){
        foundEmpty(doc_charges)
        return false;
    }

    var rt_of_int = document.forms['article_finance']['rt_of_int'];
    if(rt_of_int.value == ""){
        foundEmpty(rt_of_int)
        return false;
    }

    var total_amount = document.forms['article_finance']['total_amount'];
    if(total_amount.value == ""){
        foundEmpty(total_amount)
        return false;
    }

    var emi_type = document.forms['article_finance']['emi_type'];
    if(emi_type.value == ""){
        foundEmpty(emi_type)
        return false;
    }

    var tot_emis = document.forms['article_finance']['tot_emis'];
    if(tot_emis.value == ""){
        foundEmpty(tot_emis)
        return false;
    }

    var inst_amnt = document.forms['article_finance']['inst_amnt'];
    if(inst_amnt.value == ""){
        foundEmpty(inst_amnt)
        return false;
    }
    
    document.forms['article_finance']['date'].disabled=false;
    document.forms['article_finance']['total_amount'].disabled=false;
    document.forms['article_finance']['tot_emis'].disabled=false;
    document.forms['article_finance']['inst_amnt'].disabled=false;
    document.getElementById('temp2').style="";
    
}