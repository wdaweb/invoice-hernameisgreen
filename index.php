<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>Login BMO</title>
</head>

<body class="d-flex">
    <div class="container  align-self-center">
        <div class="row h-100">
            <div class="col-6 left shadow">
                <div class="loginCap mx-auto text-center mt-5">
                    <p class="loginw">Login</p>
                </div>
                <div class="plchldr"></div>
                <form action="api/val_id.php" method="post" class="form-b">
                    <div class="form-group col-8  mt-5 mx-auto">
                        <!-- <label for="username" id="u-label">username</label> -->
                        <input type="text" name="username" class="form-control w-100 mt-4" autocomplete="off" placeholder="Username *" required>
                       <!--  <label for="pw" id="pw-label" class="mt-4">password</label> -->
                        <input type="password" name="pw" class="form-control mt-4 w-100" autocomplete="off" placeholder="Password *"required>
                        <div  class="mt-5 mx-auto sub-btn text-center"><input type="submit"></div>
                        
                        <!--  <div><a href="reg_acc.php">註冊新帳號</a></div> -->
                    </div>
                </form>
            </div>
            <div class="col-6 right h-100 w-100 shadow">
                <div class="floatCap text-center mx-auto">
                    <h3 class="text-shadow">Create An Account</h3>
                </div>
                <div class="text-center signup mx-auto shadow d-flex">
                    <a href="reg_acc.php" class="signupLink align-self-center mx-auto ">Signup</a>
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>

</body>

</html>