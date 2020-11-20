<?php
include "base.php";


/* 函式有return值結果會直接給韓式本身，是一個陣列 */

//"select * from invoices where id='9'";
//$row=$pdo->query("select * from invoices where id='9'")->fetch();

echo implode("&&", ['欄位1'=>'值1','欄位2'=>'值2', 'id' => '9']);
echo "<hr>";

$array=['欄位1'=>'值1','欄位2'=>'值2', 'id' => '9'];
/* foreach($array as $key => $value){
    echo $key. "= '".$value."'&&";
} */

//利用一個暫時的陣列來存放語句片段
foreach($array as $key => $value){
    /* $tmp[]="`".$key."`='".$value."'"; */

    $tmp[]=sprintf("`%s` = '%s'",$key, $value);
}
print_r($tmp);
echo "<br>";

//使用implode把暫時陣列中的語句片段串成SQL會使用到的語句
echo implode ("&&", $tmp);


$row= find('invoices', '21');
echo $row['code'].$row['number'];

$row= find('invoices', ['code'=>'GD', 'number'=>'01589816']);
echo $row['code'].$row['number'];



/*取得單一資料的自訂函式*/

function find($table, $id){
global $pdo;
/* 使用全域變數pdo */

$sql="select * from $table where";


if(is_array($id)){
    foreach($id as $key => $value){
        $tmp[]=sprintf("`%s` = '%s'",$key, $value);

    } $sql=$sql.implode("&&", $tmp);

}else{
    $sql=$sql."id='$id'";
    /* 不是真的id,只是名字而已 */
}
    
    $row= $pdo->query($sql)->fetch();
    return $row;
}
?>