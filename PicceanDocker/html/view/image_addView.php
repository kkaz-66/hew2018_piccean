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

<body>
    <!-- readHeader -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/view/headerView.php"); ?>

    <div class="content">
        <!-- ここにコンテンツを記述 -->
        <div class="infoBox">
            <div class="leftBox">
                <div class="file_select">
                    <form action="post">
                        <input type="file" id = "myfile" value="ファイルを選択">
                    </form>
                </div>
                <div class="image">
                    <img id="img1">
                </div>
                <div class="exif">exif情報ここにでるよ</div>
            </div>
            <div class="centerBox">
                <div class="title"></div>
                <div class="item_name">
                    <form action="post">
                        <div class="item_name_box">
                            <p class="item_name_txt">タイトル:</p>
                            <input type="text" class="input_box">
                        </div>
                        <div class="category_box">
                            <p class="item_name_txt">カテゴリ:</p>
                            <select name="category" id="0" class="input_box">
                                <option value="category1">生物</option>>
                                <option value="category1">人間</option>
                            </select>
                        </div>
                        <div class="tag_box">
                            <p class="item_name_txt">タグ:</p>
                            <input type="text" class="input_box">
                        </div>
                        <p class="item_name_txt">利用ダイビングショップ名:</p>
                        <input type="text" class="input_box">
                        <p class="item_name_txt">ダイビングポイント名:</p>
                        <input type="text" class="input_box">
                        <p class="item_name_txt">撮影機材:</p>
                        <input type="text" class="input_box">
                        <p class="item_name_txt">コメント:</p>
                        <input type="text" class="input_box">
                    </form>
                </div>
                <div class="item_get">
                    <!-- ここにgetした情報 -->
                </div>
            </div>
            <div class="rightBox">
                <div class="size">
                    <p>X枚の画像(一例)</p>
                </div>
                <div class="dlbutton">
                    <input type="button" value="アップロード">
                </div>
            </div>
        </div>
        <!-- コンテンツここまで -->
    </div>

    <!-- readFooter -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/view/footerView.php"); ?>
</body>

</html> 