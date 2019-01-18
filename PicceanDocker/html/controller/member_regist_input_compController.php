<?php
session_start();
require_once("../model/db_model.php");

if(isset($_SESSION["id"])){
	header("Location: ../index.php");
	exit;
}

$user_name = $_POST["user_name"];
$user_nickname = $_POST["user_nickname"];
$user_id = $_POST["user_id"];
$user_password = $_POST["user_password"];
$user_email = $_POST["user_email"];

$result = insert($user_name,$user_nickname,$user_id,$user_password,$user_email);
if ($result) {
	header("Location: ../view/member_regist_input_compView.php");
	exit;
}else{
	$_POST["err_msg"] = "登録失敗";
	require_once("member_regist_inputController.php");
}
?>