function nav(x){
    $('#subcontent').load('php/content/content2/subcontent'+x+'.php');
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
    var day = d.getDate()
    var date = year+"-"+month+"-"+day
    return date
}