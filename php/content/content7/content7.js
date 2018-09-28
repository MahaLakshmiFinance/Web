function nav(x){
    $('#subcontent').load('php/content/content7/subcontent'+x+'.php');
}

function getBalance(){
    $.ajax({
        type: "GET",
        url: "php/content/content7/get_balance.php",
        error: function(msg){
            console.log(msg);
        },
        success: function(msg){
            $('#temp').html(msg);
     }
 });
}

function getPendingFunds(){
    $.ajax({
        type: "GET",
        url: "php/content/content7/pending_amount.php",
        error: function(msg){
            console.log(msg);
        },
        success: function(msg){
            $('#temp').html(msg);
     }
 });
}