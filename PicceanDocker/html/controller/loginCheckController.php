<?php
session_start();

unset($_SESSION["id"]);
require_once("../model/db_model.php");

$login_id = $_POST["id"];
$password = $_POST["password"];
if(!isset($_SESSION["url"])){
	$_SESSION["url"] = $_POST["url"];
}
$url = $_SESSION["url"];

// idとメールアドレスの半角英数チェックしたい
// パスワードの半角英数チェックしたい（文字数はビュー側で検査済み）

$id = read_id($login_id,$password);
if ($id) {
	$_SESSION["id"] = $id;
	header("Location: $url");
	unset($_SESSION["url"]);
	exit;
} else {
	$_POST["login_message"] = "ログインIDまたはパスワードを見直してください。";
	require_once("../view/loginView.php");
	exit;
}

?>