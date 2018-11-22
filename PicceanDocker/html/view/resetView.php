<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Piccean</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/resetView.css">
</head>
<body>
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
	<!-- ここにコンテンツを記述 -->
	<div class="main">
		<p>パスワード再設定</p>
		<form action="">
			<div class="buttonCenter">
				新しいパスワード <input type="text"><br>
				<input type="submit" value="送信する" class="button">
			</div>
		</form>
	</div>
	<!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>