function nav(x){
    $('#subcontent').load('php/content/content3/subcontent'+x+'.php');
}

function user(){
    $.ajax({
          type: "GET",
          url: "php/content/content4/get_user.php",
          data: "username="+document.forms['']['username'].value,
          error: function(msg){
              console.log(msg);
          },
          success: function(msg){
              $('#temp').html(msg);
       }
   });

}