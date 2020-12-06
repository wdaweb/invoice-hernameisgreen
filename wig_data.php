<?php

include_once"api/settings.php";

$alpha=["KB", "PT", "DF", "RQ", "UY", "FL"];
$blabbers=["stress eating", "went out with friends", "on a diet", "ate by myself", "damn food was great"];
echo"start";
/* for($i=0; $i<=200; $i++){
    $user_id=1;
    $code=$alpha[rand(0,5)];
    $number=sprintf("%08d",rand(0,99999999));
    $start=strtotime("2020-07-01");
    $end=strtotime("2020-12-05");
    $date=date("Y-m-d",rand($start, $end));
    $period=ceil(explode("-", $date)[1]/2);
    $payment=rand(10,100000);

$wig=[
    'user_id'=>1,
    'code'=>$code,
    'number'=>$number,
    'date'=>$date,
    'period'=>$period,
    'payment'=>$payment

];
$sql="insert into invoice (`".implode("`,`",array_keys($wig))."`) values('".implode("','",$wig)."')";
$pdo->exec($sql);
} */
for($k=201; $k<=201; $k++){
    $in_id=$k;
    $category=rand(1,4);
    $method=rand(1,4);
    $notes=$blabbers[rand(0,4)];

    $mkup=[
        'in_id'=>$in_id,
        'category'=>$category,
        'method'=>$method,
        'notes'=>$notes
    ];
    $sql="insert into invoice_details (`".implode("`,`",array_keys($mkup))."`) values('".implode("','",$mkup)."')";
$pdo->exec($sql);
}
echo "ok";