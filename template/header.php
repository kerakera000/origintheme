<?php
global $wp_path;
global $site_url;
?>

<header id="HEADER" class="header">
    <div class="header--logo">
        <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.svg" alt="">
        </a>
        <p class="link">
            <span class="text">
                COMPANY事業部 採用サイト
            </span>
        </p>
    </div>
    <div id="SPHEADER" class="header--linkbox">
        <a class="link" href="/about">
            <span class="text">
            About Us
            </span>
            <span class="hover">
            About Us
            </span>
            <span class="sp">
            COMPANY事業部について
            </span>
        </a>
        <a class="link" href="/career">
            <span class="text">
            Career
            </span>
            <span class="hover">
            Career
            </span>
            <span class="sp">
            キャリア・研修について
            </span>
        </a>
        <a class="link" href="/interview">
            <span class="text">
            Interview
            </span>
            <span class="hover">
            Interview
            </span>
            <span class="sp">
            社員インタビュー
            </span>
        </a>
        <a class="link" href="/profile">
            <span class="text">
            Profile
            </span>
            <span class="hover">
            Profile
            </span>
            <span class="sp">
            会社情報
            </span>
        </a>
        <div class="common-button header-button">
            <div class="text">
                <p class="normal">Entry</p>
                <p class="hover">Entry</p>
            </div>
            <span class="arrow-right">
                <div class="arrow-box">
                    <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/header/headerico.svg" alt="">
                    <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/header/headerico.svg" alt="">
                </div>
            </span>
            <div class="entry-linkbox">
                <a href="/entry" class="entry-linkbox-link">
                    <p class="normal">新卒採用</p>
                    <p class="hover">新卒採用</p>
                </a>
                <a href="/entry" class="entry-linkbox-link">
                    <p class="normal">中途採用</p>
                    <p class="hover">中途採用</p>
                </a>
                <!-- <a href="/entry" class="entry-linkbox-link">
                    <p class="normal">カジュアル面談</p>
                    <p class="hover">カジュアル面談</p>
                </a> -->
            </div>
        </div>

        <div class="Entry--cardbox">
            <a class="Entry-card type1" href="/entry">
                <div class="card-title">
                    <h2 class="title">New Graduate</h2>
                    <span class="sub-title">新卒採用</span>
                </div>
                <div class="card-imgbox">
                    <div class="card-img">
                        <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/entry/entry.svg" alt="">
                        <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/entry/entry.svg" alt="">
                    </div>
                </div>
            </a>
            <a class="Entry-card type2" href="/entry">
                <div class="card-title">
                    <h2 class="title">Mid Career</h2>
                    <span class="sub-title">中途採用</span>
                </div>
                <div class="card-imgbox">
                    <div class="card-img">
                        <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/entry/entry.svg" alt="">
                        <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/entry/entry.svg" alt="">
                    </div>
                </div>
            </a>
        </div>

        <p class="copyright">
            ©︎ SERAKU.Co.,Ltd. All Rights Reserved.
        </p>
    </div>
</header>

<header id="SPheaderButton" class="SP-header">
    <span class="line1"></span>
    <span class="line3"></span>
</header>
