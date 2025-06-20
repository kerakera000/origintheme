<?php
global $wp_path;
global $site_url;
?>

<header id="HEADER" class="header">
    <div class="header--logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/icon.svg" alt="">
    </div>
    <div id="SPHEADER" class="header--linkbox">
        <a class="link" href="/">
            <span class="text">TOP</span>
        </a>
        <a class="link" href="/about">
            <span class="text">ABOUT US</span>
        </a>
        <a class="link" href="/service">
            <span class="text">SERVICE</span>
        </a>
        <a class="link" href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">
            <span class="text">NEWS</span>
        </a>
        <a class="link" href="/access">
            <span class="text">ACCESS</span>
        </a>
        <a class="link contact-link" href="/contact">
            <span class="text">お問い合わせ</span>
        </a>
    </div>
</header>

<header id="SPheaderButton" class="SP-header">
    <span class="line1"></span>
    <span class="line3"></span>
</header>
