<?php
session_start();
$id = $_POST["id"];
if(!isset($_SESSION["cart"][$id])){
    $_SESSION["cart"][$id] = 1 ;
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>