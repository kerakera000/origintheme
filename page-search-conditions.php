<?php
/**
 * Template Name: 検索条件
 */

global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="max-content search-conditions-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="common-container search-conditions-page-content">
        <div class="common-left-content search-conditions-page-content__left">
            <!-- コンテンツをここに追加 -->
        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 