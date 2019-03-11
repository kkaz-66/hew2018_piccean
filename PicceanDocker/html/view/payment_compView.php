<?php 
session_start();
require_once("../model/payment_compModel.php");
if($_SERVER['HTTP_REFERER'] == "http://localhost:8082/view/payment_confView.php"){
	payment_comp();
}else{
	header('Location:'.$_SERVER['HTTP_REFERER']);
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Piccean</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bg.css">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/payment_comp.css">
</head>
<body class = "back_other">
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
	<!-- ここにコンテンツを記述 -->
		<div class="regestMessage">
    		<p class="p1">購入が完了しました</p>
		</div>
		<div class="ButtonBox">
			<input class="backButton" type="button" onclick="location.href='../index.php'" value="トップに戻る">
			<input class="downloadButton" type="button" onclick="location.href='../controller/payment_image_listController.php'" value="ダウンロード">
		</div>
	<!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>