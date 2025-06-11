<?php
/**
 * 検索条件ページのテンプレート
 * 
 * 条件を指定してフランチャイズを検索するフォームを表示するページ
 * 複数の条件（業種、投資額、地域など）による絞り込み検索
 * 検索条件の保存と再利用機能
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
<?php get_template_part('./template/sidebar');?>

<main class="max-content search-conditions-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="common-container search-conditions-page-content">
        

    


        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 