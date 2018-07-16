function nav(x){
    $('#subcontent').load('php/content/content2/subcontent'+x+'.php');
}

function getSerialNumb(){
    $.ajax({
        type: "GET",
        url: "php/content/content2/get_serial_num.php",
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
            document.forms['article_finance']['serial_num'].value = val;
            
        }
 });
}

function user(){
    $.ajax({
          type: "GET",
          url: "php/content/content2/get_user.php",
          data: "username="+document.forms['article_finance']['username'].value,
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
    month = parseInt(month)<10?'0'+month:month
    var day = d.getDate()
    var date = year+"-"+month+"-"+day
    return date
}

function getTotal(){
    var amt = document.forms['article_finance']['amount'].value
    if(amt == "")
    return
    var rate= document.forms['article_finance']['rt_of_int'].value
    if(rate == "")
     rate = 0
    rate/=100
    var prc_fee= document.forms['article_finance']['doc_charges'].value
    if(prc_fee=="")
     prc_fee = 0
    var int = amt*rate
    var total = parseInt(int) + parseInt(amt)
    document.forms['article_finance']['total_amount'].value = total
    getInsta()
}

function setInstScheme(){
    var val=document.forms['article_finance']['emi_type'].value

    if(val == 1){
        document.forms['article_finance']['inst_amnt'].disabled=true
        document.forms['article_finance']['tot_emis'].disabled=false
        document.forms['article_finance']['inst_amnt'].onchange=""
        document.forms['article_finance']['tot_emis'].onchange="getInsta()"
    }
    if(val == 2){
        document.forms['article_finance']['tot_emis'].disabled=true
        document.forms['article_finance']['inst_amnt'].disabled=false
        document.forms['article_finance']['inst_amnt'].onchange="getMnths()"
        document.forms['article_finance']['tot_emis'].onchange=""
    }
}
function getInsta(){
    var total = document.forms['article_finance']['total_amount'].value
    if(total == "")
    return
    var emi = document.forms['article_finance']['tot_emis'].value
    if(emi =="")
    return
    document.forms['article_finance']['inst_amnt'].value = Math.ceil(total/emi)
	changeInstallment()

}
function getEmi(){
    var total = document.forms['article_finance']['total_amount'].value
    if(total == "")
    return
    var insta = document.forms['article_finance']['inst_amnt'].value
    if(insta =="")
    return
    document.forms['article_finance']['tot_emis'].value = Math.ceil(total/insta)

}