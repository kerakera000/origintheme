<?php
global $wp_path;
global $site_url;
?>

<header id="HEADER" class="header">
    <div class="max-content-header">
        <div class="header--logo">
            <span class="site-title">フラッサイズ PIVOT</span>
        </div>
        <div class="header--center">
            <span class="total-shops">総店舗数 <span class="count">1234</span>件</span>
            <form class="header-search">
                <input type="text" placeholder="フリーワード検索" name="search">
                <button type="submit" class="submit">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/search.svg" alt="検索">
                </button>
            </form>
        </div>
        <div class="header--right">
            <button class="favorite-btn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/favorite.svg" alt="お気に入り">
                お気に入り
            </button>
            <button class="login-btn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/signin.svg" alt="ログイン">
                ログイン
            </button>
            <button class="register-btn">無料会員登録</button>
        </div>
    </div>
</header>

<header id="SPheaderButton" class="SP-header">
    <span class="line1"></span>
    <span class="line2"></span>
    <span class="line3"></span>
</header>

<header id="SPHEADER" class="SP-header-content">
    <div class="sp-header-inner">
        <form class="header-search">
            <input type="text" placeholder="フリーワード検索" name="search">
            <button type="submit" class="submit">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/search.svg" alt="検索">
            </button>
        </form>
        <nav class="sp-header-nav">
            <a href="/favorites" class="favorite-btn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/favorite.svg" alt="お気に入り">
                お気に入り
            </a>
            <a href="/sign-in" class="login-btn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/signin.svg" alt="ログイン">
                ログイン
            </a>
        </nav>
        <a href="/sign-up" class="register-btn">無料会員登録</a>
    </div>
</header>
