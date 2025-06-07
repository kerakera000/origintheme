<?php
/**
 * お問い合わせページのテンプレート
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