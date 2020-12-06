<?php
include_once "settings.php";

$_SESSION['user_id']=[];
$username=$_POST['username'];
$pw=$_POST['pw'];

$sql="select `id` from `acc_basic` where `username`='$username' and `pw`='$pw'; ";

$run=$pdo->query($sql)->fetch();



if(!empty ($run)){
    $_SESSION['user_id'] = $run['id'];
    header("location:../dashboard.php");
   
}else{
    header("location:../index.php");
}
