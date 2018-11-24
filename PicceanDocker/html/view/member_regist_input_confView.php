<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>新規登録内容確認ページ</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
	<!-- ここにコンテンツを記述 -->

	<h1>新規登録内容確認</h1>
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
		<?= $_POST["user_password"]; ?>
		<br>
		<label for="user_email">メールアドレス</label>
		<input type="hidden" name="user_email" value="<?= $_POST["user_email"] ?>">
		<?= $_POST["user_email"]; ?>
		<br>
		<input type="button" onclick="location.href='../controller/member_regist_inputController.php'" value="戻る">
		<input type="submit" name="submit" value="登録">
	</form>

	<!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>