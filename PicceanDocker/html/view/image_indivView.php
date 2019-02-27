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
	<link rel="stylesheet" href="../css/image_indiv.css">
</head>
<body>
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
	<!-- ここにコンテンツを記述 -->
	<form action="../controller/cartaddController.php" method="post">
		<div class="wrapper">
			<div class="leftbox">
				<div class="picture">
				<img class="image_file" src="<?= $image["image_file"] ?>" alt="test">
				</div>
				<div class="info_l">
					<div class="tag">
						<a href="" class="">タグ </a>
						<a href="" class="">タグ </a>
						<a href="" class="">タグ </a>
					</div>
					<div class="comment">
						コメント:
						<br>
						<?php echo $image["image_comment"]?>
					</div>
					<div class="user">
						投稿者名
						<?php echo $user_name?>
					</div>
				</div>
			</div>
			<div class="rightbox">
				<div class="info_r">
					タイトル:
					<?php echo $image["image_title"] ?>
				</div>
				<div class="category">
					カテゴリ:
					<?php echo $category ?>
				</div>
				<div class="map">ここに地図</div>
				<div class="buy">
					<input type = "hidden" name = "id" value = <?php echo $id ?>>
					<input type="submit" class="submit_b"value="カートに入れる">
				</div>
				<div class="shop">
					ショップ名:
					<?php echo $shop ?>
				</div>
				<div class="exif">
					使用機材:
					<?php echo $image["image_equipments"]?>
				</div>
			</div>
		</div>
	</form>
	<!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>