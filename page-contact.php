<?php
/**
 * お問い合わせページのテンプレート
 * 
 * サイト全体に関するお問い合わせフォームを表示するページ
 * ユーザーからの問い合わせ情報を収集
 * 自動返信メールの送信と管理者への通知
 * 問い合わせ履歴の管理
 *
 * @package Origintheme
 */

// グローバル変数の定義
global $wp_path;
global $site_url;

// ヘッダーテンプレートの読み込み
get_template_part('./template/head');
get_template_part('./template/header');
?>

<main class="max-content contact-page">
    <?php
    // コンテンツヘッダーの読み込み
    get_template_part('./template/content-header');
    ?>

    <div class="common-container contact-page-content">
        <div class="common-left-content contact-page-content__left">
            <!-- お問い合わせフォームをここに追加 -->
        </div>

        <?php
        // サイドバナーの読み込み
        get_template_part('./template/banner');
        ?>
    </div>
</main>

<?php
// フッターテンプレートの読み込み
get_template_part('./template/footer');
?> 