<?php

include_once "base.php";

$sql="select * from invoices where id='{$_GET['id']}'";

$invoice=$pdo->query($sql)->fetch(pdo::FETCH_ASSOC);
echo "<pre>";

print_r($invoice);

echo "</pre>";

?>