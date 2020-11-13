<?php
include_once "../base.php";

$sql="update 
`invoices` 
set 
`code`='{$_POST['code']}', 
`number`='{$_POST['number']}', 
`date`='{$_POST['date']}',
 `payment`='{$_POST['payment']}' 
 where `id`='{$_POST['id']}';";


/*  echo $sql; */
$pdo->exec($sql);   /* 更新資料不需要回傳資料，要回傳資料才用query回傳空陣列 */

header("location:../index.php?do=invoice_list");

