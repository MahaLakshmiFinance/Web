function form_verify(){
    var username = document.forms['exchange']['username'].value;

    if(username == ""){
        alert('PLEASE ENTER CUSTOMER ID.');
        document.forms['exchange']['username'].focus()
        return false;
    }

    var cstmr_name = document.forms['exchange']['cstmr_name'].value;
    
        if(cstmr_name == ""){
            alert('PLEASE ADD THE CUSTOMER TO DATABASE FIRST.');
            document.forms['exchange']['cstmr_name'].focus()
            return false;
        }

        var item_cond = document.forms['exchange']['item_cond'].value;
        
            if(item_cond == ""){
                alert('PLEASE CHECK THE ITEM CONDITION.');
                document.forms['exchange']['item_cond'].focus()
                return false;
            }
            var model_name = document.forms['exchange']['model_name'].value;
            
                if(model_name == ""){
                    alert('PLEASE ENTER THE ITEM MODEL.');
                    document.forms['exchange']['model_name'].focus()
                    return false;
                }

                var cost = document.forms['exchange']['cost'].value;
                
                    if(cost == ""){
                        alert('PLEASE ENTER COST OF THE PRODUCT.');
                        document.forms['exchange']['cost'].focus()
                        return false;
                    }
                    if(cost < 1 ){
                        alert("COST SHOULDN'T BE NEGATIVE.");
                        document.forms['exchange']['cost'].focus()
                        return false;
                    }

                    var remarks = document.forms['exchange']['remarks'].value;
                    
                        if(remarks == ""){
                            alert('PLEASE DESCRIBE THE PRODUCT CONDITION.');
                            document.forms['exchange']['cost'].focus()
                            return false;
                        }


    return true;

}