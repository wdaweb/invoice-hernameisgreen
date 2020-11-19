<?php
include_once "base.php";
$period_str=[
    1 =>'1,2 月',
    2 =>'3,4 月',
    3 =>'5,6 月',
    4 =>'7,8 月',
    5 =>'9,10 月',
    6 =>'11,12 月'
];
echo "你要對的發票是".$_GET['year']."年的";
echo $period_str[$_GET['period']]."的發票";

$sql="select * from `invoices` where `period`='{$_GET['period']}' and left(date,4)='{$_GET['year']}' order by date desc";
/* select * from `invoices` where `period`='6' and `date`like '2020_%_% */

echo $sql;

$invoices=$pdo->query($sql)->fetchAll();
echo count($invoices);

/* echo "<pre>";
print_r($invoices);
echo"</pre>"; */


//撈出該期的發票

$sql="select `number`, `type` from `award_numbers` where `year`='{$_GET['year']}' AND `period`='{$_GET['period']}' ";
$recent_award=$pdo->query($sql)->fetchALL(pdo::FETCH_ASSOC);

if(isset ($recent_award)){
     echo "<pre>";
print_r($recent_award);
echo"</pre>";
}else{
    echo"not yet";
}
//開始對獎
?>
單期全部對獎