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
<div class="back">
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
	<!-- ここにコンテンツを記述 -->
	<div class="main">
	<h1>新規登録内容入力</h1>
		<div id="inputForm">
			<form action="../controller/member_regist_input_confController.php" method="post">
				<div class="form-item">
					<label for="user_name"></label>
					<span><?= $_POST["err_name"]; ?></span>
					<input id="user_name" type="text" name="user_name" value="<?= $_POST["user_name"]; ?>" placeholder="氏名">
				</div>
				<div class="form-item">
					<label for="user_nickname"></label>
					<span><?= $_POST["err_nickname"]; ?></span>
					<input id="user_nickname" type="text" name="user_nickname" value="<?= $_POST["user_nickname"]; ?>" placeholder="ニックネーム">
				</div>
				<div class="form-item">
					<label for="user_id"></label>
					<span><?= $_POST["err_id"]; ?></span>
					<input id="user_id" type="text" name="user_id" value="<?= $_POST["user_id"]; ?>" placeholder="ユーザid">
				</div>
				<div class="form-item">
					<label for="user_password"></label>
					<span><?= $_POST["err_password"]; ?></span>
					<input id="user_password" type="password" name="user_password" placeholder="password">
				</div>
				<div class="form-item">
					<label for="user_email"></label>
					<span><?= $_POST["err_email"]; ?></span>
					<input id="user_email" type="email" name="user_email" value="<?= $_POST["user_email"]; ?>" placeholder="mail" >
				</div>
				<div class="checkbox">
					<input type="checkbox" name="checkAgreement" value="1" required>
					<a href="../view/privacy_policyView.php" target="_brank">利用規約</a>に同意する
				</div>
				<div class="button-panel">
					<input type="submit" class="button" name="submit" value="次へ">
				</div>
				<span><?= $_POST["err_msg"]; ?></span>
			</form>
		</div>
		</div>
	<!-- コンテンツここまで -->
	</div>
</div>
<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/jquery.ripples-min.js"></script>
<script src="../js/rippleConfig.js"></script>
</body>
</html>