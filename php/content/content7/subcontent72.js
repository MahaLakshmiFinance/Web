function getUsers(){
    this.users = null
    var info = document.forms["reports_article_finance"]["condition1"].value
    document.getElementById('table_transactions').innerHTML = '<tr>\
    <th>Customer Id</th>\
    <th>Article Id</th>\
    <th>Date</th>\
    <th>Finance Ref..No</th>\
    <th>No.of EMI</th>\
    <th>Amount</th>\
  </tr>'
    $.ajax({
        type: "POST",
        url: "php/content/content7/get_users.php",
        data: "condition="+info,
        error: function(msg){
            console.log(msg);
        },
        success: function(msg){
            this.users = msg
            this.users = this.users.split('<br>')

            this.users[0] = this.users[0].split('</script>')
            this.users[0] = this.users[0][this.users[0].length-1]
            this.users.length = this.users.length-1
            //console.log(this.users)
            
            var i=0;
            if(this.users.length>0)
            var interval = setInterval(function(){
                var user = this.users[i++]
                $.ajax({
                    type: "POST",
                    url: "php/content/content7/get_users_articles.php",
                    data: "reference_number="+user,
                    async: false,
                    error: function(msg){
                        console.log(msg);
                    },
                    success: function(msg){
                        //$('#temp').html(msg);
                        console.log(user+":"+msg)
                        if(msg.split('<br>').length>=1)
                        document.getElementById('table_transactions').innerHTML += '<tr><td>'+msg+'</td></tr>'
                    }
                });
                if(i==this.users.length){
                    clearInterval(interval)
                    document.getElementById('footer_table').innerHTML = '<tr>\
                    <th id="total" colspan="6" style="text-align:center">THE END!</th>\
                    <!--<td  colspan="6" ></td>-->\
                  </tr>'
                }
            }.bind(this),100);

            document.getElementById('table_transactions').innerHTML += '<tfoot id="footer_table">\
            <tr>\
              <th id="total" colspan="6" style="text-align:center">loading..</th>\
              <!--<td  colspan="6" ></td>-->\
            </tr>\
           </tfoot>'
     }
    });
}