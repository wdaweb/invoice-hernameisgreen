<?php
include_once "api/settings.php";
$money=[];
?>
<h3>對獎結果</h3>
<?php
if (empty($_SESSION['congrats'])) {
    echo "下次加油 :)";
} else {
    echo "中獎了!";
}
if (is_array($_SESSION['congrats'])){
foreach (($_SESSION['congrats']) as $congrat) {
    echo "<pre>";
    echo $congrat;
    echo "</pre>";
}
}
if (is_array($_SESSION['congrats'])){
foreach ($_SESSION['prz_type'] as $type) {
    switch ($type) {
        case -2:
            $money[] = 10000000;
            break;
        case -1:
            $money[] = 2000000;
            break;
        case 0:
            $money[] = 200000;
            break;
        case 1:
            $money[] = 40000;
            break;
        case 2:
            $money[] = 10000;
            break;
        case 3:
            $money[] = 4000;
            break;
        case 4:
            $money[] = 1000;
            break;
        case 5:
            $money[] = 200;
            break;
    }
}
}
echo array_sum($money) . "元";



?>