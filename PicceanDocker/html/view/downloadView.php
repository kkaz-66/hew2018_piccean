<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Piccean</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/download.css">
</head>
<body>
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
	<!-- ここにコンテンツを記述 -->
		<div class="infoBox">
			<div class="leftBox">
				<div class="image">PICTURE</div>
				<div class="exif">exif情報ここにでるよ</div>
			</div>
			<div class="centerBox">
				<div class="title"></div>
				<div class="item_name">
					<p class="item_name_txt">投稿者:</p>
					<p class="item_name_txt">カテゴリ:</p>
					<p class="item_name_txt">タグ:</p>
					<p class="item_name_txt">利用ダイビングショップ名:</p>
					<p class="item_name_txt">ダイビングポイント名:</p>
					<p class="item_name_txt">撮影機材:</p>
					<p class="item_name_txt">コメント:</p>
				</div>
				<div class="item_get">
					<!-- ここにgetした情報 -->
				</div>
			</div>
			<div class="rightBox">
				<div class="picsize">
					<!-- サイズがどうとか -->
				</div>
				<div class="size">
					<p>Mサイズ(一例)</p>
				</div>
				<div class="dlbutton">
					<p>ダウンロードボタン</p>
				</div>
			</div>
		</div>
	<!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>