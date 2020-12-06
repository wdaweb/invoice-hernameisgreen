<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>bmo </title>
    <link rel="shortcut icon" href="css/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- uniform invoice lottery checker -->
</head>

<body>
   <!--  <nav class="navbar sticky-top  flex-md-no bg-light" id="top-bar">
    </nav> -->
    <div class="container-fluid">
        <div class="row">
            <nav class="flex-column col-2 sidebar" id="sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column justify-content-center mt-3 text-light list-bar">
                        <li class="nav-item"><a class="nav-link lk-txt" href="?go=add_record">+ 新增帳目</a></li>
                        <li class="nav-item"><a class="nav-link lk-txt" href="?go=records">帳目紀錄</a></li>
                        <li class="nav-item"><a class="nav-link lk-txt" href="?go=latest_invoice">最新獎號</a></li>
                        <li class="nav-item"><a class="nav-link lk-txt" href="?go=check_prize">對獎</a></li>
                        <li class="nav-item"><a class="nav-link lk-txt" href="?go=add_prize_number">新增獎號</a></li>
                       <!--  <li class="nav-item"><a class="nav-link lk-txt" href="?go=summary">summary</a></li> -->
                        <li class="nav-item"><a class="nav-link lk-txt" href="dashboard.php">回首頁</a></li>
                        <li class="nav-item"><a class="nav-link lk-txt" href="index.php">登出</a></li>
                        <li class="nav-item"></li>
                    </ul>
                </div>
            </nav>
            <div class="col-10 plaza d-flex">
                <div class="main-area mx-auto my-auto mall shadow">
                    <?php
                    if (isset($_GET['go'])) {
                        $file = ($_GET['go']) . ".php";
                        include($file);
                    } else {
                        include("main.php");
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>