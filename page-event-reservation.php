<?php
/**
 * Template Name: 説明会予約
 */

global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="max-content event-reservation-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="common-container event-reservation-page-content">
        <div class="common-left-content event-reservation-page-content__left">
            <!-- コンテンツをここに追加 -->
        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 