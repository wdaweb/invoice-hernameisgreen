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

/* echo $sql; */

$invoices=$pdo->query($sql)->fetchAll();
echo count($invoices);

/* echo "<pre>";
print_r($invoices);
echo"</pre>"; */


//撈出該期的發票

$sql="select `number`, `type` from `award_numbers` where `year`='{$_GET['year']}' AND `period`='{$_GET['period']}' ";
$recent_award=$pdo->query($sql)->fetchALL(pdo::FETCH_ASSOC);

/* if(isset ($recent_award)){
     echo "<pre>";
print_r($recent_award);
echo"</pre>";
}else{
    echo"not yet";
} */
//開始對獎

foreach($invoices as $inv){
    //對獎程式
$number=$inv['number'];

$date=$inv['date'];

$year=explode('-', $date)[0];
$period=ceil(explode('-', $date)[1]/2);

$awards=$pdo->query("select * from award_numbers where year='$year' && period='$period'")->fetchAll();



$all_res=-1;

foreach($recent_award as $award){
    switch($award['type']){
        case 1:
            /* 特別號 */
            if($award['number']==$number){
                echo "<br>號碼=".$number."<br>";
                echo "congrats! you've won the 特別獎!";

            }/* else{
                echo "aww nope<br>";
            } */
           
        break;
        case 2:
            /* 1st prize */
            if($award['number']==$number){
                echo "<br>號碼=".$number."<br>";
                $all_res=1;
                echo "congrats! you've won the 特獎!";
            }
        break;
        case 3:
            $res=-1;
            for($i=5;$i>=0;$i--){
                $target=mb_substr($award['number'], $i,(8-$i),'utf8' );
                $mynumber=mb_substr($number, $i,(8-$i),'utf8' );
            
            if($target==$mynumber){
         /*        echo "<br>號碼=".$number."<br>";
                echo "congrats! you've won {$awardStr[$i]}prize<br>"; */
                $res=$i;
            }else{
            break;
            //continue

            }
        }
        if($res!=-1){
            echo "<br>號碼=".$number."<br>";
            echo "congrats! you've won {$awardStr[$i]} prize<br>";
        }
    
        break;
        case 4:
            if($award['number']==mb_substr($number,5,3,'utf8')){
                echo "<br>號碼=".$number."<br>";
                $all_res=1;
                echo "中了增開六獎";
            }
        break;
    }
}

}
if($all_res==-1){
    echo "sorry, nothing";
}
?>
