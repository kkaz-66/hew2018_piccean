<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ログインページ</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
	<!-- ここにコンテンツを記述 -->

	<h1>ログイン</h1>
	<form action="../controller/loginCheckController.php" method="post">
		<input type="text" name="id" maxlength="" placeholder="メールアドレスまたはユーザID">
		<br>
		<input type="password" name="password" minlength="8" maxlength="16" placeholder="パスワード">
		<br>
		<input type="hidden" id="inputreferrer" name="url" value="<?= $_SERVER['DOCUMENT_ROOT'].'index.php' ;?>">
		<input type="submit" value="ログイン">
		<?= $_POST["login_message"]; ?>
	</form>
	<p><a href="#">パスワードを忘れた方</a></p>

	<p>会員登録がお済ではない方</p>
	<a href="../controller/member_regist_inputController.php">新規会員登録へ</a>

	<!-- コンテンツここまで -->
	</div>

	<script>
		// ログインページ遷移前のページのURL取得
		var referrer = document.referrer;
		document.getElementById("inputreferrer").value = referrer;
	</script>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>