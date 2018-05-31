function nav(x){
    $('#subcontent').load('php/content/content6/subcontent'+x+'.php');
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
              url: "php/content/content6/get_user.php",
              data: "username="+document.forms['small_appliances']['username'].value,
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
        url: "php/content/content6/get_serial_num.php",
        error: function(msg){
            console.log(msg);
        },
        success: function(msg){
            $('#temp').html(msg);
            var val = document.getElementById('abc').value
            var yearfrmserial = val[0]+""+val[1]+""+val[2]+""+val[3];
            
            if(yearfrmserial==year){
                var sum = ""
                for(var i=4;i<val.length;i++){
                    sum+=""+val[i]+""
                }
                if(sum[0]==0){
                    sum = "1"+sum
                }
                val = ""+(parseInt(sum)+1)
                sum = ""
                for(var i=1;i<val.length;i++){
                    sum += val[i]+""
                }
                val = year+""+sum
            }
            else{
                val=year+""+'001'
            }
            document.getElementById('in_serial').value = val;
            document.getElementById('in_serial').disabled = true;
            document.getElementById('serial').value = "";
            
     }
    });
}


function get_existing_serial(){
    document.getElementById('serial').style="";
    document.getElementById('in_serial').value = "";
    document.getElementById('in_serial').style="display:none"
    document.forms['small_appliances']['model_name'].disabled = true;
    $.ajax({
        type: "GET",
        url: "php/content/content6/get_existing_serial.php",
        error: function(msg){
            console.log(msg);
        },
        success: function(msg){
            $('#temp').html(msg);
     }
    });

}

function serial_change(){
    $.ajax({
        type: "GET",
        url: "php/content/content6/get_model_name.php",
        data: "serial_num="+document.forms['small_appliances']['serial'].value,
        error: function(msg){
            console.log(msg);
        },
        success: function(msg){
            $('#temp').html(msg);
     }
    });
}

function revert_to_purchase(){
    if(document.getElementById('r1').checked==true){
        document.getElementById('serial').style="display:none"
        document.getElementById('serial').value =""
        document.getElementById('in_serial').style=""
        document.forms['small_appliances']['model_name'].disabled = false;
        document.forms['small_appliances']['model_name'].value = "";
        serialNumb()
    }
}
