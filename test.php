<?php
include "base.php";


/* 函式有return值結果會直接給韓式本身，是一個陣列 */

//"select * from invoices where id='9'";
//$row=$pdo->query("select * from invoices where id='9'")->fetch();

$row= find('invoices', "id='16'");
echo $row['code'];
echo $row['number'];


function find($table, $def){
    global $pdo;

    /* 使用全域變數pdo */

    $sql="select * from $table where $def";
    $row= $pdo->query($sql)->fetch();
    return $row;
}

?>