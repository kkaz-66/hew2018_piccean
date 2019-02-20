<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>新規登録内容確認ページ</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/member_regist_input_conf.css">
</head>
<body>
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
	<!-- ここにコンテンツを記述 -->

	<h1>新規登録内容確認</h1>
	<div id="inputForm">
		<form action="../controller/member_regist_input_compController.php" method="post">
			<label for="user_name">氏名</label>
			<input type="hidden" name="user_name" value="<?= $_POST["user_name"] ?>">
			<?= $_POST["user_name"]; ?>
			<br>
			<label for="user_nickname">ニックネーム</label>
			<input type="hidden" name="user_nickname" value="<?= $_POST["user_nickname"] ?>">
			<?= $_POST["user_nickname"]; ?>
			<br>
			<label for="user_id">ユーザID</label>
			<input type="hidden" name="user_id" value="<?= $_POST["user_id"] ?>">
			<?= $_POST["user_id"]; ?>
			<br>
			<label for="user_password">パスワード</label>
			<input type="hidden" name="user_password" value="<?= $_POST["user_password"] ?>">
			********
			<br>
			<label for="user_email">メールアドレス</label>
			<input type="hidden" name="user_email" value="<?= $_POST["user_email"] ?>">
			<?= $_POST["user_email"]; ?>
			<br>
			<button type="submit" formaction="../controller/member_regist_inputController.php">戻る</button>
			<input type="submit" name="submit" value="登録">
		</form>
	</div>

	<!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>