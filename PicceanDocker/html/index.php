<!DOCTYPE html>
<<<<<<< Updated upstream
<html>
  <head>
    <meta charset="utf-8">
    <title>index.html</title>
    <style type="css"></style>
  </head>
  <body>
  <h1>Piccean<h1>
    <img src="./images/test.png">
    <?php
    include("./model/db_model.php");
    $test = test();
    echo $test["name"];
      ?>
  </body>
</html>
=======
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Piccean</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div id="topWrapper" class="slideShow">
		<header>
			<div class="logoImage"><img src="#" alt="Picceanのロゴ画像"></div>
			<div class="searchBox">
				<form action="#検索" method="get">
					<label for="search">
						<input type="text" id="search" maxlength="255" placeholder="検索キーワードを入力してください">
					</label>
					<input type="submit" id="searchButton" value="検索">
				</form>
			</div>
			<div id="headNavi">
				<button id="loginButton" onclick="location.href='#'">ログイン</button>
				<button id="registButton" onclick="location.href='#'">新規登録</button>
				<button id="cartButton" onclick="location.href='#'">カート</button>
			</div>
		</header>

		<footer>
			<div id="footerNavi">
				<button class="footerNaviItem" onclick="location.href='#'">お問い合わせ</button>
				<button class="footerNaviItem" onclick="location.href='#'">利用規約</button>
				<button class="footerNaviItem" onclick="location.href='#'">プライバシーポリシー</button>
			</div>
		</footer>
	</div>
</body>
</html>
>>>>>>> Stashed changes
