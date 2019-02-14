<?php
    require_once("db_model.php");

    function getImage($image_id){
    		$con = db_connect();
    		$sql = "SELECT image_file  FROM T_IMAGE WHERE image_id = ?";
    		$stmt = mysqli_prepare($con, $sql);
    		mysqli_stmt_bind_param($stmt, 's', $image_id);
    		mysqli_stmt_execute($stmt);
    		$result = mysqli_stmt_get_result($stmt);
    		$url = mysqli_fetch_array($result);
    		db_close($con);
    		return $url[0];
        }
    ?>