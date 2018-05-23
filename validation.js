function foundEmpty(x){
    alert("Please fill all the fields.")
    x.focus()
}
function incorrectField(x){
    alert("Please verify the values.")
    x.focus()
}

function user_form(form_name){
    var username_type = document.forms[form_name]["username_type"]
    var role_id = document.forms[form_name]["role_id"]
    var username = document.forms[form_name]["username"]
    var fname = document.forms[form_name]["fname"]
    var lname = document.forms[form_name]["lname"]
    var cntact_num = document.forms[form_name]["cntact_num"]
    var alt_cntact_num = document.forms[form_name]["alt_cntact_num"]
    var dno = document.forms[form_name]["dno"]
    var street = document.forms[form_name]["street"]
    var locality = document.forms[form_name]["locality"]
    var location = document.forms[form_name]["location"]
    var dno = document.forms[form_name]["dno"]
    var street = document.forms[form_name]["street"]
    var locality = document.forms[form_name]["locality"]
    var location = document.forms[form_name]["location"]
    var district = document.forms[form_name]["district"]
    var pincode = document.forms[form_name]["pincode"]
    var refer_id = document.forms[form_name]["refer_id"]
    var refer_name = document.forms[form_name]["refer_name"]

    if(username.value == ""){
        foundEmpty(username)
        return false
    }
    else if(username_type.value==1 || username.value.match(/^[0-9]+$/) == null){
        if(username.value.length != 12){
            incorrectField(username)
            return false
        }
    }
    else{
        if(username.value.length != 10 || username.value.match(/^[0-9]+$/) == null){
            incorrectField(username)
            return false
        }
    }

    if(fname.value == ""){
        foundEmpty(fname)
        return false
    }
    if(lname.value == ""){
        foundEmpty(lname)
        return false
    }

    if(cntact_num.value == ""){
        foundEmpty(cntact_num)
        return false
    }
    else if(cntact_num.value.length != 10 || cntact_num.value.match(/^[0-9]+$/) == null){
        incorrectField(cntact_num)
        return false
    }

    if(alt_cntact_num.value == ""){
        foundEmpty(alt_cntact_num)
        return false
    }
    else if(alt_cntact_num.value.length != 10 || alt_cntact_num.value.match(/^[0-9]+$/) == null){
        incorrectField(alt_cntact_num)
        return false
    }
    return false
}