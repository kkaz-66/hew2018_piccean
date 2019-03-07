<?php
require_once("../model/getter.php");
$id = $_GET['imageId'];
$image = getImage($id);
$category = getCategory($image["category_id"]);
$shop = getShop($image["shop_id"]);
$user_name = getUser($image["user_id"])
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
	<link rel="stylesheet" href="../css/download.css">
</head>
<body class = "back_other">
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
	<!-- ここにコンテンツを記述 -->
		<div class="infoBox">
			<div class="leftBox">
				<div class="image">
					<img class="image_file" src="<?= $image["image_file"] ?>" alt="test">
				</div>
				<div class="exif">
					exif
				</div>
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
				<p class="item_get_txt"><?php echo $user_name?></p>
				<p class="item_get_txt"><?php echo $category?></p>
				<p class="item_get_txt">tag</p>
				<p class="item_get_txt"><?php echo $shop?></p>
				<p class="item_get_txt">????</p>
				<p class="item_get_txt"><?php echo $image["image_equipments"]?></p>
				<p class="item_get_txt"><?php echo $image["image_comment"]?></p>
				</div>
			</div>
			<div class="rightBox">
				<div class="picsize">
					<!-- サイズがどうとか -->
				</div>
				<div class="size">
					<p><?php echo $image["image_size"]?>サイズ</p>
				</div>
				<div class="dlbutton">
					<form action="../controller/downloader.php" method="post">
						<input type="hidden" name="id"value="<?php echo $id ?>">
						<input type="submit" onclick="location.href='./payment_compView.php'" value="ダウンロード">
					</form>
				</div>
			</div>
		</div>
	<!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>