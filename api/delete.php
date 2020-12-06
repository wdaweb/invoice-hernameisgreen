<?php
include_once "settings.php";

$pdo->exec("delete from invoice where id='{$_GET['id']}'");
$pdo->exec("delete from invoice where in_id='{$_GET['id']}'");
header("location:dashboard.php");

?>