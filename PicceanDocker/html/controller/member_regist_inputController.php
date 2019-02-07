<?php
session_start();
if(isset($_SESSION["id"])){
	header("Location: ../index.php");
	exit;
}

// 一度入力された値を新規登録内容入力画面で表示させたい

require_once("../view/member_regist_inputView.php");
?>