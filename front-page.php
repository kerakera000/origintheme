<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="max-content front-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="front-page-content">
        <div class="front-page-content-left">
            <div class="common-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/bnr03.png" alt="">
            </div>
        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?>
