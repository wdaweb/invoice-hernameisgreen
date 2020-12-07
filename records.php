
<head>
<link rel="stylesheet" href="css/records.css">
</head>
<?php
include_once "api/settings.php";

$sql = "select `invoice`.`date`, `invoice`.`payment`, `invoice_details`.`category`, `invoice_details`.`method`, `invoice_details`.`notes` from `invoice`, `invoice_details`where `invoice`.`user_id`='$_SESSION[user_id]' and `invoice`.`id`=`invoice_details`.`in_id` order by `invoice`.`date` desc";
?>
<body>
    <h2 class="mx-auto text-center mt-3">帳目紀錄</h2>
    <table class="record_list  mx-auto mt-3" >
        <tr>
            <th>日期</th>
            <th>金額</th>
            <th>種類</th>
            <th>付款方式</th>
            <th>備註</th>
            <th>編輯</th>
        </tr>
        <?php

        $rows = $pdo->query($sql)->fetchALL(pdo::FETCH_ASSOC);
        $row_count=(count($rows));
       /*  echo ($row_count); */
        $results_per_page=7;
        $number_of_pages=ceil($row_count/$results_per_page);
        if(!isset($_GET['page'])){
            $page=1;
        }else{
            $page=$_GET['page'];
        }
        $frst_result=($page-1)*$results_per_page;
        $sql="select `invoice`.`id`,`invoice`.`date`, `invoice`.`payment`, `invoice_details`.`category`, `invoice_details`.`method`, `invoice_details`.`notes` from `invoice`, `invoice_details`where `invoice`.`user_id`='$_SESSION[user_id]' and `invoice`.`id`=`invoice_details`.`in_id` order by `invoice`.`date` LIMIT ".$frst_result.','. $results_per_page;
        
        $rows = $pdo->query($sql)->fetchALL(pdo::FETCH_ASSOC);
       
      



        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['payment'] . "</td>";
            echo "<td>";
            switch($row['category']){
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
            echo "</td>";
            echo "<td>";
            switch($row['method']){
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
            echo "<td>" . $row['notes'] . "</td>";
            echo "<td>";
            ?>
              <button class="edit ">
                <a class="text-light" href="?go=edit_record&id=<?=$row['id']?>">edit</a>
            </button>
            <button class="delete ">
            <a class="text-light" href="?go=del_record&id=<?=$row['id']?>">delete</a>
            </button>
          <button class="check">
            <a class="text-light" href="?go=check_inv_prize&id=<?=$row['id'];?>">check</a>
            </button> 
<?php
            echo "</td>";
            echo "</tr>";
        }
        ?>
    

    </table>
    <div class="text-center mt-3">
    <?php
    for ($page=1;$page<=$number_of_pages;$page++) {
    ?>
             <a href="?go=records&page=<?=$page?>" class="navi"><?=$page?></a> 
     <?php
          }
?>
</div>
</body>