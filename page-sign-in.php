<?php
/**
 * サインインページのテンプレート
 * 
 * 既存ユーザーのログインフォームを表示するページ
 * ユーザー認証とセッション管理を行う重要なページ
 * セキュリティ対策（CSRF対策、ブルートフォース対策など）が必要
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

<main class="max-content signin-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="common-container signin-page-content">
        <div class="common-left-content signin-page-content__left">
            <!-- コンテンツをここに追加 -->
        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 