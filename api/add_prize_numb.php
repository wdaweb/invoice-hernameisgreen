<?php
include_once"settings.php";

$year=$_POST['year'];
$period=$_POST['period'];

/* 新增特別獎 */
$sql="insert into `award_numbers`(`year`, `period`, `number`, `type`) values ('$year', '$period', '{$_POST['specialPrize']}','1') ";
$pdo->exec($sql);

/* 新增特獎 */
$sql="insert into `award_numbers`(`year`, `period`, `number`, `type`) values ('$year', '$period', '{$_POST['grandPrize']}','2') ";
$pdo->exec($sql);

foreach($_POST['firstPrize'] as $first){
    if(!empty ($first)){
        $sql="insert into `award_numbers`(`year`, `period`, `number`, `type`) values ('$year', '$period', '$first','3') ";
        $pdo->exec($sql);
    }
}

foreach($_POST['addSixPrize'] as $six){
    if(!empty ($six)){
        $sql="insert into `award_numbers`(`year`, `period`, `number`, `type`) values ('$year', '$period', '$six','4' )";
        $pdo->exec($sql);
    }
}
echo "新增完成";
header("location:../dashboard.php?go=latest_invoice&pd='.$year'.'-'.'$period'");
