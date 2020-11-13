<?php

include_once "base.php";

$sql = "select * from invoices where id='{$_GET['id']}'";

$invoice = $pdo->query($sql)->fetch();
/* echo "<pre>";

print_r($invoice);

echo "</pre>"; */

?>
<form action="api/update_invoice.php" method="post">
    <div><input type="hidden" name="id" value=<?= $invoice['id'] ?>></div>
    <div>發票號碼: <input type="text" name="code" style="width: 30px" value="<?= $invoice['code'] ?>">
    <input type="number" name="number" value="<?= $invoice['number'] ?>"></div>
    <div>消費日期: <input type="date" name="date" value="<?= $invoice['date'] ?>"></div>
    <div>消費金額: <input type="text" name="payment" value="<?= $invoice['payment'] ?>"></div>
    <div>
        <input type="submit" value="修改">
        <input type="reset" value="重置">
    </div>

</form>