<?php
/**
 * Template Name: FC本部登録フォーム
 */

global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="max-content branch-registration-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="common-container branch-registration-page-content">
        <div class="common-left-content branch-registration-page-content__left">
            <!-- コンテンツをここに追加 -->
        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 