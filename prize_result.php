<?php
include_once "api/settings.php";
$money=[];
?>
<head>
    <link rel="stylesheet" href="css/prize_result.css">
</head>
<h2 class="text-center">對獎結果</h2>
<div class="row d-flex">
    <div class="col-6">
<?php
if (empty($_SESSION['congrats'])) {?>
<img src="css/bmo-sad.png" class="bmo">
<?php
}else {
?>
<img src="css/bmo-happy.png" class="bmo">
<?php
}
?>
</div>
<div class="col-6">
<?php
if (empty($_SESSION['congrats'])) {
    echo "<div class='word-dep'>";
    echo "sad，一張都沒有中, ";
    
    
} else {
    echo "<div class='word-dep'>";
    echo "中獎了! ";
    
}
if (is_array($_SESSION['congrats'])){
foreach (($_SESSION['congrats']) as $congrat) {
   /*  echo "<pre>";
    echo $congrat;
    echo "</pre>"; */
}
}
if (is_array($_SESSION['congrats'])){
foreach ($_SESSION['prz_type'] as $type) {
    switch ($type) {
        case -2:
            $money[] = 10000000;
            $prizes[]="特別獎";
            break;
        case -1:
            $money[] = 2000000;
            $prizes[]="特獎";
            break;
        case 0:
            $money[] = 200000;
            $prizes[]="頭獎";
            break;
        case 1:
            $money[] = 40000;
            $prizes[]="二獎";
            break;
        case 2:
            $money[] = 10000;
            $prizes[]="三獎";
            break;
        case 3:
            $money[] = 4000;
            $prizes[]="四獎";
            break;
        case 4:
            $money[] = 1000;
            $prizes[]="五獎";
            break;
        case 5:
            $money[] = 200;
            $prizes[]="增開六獎";
            break;
    }
}
}
foreach($money as $mon){

foreach($prizes as $prize){
    echo "中了". $prize. "&nbsp" .$mon."元";
    echo "<br>";
}
}
echo "累積獎金: ";
echo array_sum($money) . "元";
echo "<br>";
if (empty($_SESSION['congrats'])) {
    echo "BMO為您難過";
    
    
} else {
    echo "BMO為您開心";
   
}

echo "</div>";


?>
</div>
</div>