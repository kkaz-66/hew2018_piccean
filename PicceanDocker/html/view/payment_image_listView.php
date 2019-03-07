<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>購入済画像一覧</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/search_resultsView.css">
	<link rel="stylesheet" href="../css/payment_image_listView.css">
</head>
<body>
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
	<!-- ここにコンテンツを記述 -->
	<h1>購入済画像一覧</h2>

	<?php if($_POST["count"] > 0): ?>
		<div id="imageWrapper">
			<?php foreach($_POST["images"] as $image): ?>
				<div class="imageBox">
					<a href="../view/downloadView.php?imageId=<?= $image["image_id"]; ?>">
						<img src="<?= $image["image_thumbnail"]; ?>" alt="<?= $image["image_title"]; ?>">
					</a>
					<p class="imageTitle"><?= $image["image_title"]; ?></p>
					<p class="imageDate">購入日<br><?= $image["sale_date"]; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	<?php else: ?>
		<h2>購入した画像はありません。</h2>
	<?php endif; ?>

		
	<!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>