<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--5秒後自動遷移-->
	<meta http-equiv="refresh"content="5; url=../../index.php">
	<title>Piccean</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/member_regist_input_compView.css">
</head>
<body>
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
	<!-- ここにコンテンツを記述 -->
		<div class="regestMessage">
      <p class="p1">登録完了</p>
      <div class="regestMessage">
        <p>5秒後にトップページへ移動します。</p>
        <p>切り替わらない場合は<a href="../../index.php">こちら</a>をクリックして下さい。</p>
      </div>
		</div>
	<!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>