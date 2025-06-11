<?php
global $wp_path;
global $site_url;
wp_reset_postdata();
?>

<!-- footer -->

<footer class="footer">
    <div class="footer__container">
        <nav class="footer__nav">
            <ul class="footer__links">
                <li><a href="#pageTop" class="footer__link">Top</a></li>
                <li><a href="#tour-overview" class="footer__link">Tour Overview</a></li>
                <li><a href="#course-map" class="footer__link">Course Map</a></li>
                <li><a href="#course-gallery" class="footer__link">Gallery</a></li>
                <li><a href="#movie-connection" class="footer__link">Movie</a></li>
                <li><a href="#contact" class="footer__link">Contact</a></li>
            </ul>
        </nav>
        <div class="footer__social">
            <a href="https://facebook.com/" target="_blank" rel="noopener" aria-label="Facebook" class="footer__icon"><i class="fab fa-facebook-f"></i></a>
            <a href="mailto:info@example.com" aria-label="Email" class="footer__icon"><i class="fa-solid fa-envelope"></i></a>
        </div>
        <div class="footer__copyright">
            &copy; <?php echo date('Y'); ?> The Tokyo Toilet Running Tour. All rights reserved.
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
