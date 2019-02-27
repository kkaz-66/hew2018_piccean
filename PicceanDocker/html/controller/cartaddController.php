<?php
session_start();
#$_SESSION = array();
#session_destroy();
$id = $_POST["id"];

$_SESSION["cart"][$id] = $id;
echo $_SESSION["cart"][$id];
header('Location:'.$_SERVER['HTTP_REFERER']);
?>