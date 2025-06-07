<?php
/**
 * 会社概要ページのテンプレート
 * 
 * 企業情報、事業内容、経営理念などを表示するページ
 * 会社の基本情報をユーザーに伝える重要なページ
 *
 * @package Origintheme
 */

global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="max-content about-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="common-container about-page-content">
        <div class="common-left-content about-page-content__left">
    
        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?>
