<?php
/**
 * フリーワード検索ページのテンプレート
 * 
 * キーワードによるフランチャイズ検索フォームを表示するページ
 * 全文検索機能を提供
 * 検索結果の表示と絞り込み機能を実装
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

<main class="max-content freeword-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="common-container freeword-page-content">
        <div class="common-left-content freeword-page-content__left">
            <!-- コンテンツをここに追加 -->
        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 