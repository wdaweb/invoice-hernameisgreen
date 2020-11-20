<?php
include "base.php";

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


function all($table,...$arg){
    global $pdo;

/*     gettype($arg); */
    $sql="select * from $table";

    if(isset($arg[0])){
    if (is_array($arg[0])){
  /*   if (!empty($arg[0])){ */
//製作會在where後面的句子字串0
foreach($arg[0] as $key => $value){
    $tmp[]=sprintf("`%s` = '%s'",$key, $value);

} 
$sql=$sql.implode("&&", $tmp);

    }else{
       /*  echo "arg[0]不存在或arg[0]不是陣列"; */
       $sql=$sql.$arg[0];
    }
}
    //製作會在where後面的句子字串
    if(isset($arg[1])){
        $sql=$sql.$arg[1];
    }
        //製作非陣列語句皆在sql後面
/*     }else{
        echo "arg[1]不存在";
        //製作接在最後面的句子字串
    } */
    echo $sql. '<br>';
    return $pdo->query($sql)->fetchAll();


}
/* } */
function del($table, $id){
    global $pdo;
    $sql="delete from $table where";
    if(is_array($id)){
        foreach($id as $key => $value){
            $tmp[]=sprintf("`%s`='%s'", $key, $value);

     }$sql=$sql.implode('&&', $tmp);

}else{
    $sql=$sql."id='$id'";
    
}
$row=$pdo->exec($sql);
return $row;
}


/* echo "<hr>";
print_r(all('invoices'));
echo "<hr>";
print_r(all('invoices'),['code'=>"GD", 'period' =>6]);
echo "<hr>";
print_r(all('invoices'),['code'=>"GD", 'period' =>6]);
 */


?>