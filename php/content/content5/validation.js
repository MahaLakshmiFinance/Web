function form_verify(x=1){

    var emp_id = document.forms['expenses']['emp_id'];
    if(emp_id.value == ""){
    alert('PLEASE ENTER CUSTOMER ID.');
    emp_id.focus()
    return false;
    }
    var emp_name = document.forms['expenses']['emp_name']
    if(emp_name.value == "" || emp_name.value == " "){
    alert('INVALID EMPLOYEE ID');
    emp_id.focus()
    return false;
    }
    if(x==1){
        var location = document.forms['expenses']['loc']
        if(location.value == ""){
        alert('PLEASE SELECT THE LOCATION');
        location.focus()
        return false;
        }
    }
    if(x==2){

        var cstmr_id = document.forms['expenses']['cstmr_id']
        if(cstmr_id.value == ""){
        alert('PLEASE ENTER CUSTOMER ID.');
        cstmr_id.focus()
        return false;
        }
        var cstmr_name = document.forms['expenses']['cstmr_name']
        if(cstmr_name.value == "" || cstmr_name.value == " "){
        alert('PLEASE ENTER VALID CUSTOMER ID.');
        cstmr_id.focus()
        return false;
        }

        if(cstmr_id.value == emp_id.value){
            alert('DO NOT TRY TO ACT SAMRT')
            cstmr_id.focus()
            return false;
        }

        var expense = document.forms['expenses']['expense']
        if(expense.value == ""){
        alert('PLEASE ENTER EXPENSE AMOUNT.');
        expense.focus()
        return false;
        }

        var col_amt = document.forms['expenses']['col_amt']
        if(col_amt.value == ""){
        alert('PLEASE ENTER COLLECTED AMOUNT.');
        col_amt.focus()
        return false;
        }

        var remarks = document.forms['expenses']['remarks']
        if(remarks.value == ""){
        alert('PLEASE ENTER REMARKS');
        remarks.focus()
        return false;
        }

    }
    if(x==3){

    }

}