
<?php
include_once "settings.php";

$sql="update 
        invoices 
      set 
        `code`='{$_POST['code']}',
        `number`='{$_POST['number']}',
        `date`='{$_POST['date']}',
        `payment`='{$_POST['payment']}' 
      where 
        `id`='{$_POST['id']}'"; 

        $pdo->exec($sql);
$sql="update 
        invoice_details
      set 
        `method`='{$_POST['method']}',
        `category`='{$_POST['category']}',
        `notes`='{$_POST['notes']}',
       
      where 
        `in_id`='{$_POST['id']}'"; 

        $pdo->exec($sql);



header("location:../dashboard.php");
?>