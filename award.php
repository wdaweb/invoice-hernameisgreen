<?php

include_once "base.php";

$inv_id=$_GET['id'];
/* echo "select * from invoice where id='$inv_id'"; */
$invoice=$pdo->query("select * from invoices where id='$inv_id'")->fetch();
/* 
echo "<pre>";
print_r($invoice);
echo "</pre>"; */

$number=$invoice['number'];

/* 找出獎號
-1 確認期數>目前的發票日期做分析
-2 得到期數的資料後>撈出該期間開獎獎號 */

$date=$invoice['date'];
//explode('-', $date)取得日期資料的陣列，陣列的第二個元素就是月份
//月份可以推算期數，有期數及年份就可以找到開獎的號碼
//$array=explode('-', $date)
//$period=ceil($month/2)
$year=explode('-', $date)[0];
$period=ceil(explode('-', $date)[1]/2);

$awards=$pdo->query("select * from award_numbers where year='$year' && period='$period'")->fetchAll();

/* echo "<pre>";
print_r($awards);
echo"</pre>"; */
/* $awards is an array while $number is a string */
foreach($awards as $award){
    switch($award['type']){
        case 1:
            /* 特別號 */
            if($award['number']==$number){
                echo "<br>號碼=".$number."<br>";
                echo "congrats! you've won the 特別獎!";
            }else{
                echo "aww nope<br>";
            }
           
        break;
        case 2:
            /* 1st prize */
            if($award['number']==$number){
                echo "<br>號碼=".$number."<br>";
                echo "congrats! you've won the 特獎!";
            }
        break;
        case 3:
            $res=0;
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
        echo "<br>號碼=".$number."<br>";
        echo "congrats! you've won $res prize<br>";
        break;
        case 4:
            if($award['number']==mb_substr($number,5,3,'utf8')){
                echo "<br>號碼=".$number."<br>";
                echo "中了增開六獎";
            }
        break;
    }
}