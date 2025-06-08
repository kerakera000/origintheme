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
            <div class="common-sub-titlebox">
                <h3 class="title">会員登録</h3>
            </div>
            <div class="common-form-step">
                <div class="step1 step-item active">
                    <span class="step-num">1</span>
                    <span class="step-label">入力</span>
                </div>

                <div class="step2 step-item">
                    <span class="step-num">2</span>
                    <span class="step-label">確認</span>
                </div>

                <div class="step3 step-item">
                    <span class="step-num">3</span>
                    <span class="step-label">完了</span>
                </div>
            </div>
             <div>
                <button class="common-button-pink">
                    確認
                </button>
             </div>

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