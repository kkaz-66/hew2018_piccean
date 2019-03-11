<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Piccean</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="back">
	<!-- readHeader -->
	<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

		<div class="content">
		<!-- ここにコンテンツを記述 -->
		<div id="title">
			PICCEAN
		</div>
			
		<!-- コンテンツここまで -->
	</div>
	
	<!-- readFooter -->
	<?php //require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./js/jquery.ripples-min.js"></script>
<script src="./js/rippleConfig.js"></script>
</body>
</html>