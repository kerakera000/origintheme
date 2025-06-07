<?php
/**
 * マイページのテンプレート
 * 
 * ユーザー情報の管理、登録情報の編集、お気に入り管理を行うページ
 * ログインユーザーのみアクセス可能
 * ユーザープロフィールの編集、パスワード変更、アカウント設定など
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