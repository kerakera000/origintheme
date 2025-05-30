<?php
global $wp_path;
global $site_url;
wp_reset_postdata();
?>

<!-- footer -->

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <img class="footer-content--logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.svg" alt="">
            <div id="" class="footer--linkbox">
                <a class="link" href="/">
                    <span class="text">
                    TOP
                    </span>
                    <span class="hover">
                    TOP
                    </span>
                </a>
                <a class="link" href="/about">
                    <span class="text">
                    ABOUT US
                    </span>
                    <span class="hover">
                    ABOUT US
                    </span>
                </a>
                <a class="link" href="/service">
                    <span class="text">
                    SERVICE
                    </span>
                    <span class="hover">
                    SERVICE
                    </span>
                </a>
                <a class="link" href="/news">
                    <span class="text">
                    NEWS
                    </span>
                    <span class="hover">
                    NEWS
                    </span>
                </a>
                <a class="link" href="/access">
                    <span class="text">
                    ACCESS
                    </span>
                    <span class="hover">
                    ACCESS
                    </span>
                </a>
                <a class="link contact-link" href="/contact">
                    <span class="text">
                    お問い合わせ
                    </span>
                    <span class="hover">
                    お問い合わせ
                    </span>
                </a>
            </div>
        </div>
        <div class="footer-content type2">
            <div class="icon-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer_img 2.svg" alt="">
                <p class="sub-text">
                ISO27001登録範囲：東京本社、MSC、大阪支社における情報通信システムの企画、設計、開発、製作、保守・運用業務及び経営管理業務<br>
                ISO9001登録範囲：東京本社、MSCにおけるITインフラソリューションのサービス、製品の加工、及び販売
                </p>
            </div>
            <p class="copyright">
                ©︎ SERAKU.Co.,Ltd. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>
</div>

<!-- Javascript -->
<script src="<?= $wp_path;?>/assets/js/common.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>
