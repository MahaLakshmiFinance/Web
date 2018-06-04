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