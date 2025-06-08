<?php
/**
 * お気に入りページのテンプレート
 * 
 * ユーザーが保存したフランチャイズ情報の一覧を表示するページ
 * ログインユーザーのみアクセス可能
 * お気に入りの追加・削除機能を提供
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

<main class="max-content favorites-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="common-container favorites-page-content">
        <div class="common-left-content favorites-page-content__left">
            <!-- コンテンツをここに追加 -->
             <div class="favorites-page-○○">

             </div>
        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 