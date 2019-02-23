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
session_write_close();

$check = true;	// true:ok false:ng

if(empty($_POST["user_name"])){
	$check = false;
	$_POST["err_name"] = "氏名を入力してください。";
}elseif(mb_strlen($_POST["user_name"]) > 64){
	$check = false;
	$_POST["err_name"] = "64文字以内で入力してください。";
}

if(empty($_POST["user_nickname"])){
	$check = false;
	$_POST["err_nickname"] = "ニックネームを入力してください。";
}elseif(mb_strlen($_POST["user_nickname"]) > 16){
	$check = false;
	$_POST["err_nickname"] = "16文字以内で入力してください。";
}

if(empty($_POST["user_id"])){
	$check = false;
	$_POST["err_id"] = "ユーザIDを入力してください。";
}elseif(mb_strlen($_POST["user_id"]) < 4
|| mb_strlen($_POST["user_id"]) > 16){
	$check = false;
	$_POST["err_id"] = "4~16文字以内で入力してください。";
}

if(empty($_POST["user_password"])){
	$check = false;
	$_POST["err_password"] = "パスワードを入力してください。";
}elseif(mb_strlen($_POST["user_password"]) < 8
|| mb_strlen($_POST["user_password"]) > 16){
	$check = false;
	$_POST["err_password"] = "8~16文字以内で入力してください。";
}

if($_POST["checkAgreement"] != 1){
	$check = false;
}

// 一度入力した値を新規登録内容入力画面に表示させたい
//　受け取ったパスワードの値を「＊＊＊＊＊」で新規登録内容確認画面で表示させたい

if($check){
	require_once("../view/member_regist_input_confView.php");
}else{
	require_once("../view/member_regist_inputView.php");
}
?>