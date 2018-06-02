function nav(x){
    $('#subcontent').load('php/content/content2/subcontent'+x+'.php');
}

function user(){
    $.ajax({
          type: "GET",
          url: "php/content/content10/get_user.php",
          data: "username="+document.forms['article_finance']['username'].value,
          error: function(msg){
              console.log(msg);
          },
          success: function(msg){
              $('#temp').html(msg);
       }
   });

}