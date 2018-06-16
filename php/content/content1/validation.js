function foundEmpty(x){
    alert("MAKE SURE ALL FIELDS ARE FILLED.")
    x.focus()
}
function incorrectField(x){
    alert("INCORRECT INPUT.")
    x.focus()
}

function user_form(form_name){
    var username_type = document.forms[form_name]["username_type"]

    var role_id = document.forms[form_name]["role_id"]

    var username = document.forms[form_name]["username"]
    if(username.value == ""){
        foundEmpty(username)
        return false
    }
    if(username_type.value==1 || username.value.match(/^[0-9]+$/) == null){
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

    var fname = document.forms[form_name]["fname"]
    if(fname.value == ""){
        foundEmpty(fname)
        return false
    }
    else{
        if(fname.value.match(/^[A-Za-z\s]+$/) == null){
            incorrectField(fname)
            return false
        }
    }

    var lname = document.forms[form_name]["lname"]
    if(lname.value == ""){
        foundEmpty(lname)
        return false
    }
    else{
        if(lname.value.match(/^[A-Za-z\s]+$/) == null){
            incorrectField(lname)
            return false
        }
    }


    var cntact_num = document.forms[form_name]["cntact_num"]
    if(cntact_num.value == ""){
        foundEmpty(cntact_num)
        return false
    }
    else if(cntact_num.value.length != 10 || cntact_num.value.match(/^[0-9]+$/) == null){
        incorrectField(cntact_num)
        return false
    }

    var alt_cntact_num = document.forms[form_name]["alt_cntact_num"]
    if(alt_cntact_num.value != ""){
        if(alt_cntact_num.value.length != 10 || alt_cntact_num.value.match(/^[0-9]+$/) == null){
            incorrectField(alt_cntact_num)
            return false
        }
    }

    var dno = document.forms[form_name]["dno"]
    if(dno.value == ""){
        foundEmpty(dno)
        return false
    }
    else{
        if(dno.value.match(/^[A-Za-z0-9.\/-]+$/) == null){
            incorrectField(dno)
            return false
        }
    }


    var street = document.forms[form_name]["street"]
    if(street.value != ""){
        if(street.value.match(/^[A-Za-z0-9. ]+$/) == null){
            incorrectField(street)
            return false
        }
    }

    
    var locality = document.forms[form_name]["locality"]
    if(locality.value != ""){
        if(locality.value.match(/^[A-Za-z\s]+$/) == null){
            incorrectField(locality)
            return false
        }
    }

    
    var location = document.forms[form_name]["location"]
    if(location.value == ""){
        foundEmpty(location)
        return false
    }
    else{
        if(location.value.match(/^[A-Za-z\s]+$/) == null){
            incorrectField(location)
            return false
        }
    }

    
    var district = document.forms[form_name]["district"]
    if(district.value == ""){
        foundEmpty(district)
        return false
    }
    else{
        if(district.value.match(/^[A-Za-z\s]+$/) == null){
            incorrectField(district)
            return false
        }
    }

    
    var pincode = document.forms[form_name]["pincode"]
    if(pincode.value == ""){
        foundEmpty(pincode)
        return false
    }
    else if(pincode.value.length != 6 || pincode.value.match(/^[0-9]+$/) == null){
        incorrectField(pincode)
        return false
    }
    
    var refer_id = document.forms[form_name]["refer_id"]
    if(refer_id.value != ""){
        var refer_name = document.forms[form_name]["refer_name"]
        if(refer_name.value == ""){
            foundEmpty(refer_name)
            return false
        }
        else{
            if(refer_name.value.match(/^[A-Za-z\s]+$/) == null){
                incorrectField(refer_name)
                return false
            }
        }
    }

    var rle_type = document.getElementById('rle_type');

    if(rle_type.style == ""){

        var role_id1 = document.getElementById('r3');
        var role_id2 = document.getElementById('r4');

        if(role_id1.checked == false && role_id2.checked == false ){
          // role_id = document.getElementById('r3');
            alert('PLEASE SELECT THE ROLE TYPE')
            return false
        }

    }
}

function user_form_modified(form_name){
    var username_type = document.forms[form_name]["username_type"]

    var role_id = document.forms[form_name]["role_id"]

    var username = document.forms[form_name]["username"]
    if(username.value == ""){
        foundEmpty(username)
        return false
    }

    var fname = document.forms[form_name]["fname"]
    if(fname.value == ""){
        foundEmpty(fname)
        return false
    }
    else{
        if(fname.value.match(/^[A-Za-z\s]+$/) == null){
            incorrectField(fname)
            return false
        }
    }

    var lname = document.forms[form_name]["lname"]
    if(lname.value == ""){
        foundEmpty(lname)
        return false
    }
    else{
        if(lname.value.match(/^[A-Za-z\s]+$/) == null){
            incorrectField(lname)
            return false
        }
    }


    var cntact_num = document.forms[form_name]["cntact_num"]
    if(cntact_num.value == ""){
        foundEmpty(cntact_num)
        return false
    }
    else if(cntact_num.value.length != 10 || cntact_num.value.match(/^[0-9]+$/) == null){
        incorrectField(cntact_num)
        return false
    }

    var alt_cntact_num = document.forms[form_name]["alt_cntact_num"]
    if(alt_cntact_num.value != ""){
        if(alt_cntact_num.value.length != 10 || alt_cntact_num.value.match(/^[0-9]+$/) == null){
            incorrectField(alt_cntact_num)
            return false
        }
    }

    var dno = document.forms[form_name]["dno"]
    if(dno.value == ""){
        foundEmpty(dno)
        return false
    }
    else{
        if(dno.value.match(/^[A-Za-z0-9.\/-]+$/) == null){
            incorrectField(dno)
            return false
        }
    }

    
    var location = document.forms[form_name]["location"]
    if(location.value == ""){
        foundEmpty(location)
        return false
    }
    else{
        if(location.value.match(/^[A-Za-z\s]+$/) == null){
            incorrectField(location)
            return false
        }
    }

    
    var district = document.forms[form_name]["district"]
    if(district.value == ""){
        foundEmpty(district)
        return false
    }
    else{
        if(district.value.match(/^[A-Za-z\s]+$/) == null){
            incorrectField(district)
            return false
        }
    }

    
    var pincode = document.forms[form_name]["pincode"]
    if(pincode.value == ""){
        foundEmpty(pincode)
        return false
    }
    else if(pincode.value.length != 6 || pincode.value.match(/^[0-9]+$/) == null){
        incorrectField(pincode)
        return false
    }
    
    var refer_id = document.forms[form_name]["refer_id"]
    if(refer_id.value != ""){
        var refer_name = document.forms[form_name]["refer_name"]
        if(refer_name.value == ""){
            foundEmpty(refer_name)
            return false
        }
        else{
            if(refer_name.value.match(/^[A-Za-z\s]+$/) == null){
                incorrectField(refer_name)
                return false
            }
        }
    }
    
}
