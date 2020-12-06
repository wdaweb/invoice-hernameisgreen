<?php
include_once "api/settings.php";

function errmsg($item)
{
    if (!empty($_SESSION['err'][$item])) {
        foreach (($_SESSION['err'][$item]) as $errmsg) {
            echo "<span style='color:red'>";
            echo "$errmsg";
            echo "</span>";
        }
    }
}

?>

<head>
    <link rel="stylesheet" href="css/add_record.css">
</head>

<body>
    <div class="row">
        <div class="col-7 left">
            <form action="api/add_invoice.php" method="post" class="mx-auto">
                <div class="form-row">
                    <div class="form-group col-5">
                        <label for="date" class="font-weight-bold">日期</label>
                        <input type="date" name="date" class="form-control">
                        <?= errmsg('date') ?>
                    </div>
                    <div class="form-group col-5">
                        <label for="period" class="font-weight-bold">期間</label>
                        <select name="period" class="form-control period">
                            <option value="1">1，2月</option>
                            <option value="2">3，4月</option>
                            <option value="3">5，6月</option>
                            <option value="4">7，8月</option>
                            <option value="5">9，10月</option>
                            <option value="6">11，12月</option>
                        </select>
                        <?= errmsg('period') ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-5 w-60">
                        <label for="code" class="font-weight-bold">代碼</label>
                        <input type="text" name="code" class="form-control">
                        <?= errmsg('code') ?>
                    </div>
                    <div class="form-group col-5">
                        <label for="number" class="font-weight-bold">號碼</label>
                        <input type="number" name="number" class="form-control" min="00000001" max="99999999">
                        <?= errmsg('number') ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-10">
                        <label for="payment" class="font-weight-bold">消費金額</label>
                        <input type="number" name="payment" class="form-control" min="1">
                        <?= errmsg('payment') ?>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-5  ">
                        <label for="category" class="cat-label font-weight-bold"> 種類 </label>
                        <select name="category" class="category">
                            <option value="1">早餐</option>
                            <option value="2">午餐</option>
                            <option value="3">晚餐</option>
                            <option value="4">其他項目</option>
                        </select>
                    </div>


                    <div class="form-group col-5">
                        <label for="method" class="font-weight-bold">付款方式</label>
                        <select name="method" class="method">
                            <option value="1">現金</option>
                            <option value="2">信用卡</option>
                            <option value="3">悠遊卡</option>
                            <option value="4">行動支付</option>
                        </select>
                    </div>
                </div>
                <!--  </div> -->
                <div class="form-row">
                    <div class="form-group col-10">
                        <label for="notes" class="font-weight-bold">備註</label>
                        <input type="textarea" name="notes" class="form-control" rows="1" cols="5">

                    </div>
                </div>
                <div class="form-row">


                    <input type="submit" value="submit" class="sub-btn">
                    <input type="reset" value="reset" class="reset-btn">


                </div>
        </div>


        </form>
        <div class="col-5 right">
           
        </div>
    </div>
    </div>
    </div>
    </div>
</body>