<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Piccean</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/member_indiv_pageView.css">
</head>
<body>
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
        <!-- ここにコンテンツを記述 -->
        <div class="LeftBox">
            <h1>会員情報変更</h1>
            <div class="icon">
                アイコンpng
            </div>
        </div>
        <div class="RightBox">
            <div class="ElementBox">
                <p>氏名</p>
                <p>ニックネーム</p>
                <p>メールアドレス</p>
                <p>メールアドレス確認</p>
                <p>パスワード</p>
                <p>パスワード確認</p>
            </div>
            <div class="InputBox">
                <form action="post">
                    <input type="texbox" class="TextBox"><br>
                    <input type="texbox" class="TextBox"><br>
                    <input type="texbox" class="TextBox"><br>
                    <input type="texbox" class="TextBox"><br>
                    <input type="texbox" class="TextBox"><br>
                    <input type="texbox" class="TextBox"><br>
                </form>
            </div>
        </div>
        <div class="VoidBox">
        </div>
	    <!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>