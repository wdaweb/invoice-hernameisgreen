<head>

<link rel="stylesheet" href="css/edit_record.css">
</head>
<?php
include_once "api/settings.php";
$sql="select * from invoice where id='{$_GET['id']}'";
$inv=$pdo->query($sql)->fetch();
$sql="select * from invoice_details where in_id='{$_GET['id']}'";
$deets=$pdo->query($sql)->fetch();
?>
<body>
    <div class="row">
        <div class="col-7 left">
            <form action="api/update_record.php" method="post" class="mx-auto">
            <input type="hidden" name="id" value="<?=$inv['id'];?>">
                <div class="form-row">
                    <div class="form-group col-5">
                        <label for="date" class="font-weight-bold">日期</label>
                        <input type="date" name="date" class="form-control" value="<?=$inv['date'];?>" >
                       
                    </div>
                    <div class="form-group col-5">
                        <label for="period" class="font-weight-bold">期間</label>
                        <select name="period" class="form-control period" value="<?=$inv['period'];?>" >
                            <option value="1">1，2月</option>
                            <option value="2">3，4月</option>
                            <option value="3">5，6月</option>
                            <option value="4">7，8月</option>
                            <option value="5">9，10月</option>
                            <option value="6">11，12月</option>
                        </select>
                        
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-5 w-60">
                        <label for="code" class="font-weight-bold">代碼</label>
                        <input type="text" name="code" class="form-control" value="<?=$inv['code'];?>">
                        
                    </div>
                    <div class="form-group col-5">
                        <label for="number" class="font-weight-bold">號碼</label>
                        <input type="number" name="number" class="form-control" min="00000001" max="99999999"value="<?=$inv['number'];?>">
                      
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-10">
                        <label for="payment" class="font-weight-bold">消費金額</label>
                        <input type="number" name="payment" class="form-control" min="1" 
                        value="<?=$inv['payment'];?>">
                       
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
                        <input type="textarea" name="notes" class="form-control" rows="1" cols="5"  value="<?=$deets['notes'];?>">

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