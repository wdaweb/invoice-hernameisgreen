<?php
include_once"api/settings.php";
$sql="select * from `invoice`";
$rows=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
?>

<table class="mx-auto text-center mt-5">
<tr>
<td>serial number</td>
<td>date</td>
<td>amount</td>
<td>edit</td>
</tr>
<?php
foreach($rows as $row){
?>
<tr>
        <td><?=$row['code'].$row['number'];?></td>
        <td><?=$row['date'];?></td>
        <td><?=$row['payment'];?></td>
        <td>
            <button class="btn btn-sm btn-primary">
                <a class="text-light" href="?do=edit_invoice&id=<?=$row['id'];?>">edit</a>
            </button>
            <button class="btn btn-sm btn-danger">
            <a class="text-light" href="?do=del_invoice&id=<?=$row['id'];?>">delete</a>
            </button>
            <button class="btn btn-sm btn-success">
            <a class="text-light" href="?do=award&id=<?=$row['id'];?>">check</a>
            </button>
        </td>
    </tr>





<?php
}
?>
</table>







