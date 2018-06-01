
<?php
    session_start();
    $actn = $_POST['type'];
    $username = $_POST['username'];
    $item_type = $_POST['item_type'];
    $model_name = $_POST['model_name'];
    $date =  $_POST['date'];
    $total_cost = $_POST['cost'];

    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->connect();

    if($actn==0){
        $quantity = $_POST['quantity'];
        if(isset($_POST['serial_num1']))
            $serial_num = $_POST['serial_num1'];

        $total_cost = $total_cost/$quantity;

        $year = $serial_num[0]."".$serial_num[1]."".$serial_num[2]."".$serial_num[3];
        $start_serial = "";
        for($count=4;$count<strlen($serial_num);$count+=1){
            $start_serial = $start_serial."".$serial_num[$count]."";
        }

        $serials_list = array($start_serial);
        for($count=1;$count<$quantity;$count+=1){
            $prev = (int) $serials_list[sizeof($serials_list)-1];
            $prev+=1;
            if($prev>1 && $prev<=9){
                $prev = "0000".$prev;
            }
            else if($prev>9 && $prev<=99){
                $prev = "000".$prev;
            }
            else if($prev>99 && $prev<=999){
                $prev = "00".$prev;
            }
            else if($prev>999 && $prev<=9999){
                $prev = "0".$prev;
            }
            else if($prev>9999 && $prev<=99999){
                $prev = "".$prev;
            }
            else{
                $prev-=1;
                $alert = '"'.'SERIAL NUMBER LIMIT EXCEEED.'.'"';
                $_SESSION['req_script']="<script>
            setTimeout(function(){
                document.getElementById('additional').innerHTML = 'sidemenu(6);setTimeout(function(){alert(".$alert.");},20);'
            },80);
            console.log('".$alert."');
            </script>";

                header('Location: ../../../mlf_home.php');
                die();
            }
            array_push($serials_list,$prev);
        }

        $result = $dbobj->search('mlf_accessories_purchase','serial_number','serial_number',$serial_num);

        $row = $result->fetch_assoc();

        if($row){
            $alert = '"'.'PRODUCT ALREADY PURCHASED.'.'"';
            $_SESSION['req_script']="<script>
            setTimeout(function(){
                document.getElementById('additional').innerHTML = 'sidemenu(6);setTimeout(function(){alert(".$alert.");},20);'
            },80);
            console.log('".$alert."');
            </script>";

            header('Location: ../../../mlf_home.php');
            die();
        }
    

        $columnNames = "(`serial_number`, `transaction_by`, `purchased_from`, `purchased_date`, `purchased_cost`, `is_sold`, `item_name`, `item_type`)";
        for($count=0;$count<$quantity;$count+=1){
            $values = '("'.$year.$serials_list[$count].'", "'.$_SESSION['username'].'", "'.$username.'", "'.$date.'", "'.$total_cost.'", "'.$actn.'", "'.$model_name.'", "'.$item_type.'") ';
            $dbobj->insert('mlf_accessories_purchase',$columnNames,$values);
        }
        $alert = '"'.'PURCHASE COMPLETED.'.'"';
        $_SESSION['req_script']="<script>
        setTimeout(function(){
            document.getElementById('additional').innerHTML = 'sidemenu(6);setTimeout(function(){alert(".$alert.");},20);'
        },80);
        console.log('".$alert."');
        </script>";
        
        header('Location: ../../../mlf_home.php');
        die();
    }
    else{
        if(isset($_POST['serial_num2']))
            $serial_num = $_POST['serial_num2'];
        $result = $dbobj->search('mlf_accessories_purchase','serial_number, is_sold','serial_number',$serial_num);

        $row = $result->fetch_assoc();

        if(!$row){
            $alert = '"'.'SERIAL NUMBER DOES NOT EXIST.'.'"';
    $_SESSION['req_script']="<script>
    setTimeout(function(){
        document.getElementById('additional').innerHTML = 'sidemenu(6);setTimeout(function(){alert(".$alert.");},20);'
    },80);
    </script>";
    
    header('Location: ../../../mlf_home.php');
            die();
        }
        else if($row['is_sold']==1){
            $alert = '"'.'PRODUCT WAS ALREADY SOLD.'.'"';
    $_SESSION['req_script']="<script>
    setTimeout(function(){
        document.getElementById('additional').innerHTML = 'sidemenu(6);setTimeout(function(){alert(".$alert.");},20);'
    },80);
    </script>";
    
    header('Location: ../../../mlf_home.php');
            die();
        }

        $columnNames = "(`serial_number`, `transaction_by` , `item_name`, `item_type`, `sold_to`, `sold_date`, `sold_cost`)";
        
        $values = '("'.$serial_num.'", "'.$_SESSION['username'].'", "'.$model_name.'", "'.$item_type.'", "'.$username.'", "'.$date.'", "'.$total_cost.'") ';
        
        $dbobj->insert('mlf_accessories_sold',$columnNames,$values);

        $dbobj->update('mlf_accessories_purchase','is_sold','1','serial_number',$serial_num);

        $alert = '"'.'SUCESSFULLY SOLD THE PRODUCT'.'"';
    $_SESSION['req_script']="<script>
    setTimeout(function(){
        document.getElementById('additional').innerHTML = 'sidemenu(6);setTimeout(function(){alert(".$alert.");},20);'
    },80);
    </script>";
    
    header('Location: ../../../mlf_home.php');
    die();

    }
?>