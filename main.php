<head>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<div class="row level_one vh-50">
    <div class="col-4">
        <div class="card welcome mt-5 ml-5 border-0 shadow" id="welcome-guest">
            <div class="card-body  ">
                <?php
                include_once "api/settings.php";
                $id = $_SESSION['user_id'];
                $sql = "select `first_name` from `acc_info` where `id`='$id'";

                $frst_nm = $pdo->query($sql)->fetch(pdo::FETCH_ASSOC);
                echo "<span class='hello'>" . "Hello,  ";
                print_r(($frst_nm)['first_name']);
                echo "</span>";
                ?>
                <br>
                <small class="text-muted sub-t">這是你的帳目摘要 :)</small>
            </div>
        </div>
    </div>
    <div class="col-7">
        <div class="card card-2 mt-5 ml-5 quote">
            <div class="card-body">
            <p>“延遲享樂是一種秘方，它讓東西變得更珍貴。”</p>
            </div>
        </div>
    </div>
</div>
<div class="row level-two vh-50">
    <div class="col-4 ">
        <div class="card total ml-5 border-0 shadow ">
            <div class="deco d-flex">
                <h3 class="align-self-center mx-auto" style="font-family:'Noto Sans TC'">本月累積花費</h3>
            </div>
            <div class="card-body">
                <?php
                $year=date('Y');
                $month=date('m');
                    $sql="select payment from invoice where `user_id`='$_SESSION[user_id]' and YEAR(date)='$year' and MONTH(date)='$month'";
                    $tots=$pdo->query($sql)->fetchAll(pdo::FETCH_ASSOC);
                    echo "<div class='sum-numb'>";
                    print_r (array_sum(array_column($tots, 'payment')));
                    echo "<small class='text-muted'>"."元"."</small>"."</div>";
                ?>
            </div>
        </div>
    </div>
    <div class="col-7 ">
        <div class="card recent ml-5 border-0 shadow ">
            <div class="deco2 d-flex">
                <h3 class="align-self-center mx-auto" style="font-family:'Noto Sans TC'">最近前五筆消費
                </h3>
            </div>
            <div class="card-body">
                <table class="list-table">
                    <th>日期</th>
                    <th>金額</th>
                    <th>種類</th>
                    <th>付款方式</th>
                    <th>備註</th>
                <?php
                $year=date('Y');
                $month=date('m');
               
                $sql = "select `invoice`.`date`, `invoice`.`payment`, `invoice_details`.`category`, `invoice_details`.`method`, `invoice_details`.`notes` from `invoice`, `invoice_details`where `invoice`.`user_id`='$_SESSION[user_id]' and `invoice`.`id`=`invoice_details`.`in_id` and YEAR(date)='$year' and MONTH(date)='$month' order by `invoice`.`date` desc";
                
                $records=$pdo->query($sql)->fetchAll(pdo::FETCH_ASSOC);
                   foreach ($records as $record){
                       echo "<tr>";
                       echo "<td>".$record['date']."</td>";
                       echo "<td>".$record['payment']."</td>";
                       echo "<td>";
                       switch($record['category']){
                           case 1:
                               echo "早餐";
                           break;
                           case 2:
                            echo "午餐";
                           break;
                           case 3:
                            echo "晚餐";
                           break;
                           case 4:
                            echo "其他";
                           break;

                           }
                       echo"</td>";
                       echo "<td>";
                       switch($record['method']){
                           case 1:
                            echo "現金";
                           break;
                           case 2:
                            echo "信用卡";
                           break;
                           case 3:
                            echo "悠遊卡";
                           break;
                           case 4:
                            echo "行動支付";
                           break;
                       }
                       echo "</td>";
                       echo "<td>".$record['notes']."</td>";
                       echo "</tr>";
                   }
                ?>
                </table>
            </div>
        </div>
    </div>
</div>