<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/latest_invoice.css">
    <script src="https://kit.fontawesome.com/d4ac8916dc.js" crossorigin="anonymous"></script>

</head>

<h2 class="text-center mt-3">最新獎號</h2>


<?php
include_once "api/settings.php";

if(isset($_GET['pd'])){
    $year=explode("-", $_GET['pd'])[0];
    $period=explode("-", $_GET['pd'])[1];
}else{
    $sql="select * from award_numbers order by year desc, period desc limit 1";
    $sql=$pdo->query($sql)->fetch(pdo::FETCH_ASSOC);
    $year=$sql['year'];
    $period=$sql['period'];
}
/* echo $year;
echo '<br>';
echo $period; */
$month=[
1=>"01,02",
2=>"03,04",
3=>"05,06",
4=>"07,08",
5=>"09,10",
6=>"11,12"

];

$this_month=$month[$period];


$awards="select * from `award_numbers` where `year`='$year' and `period`='$period'";
$awards=$pdo->query($awards)->fetchAll(pdo::FETCH_ASSOC);
if(!empty($awards)){
foreach ($awards as $award){
    switch($award['type']){
        case 1:
            $specialPrize=$award['number'];
        break;
        case 2:
            $grandPrize=$award['number'];
        break;
        case 3:
            $firstPrize[]=$award['number'];
        break;
        case 4:
            $six[]=$award['number'];
        break;
    }
}
}else{
    $specialPrize="&nbsp";
    $grandPrize="&nbsp";
    $firstPrize[]="&nbsp";
    $six[]="&nbsp";
}
?>



<!-- class="table table-bordered" -->
<!-- <form action="" method="post"> -->
<table class="mx-auto mt-3">
    <tbody>
        <tr>
            <th id="months">年月份</th>
            <td headers="months" class="title"> <?=$year?>年<?=$this_month?>月 </td>
        </tr>
        <tr>
            <th id="specialPrize" rowspan="2">特別獎</th>

            <td headers="specialPrize" class="number"> <?=$specialPrize?> </td>
        </tr>
        <tr>
            <td headers="specialPrize"> 同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元 </td>
        </tr>
        <tr>
            <th id="grandPrize" rowspan="2">特獎</th>
            <td headers="grandPrize" class="number"> <?=$grandPrize?> </td>
        </tr>
        <tr>
            <td headers="grandPrize"> 同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元 </td>
        </tr>
        <tr>
            <th id="firstPrize" rowspan="2">頭獎</th>
            <td headers="firstPrize" class="number">
                <?php
         foreach($firstPrize as $first){
             echo $first."<br>";
         }
         ?>
            </td>
        </tr>
        <tr>
            <td headers="firstPrize"> 同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元 </td>
        </tr>
        <tr>
            <th id="twoPrize">二獎</th>
            <td headers="twoPrize"> 同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元 </td>
        </tr>
        <tr>
            <th id="threePrize">三獎</th>
            <td headers="threeAwards"> 同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元 </td>
        </tr>
        <tr>
            <th id="fourPrize">四獎</th>
            <td headers="fourPrizes"> 同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元 </td>
        </tr>
        <tr>
            <th id="fivePrize">五獎</th>
            <td headers="fivePrize"> 同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元 </td>
        </tr>
        <tr>
            <th id="sixPrize">六獎</th>
            <td headers="sixPrize"> 同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元 </td>
        </tr>
        <tr>
            <th id="addSixPrize">增開六獎</th>
            <td headers="addSixPrize" class="number">
                <?php
         foreach($six as $s){
             echo $s."<br>";
         }
         ?>
            </td>
        </tr>
        <tr>

        </tr>
    </tbody>
</table>
<!--   </form> -->
<div class=" text-center">
<?php
if(($period-1)<1){
    ?>
<a href='?go=latest_invoice&pd=<?=$year-1?>-6' class="pointers">
prev
</a>

<?php
}else{
    ?>

<a href="?go=latest_invoice&pd=<?=$year?>-<?=$period-1?>" class="pointers">
prev
</a>

<?php
}
?>
<?php
if(($period+1)>6){
?>
<a href='?go=latest_invoice&pd=<?= $year+1 ?>-1' class="pointers">
next
</a>
<?php
}else{
?>
<a href='?go=latest_invoice&pd=<?= $year ?>-<?= $period+1 ?>' class="pointers">
next
</a>
<?php
}
?>
</div>



