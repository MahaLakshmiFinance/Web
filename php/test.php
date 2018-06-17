<?php
$date = date("Y/m/d");
echo $date;

$date1 = date("2018/05/12");
$date_issue = $date1;
$date2 = $date;

$ts1 = strtotime($date1);
$ts2 = strtotime($date2);

$year1 = date('Y', $ts1);
$year2 = date('Y', $ts2);

$month1 = date('m', $ts1);
$month2 = date('m', $ts2);

$diff =(int) (($year2 - $year1) * 12) + ($month2 - $month1);

echo $diff;
$year = $date_issue[0].$date_issue[1].$date_issue[2].$date_issue[3];
$month = $date_issue[5].$date_issue[6];
$day = $date_issue[8].$date_issue[9];
$test = 0;
for($count=0;$count<$diff;$count+=1){
    $month=(int)$month + 1;
if($month==13){
    $month = 1;
    $year = (int)$year+1;
}
$x =  mktime(23, 0, 0, $month,$day, $year);
$duedate = date("Y/m/d",$x);
$test = (int)$count +1;
}
$duedate = date($year.'/'.$month.'/'.$day);
echo $test;

?>