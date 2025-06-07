<?php
/**
 * 説明会予約ページのテンプレート
 * 
 * フランチャイズ説明会の予約フォームを表示するページ
 * 説明会日程の選択と予約情報の収集
 * 予約確認メールの送信と管理者への通知
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