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
	<form action="" method="post">
		<div class="wrapper">
			<div class="leftbox">
				<div class="picture">ここに画像が入るよ

				</div>
				<div class="info_l">
					<div class="tag">
						<a href="" class="">タグ </a>
						<a href="" class="">タグ </a>
						<a href="" class="">タグ </a>
					</div>
					<div class="comment">画像についてのコメント</div>
					<div class="user">投稿者名  ID:XXX</div>
				</div>
			</div>
			<div class="rightbox">
				<div class="info_r">タイトル</div>
				<div class="category">カテゴリ</div>
				<div class="map">ここに地図</div>
				<div class="shop">ショップ名</div>
				<div class="exif">
					カメラ:
					レンズ:
					焦点距離:
					ISO感度:
					絞り:
					シャッタースピード:
					その他利用機材:
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