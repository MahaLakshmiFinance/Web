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

function getFinanceRefer(){
    var username = document.forms['transaction']['username'].value;
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