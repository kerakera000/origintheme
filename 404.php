<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="main-layout notfound404">
    <div class="videobg">
        <video src="<?php echo get_template_directory_uri(); ?>/assets/video/bg.mp4" autoplay muted loop playsinline></video>
    </div>
    <div class="Phero">
        <div class="Phero--cont inner-content1200">
            <div class="Phero--textbox">
                <div class="common-titlebox">
                    <p id="Ctitle" class="title page-title">
                        <span id="Ctitle-text" class="text">404 Not Found.</span>
                    </p>
                    <p id="Csubtitle" class="sub-title">
                        <span id="Csubtitle-text" class="text">ページが見つかりませんでした</span>
                    </p>
                </div>
                <div class="Phero--textbox--list">
                    <p class="text">
                        お探しのページを見つけることができませんでした。<br>
                        ご覧になっていたページからのリンクが無効になっているか、<br>
                        お探しのページが削除されている可能性がございます<span class="yakuhanjp">。</span>
                    </p>

                    <a href="/" class="common-button">
                        <div class="text">
                            <p class="normal">TOPにもどる</p>
                            <p class="hover">TOPにもどる</p>
                        </div>
                        <span class="arrow-right">
                            <div class="arrow-box">
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                            </div>
                        </span>
                    </a>
                </div>
            </div>
            <div class="Phero--imgbox start-img">
                <p class="breadcrumbs">Top - <span class="text">404</span></p>
            </div>
        </div>
    </div>
</main>

<?php
get_template_part('./template/footer');
?>