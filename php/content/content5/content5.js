function nav(x){
    $('#subcontent').load('php/content/content5/subcontent'+x+'.php');
}

function user(){
    $.ajax({
          type: "GET",
          url: "php/content/content5/get_user.php",
          data: "username="+document.forms['expenses']['username'].value,
          error: function(msg){
              console.log(msg);
          },
          success: function(msg){
              $('#temp').html(msg);
       }
   });

}

function addpen(){
    document.getElementById('penality_group').style.display = document.getElementById('penality_group').style.display === 'none' ? '' : 'none';
}