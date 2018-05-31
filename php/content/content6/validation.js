function form_verify(){
var type = document.forms['small_appliances']['type'];
var username = document.forms['small_appliances']['username'];

if(username.value == ""){
alert('PLEASE ENTER CUSTOMER ID.');
username.focus()
return false;
}
document.forms['small_appliances']['cstmr_name'].disabled = false;
var cstmr_name = document.forms['small_appliances']['cstmr_name'];

if(cstmr_name.value == ""){
alert('PLEASE ADD THE CUSTOMER TO DATABASE FIRST.');
cstmr_name.focus()
document.forms['small_appliances']['cstmr_name'].disabled = true;
return false;
}

var serial = document.forms['small_appliances']['serial'];
if(serial.style == "")
    if(serial.value == ""){
    alert('PLEASE SELECT SERIAL NUMBER.');
    serial.focus()
    return false;
    }

var item_cond = document.forms['small_appliances']['item_cond'];

if(item_cond.value == ""){
alert('PLEASE CHECK THE ITEM CONDITION.');
return false;
}
var model_name = document.forms['small_appliances']['model_name'];

if(model_name.value == ""){
alert('PLEASE ENTER THE ITEM MODEL.');
model_name.focus()
return false;
}

var cost = document.forms['small_appliances']['cost'];

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

var remarks = document.forms['small_appliances']['remarks'];

if(remarks.value == ""){
alert('PLEASE DESCRIBE THE PRODUCT CONDITION.');
remarks.focus()
return false;
}

document.forms['small_appliances']['cstmr_name'].disabled = false;
document.forms['small_appliances']['cntact_num'].disabled = false;
document.forms['small_appliances']['serial_num1'].disabled = false;
document.forms['small_appliances']['serial_num2'].disabled = false;
document.forms['small_appliances']['date'].disabled = false;
document.forms['small_appliances']['model_name'].disabled = false;


}