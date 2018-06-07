function nav(x){
    $('#subcontent').load('php/content/content10/subcontent'+x+'.php');
}

function user(){
    $.ajax({
          type: "GET",
          url: "php/content/content10/get_user.php",
          data: "username="+document.forms['transaction']['username'].value,
          error: function(msg){
              console.log(msg);
          },
          success: function(msg){
              $('#temp').html(msg);
       }
   });

}

function gettransactionid(){
    var d = new Date()
    var year = d.getFullYear()
    $.ajax({
        type: "GET",
        url: "php/content/content10/get_trasaction_id.php",
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
                val=year+""+'000001'
            }
            document.forms['transaction']['transaction_id'].value = val;
            
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

function getFinanceRefer(){
    var fin_type = document.forms['transaction']['finance_type'].value;
    if(fin_type!=1){
        document.getElementById('article1').style="display:none"
    }
    else{
        if(fin_type==1){
            document.getElementById('article1').style=""
        }
    }
    $.ajax({
        type: "GET",
        url: "php/content/content10/get_finance_details.php",
        data: "fin_type="+document.forms['transaction']['finance_type'].value+"&username="+document.forms['transaction']['username'].value,
        error: function(msg){
            console.log(msg);
        },
        success: function(msg){
            $('#temp').html(msg);
     }
 });
}

function getTransactionDetails(){
    $.ajax({
        type: "GET",
        url: "php/content/content10/get_transaction_details.php",
        data: "refer_num="+document.forms['transaction']['refer_num'].value+"&finance_type="+document.forms['transaction']['finance_type'].value,
        error: function(msg){
            console.log(msg);
        },
        success: function(msg){
            $('#temp').html(msg);
     }
    });
}

function getInstallmentDetails(){
    $.ajax({
        type: "GET",
        url: "php/content/content10/getInstallmentDetails.php",
        data: "refer_num="+document.forms['transaction']['refer_num'].value+"&finance_type="+document.forms['transaction']['finance_type'].value+"&customer_id="+document.forms['transaction']['username'].value,
        error: function(msg){
            console.log(msg);
        },
        success: function(msg){
            $('#temp').html(msg);
     }
    });
}