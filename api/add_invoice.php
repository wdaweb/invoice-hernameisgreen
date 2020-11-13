<?php
//撰寫新增消費發票的程式碼
//將發票的號碼及相關資訊寫入資料庫

/* foreach($_POST as $key => $value){
   $temp[]=$key;
}
foreach ($_POST as $key => $value){
    $temp2[]=$value;
} */

include_once "../base.php";



echo "<pre>";
print_r(array_keys($_POST));
echo"</pre>";
/* echo "<pre>";
print_r($temp);
echo "</pre>"; */
/* echo "<br>"; */
/*  echo "insert into invoice (`".implode("`,`",$temp)."`)";
 echo "values (`".implode("`,`",$temp2)."`)"; */
/*  echo "insert into invoice (`".implode("`,`",$_POST)."`)";
 echo "values (`".implode("`,`",$_POST)."`)"; */

$sql="insert into invoices(`".implode("`,`",array_keys($_POST))."`) values('".implode("','",$_POST)."')";
echo $sql;
$pdo->exec($sql);

echo "added success!";
header("location:../index.php?do=invoice_list");
?>