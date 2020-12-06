<?php
include_once "api/settings.php";

$sql = "select `invoice`.`date`, `invoice`.`payment`, `invoice_details`.`category`, `invoice_details`.`method`, `invoice_details`.`notes` from `invoice`, `invoice_details`where `invoice`.`user_id`='$_SESSION[user_id]' and `invoice`.`id`=`invoice_details`.`in_id` order by `invoice`.`date` desc";
?>

<head>
<link rel="stylesheet" href="css/record.css">
</head>

<body>
    <h2 class="mx-auto text-center">歷史紀錄</h2>
    <table class="record_list table-bordered mx-auto" >
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
        $results_per_page=10;
        $number_of_pages=ceil($row_count/$results_per_page);
        if(isset($_GET['page'])){
            $page=1;
        }else{
            $page=$_GET['page'];
        }
       
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['payment'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['method'] . "</td>";
            echo "<td>" . $row['notes'] . "</td>";
            echo "<td>" ."<a class='btn' href='api/edit_record.php>"."edit"."</a>". 
            "<a class='btn' href='api/delete_record.php'>"."delete"."</a>".
            "</td>";
            echo "</tr>";
        }
        ?>
    

    </table>
</body>