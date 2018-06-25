function nav(x){
    $('#subcontent').load('php/content/content5/subcontent'+x+'.php');
}

function cstmr(){
    $.ajax({
          type: "GET",
          url: "php/content/content5/get_cstmr.php",
          data: "username="+document.forms['expenses']['cstmr_id'].value,
          error: function(msg){
              console.log(msg);
          },
          success: function(msg){
              $('#temp').html(msg);
       }
   });

}

function emp(){
    $.ajax({
          type: "GET",
          url: "php/content/content5/get_emp.php",
          data: "username="+document.forms['expenses']['emp_id'].value,
          error: function(msg){
              console.log(msg);
          },
          success: function(msg){
              $('#temp').html(msg);
       }
   });

}

function emp_sal(){
    $.ajax({
          type: "GET",
          url: "php/content/content5/get_emp_sal.php",
          data: "username="+document.forms['expenses']['emp_id'].value,
          error: function(msg){
              console.log(msg);
          },
          success: function(msg){
              $('#temp').html(msg);
       }
   });
}