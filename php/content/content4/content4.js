function nav(x){
    $('#subcontent').load('php/content/content4/subcontent'+x+'.php');
}

function getTheDate(){

    var d = new Date()
    var year = d.getFullYear()
    var month = d.getMonth()+1
    var day = d.getDate()
    var date = year+"-"+month+"-"+day
    return date
}

function user(){
        $.ajax({
              type: "GET",
              url: "php/content/content4/get_user.php",
              data: "username="+document.forms['exchange']['username'].value,
              error: function(msg){
                  console.log(msg);
              },
              success: function(msg){
                  $('#temp').html(msg);
           }
       });

}

function serialNumb(){
    var d = new Date()
    var year = d.getFullYear()
    $.ajax({
        type: "GET",
        url: "php/content/content4/get_serial_num.php",
        error: function(msg){
            console.log(msg);
        },
        success: function(msg){
            $('#temp').html(msg);
            var val = document.getElementById('abc').value
            var yearfrmserial = val[0]+""+val[1]+""+val[2]+""+val[3];
            
            if(yearfrmserial==year){
                val=parseInt(val)+1
            }
            else{
                val=year+""+'001'
            }
            document.forms['exchange']['serial_num'].value = val;
            document.forms['exchange']['serial_num'].disabled = true;
     }
    });
}