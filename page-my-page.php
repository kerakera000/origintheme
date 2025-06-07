<?php
/**
 * Template Name: マイページ
 */

global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="max-content mypage-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="common-container mypage-page-content">
        <div class="common-left-content mypage-page-content__left">
            <!-- コンテンツをここに追加 -->
        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 