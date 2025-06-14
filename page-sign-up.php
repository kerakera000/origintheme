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
                <div id="STEP1" class="step1 step-item active">
                    <div class="border-box"></div>
                    <span class="step-num">1</span>
                    <span class="step-label">入力</span>
                    <img class="step-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/signup/step.png" alt="">
                    <img class="step-img-gray" src="<?php echo get_template_directory_uri(); ?>/assets/img/signup/stepgray.png" alt="">
                </div>
                <div id="STEP2" class="step2 step-item ">
                    <div class="border-box"></div>
                    <span class="step-num">2</span>
                    <span class="step-label">確認</span>
                    <img class="step-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/signup/step.png" alt="">
                    <img class="step-img-gray" src="<?php echo get_template_directory_uri(); ?>/assets/img/signup/stepgray2.png" alt="">
                </div>

                <div id="STEP3" class="step3 step-item">
                    <div class="border-box"></div>
                    <span class="step-num">3</span>
                    <span class="step-label">完了</span>
                </div>
            </div>

            <div class="common-step-main-content">

                <div id="STEPCONT1" class="first-content cont active">
                    <button id="Button1" class="common-button-pink">
                        確認
                    </button>
                </div>

                <div id="STEPCONT2" class="second-content cont">
                    <button id="Button2" class="common-button-pink">
                        登録
                    </button>
                </div>

                <div id="STEPCONT3" class="third-content cont">
                </div>

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