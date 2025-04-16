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
                <a class="link" href="/#ABOUT">
                    <span class="text">
                    About Us
                    </span>
                    <span class="hover">
                    About Us
                    </span>
                </a>
                <a class="link" href="/#HOWTOUSE">
                    <span class="text">
                    Career
                    </span>
                    <span class="hover">
                    Career
                    </span>
                </a>
                <a class="link" href="/#SHOPINFO">
                    <span class="text">
                    Interview
                    </span>
                    <span class="hover">
                    Interview
                    </span>
                </a>
                <a class="link" href="/#RESERVE">
                    <span class="text">
                    Profile
                    </span>
                    <span class="hover">
                    Profile
                    </span>
                </a>
                <a class="link" href="/#RESERVE">
                    <span class="text">
                    Entry
                    </span>
                    <span class="hover">
                    Entry
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
