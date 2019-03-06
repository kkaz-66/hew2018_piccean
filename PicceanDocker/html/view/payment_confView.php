<?php
session_start();
require_once("../model/getter.php");
//時間があったらコントローラーに分ける
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Piccean</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="back">
	<!-- readHeader -->
	<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

		<div class="content">
        <!-- ここにコンテンツを記述 -->
            <div class="list">
                <?php
                if($_SESSION["cart"]):
                    foreach($_SESSION["cart"] as $id):
                        $image = getImage($id);
                        echo $image["image_title"];
                        echo "</br>";
                    endforeach;
                endif;
                ?>
            </div>
            <div class="button">
                <input type="button" onclick="location.href='./cartView.php'" value="戻る">
                <input type="button" onclick="location.href='./payment_compView.php'" value="確定">
            </div>
			
		<!-- コンテンツここまで -->
		</div>

	<!-- readFooter -->
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./js/jquery.ripples-min.js"></script>
<script src="./js/rippleConfig.js"></script>
</body>
</html>