<?php
global $wp_path;
global $site_url;
?>

<header id="HEADER" class="header">
    <div class="header--logo">
        <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.svg" alt="">
        </a>
        <a href="" class="link">
            <span class="text">
                COMPANY事業部 採用サイト
            </span>
            <span class="hover">
                COMPANY事業部 採用サイト
            </span>
        </a>
    </div>
    <div id="SPHEADER" class="header--linkbox">
        <a class="link" href="/#ABOUT">
            <span class="text">
            About Us
            </span>
            <span class="hover">
            About Us
            </span>
        </a>
        <a class="link" href="/#CAREER">
            <span class="text">
            Career Step
            </span>
            <span class="hover">
            Career Step
            </span>
        </a>
        <a class="link" href="/#INTERVIEW">
            <span class="text">
            Interview
            </span>
            <span class="hover">
            Interview
            </span>
        </a>
        <a class="link" href="/company">
            <span class="text">
            Company
            </span>
            <span class="hover">
            Company
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
                <a href="/entry" class="entry-linkbox-link">
                    <p class="normal">カジュアル面談</p>
                    <p class="hover">カジュアル面談</p>
                </a>
            </div>
        </div>
    </div>
</header>

<header id="SPheaderButton" class="SP-header">
    <span class="line1"></span>
    <span class="line3"></span>
</header>
