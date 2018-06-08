
function chngepwd(form_name){
    var old_pwd = document.forms[form_name]["old_pwd"]

    if(old_pwd.value == ""){
        alert('PLEASE ENTER OLD PASSWORD.')
        old_pwd.focus()
        return false
    }
    var new_pwd = document.forms[form_name]["new_pwd"]
    
    if(new_pwd.value == ""){
        alert('PLEASE ENTER NEW PASSWORD.')
        new_pwd.focus()
        return false
    }
    else if(new_pwd.value.length < 6){
        alert('PASSWORD SHOULD BE ATLEAST SIX CHARACTERS.')
        return false
    }


    var retype_new_pwd = document.forms[form_name]["retype_new_pwd"]
    

    if(retype_new_pwd.value == ""){
        alert('PLEASE RETYPE NEW PASSWORD.')
        retype_new_pwd.focus()
        return false
    }
    else if(new_pwd.value != retype_new_pwd.value){
        alert('BOTH NEW AND RETYPED PASSWORDS MUST BE THE SAME')
        return false
    }

}