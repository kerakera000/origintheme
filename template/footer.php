<?php
global $wp_path;
global $site_url;
wp_reset_postdata();
?>

<!-- footer -->

<footer class="footer">
    <div class="footer__cont max-1080">
      <div class="footer__left">
        <div class="footer__logo">RB Art Asset</div>
        <div class="footer__info">
        © 2025. RB ART asset Co.,Ltd.
        </div>
      </div>
      <div class="footer__center">
        <nav class="footer__nav">
            <a href="#">TOP</a>
            <a href="#">ABOUT US</a>
            <a href="#">SERVICE</a>
            <a href="#">NEWS</a>
            <a href="#">ACCESS</a>
            <div class="right">
                <button class="footer__btn">お問い合わせ</button>
            </div>
        </nav>
        <div class="footer__links">
          <span>保険勧誘方針</span>
          <span>個人情報保護に関する基本方針</span>
          <span>個人情報保護法等に基づく公表事項</span>
          <span>反社会的勢力に対する基本方針</span>
          <span>指定信用情報機関</span>
          <span>貸金業務にかかる指定紛争解決機関のご紹介</span>
        </div>
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
