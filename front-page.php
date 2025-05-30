<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="main-layout">
    <div class="kv">
        <div class="kv__background">
            <div class="kv__titlebox">
                <span class="kvRB"></span>
                <div class="kv__title">
                    <h1 class="title">
                        <img src="<?php echo $site_url; ?>/origin-theme/assets/img/kv/kvRBLogo.svg" alt="">
                    </h1>
                    <p class="text">
                    アールビー・アート・アセット株式会社は、美術品に対する<br>
                    ファイナンスサービス (融資・保険)および査定・買取・販売委託サービスを行なっております。
                    </p>
                    <a href="" class="link">
                        VIEW MORE
                        <img src="" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_template_part('./template/footer');
?>
