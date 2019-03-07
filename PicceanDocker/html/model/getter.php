<?php
require_once("db_model.php");
function getImage($image_id){
	$con = db_connect();
  $sql = "SELECT *  FROM T_IMAGE WHERE image_id = ?";
  $stmt = mysqli_prepare($con, $sql);
  mysqli_stmt_bind_param($stmt, 's', $image_id);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $image = mysqli_fetch_array($result);
  db_close($con);
	return $image;
}

function getCategory($category_id){
	$con = db_connect();
	$sql = "SELECT category_name  FROM T_CATEGORY WHERE category_id = ?";
	$stmt = mysqli_prepare($con, $sql);
	mysqli_stmt_bind_param($stmt, 's', $category_id);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	$category_name = mysqli_fetch_array($result);
	db_close($con);
	return $category_name[0];
}

function getShop($shop_id){
	$con = db_connect();
	$sql = "SELECT shop_name  FROM T_SHOP WHERE shop_id = ?";
	$stmt = mysqli_prepare($con, $sql);
	mysqli_stmt_bind_param($stmt, 's', $shop_id);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	$shop_name = mysqli_fetch_array($result);
	db_close($con);
	return $shop_name[0];
}

function getUser($user_id){
	$con = db_connect();
	$sql = "SELECT user_name  FROM T_USER WHERE user_id = ?";
	$stmt = mysqli_prepare($con, $sql);
	mysqli_stmt_bind_param($stmt, 's', $user_id);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	$user_name = mysqli_fetch_array($result);
	db_close($con);
	return $user_name[0];
}

function getPath($id){
	$con = db_connect();
	$sql = "SELECT image_file FROM T_IMAGE WHERE image_id = ?";
	$stmt = mysqli_prepare($con , $sql);
	mysqli_stmt_bind_param($stmt , 's' , $id);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	$image_path = mysqli_fetch_array($result);
	db_close($con);
	return $image_path[0];
}
?>