
<?php
    session_start();
    $username = $_POST['username'];
    $ref_num = $_POST['article_refno'];
    $date =  $_POST['date'];
    $amount = $_POST['amount'];
    $rt_of_int =  $_POST['rt_of_int'];
    $total_amount = $_POST['total_amount'];
    $refno = $_POST['refno'];

    include_once '../../db_operations.php';

    $dbobj = new DBConnect;

    $dbobj->connect();
        // if(isset($_POST['serial_num']))
        //     $serial_num = $_POST['serial_num'];

        // $year = $serial_num[0]."".$serial_num[1]."".$serial_num[2]."".$serial_num[3];
        // $start_serial = "";
        // for($count=4;$count<strlen($serial_num);$count+=1){
        //     $start_serial = $start_serial."".$serial_num[$count]."";
        // }
        // $serials_list = array($start_serial);
        // for($count=1;$count<$total_emis;$count+=1){
        //     $prev = (int) $serials_list[sizeof($serials_list)-1];
        //     $prev+=1;
        //     if($prev>1 && $prev<=9){
        //         $prev = "0000".$prev;
        //     }
        //     else if($prev>9 && $prev<=99){
        //         $prev = "000".$prev;
        //     }
        //     else if($prev>99 && $prev<=999){
        //         $prev = "00".$prev;
        //     }
        //     else if($prev>999 && $prev<=9999){
        //         $prev = "0".$prev;
        //     }
        //     else if($prev>9999 && $prev<=99999){
        //         $prev = "".$prev;
        //     }
        //     else{
        //         $prev-=1;
        //         $alert = '"'.'SERIAL NUMBER LIMIT EXCEEED.'.'"';
        //         $_SESSION['req_script']="<script>
        //     setTimeout(function(){
        //         document.getElementById('additional').innerHTML = 'sidemenu(3);setTimeout(function(){alert(".$alert.");},20);'
        //     },80);
        //     console.log('".$alert."');
        //     </script>";

        //     echo "<script>         window.top.location = '../../../mlf_home.php';     </script>";
        //        die();
        //     }
        //     array_push($serials_list,$prev);
        //     echo $prev."<br>";
        // }
        $result = $dbobj->search('mlf_cash_finance','`reference_number`','reference_number',$ref_num);

        $row = $result->fetch_assoc();

        if($row){
            $alert = '"'.'PRODUCT ALREADY FINANCED.'.'"';
            $_SESSION['req_script']="<script>
            setTimeout(function(){
                document.getElementById('additional').innerHTML = 'sidemenu(2);setTimeout(function(){alert(".$alert.");},20);'
            },80);
            console.log('".$alert."');
            </script>";

            echo "<script>         window.top.location = '../../../mlf_home.php';     </script>";
            die();
        }

        $columnNames = "(`customer_id`, `authorised_by`, `date`, `bill_number`,`reference_number`, `approved_amount`, `rate_of_interest`, `interest_amount`)";
        $values = '("'.$username.'", "'.$_SESSION['username'].'", "'.$date.'","'.$refno.'" ,"'.$ref_num.'", "'.$amount.'", "'.$rt_of_int.'", "'.$total_amount.'") ';
        $dbobj->insert('mlf_cash_finance',$columnNames,$values);

        $alert = '"'.'PURCHASE COMPLETED.'.'"';
        $_SESSION['req_script']="<script>
        setTimeout(function(){
            document.getElementById('additional').innerHTML = 'sidemenu(3);setTimeout(function(){alert(".$alert.");},20);'
        },80);
        console.log('".$alert."');
        </script>";
        
        echo "<script>         window.top.location = '../../../mlf_home.php';     </script>";
        die();
?>