
function chngepwd(form_name){
    alert('dd');
    var old_pwd = document.forms[form_name]["old_pwd"]

    if(old_pwd == ""){
        alert('PLEASE ENTER OLD PASSWORD.')
        return false
    }
    var new_pwd = document.forms[form_name]["new_pwd"]
    

    if(new_pwd == ""){
        alert('PLEASE ENTER NEW PASSWORD.')
        return false
    }
    else if(new_pwd.value.lenght < 6){
        alert('PASSWORD SHOULD BE ATLEAST SIX CHARACTERS.')
        return false
    }


    var retype_new_pwd = document.forms[form_name]["retype_new_pwd"]
    

    if(retype_new_pwd == ""){
        alert('PLEASE RETYPE NEW PASSWORD.')
        return false
    }
    else if(new_pwd.value != retype_new_pwd){
        alert('BOTH NEW AND RETYPED PASSWORDS MUST BE THE SAME')
        return false
    }

    return true
}