<?php

include_once "settings.php";

$_SESSION['err']=[];

/* 預防使用者沒填寫欄位 */
function ghost($item, $msg='尚未填寫欄位'){
if(empty($_POST[$item])){
    $_SESSION['err'][$item]['empty']=$msg;
}
}

/* 預防使用者沒注意該欄需要填的長度 */
function len($item,$norm, $msg='編號長度異常'){
if ((strlen($_POST[$item]))>$norm){
    $_SESSION['err'][$item]['len']=$msg;
}
}

ghost('date');

ghost('code');
len('code', 2, '代碼應有兩個英文字母');

ghost('number');
len('number', 8, '號碼應有8個數字');

ghost('payment');



/* $sql="INSERT into `invoice`(`user_id`,`date`,`period`,`code`, `number`, `payment`) values ('$_SESSION[user_id]','$_POST[date]', '$_POST[period]', '$_POST[code]', '$_POST[number]', '$_POST[payment]')";
$pdo->exec($sql);
$inv="select id from invoice where `code`= '$_POST[code]'and `number`='$_POST[number]'";
$search=$pdo->query($inv)->fetch(pdo::FETCH_ASSOC);
$invoice_id=$search['id'];
$another_sql="INSERT INTO `invoice_details` (`in_id`, `category`, `method`, `notes`) values ('$invoice_id', '$_POST[category]', '$_POST[method]', '$_POST[notes]' )"; */

/* 
如果沒有任何錯誤產生在err陣列中，就表示資料無誤可以新增了 */
if (empty($_SESSION['err'])){
    $sql="INSERT into `invoice`(`user_id`,`date`,`period`,`code`, `number`, `payment`) values ('$_SESSION[user_id]','$_POST[date]', '$_POST[period]', '$_POST[code]', '$_POST[number]', '$_POST[payment]')";
$pdo->exec($sql);
$inv="select id from invoice where `code`= '$_POST[code]'and `number`='$_POST[number]'";
$search=$pdo->query($inv)->fetch(pdo::FETCH_ASSOC);
$invoice_id=$search['id'];
$another_sql="INSERT INTO `invoice_details` (`in_id`, `category`, `method`, `notes`) values ('$invoice_id', '$_POST[category]', '$_POST[method]', '$_POST[notes]' )";
$pdo->exec($another_sql);
    header("location: ../dashboard.php?go=records");
}else{
    header("location:../dashboard.php");
} 

