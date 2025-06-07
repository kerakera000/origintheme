<?php
/**
 * Template Name: お気に入り
 */

global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="max-content favorites-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="common-container favorites-page-content">
        <div class="common-left-content favorites-page-content__left">
            <!-- コンテンツをここに追加 -->
        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 