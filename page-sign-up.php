<?php
/**
 * サインアップページのテンプレート
 * 
 * 新規ユーザー登録フォームを表示するページ
 * ユーザー情報の収集とアカウント作成を行う重要なページ
 * 必須項目のバリデーションとセキュリティ対策が必要
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

<main class="max-content signup-page">
    <?php
    // コンテンツヘッダーの読み込み
    get_template_part('./template/content-header');
    ?>

    <div class="common-container signup-page-content">
        <div class="common-left-content signup-page-content__left">
            <!-- サインアップフォームをここに追加 -->
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