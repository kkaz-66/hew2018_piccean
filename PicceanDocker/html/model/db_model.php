<?php

function db_connect(){
		$con = mysqli_connect("mysql", "root", "root") or die("接続失敗");
		mysqli_set_charset($con, "utf8");
		mysqli_select_db($con, "piccean");
		return $con;
}

function db_close($con){
	mysqli_close($con);
}

function insert($user_name,$user_nickname,$user_id,$user_password,$user_email){
	$password_hash = password_hash($user_password, PASSWORD_DEFAULT);

	$con = db_connect();
	$sql = "INSERT INTO T_USER (user_name,user_nickname,user_id,user_password,user_email) VALUES (?, ?, ?, ?, ?)";
	$stmt = mysqli_prepare($con, $sql);
	mysqli_stmt_bind_param($stmt, 'sssss', $user_name, $user_nickname, $user_id, $password_hash, $user_email);
	$result = mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	db_close($con);
	return $result;
}

function read_id($login_id, $password){
	$con = db_connect();
	$sql = "SELECT user_id, user_password FROM T_USER WHERE user_id = ? OR user_email = ?";
	$stmt = mysqli_prepare($con, $sql);
	mysqli_stmt_bind_param($stmt, 'ss', $login_id, $login_id);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	$row = mysqli_fetch_array($result);
	mysqli_stmt_close($stmt);
	db_close($con);

	// パスワードハッシュのチェック
	if ($row && password_verify($password, $row["user_password"])) {
		return $row["user_id"];
	} else {
		return false;
	}
}

function buy_history_check($user_id , $image_id){
	$con = db_connect();
	$sql = "SELECT image_id FROM T_SALE WHERE user_id = ? AND image_id = ?";
	$stmt = mysqli_prepare($con , $sql);
	mysqli_stmt_bind_param($stmt , "ss" , $user_id , $image_id);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	$row = mysqli_fetch_array($result);
	mysqli_stmt_close($stmt);
	db_close($con);
	return $row;
}
?>