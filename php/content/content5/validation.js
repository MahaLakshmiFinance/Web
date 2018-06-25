function form_verify(){

var emp_id = document.forms['expenses']['emp_id'];
if(emp_id.value == ""){
alert('PLEASE ENTER CUSTOMER ID.');
emp_id.focus()
return false;
}

var location = document.forms['expenses']['loc']
if(location.value == ""){
alert('PLEASE SELECT THE LOCATION');
location.focus()
return false;
}

}