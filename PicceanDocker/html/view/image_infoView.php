<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Piccean</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/image_info.css">
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
					<form action="post">
						<div class="item_name_box">
							<p class="item_name_txt">タイトル:</p>
							<input type="text" class="input_box">
						</div>
						<div class="category_box">
						<p class="item_name_txt">カテゴリ:</p>
							<select name="category" id="0" class="input_box">
								<option value="category1">カテゴリ1</option>>
								<option value="category1">カテゴリ1</option>
							</select>
						</div>
						<div class="tag_box">
							<p class="item_name_txt">タグ:</p>
							<input type="text" class="input_box">
						</div>
						<p class="item_name_txt">利用ダイビングショップ名:</p>
						<input type="text" class="input_box">
						<p class="item_name_txt">ダイビングポイント名:</p>
						<input type="text" class="input_box">
						<p class="item_name_txt">撮影機材:</p>
						<input type="text" class="input_box">
						<p class="item_name_txt">コメント:</p>
						<input type="text" class="input_box">
					</form>
				</div>
				<div class="item_get">
					<!-- ここにgetした情報 -->
				</div>
			</div>
			<div class="rightBox">
				<div class="size">
					<p>Mサイズ(一例)</p>
				</div>
				<div class="dlbutton">
					<p class = "dltxt">ダウンロードボタン</p>
				</div>
			</div>
		</div>
	<!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>