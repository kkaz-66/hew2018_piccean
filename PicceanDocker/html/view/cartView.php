<?php
session_start();
require_once("../model/getter.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Piccean</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/cart.css">
</head>
<body>
<div id="back">
	<!-- readHeader -->
	<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

		<div class="content">
        <!-- ここにコンテンツを記述 -->
            <div class="wrapper">
				<div class="info">
					価格________
				</div>
				<?php 
				if($_SESSION["cart"]):
					foreach($_SESSION["cart"] as $id):
				?>
				<div class="item">
					<div class="image">
						<?php 
							$image = getImage($id);  
							$user_name = getUser($image["user_id"])
						?>
						<img class="image_file" src="<?= $image["image_file"] ?>" alt="test">
					</div>
					<div class="image_info">
						<div class="txt">
							タイトル:<?php echo $image["image_title"] ?>
							<br>
							アップロード者:<?php echo $user_name ?>
						</div>
						<div class="del">
							<form action="../controller/cartdelController.php" method = "post">
								<input type ="submit" value ="削除">
								<input type="hidden" name = "id" value = <?php echo $id ?> >
							</form>
						</div>
					</div>
				</div>
				<?php
					endforeach;
				endif;
				?>
                </div>
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