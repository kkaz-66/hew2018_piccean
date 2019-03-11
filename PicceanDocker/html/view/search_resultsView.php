<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>「<?= $_POST["keywords"]; ?>」の検索結果 - Piccean</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/search_resultsView.css">
	<link rel="stylesheet" href="../css/bg.css">
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/search_results.js"></script>
</head>
<body class = "back_other">
<!-- readHeader -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/headerView.php"); ?>

	<div class="content">
	<!-- ここにコンテンツを記述 -->

	<div id="imageMenuBox">
		<h1>「<?= $_POST["keywords"]; ?>」の検索結果&nbsp;<?= $_POST["count"]; ?>&nbsp;件</h1>
	
		<!-- 詳細条件メニュー -->
		<div id="imageMenu" class="clearfix">
			<div class="menuBox">
				<label>サイズ：</label>
				<ul class="menuItem">
					<li><input type="radio" class="addSize" name="imageSize" value="-1" <?= $_POST["sizeReqNone"]; ?>>指定なし</li>
					<li><input type="radio" class="addSize" name="imageSize" value="S" <?= $_POST["sizeReqS"]; ?>>S</li>
					<li><input type="radio" class="addSize" name="imageSize" value="M" <?= $_POST["sizeReqM"]; ?>>M</li>
					<li><input type="radio" class="addSize" name="imageSize" value="L" <?= $_POST["sizeReqL"]; ?>>L</li>
				</ul>
			</div>
	
			<div class="menuBox">
				<label>カテゴリ：</label>
				<div class="menuItem">
					<select name="categoryId" id="categoryId">
						<option class="addCategory" value="-1" <?= $_POST["catReqNone"]; ?>>選択なし</option>
						<option class="addCategory" value="1" <?= $_POST["catReq1"]; ?>>生物</option>
						<option class="addCategory" value="2" <?= $_POST["catReq2"]; ?>>地形</option>
						<option class="addCategory" value="3" <?= $_POST["catReq3"]; ?>>構造物</option>
						<option class="addCategory" value="4" <?= $_POST["catReq4"]; ?>>人物</option>
					</select>
				</div>
			</div>
	
			<div class="menuBox">
				<label>画像の向き：</label>
				<ul class="menuItem">
					<li><input type="radio" class="addDirection" name="imageDirection" value="-1" <?= $_POST["dirReqNone"]; ?>>指定なし</li>
					<li><input type="radio" class="addDirection" name="imageDirection" value="0" <?= $_POST["dirReq0"]; ?>>横</li>
					<li><input type="radio" class="addDirection" name="imageDirection" value="1" <?= $_POST["dirReq1"]; ?>>縦</li>
				</ul>
			</div>
	
			<div class="floatRight selectBox">
				<div class="menuBox">
					<label>並び替え</label>
					<div class="menuItem">
						<select name="imageSort" id="imageSort">
							<option class="addSort" value="-1" <?= $_POST["sortReqNone"]; ?>>選択なし</option>
							<option class="addSort" value="0" <?= $_POST["sortReq0"]; ?>>投稿日の新しい順</option>
							<option class="addSort" value="1" <?= $_POST["sortReq1"]; ?>>投稿日の古い順</option>
							<option class="addSort" value="2" <?= $_POST["sortReq2"]; ?>>ダウンロード数の多い順</option>
							<option class="addSort" value="3" <?= $_POST["sortReq3"]; ?>>ダウンロード数の少ない順</option>
							<option class="addSort" value="4" <?= $_POST["sortReq4"]; ?>>閲覧数の多い順</option>
							<option class="addSort" value="5" <?= $_POST["sortReq5"]; ?>>閲覧数の少ない順</option>
						</select>
					</div>
				</div>
		
				<div class="menuBox">
					<label>表示件数</label>
					<div class="menuItem">
						<select name="dispNum" id="dispNum">
							<option class="addDispNum" value="10" <?= $_POST["dispNum0"]; ?>>10件</option>
							<option class="addDispNum" value="20" <?= $_POST["dispNum1"]; ?>>20件</option>
							<option class="addDispNum" value="50" <?= $_POST["dispNum2"]; ?>>50件</option>
							<option class="addDispNum" value="100" <?= $_POST["dispNum3"]; ?>>100件</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- 詳細条件メニューここまで -->
	</div>
	

	<!-- 画像一覧 -->
	<?php if(isset($_POST["images"]) && $_POST["count"] > 0 && $_POST["currentPage"] <= $_POST["lastPage"] && $_POST["currentPage"] > 0): ?>
		<div id="imageWrapper">
			<?php foreach($_POST["images"] as $image): ?>
				<div class="imageBox">
					<a href="../view/image_indivView.php?imageId=<?= $image["image_id"]; ?>">
						<img src="<?= $image["image_thumbnail"]; ?>" alt="<?= $image["image_title"]; ?>">
					</a>
				</div>
			<?php endforeach; ?>
		</div>
		<!-- ページネーション -->
		<div id="pagiNationArea">

			<?php if($_POST["currentPage"] != $_POST["lastPage"]): ?>
				<p><span><?= $_POST["count"]; ?>件中&nbsp;<?= (($_POST["currentPage"] - 1) * $_POST["dispNum"] + 1); ?>&nbsp;-&nbsp;<?= ($_POST["currentPage"] * $_POST["dispNum"]); ?>件目を表示</span></p>
			<?php else: ?>
				<p><span><?= $_POST["count"]; ?>件中&nbsp;<?= (($_POST["currentPage"] - 1) * $_POST["dispNum"] + 1); ?>&nbsp;-&nbsp;<?= (($_POST["currentPage"] - 1) * $_POST["dispNum"] + 1 + ($_POST["count"] % $_POST["dispNum"] - 1)); ?>件目を表示</span></p>
			<?php endif; ?>

			<?php if($_POST["currentPage"] != $_POST["lastPage"]): ?>
				<button id="nextPage" class="changePage" data-page=<?= ($_POST["currentPage"] + 1); ?>>次のページ</button>
			<?php endif; ?>

			<div id="pagiNation">
				<?php if($_POST["currentPage"] != 1): ?>
					<span class="changePage pageButton" data-page=<?= ($_POST["currentPage"] - 1); ?>><</span>
				<?php endif; ?>

				<?php if($_POST["lastPage"] <= 5 || $_POST["currentPage"] < 4): ?>
					<?php for($i = 1; $i <= $_POST["lastPage"] && $i <= 5; $i++): ?>
						<?php if($i == $_POST["currentPage"]): ?>
							<span class="current pageButton"><?= $i; ?></span>
						<?php else: ?>
							<span class="changePage pageButton" data-page="<?= $i; ?>"><?= $i; ?></span>
						<?php endif; ?>
					<?php endfor; ?>
				<?php elseif($_POST["currentPage"] < $_POST["lastPage"] - 1): ?>
					<?php for($i = $_POST["currentPage"] - 2; $i <= $_POST["currentPage"] + 2; $i++): ?>
						<?php if($i == $_POST["currentPage"]): ?>
							<span class="current pageButton"><?= $i; ?></span>
						<?php else: ?>
							<span class="changePage pageButton" data-page="<?= $i; ?>"><?= $i; ?></span>
						<?php endif; ?>
					<?php endfor; ?>
				<?php else: ?>
					<?php for($i = $_POST["lastPage"] - 4; $i <= $_POST["lastPage"]; $i++): ?>
						<?php if($i == $_POST["currentPage"]): ?>
							<span class="current pageButton"><?= $i; ?></span>
						<?php else: ?>
							<span class="changePage pageButton" data-page="<?= $i; ?>"><?= $i; ?></span>
						<?php endif; ?>
					<?php endfor; ?>
				<?php endif; ?>

				<?php if($_POST["currentPage"] != $_POST["lastPage"]): ?>
					<span class="changePage pageButton" data-page=<?= ($_POST["currentPage"] + 1); ?>>></span>
				<?php endif; ?>
			</div>
		</div>
		<!-- ページネーションここまで -->
	<?php else: ?>
		<h2>お探しの条件では見つかりませんでした。</h2>
	<?php endif; ?>
	<!-- 画像一覧ここまで -->

	
	<!-- コンテンツここまで -->
	</div>

<!-- readFooter -->
<?php require_once($_SERVER['DOCUMENT_ROOT']."/view/footerView.php"); ?>
</body>
</html>