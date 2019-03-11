<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログインページ</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/loginView.css">
</head>

<body>
    <div class="back">
        <!-- readHeader -->
        <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/view/headerView.php"); ?>

        <div class="content">
            <!-- ここにコンテンツを記述 -->
            <div class="main">
                <div id="form-wrapper">
                    <h1>ログイン</h1>
                    <form action="../controller/loginCheckController.php" method="post">
                        <div class="form-item">
                            <label for=""></label>
                            <input type="text" name="id" required="required" maxlength="" placeholder="メールアドレスまたはユーザID">
                        </div>
                        <br>
                        <div class="form-item">
                            <label for="password"></label>
                            <input type="password" name="password" required="required" minlength="8" maxlength="16" placeholder="パスワード">
                        </div>
                        <br>
                        <input type="hidden" id="inputreferrer" name="url" value="<?= $_SERVER['DOCUMENT_ROOT'] . 'index.php'; ?>">
                        <div class="button-panel">
                            <input type="submit" class="button" value="ログイン" id="button-blue">
                        </div>
                        <?= $_POST["login_message"]; ?>
                    </form>
                    <div class="form-footer">
                        <p><a href="#">パスワードを忘れた方</a></p>
                        <p><a href="#">会員登録がお済ではない方</a></p>
                        <a href="../controller/member_regist_inputController.php">新規会員登録へ</a>
                    </div>
                </div>
                <!-- コンテンツここまで -->
            </div>

            <script>
                // ログインページ遷移前のページのURL取得
                var referrer = document.referrer;
                document.getElementById("inputreferrer").value = referrer;
            </script>
        </div>
        <!-- readFooter -->
        <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/view/footerView.php"); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../js/jquery.ripples-min.js"></script>
        <script src="../js/rippleConfig.js"></script>
</body>

</html>
<?php
if (isset($_GET["msg"])) {
	$msg =  $_GET["msg"];
	$alert = "<script type='text/javascript'>alert('$msg');</script>";
	echo $alert;
}
?> 