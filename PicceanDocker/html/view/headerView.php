<?php session_start(); ?>
<header>
    <div class="logoImage"><a href="../index.php"><img class="logosrc" src="#" alt="picccean"></a></div>
    <div class="searchBox">
        <form action="../controller/search_resultsController.php?page=1" method="get" class="search_container">
            <label for="search">
                <input type="text" name="keywords" size="25" maxlength="255" placeholder="　キーワード検索">
            </label>
            <input type="hidden" name="fromHeader">
            <input type="submit" value="検索">
        </form>
    </div>
    <div id="headNavi">
        <?php if (!isset($_SESSION["id"])): ?>
        <!-- 未ログイン時 -->
        <button id="loginButton" onclick="location.href='../view/loginView.php'">ログイン</button>
        <button id="registButton" onclick="location.href='../controller/member_regist_inputController.php'">新規登録</button>
        <?php else: ?>
        <!-- ログイン時 -->
        <button id="logoutButton" onclick="location.href='../model/logout.php'">ログアウト</button>
        <button id="cartButton" onclick="location.href='../controller/cart_list.php'">カート</button>
        <span class="menuIcon"></span>
        <dl id="headerMenu">
            <dt>ユーザのアカウント画像</dt>
            <dd class="menuItem"><a href="../controller/member_info_edit.php">会員情報ページ</a></dd>
            <dd class="menuItem"><a href="../controller/image_add.php">画像追加ページ</a></dd>
            <dd class="menuItem"><a href="../controller/member_image_listController.php">アップロード画像一覧ページ</a></dd>
            <dd class="menuItem"><a href="../controller/payment_image_listController.php">購入画像一覧ページ</a></dd>
        </dl>
        <?php endif; ?>
    </div>
</header> 