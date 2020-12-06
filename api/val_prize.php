<?php
include_once "settings.php";


$year=$_POST['year'];
$period=$_POST['period'];

$sql="SELECT YEAR(date), `period`, `code`, `number` from invoice where year(date)='$year' and `period`='$period'";
$inv_numb_list=$pdo->query($sql)->fetchAll(pdo::FETCH_ASSOC);


$sql="select * from award_numbers where year='$year' and `period`='$period'";
$prize_numb_list=$pdo->query($sql)->fetchAll(pdo::FETCH_ASSOC);

$all_res=-1;
foreach($inv_numb_list as $inv_numb){
$numb=$inv_numb['number'];
foreach($prize_numb_list as $prize_numb){
    switch ($prize_numb['type']){
        case 1:
            if($prize_numb['number']==$numb){
           
                $congrats[]=$numb;
                $prz_type[]=-2;
                $all_res=1;
            }
        break;
        case 2:
            if($prize_numb['number']==$numb){
             
                $congrats[]=$numb;
                $prz_type[]=-1;
                $all_res=1;
            }
        break;
        case 3:
            $res=-1;
            for($i=5; $i>=0; $i--){
                $chk_prz=mb_substr($prize_numb['number'], $i, (8-$i), 'utf8');
                $chk_nmb=mb_substr($numb, $i, (8-$i), 'utf8');

                if($chk_prz==$chk_nmb){
                    $res=$i;
                }else{
                break;
                }
            }
            if($res!=-1){
                $congrats[]=$numb;
                $prz_type[]=$res;
            }
        break;
        case 4:
            if($prize_numb['number']==mb_substr($numb, 5,3, 'utf8')){
                $congrats[]=$numb;
                $prz_type[]=6;
                $all_res=1;
            }
        break;



       
    }
}
}
$_SESSION['congrats']=$congrats;
$_SESSION['prz_type']=$prz_type;
print_r($_SESSION['congrats']);
print_r($_SESSION['prz_type']);
/* if(($all_res==1)){
    $_SESSION['fail']=0;
} */

header("location:../dashboard.php?go=prize_result");
