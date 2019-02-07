<?php
session_start();

if(isset($_SESSION["id"])){
	header("Location: ../index.php");
	exit;
}

$_SESSION["user_name"] = $_POST["user_name"];
$_SESSION["user_nickname"] = $_POST["user_nickname"];
$_SESSION["user_id"] = $_POST["user_id"];
$_SESSION["user_password"] = $_POST["user_password"];
$_SESSION["user_email"] = $_POST["user_email"];

// 一度入力した値を新規登録内容入力画面に表示させたい
//　受け取ったパスワードの値を「＊＊＊＊＊」で新規登録内容確認画面で表示させたい

require_once("../view/member_regist_input_confView.php");
?>