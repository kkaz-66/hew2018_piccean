<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Piccean</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/contact_compView.css">
</head>
<body>
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
  <!-- ここにコンテンツを記述 -->
  <!--あるページからお問い合わせ完了後、お問い合わせの流れの前のページへ戻る-->
		<div class="regestMessage">
      <p class="p1">お問い合わせ完了</p>
      <div class="regestMessage">
        <p>5秒後に前のページへ移動します。</p>
        <p>切り替わらない場合は<a href="#">こちら</a>をクリックして下さい。</p>
      </div>
		</div>
	<!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>