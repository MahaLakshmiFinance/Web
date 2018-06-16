function nav(x){
    $('#subcontent').load('php/content/content3/subcontent'+x+'.php');
}
function getRefNumb(){
    $.ajax({
        type: "GET",
        url: "php/content/content3/get_ref_num.php",
        error: function(msg){
            console.log(msg);
        },
        success: function(msg){
            $('#temp').html(msg);
            var d = new Date()
            var year = d.getFullYear()
            var val = document.getElementById('def').value
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
                val=year+""+'00001'
            }
            document.forms['cash_finance']['article_refno'].value = val;
            //get_existing_serial
        }
 });
}

function getSerialNumb(){
    $.ajax({
        type: "GET",
        url: "php/content/content3/get_serial_num.php",
        error: function(msg){
            console.log(msg);
        },
        success: function(msg){
            $('#temp').html(msg);
            var d = new Date()
            var year = d.getFullYear()
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
                val=year+""+'00001'
            }
            document.forms['cash_finance']['serial_num'].value = val;
            //get_existing_serial
        }
 });
}

function user(){
    $.ajax({
          type: "GET",
          url: "php/content/content3/get_user.php",
          data: "username="+document.forms['cash_finance']['username'].value,
          error: function(msg){
              console.log(msg);
          },
          success: function(msg){
              $('#temp').html(msg);
       }
   });

}

function getTheDate(){

    var d = new Date()
    var year = d.getFullYear()
    var month = d.getMonth()+1
    var day = d.getDate()
    var date = year+"-"+month+"-"+day
    return date
}

function getTotal(){
    var amt = document.forms['cash_finance']['amount'].value
    if(amt == "")
    return
    var rate= document.forms['cash_finance']['rt_of_int'].value
    if(rate == "")
     rate = 0
    rate/=100
    var int = amt*rate
    var total = parseInt(int)/12
    document.forms['cash_finance']['total_amount'].value = total
}

function setInstScheme(){
    var val=document.forms['cash_finance']['emi_type'].value

    if(val == 1){
        document.forms['cash_finance']['inst_amnt'].disabled=true
        document.forms['cash_finance']['tot_emis'].disabled=false
        document.forms['cash_finance']['inst_amnt'].onchange=""
        document.forms['cash_finance']['tot_emis'].onchange="getInsta()"
    }
    if(val == 2){
        document.forms['cash_finance']['tot_emis'].disabled=true
        document.forms['cash_finance']['inst_amnt'].disabled=false
        document.forms['cash_finance']['inst_amnt'].onchange="getMnths()"
        document.forms['cash_finance']['tot_emis'].onchange=""
    }
}
function getInsta(){
    var total = document.forms['cash_finance']['total_amount'].value
    if(total == "")
    return
    var emi = document.forms['cash_finance']['tot_emis'].value
    if(emi =="")
    return
    document.forms['cash_finance']['inst_amnt'].value = Math.ceil(total/emi)

}
function getEmi(){
    var total = document.forms['cash_finance']['total_amount'].value
    if(total == "")
    return
    var insta = document.forms['cash_finance']['inst_amnt'].value
    if(insta =="")
    return
    document.forms['cash_finance']['tot_emis'].value = Math.ceil(total/insta)

}