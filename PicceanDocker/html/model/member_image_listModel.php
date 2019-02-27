<?php
	require_once("db_model.php");

	function getUploadedImages($id){
		$con = db_connect();
		$sql = "SELECT image_id, image_title, image_thumbnail, image_date, image_views, image_downloads FROM T_IMAGE WHERE user_id = ?";
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
?>