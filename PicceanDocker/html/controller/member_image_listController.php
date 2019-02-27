<?php
	session_start();
	require_once("../model/member_image_listModel.php");

	if(!isset($_SESSION["id"])){
		header("Location: ../view/loginView.php");
		exit;
	}

	$id = $_SESSION["id"];
	$images = getUploadedImages($id);
	if($images){
		$_POST["count"] = count($images);
		for($i=0; $i < count($images); $i++){
			$date = new DateTime($imagesInfo[$i]["image_date"]);
			$date = $date->format("Y年m月d日");
			$images[$i]["image_date"] = $date;
		}
		$_POST["images"] = $images;
	}else{
		$_POST["count"] = 0;
	}
	require_once("../view/member_image_listView.php");
?>