<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>新規登録内容入力ページ</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/member_regist_input.css">
</head>
<body>
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
	<!-- ここにコンテンツを記述 -->

	<h1>新規登録内容入力</h1>
	<div id="inputForm">
		<form action="../controller/member_regist_input_confController.php" method="post">
			<label for="user_name">氏名</label>
			<input id="user_name" type="text" name="user_name" value="<?= $_POST["user_name"]; ?>" >
			<?= $_POST["err_name"]; ?>
			<label for="user_nickname">ニックネーム</label>
			<input id="user_nickname" type="text" name="user_nickname" value="<?= $_POST["user_nickname"]; ?>" >
			<?= $_POST["err_nickname"]; ?>
			<label for="user_id">ユーザID</label>
			<input id="user_id" type="text" name="user_id" value="<?= $_POST["user_id"]; ?>" >
			<?= $_POST["err_id"]; ?>
			<label for="user_password">パスワード</label>
			<input id="user_password" type="password" name="user_password" >
			<?= $_POST["err_password"]; ?>
			<label for="user_email">メールアドレス</label>
			<input id="user_email" type="email" name="user_email" value="<?= $_POST["user_email"]; ?>" >
			<?= $_POST["err_email"]; ?>
			<div class="checkbox">
				<input type="checkbox" name="checkAgreement" value="1" required>
				<a href="../view/privacy_policyView.php" target="_brank">利用規約</a>に同意する
			</div>
			<input type="submit" name="submit" value="次へ">
			<?= $_POST["err_msg"]; ?>
		</form>
	</div>

	<!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>


</body>
</html>