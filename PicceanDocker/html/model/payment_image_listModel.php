<?php
	require_once("db_model.php");

	function getPaymentImages($id){
		$con = db_connect();
		$sql = "SELECT image_id,sale_date FROM T_SALE WHERE user_id = ?";
		$stmt = mysqli_prepare($con, $sql);
		mysqli_stmt_bind_param($stmt, 's', $id);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		while ($row = mysqli_fetch_array($result)) {
			$list[] = $row;
		}
		mysqli_stmt_close($stmt);
		db_close($con);
		return $list;
	}

	function getImages($imagesInfo){
		$con = db_connect();
		$sql = "SELECT * FROM T_IMAGE WHERE image_id = ?";
		$stmt = mysqli_prepare($con, $sql);
		foreach($imagesInfo as $imageInfo){
			mysqli_stmt_bind_param($stmt, 's', $imageInfo["image_id"]);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			$list[] = mysqli_fetch_array($result);
		}
		db_close($con);
		return $list;
	}
?>