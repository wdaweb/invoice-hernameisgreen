<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/check_prize.css">
</head>
<div class="container vh-100 vw-100">

<form action="api/val_prize.php" method="post" class="sub-form" class="d-block mx-auto">
<input type="number" name="year" min="<?=date('Y')-1?>" step="1" max="<?=date('Y')+1?>"> 
<select name="period">
    <option value="1">一，二月</option>
    <option value="2">三，四月</option>
    <option value="3">五，六月</option>
    <option value="4">七，八月</option>
    <option value="5">九，十月</option>
    <option value="6">十一，十二月</option>
</select>
<input type="submit" value="送出">
</form>

<table class="rec_table">
<?php
include_once "api/settings.php";
$_SESSION['congrats']=[];
$_SESSION['prz_type']=[];
if(empty ($_POST['year']) && empty ($_POST['period'])){
    $all="select date, period, code, number from `invoice` order by date desc";
    $cribs=$pdo->query($all)->fetchALL(pdo::FETCH_ASSOC);
    foreach($cribs as $crib){
        echo "<tr>";
        echo "<td>" . $crib['date'] . "</td>";
        echo "<td>" . $crib['period'] . "</td>";
        echo "<td>" . $crib['code'] . "</td>";
        echo "<td>" . $crib['number'] . "</td>";   
     /*    echo "<td>" ."</td>"; */
        echo "</tr>";
    
}}else{


$year=$_POST['year'];
$period=$_POST['period'];

/* 把發票資料先撈出來 */
$sql="select date, period, code, number from `invoice` where substr(date, 1)='$year' and `period`='$period'";
$numbs=$pdo->query($sql)->fetchALL(pdo::FETCH_ASSOC);

foreach($numbs as $numb){
    echo "<tr>";
    echo "<td>" . $numb['date'] . "</td>";
    echo "<td>" . $numb['period'] . "</td>";
    echo "<td>" . $numb['code'] . "</td>";
    echo "<td>" . $numb['number'] . "</td>";
  /*   echo "<td>" ."</td>"; */
    echo "</tr>";



}
}
?>


</table>
</div>