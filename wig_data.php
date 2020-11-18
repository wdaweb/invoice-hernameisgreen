<?php
include_once "base.php";

$codeBase=["AB", "FF", "GD", "KJ", "FJ", "IY"];
echo "資料產生中.....";
echo date("Y-m-d H:i:s");

for($i=0;$i<10000;$i++){
$code=$codeBase[rand(0,5)];
/* echo "<pre>";
print_r($code);
echo "</pre>"; */
/* 10000個大寫字母，2字元 */
$number=sprintf("%08d",rand(0,9999999)); /* str_pad */
/* echo $number."<br>"; */
/* 8字元數字 字串資料 */
/* $period=rand(1,6); */
$payment=rand(0,20000);
/* echo $payment."<br>"; */
/* cannot be<1; between 1 and 20000 */

$start=strtotime("2020-01-01");
$end=strtotime("2020-12-31");

$date=date("Y-m-d", rand($start,$end));
$period=ceil(explode("-", $date)[1]/2);
/* echo $date."<br>"; */

/* 字串 不能>今年 月between 1 and 12  days; between 1 to 28 */

$wig=[
    'code'=>$code,
    'number' =>$number,
    'payment' =>$payment,
    'date' =>$date,
    'period'=>$period

];

    $sql="insert into invoices (`".implode("`,`", array_keys($wig))."`) values('".implode("','",$wig)."')";
    $pdo->exec($sql);
}
echo "<hr>";
echo "資料新增完成......";
echo date("Y-m-d H:i:s");