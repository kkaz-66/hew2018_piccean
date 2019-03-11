<?php
session_start();

if(isset($_SESSION["id"])){
    $id = $_POST["id"];
    $_SESSION["cart"][$id] = $id;
    echo $_SESSION["cart"][$id];
    $header = 'Location: ../view/cartView.php';
}else{
    $msg = "ログインしてください";
    $header = "Location: ../view/loginView.php?msg=$msg";
}
header($header);
?>