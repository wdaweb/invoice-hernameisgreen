<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>bmo uniform invoice lottery checker</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <nav class="navbar sticky-top  flex-md-no" id="top-bar">
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="flex-column col-2 sidebar" id="sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column justify-content-center mt-3 text-light list-bar">
                        <li class="nav-item"><a class="nav-link lk-txt" href="?go=latest_invoice">當期發票</a></li>
                        <li class="nav-item"><a class="nav-link lk-txt" href="?go=check_prize">對獎</a></li>
                        <li class="nav-item"><a class="nav-link lk-txt" href="?go=add_prize_number">新增獎號</a></li>
                        <li class="nav-item"><a class="nav-link lk-txt" href="dashboard.php">回首頁</a></li>
                        <li class="nav-item"></li>
                    </ul>
                </div>
            </nav>
            <div class="col-10 main-section">
                <div class="main-area mx-auto my-auto">
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
/* #top-bar{
    height: 4rem;
    background-color: #05668d;
} */
