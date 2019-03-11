<?php
session_start();
if (!isset($_SESSION["id"])) {
    header('Location: ../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piccean</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/image_add.css">
    <link rel="stylesheet" href="../css/bg.css">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        $(function() {
            $('#myfile').change(function(e) {
                //ファイルオブジェクトを取得する
                var file = e.target.files[0];
                var reader = new FileReader();
                //画像でない場合は処理終了
                if (file.type.indexOf("image") < 0) {
                    alert("画像ファイルを指定してください。");
                    return false;
                }
                //アップロードした画像を設定する
                reader.onload = (function(file) {
                    return function(e) {
                        $("#img1").attr("src", e.target.result);
                        $("#img1").attr("title", file.name);
                    };
                })(file);
                reader.readAsDataURL(file);
            });
        });
    </script>
</head>

<body class="back_other">
    <!-- readHeader -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/view/headerView.php"); ?>

    <div class="content">
        <!-- ここにコンテンツを記述 -->
        <div class="infoBox">
            <div class="leftBox">
                <form enctype="multipart/form-data" action="../controller/image_addController.php" method="post">
                    <div class="file_select">
                        <input type="file" name="upload" id="myfile" value="ファイルを選択">
                    </div>
                    <div class="image">
                        <img id="img1">
                    </div>
                    <div class="exif">exif情報ここにでるよ</div>
            </div>
            <div class="centerBox">
                <div class="title">

                </div>
                <div class="item_name">
                    <div class="item_name_box">
                        <p class="item_name_txt">タイトル:</p>
                        <input type="text" name="title" class="input_box">
                    </div>
                    <div class="category_box">
                        <p class="item_name_txt">カテゴリ:</p>
                        <select name="category" id="0" class="input_box">
                            <option value="生物">生物</option>>
                            <option value="地形">地形</option>
                            <option value="構造物">構造物</option>
                            <option value="人物">人物</option>
                        </select>
                    </div>
                    <div class="tag_box">
                        <p class="item_name_txt">タグ:</p>
                        <input type="text" name="tag" class="input_box">
                    </div>
                    <p class="item_name_txt">利用ダイビングショップ名:</p>
                    <input type="text" name="shop_name" class="input_box">
                    <p class="item_name_txt">ダイビングポイント名:</p>
                    <input type="text" name="location" class="input_box">
                    <p class="item_name_txt">撮影機材:</p>
                    <input type="text" name="equipments" class="input_box">
                    <p class="item_name_txt">コメント:</p>
                    <input type="text" name="comment" class="input_box">
                </div>
                <div class="item_get">
                    <!-- ここにgetした情報 -->
                </div>
            </div>
            <div class="rightBox">
                <div class="size">
                    <input type="radio" name="image_size" value="S" />Sサイズ
                    <input type="radio" name="image_size" value="M" />Mサイズ
                    <input type="radio" name="image_size" value="L" />Lサイズ
                </div>
                <div class="dlbutton">
                    <input type="submit" value="アップロード">
                </div>
            </div>
            </form>
        </div>
        <!-- コンテンツここまで -->
    </div>

    <!-- readFooter -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/view/footerView.php"); ?>
</body>

</html>
<?php
if (isset($_GET["err"])) {
    $err = $_GET["err"];
    $alert = "<script type='text/javascript'>alert('$err');</script>";
    echo $alert;
}
?>