<?php
session_start();
require_once("../model/getter.php");
$id = $_GET['imageId'];
$image = getImage($id);
$category = getCategory($image["category_id"]);
$shop = getShop($image["shop_id"]);
$user_name = getUser($image["user_id"]);
$user_id = $_SESSION["id"];


//ふざけてんのかって思うかもしれんけど応急処置
//購入済みか確認するSQL
require_once("../model/db_model.php");
$bought_flag = buy_history_check($user_id , $id);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piccean</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/image_indiv.css">
    <link rel="stylesheet" href="../css/bg.css">
</head>

<body class="back_other">
    <!-- readHeader -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/view/headerView.php"); ?>

    <div class="content">
        <!-- ここにコンテンツを記述 -->
        <form class="cartForm" action="../controller/cartaddController.php" method="post">
            <div class="wrapper">
                <div class="leftbox">
                    <div class="picture">
                        <img class="image_file" src="<?= $image["image_file"] ?>" alt="test">
                    </div>
                    <div class="info_l">
                        <div class="tag">
                        </div>
                        <div class="comment">
                            <p>
                                コメント:
                                <br>
                                <?php echo $image["image_comment"] ?>
                            </p>
                        </div>
                        <div class="user">
                            <p>
                                投稿者名:
                                <?php echo $user_name ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="rightbox">
                    <div class="info_r">
                        <p class="title">
                            タイトル:
                            <?php echo $image["image_title"] ?>
                        </p>
                    </div>
                    <div class="category">
                        <p>
                            カテゴリ:
                            <?php echo $category ?>
                        </p>
                    </div>
					<div class="shop">
						<p>
							ショップ名:
							<?php echo $shop ?>
						</p>
					</div>
                    <div class="map">
                        <iframe class="map_frame" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="http://maps.google.co.jp/maps?q=<?php echo $shop ?> ダイビング&output=embed&t=m&z=15"></iframe>
                    </div>
                    <div class="buy">
                        <input type="hidden" name="id" value=<?php echo $id ?>>
						<?php 
						if(isset($bought_flag)){
							echo "<p>購入済みです</p>";
						}
						elseif ($user_name != $user_id) {
							$b = '<input type ="submit" class="submit_b"value="カートに入れる">';
							echo $b;
						}
						?>
                    </div>
                    <div class="exif">
                        <p>
                            使用機材:
                            <?php echo $image["image_equipments"]?>
                        </p>
                    </div>
                </div>
            </div>
        </form>
        <!-- コンテンツここまで -->
    </div>

    <!-- readFooter -->
    <?php require_once($_SERVER['DOCUM E NT_ROOT']."../view/footerView.php"); ?>
</body>
</html>