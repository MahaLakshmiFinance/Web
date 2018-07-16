function form_verify(){
var username = document.forms['exchange']['username'];

if(username.value == ""){
alert('PLEASE ENTER CUSTOMER ID.');
username.focus()
return false;
}
//document.forms['exchange']['cstmr_name'].disabled = false;
var cstmr_name = document.forms['exchange']['cstmr_name'];

if(cstmr_name.value == "" || cstmr_name.value == " "){
alert('INVALID CUSTOMER ID.');
username.focus()
return false;
}
//document.forms['exchange']['cstmr_name'].disabled = true;

var serial = document.forms['exchange']['serial'];
if(serial.style == "")
    if(serial.value == ""){
    alert('PLEASE SELECT SERIAL NUMBER.');
    serial.focus()
    return false;
    }

var item_cond = document.forms['exchange']['item_cond'];

if(item_cond.value == ""){
alert('PLEASE CHECK THE ITEM CONDITION.');
return false;
}
var model_name = document.forms['exchange']['model_name'];

if(model_name.value == ""){
alert('PLEASE ENTER THE ITEM MODEL.');
model_name.focus()
return false;
}

var cost = document.forms['exchange']['cost'];

if(cost.value == ""){
alert('PLEASE ENTER COST OF THE PRODUCT.');
cost.focus()
return false;
}
if(cost.value < 1 ){
alert("COST SHOULDN'T BE NEGATIVE.");
cost.focus()
return false;
}

var remarks = document.forms['exchange']['remarks'];

if(remarks.value == ""){
alert('PLEASE DESCRIBE THE PRODUCT CONDITION.');
remarks.focus()
return false;
}

document.forms['exchange']['cstmr_name'].disabled = false;
document.forms['exchange']['cntact_num'].disabled = false;
document.forms['exchange']['serial_num1'].disabled = false;
document.forms['exchange']['serial_num2'].disabled = false;
document.forms['exchange']['date'].disabled = false;
document.forms['exchange']['model_name'].disabled = false;


}