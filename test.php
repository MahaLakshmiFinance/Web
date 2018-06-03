
<?php
$today = date("Y/m/d");
$year = $today[0].$today[1].$today[2].$today[3];
$month = $today[5].$today[6];
$day = $today[8].$today[9];
for($i=0;$i<10;$i+=1){
$month=((int)$month) + 1;
if($month==13)
    $month = 1;
$x =  mktime(23, 0, 0, $month,$day, $year);
$duedate = date("Y/m/d",$x);
echo '<br>'.$duedate;
}
?>