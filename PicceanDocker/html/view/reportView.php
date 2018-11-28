<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--5秒後自動遷移-->
	<!--<meta http-equiv="refresh"content="5; url=../../index.php">-->
	<title>Piccean</title>
	<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/reportView.css">
</head>
<body>
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
	<!-- ここにコンテンツを記述 -->
		<h1>違反報告</h1>
    <div class="LeftBox"></div>
    <div class="RightBox"></div>
    <div class="buttonBox">
      <div class="buttonCenter">
        <form action="">
          <input type="button" value="キャンセル">
          <input type="submit" value="内容確認へ">
        </form>
      </div>
    </div>
	<!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>