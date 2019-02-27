<?php
session_start();
$id = $_POST["id"];
if(isset($_SESSION["cart"][$id])){
    unset($_SESSION["cart"][$id]) ;
}
    header('Location:'.$_SERVER['HTTP_REFERER']);
?>