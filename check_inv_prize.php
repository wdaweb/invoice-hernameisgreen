<?php
include_once "api/settings.php";

$inv_id=$_GET['id'];
$invoice=$pdo->query("select * from invoice where id='$inv_id'")->fetch();
$numb=$invoice['number'];
$date=$invoice['date'];
$year=explode('-',$date)[0];
$period=ceil(explode('-',$date)[1]/2);
$prize_numb_list=$pdo->query("select * from award_numbers where year='$year' && period='$period'")->fetchALL();

$all_res=-1;


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

$_SESSION['congrats']=$congrats;
$_SESSION['prz_type']=$prz_type;
print_r($_SESSION['congrats']);
print_r($_SESSION['prz_type']);
/* if(($all_res==1)){
    $_SESSION['fail']=0;
} */

header("location:dashboard.php?go=prize_result");