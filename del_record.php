<style>
.sure{
    background-color: #f08080;
    border:#f4978e 1px solid;
    border-radius: 10px;
}
.nope{
    background-color: #d1b3c4;
    border:#e8c2ca 1px solid;
    border-radius: 10px;
}
.sure-link,.nope-link{
    color: white;
}

</style>



<?php

include_once "api/settings.php";

if(isset($_GET['del'])){

    
    $pdo->exec("delete from invoice where id='{$_GET['id']}'");
    header("location:dashboard.php");
}else{

    $inv=$pdo->query("select * from invoice where id='{$_GET['id']}'")->fetch();
    ?>
        <div class="col-md-6 text-center border p-4 mx-auto mt-5">
            <div class="text-center">確認要刪除此發票嗎?</div>
            <ul class="list-group">
                <li class="list-group-item"><?=$inv['code'].$inv['number'];?></li>
                <li class="list-group-item"><?=$inv['date'];?></li>
                <li class="list-group-item"><?=$inv['payment'];?></li>
            </ul>
            <div class="text-center mt-4">
                <button class="sure">
                        <a href="?go=api/delete&del=1&id=<?=$_GET['id'];?>" class='sure-link'>確認</a>
                </button>
                <button class="nope">
                    <a href="?go=records" class='nope-link'>取消</a>
                </button>
            </div>

        </div>

    <?php
}



?>