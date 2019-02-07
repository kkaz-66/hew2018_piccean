<?php
	session_start();
	require_once("../model/payment_image_listModel.php");

	if(!isset($_SESSION["id"])){
		header("Location: ../view/loginView.php");
		exit;
	}

	$id = $_SESSION["id"];
	$imagesInfo = getPaymentImages($id);
	if($imagesInfo){
		$images = getImages($imagesInfo);
		$_POST["count"] = count($images);
		for($i=0; $i < count($images); $i++){
			$date = new DateTime($imagesInfo[$i]["sale_date"]);
			$date = $date->format("Y年m月d日");
			$images[$i]["sale_date"] = $date;
		}
		$_POST["images"] = $images;
	}else{
		$_POST["count"] = 0;
	}
	require_once("../view/payment_image_listView.php");
?>