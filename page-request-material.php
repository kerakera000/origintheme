<?php
/**
 * 資料請求ページのテンプレート
 * 
 * フランチャイズの詳細資料請求フォームを表示するページ
 * ユーザー情報と希望するフランチャイズ情報を収集
 * 管理者への通知機能と自動返信メールの送信
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

<main class="max-content request-material-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="common-container request-material-page-content">
        <div class="common-left-content request-material-page-content__left">
            <!-- 資料請求ページ -->
            <div class="common-sub-titlebox">
                <h3 class="title">資料請求</h3>
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
                    <div class="request-form">

                        <div class="common-required-tag-box">
                            <div class="tag">必須</div>
                            <div class="title">事業区分</div>
                        </div>

                        <div class="request-form__selection-box">
                            <label class="radio-box">
                                <input class="input" type="radio" name="segment" value="individual" required checked>
                                <span class="my-radio"></span>
                                個人
                            </label>
                            <label class="radio-box">
                                <input class="input" type="radio" name="segment" value="individual" required>
                                <span class="my-radio"></span>
                                法人
                            </label>
                        </div>

                        <div class="common-sub-titlebox request-form__rf-title">
                            <h3 class="title">資料請求</h3>
                        </div>

                        <div class="request-form__tag-box">
                            <div class="tag">必須</div>
                            <div class="title">事業区分</div>
                        </div>
                        

                    </div>
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
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 