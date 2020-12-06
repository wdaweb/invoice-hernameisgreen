<?php
include_once "api/settings.php";
?>
<head>
    <link rel="stylesheet" href="css/reg_acc.css">
</head>
<body class="d-flex">
    <div class="container  align-self-center">
        <div class="row h-100">
            <div class="col-6 left h-100 w-100 shadow">
            
                <div class="floatCap text-center mx-auto">
                    <h3 class="text-shadow">Already have an account?</h3>
                </div>
                <div class="text-center login mx-auto shadow d-flex">
                    <a href="index.php" class="loginLink align-self-center mx-auto ">Login</a>
                </div>
            </div>
            <div class="col-6 right shadow">
            <div class="signupCap mx-auto text-center mt-5">
                        <p class="signupw">Signup</p>
                    </div>
                   <!--  <div class="plchldr"></div> -->
                <form action="api/add_user.php" method="post" class="ml-5 w-60 mt-5 form-a">
                    <div class="form-row">
                        <div class="form-group col-4">
                        <!--     <label for="first_name">名字</label> -->
                            <input type="text" name="first_name" class="form-control" autocomplete="off" placeholder="first name*" required>
                        </div>
                        <div class="form-group col-4">
                           <!--  <label for="last_name">姓氏</label> -->
                            <input type="text" name="last_name" class="form-control" autocomplete="off"
                            placeholder="last name*" required>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-4">
                            <!-- <label for="birthday">生日</label> -->
                            <input type="date" name="birthday" class="form-control" placeholder="birthday" class="birthday" required>
                        </div>
                        <div class="form-group col-4 w-60">
                           <!--  <label for="location">國家</label> -->
                            <input type="text" name="location" class="form-control"placeholder="country" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-8">
                           <!--  <label for="username">帳號</label> -->
                            <input type="text" name="username" class="form-control" placeholder="username" required autocomplete="off">
                        </div>

                        <div class="form-group col-8">
                           <!--  <label for="pw">密碼</label> -->
                            <input type="password" name="pw" class="form-control"placeholder="password" required autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-8 w-60">
                            <!-- <label for="email">電子信箱</label> -->
                            <input type="email" name="email" class="form-control" placeholder="email" required autocomplete="off">
                        </div>

                    </div>
                    <div class="form-row">
                     

                    </div>

                    <input type="submit" value="提交" class="btn btn-success ">
                    <input type="reset" value="重置" class="btn btn-warning">

                </form>
            </div>
        </div>
    </div>
</body>