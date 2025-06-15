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
                        <!-- 事業区分セクション -->
                        <div class="common-required-tag-box">
                            <div class="tag">必須</div>
                            <div class="title">事業区分</div>
                        </div>
                        <div class="common-radio-selection-box">
                            <label class="radio-box">
                                <input class="input" type="radio" name="segment" value="individual" required checked>
                                <span class="my-radio"></span>
                                個人
                            </label>
                            <label class="radio-box">
                                <input class="input" type="radio" name="segment" value="corporations" required>
                                <span class="my-radio"></span>
                                法人
                            </label>
                        </div>

                        <div class="common-sub-titlebox request-form__margin">
                            <h3 class="title">会員情報</h3>
                        </div>

                        <!-- nameセクション -->
                        <div class="common-required-tag-box request-form__margin">
                            <div class="tag">必須</div>
                            <div class="title">名前</div>
                        </div>
                        <form class="common-text-input-box">
                            <input type="text" placeholder="例） 山田太郎" name="">
                        </form>
                        <div class="common-required-tag-box request-form__margin">
                            <div class="tag">必須</div>
                            <div class="title">フリガナ</div>
                        </div>
                        <form class="common-text-input-box">
                            <input type="text" placeholder="例） ヤマダタロウ" name="">
                        </form>
                        <div id="corporations" class="request-form__corporations-form request-form__margin">
                            <div class="common-required-tag-box">
                                <div class="tag">必須</div>
                                <div class="title">法人名</div>
                            </div>
                            <form class="common-text-input-box">
                                <input type="text" placeholder="例） 株式会社フランチャイズ" name="">
                            </form>
                        </div>

                        <!-- 住所セクション -->
                        <div class="common-option-tag-box request-form__margin">
                            <div class="tag">任意</div>
                            <div class="title">郵便番号</div>
                        </div>
                        <div class="common-required-tag-box request-form__margin">
                            <div class="tag">必須</div>
                            <div class="title">住所</div>
                        </div>
                        <div class="request-form__columm-title-box">
                            <div class="title">都道府県</div>
                        </div>
                        <form class="common-text-input-box request-form__margin-b">
                            <input type="text" placeholder="例） 東京都" name="">
                        </form>
                        <div class="request-form__columm-title-box">
                            <div class="title">市区町村</div>
                        </div>
                        <form class="common-text-input-box request-form__margin-b">
                            <input type="text" placeholder="例） 渋谷区" name="">
                        </form>
                        <div class="request-form__columm-title-box">
                            <div class="title">番地・建物名</div>
                        </div>
                        <form class="common-text-input-box request-form__margin-b">
                            <input type="text" placeholder="例） 1-1 フランチャイズマンション 101号室" name="">
                        </form>

                        <!-- idセクション -->
                        <div class="common-required-tag-box request-form__margin">
                            <div class="tag">必須</div>
                            <div class="title">電話番号</div>
                        </div>
                        <form class="common-text-input-box">
                            <input type="text" placeholder="例） 09012345678" name="">
                        </form>
                        <div class="common-required-tag-box request-form__margin">
                            <div class="tag">必須</div>
                            <div class="title">メールアドレス</div>
                        </div>
                        <form class="common-text-input-box">
                            <input type="text" placeholder="例） test@example.com" name="">
                        </form>


                        <div class="common-required-tag-box request-form__margin">
                            <div class="tag">必須</div>
                            <div class="title">パスワード</div>
                        </div>
                        <form class="common-text-input-box">
                            <input type="text" placeholder="例） Franchise12345678" name="">
                        </form>

                        <!-- 年齢・性別セクション -->
                        <div class="common-required-tag-box request-form__margin">
                            <div class="tag">必須</div>
                            <div class="title">性別</div>
                        </div>
                        <div class="common-radio-selection-box">
                            <label class="radio-box">
                                <input class="input" type="radio" name="sex" value="male" required checked>
                                <span class="my-radio"></span>
                                男性
                            </label>
                            <label class="radio-box">
                                <input class="input" type="radio" name="sex" value="female" required>
                                <span class="my-radio"></span>
                                女性
                            </label>
                            <label class="radio-box">
                                <input class="input" type="radio" name="sex" value="non" required>
                                <span class="my-radio"></span>
                                どちらも選ばない
                            </label>
                        </div>
                        <div class="common-required-tag-box request-form__margin-min">
                            <div class="tag">必須</div>
                            <div class="title">年齢</div>
                        </div>
                        <form class="common-text-input-box">
                            <input type="text" placeholder="例） 40" name="">
                        </form>

                        <!-- 追加情報セクション -->
                        <div class="common-sub-titlebox request-form__margin-big">
                            <h3 class="title">追加情報</h3>
                        </div>

                        <div class="common-option-tag-box request-form__margin">
                            <div class="tag">任意</div>
                            <div class="title">法人名（フリガナ）</div>
                        </div>
                        <form class="common-text-input-box">
                            <input type="text" placeholder="" name="">
                        </form>
                        <div class="common-option-tag-box request-form__margin">
                            <div class="tag">任意</div>
                            <div class="title">所在地</div>
                        </div>
                        <form class="common-text-input-box">
                            <input type="text" placeholder="" name="">
                        </form>
                        <div class="common-required-tag-box request-form__margin-min">
                            <div class="tag">必須</div>
                            <div class="title">会社HPもしくは沿革</div>
                        </div>
                        <form class="common-text-input-box request-form__input-box">
                            <input type="text" placeholder="" name="">
                        </form>
                        <div class="common-required-tag-box request-form__margin-min">
                            <div class="tag">必須</div>
                            <div class="title">出展予定地（都道府県）</div>
                        </div>
                        <div class="common-search-accordion-content request-form__accordion">
                            <!-- ボタン -->
                            <button class="button s-button request-button">
                                <span class="text s-button__text"></span>
                                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/acordion-under-pink.svg" alt="">
                            </button>
                            <!-- アコーディオン -->
                            <div class="content">
                                <!-- ここにアコーディオンで表示したい内容を入れる -->
                                <ul>
                                    <li>北海道</li>
                                    <li>青森</li>
                                    <li>新潟</li>
                                </ul>
                            </div>
                        </div>
                        <div class="common-option-tag-box request-form__margin">
                            <div class="tag">任意</div>
                            <div class="title">出展予定地（市区町村）</div>
                        </div>
                        <form class="common-text-input-box">
                            <input type="text" placeholder="" name="">
                        </form>
                        <div class="common-required-tag-box request-form__margin-min">
                            <div class="tag">必須</div>
                            <div class="title">物件</div>
                        </div>
                        <div class="common-search-accordion-content request-form__accordion">
                            <!-- ボタン -->
                            <button class="button s-button request-button">
                                <span class="text s-button__text"></span>
                                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/acordion-under-pink.svg" alt="">
                            </button>
                            <!-- アコーディオン -->
                            <div class="content">
                                <!-- ここにアコーディオンで表示したい内容を入れる -->
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="common-required-tag-box request-form__margin-min">
                            <div class="tag">必須</div>
                            <div class="title">物件 その他</div>
                        </div>
                        <form class="common-text-input-box">
                            <input type="text" placeholder="" name="">
                        </form>
                        <div class="common-required-tag-box request-form__margin-min">
                            <div class="tag">必須</div>
                            <div class="title">店舗責任者</div>
                        </div>
                        <div class="common-search-accordion-content request-form__accordion">
                            <!-- ボタン -->
                            <button class="button s-button request-button">
                                <span class="text s-button__text"></span>
                                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/acordion-under-pink.svg" alt="">
                            </button>
                            <!-- アコーディオン -->
                            <div class="content">
                                <!-- ここにアコーディオンで表示したい内容を入れる -->
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="common-center-button-box">
                        <button id="Button1" class="common-button-pink request-form__margin">
                            確認
                        </button>
                    </div>
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