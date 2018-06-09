function nav(x){
    $('#subcontent').load('php/content/content1/subcontent'+x+'.php');
}

function verify_usr(){
    $.ajax({
          type: "GET",
          url: "php/content/content1/verify_user.php",
          data: "subcontent_num=4&id="+document.forms["view_user"]["username"].value,
          error: function(msg){
              console.log(msg);
          },
          success: function(msg){
              document.getElementById('temp').innerHTML = "";
               $("#temp").html(msg);
          }
       });
}

function searchname(){
    document.getElementById('error').style="display:none";
    $.ajax({
          type: "GET",
          url: "php/content/content1/search_name.php",
          data: "search="+document.forms["view_user"]["user_names"].value,
          error: function(msg){
              console.log(msg);
          },
          success: function(msg){
              document.getElementById('temp').innerHTML = "";
              $(document).ready(function(){
               $("#temp2").html(msg);
              });
              console.log(msg)
          }
       });
}

function find_usr(){
    var val = document.forms['view_user']['user_names'].value
    if(val != ""){
        val = val.split(" ")
        console.log(val)
        val = val[0]
        var req = document.forms['view_user']['username']
        req.value = val
        verify_usr()
    }
}