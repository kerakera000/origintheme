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
                    <div class="sign-up-form">
                        <div class="common-sub-titlebox">
                            <h3 class="title">登録料・利用料・年会費は全て無料です！</h3>
                        </div>
                        <div class="common-text fc-main-text">FC名が入りますFC名が入ります</div>
                    </div>

                    <div class="common-required-tag-box sign-up-form__margin-big">
                        <div class="tag">必須</div>
                        <div class="title">名前</div>
                    </div>

                    <form class="common-text-input-box">
                        <input type="text" placeholder="例） 山田太郎" name="" required pattern="^[^\d]+$" required>
                    </form>

                    <div class="common-required-tag-box sign-up-form__margin">
                        <div class="tag">必須</div>
                        <div class="title">フリガナ</div>
                    </div>

                    <form class="common-text-input-box">
                        <input type="text" placeholder="例） ヤマダタロウ" name="" required pattern="^[ァ-ヴー]+$" required>
                    </form>

                    <div class="common-option-tag-box  sign-up-form__margin">
                        <div class="tag">必須</div>
                        <div class="title">法人名</div>
                    </div>

                    <form class="common-text-input-box"> 
                        <input type="text" placeholder="例） 株式会社フランチャイズ" name="" required maxlength="100" required>
                    </form>

                    <div class="common-option-tag-box sign-up-form__margin">
                        <div class="tag">任意</div>
                        <div class="title">郵便番号</div>
                    </div>

                    <div class="common-post-num-box">
                        <form class="common-vor-num-input-box">
                            <input type="text" name="zip1" placeholder="123" pattern="^\d{3}$" maxlength="3"/>
                        </form>
                        <span class="common-bt-line"></span>
                        <form class="common-nach-num-input-box">
                            <input type="text" name="zip2" placeholder="4567" pattern="^\d{4}$" maxlength="4">
                        </form>
                        <button id="" class="common-button-post-pink">
                            郵便番号から住所を入力
                        </button>
                    </div>

                    <div class="common-required-tag-box sign-up-form__margin">
                        <div class="tag">必須</div>
                        <div class="title">住所</div>
                    </div>

                    <div class="sign-up-form__columm-title-box sign-up-form__margin-min">
                        <div class="title">都道府県</div>
                    </div>

                    <form class="common-text-input-box">
                        <input type="text" placeholder="例） 東京都" name="" maxlength="50" required>
                    </form>

                    <div class="sign-up-form__columm-title-box sign-up-form__margin-min">
                        <div class="title">市区町村</div>
                    </div>

                    <form class="common-text-input-box">
                        <input type="text" placeholder="例） 渋谷区" name="" maxlength="50" required>
                    </form>

                    <div class="sign-up-form__columm-title-box sign-up-form__margin-min">
                        <div class="title">番地・建物名</div>
                    </div>

                    <form class="common-text-input-box">
                        <input type="text" placeholder="例） 1-1 フランチャイズマンション 101号室" name="" maxlength="50" required>
                    </form>

                    <div class="common-required-tag-box sign-up-form__margin">
                        <div class="tag">必須</div>
                        <div class="title">電話番号</div>
                    </div>

                    <form class="common-text-input-box">
                        <input type="tel" placeholder="例） 09012345678" name="phone" pattern="^\d{10,11}$" required>
                    </form>

                    <div class="common-required-tag-box sign-up-form__margin">
                        <div class="tag">必須</div>
                        <div class="title">メールアドレス</div>
                    </div>

                    <form class="common-text-input-box">
                        <input type="email" name="email" required placeholder="例）test@example.com" required>
                    </form>

                    <div class="common-required-tag-box sign-up-form__margin">
                        <div class="tag">必須</div>
                        <div class="title">パスワード</div>
                        <div class="text">※半角アルファベットの大文字と小文字、および数字を組み合わせた８文字以上で設定してください。</div>
                    </div>

                    <form class="common-text-input-box">
                        <input type="password" placeholder="例） Franchise12345678" name="" pattern="^(?=.*[a-zA-Z])(?=.*\d)[A-Za-z\d]{8,}$" required>
                    </form>

                    <div class="common-required-tag-box sign-up-form__margin">
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

                    <div class="common-required-tag-box sign-up-form__margin-min">
                        <div class="tag">必須</div>
                        <div class="title">年齢</div>
                    </div>

                    <form class="common-text-input-box">
                        <input type="number" placeholder="例） 40" name="" min="18" max="100" required>
                    </form>

                    <div class="common-agreement-box sign-up-form__margin-big">
                        <label>
                            <input type="checkbox" name="agree_policy" required>
                            <a href="" target="_blank">個人情報保護方針</a>に同意する
                        </label>
                    </div>
                
                    <div class="common-center-button-box sign-up-form__margin">
                        <button id="Button1" class="common-button-pink">
                            確認
                        </button>
                    </div>
                    
                </div>

                <div id="STEPCONT2" class="second-content cont">

                    <div class="request-form">

                        <div class="common-sub-titlebox">
                            <h3 class="title">入力内容に間違いがないかご確認ください。</h3>
                        </div>

                        <div class="common-required-tag-box sign-up-form__margin">
                            <div class="tag">必須</div>
                            <div class="title">名前</div>
                        </div>

                        <div class="common-text fc-main-text">山田太郎</div>
                        <span class="common-addjust-line"></span>

                        <div class="common-required-tag-box sign-up-form__margin">
                            <div class="tag">必須</div>
                            <div class="title">フリガナ</div>
                        </div>

                        <div class="common-text fc-main-text">ヤマダタロウ</div>

                        <span class="common-addjust-line"></span>

                        <div class="common-option-tag-box sign-up-form__margin">
                            <div class="tag">必須</div>
                            <div class="title">法人名</div>
                        </div>

                        <div class="common-text fc-main-text">株式会社フランチャイズ</div>

                        <span class="common-addjust-line"></span>

                        <!-- 住所セクション -->
                        <div class="common-option-tag-box sign-up-form__margin">
                            <div class="tag">任意</div>
                            <div class="title">郵便番号</div>
                        </div>

                        <div class="common-post-num-box">
                            <div class="common-text fc-main-text">123</div>
                            <span class="common-mini-bt-line"></span>
                            <div class="common-text fc-main-text">4567</div>
                        </div>

                        <span class="common-addjust-line"></span>

                        <div class="common-required-tag-box sign-up-form__margin">
                            <div class="tag">必須</div>
                            <div class="title">住所</div>
                        </div>

                        <div class="sign-up-form__columm-title-box sign-up-form__margin-min">
                            <div class="title">都道府県</div>
                        </div>

                        <div class="common-text fc-main-text">東京都</div>

                        <span class="common-addjust-line"></span>

                        <div class="sign-up-form__columm-title-box sign-up-form__margin-min">
                            <div class="title">市区町村</div>
                        </div>

                        <div class="common-text fc-main-text">渋谷区</div>

                        <span class="common-addjust-line"></span>

                        <div class="sign-up-form__columm-title-box sign-up-form__margin-min">
                            <div class="title">番地・建物名</div>
                        </div>

                        <div class="common-text fc-main-text">1-1 フランチャイズマンション 101号室</div>

                        <span class="common-addjust-line"></span>

                        <!-- idセクション -->
                        <div class="common-required-tag-box sign-up-form__margin">
                            <div class="tag">必須</div>
                            <div class="title">電話番号</div>
                        </div>

                        <div class="common-text fc-main-text">09012345678</div>

                        <span class="common-addjust-line"></span>

                        <div class="common-required-tag-box sign-up-form__margin">
                            <div class="tag">必須</div>
                            <div class="title">メールアドレス</div>
                        </div>

                        <div class="common-text fc-main-text">test@example.com</div>

                        <span class="common-addjust-line"></span>

                        <div class="common-required-tag-box sign-up-form__margin">
                            <div class="tag">必須</div>
                            <div class="title">パスワード</div>
                            <div class="text">※半角アルファベットの大文字と小文字、および数字を組み合わせた８文字以上で設定してください。</div>
                        </div>

                        <div class="common-text fc-main-text">Franchise12345678</div>

                        <span class="common-addjust-line"></span>

                        <!-- 年齢・性別セクション -->
                        <div class="common-required-tag-box sign-up-form__margin">
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

                        <div class="common-required-tag-box sign-up-form__margin-min">
                            <div class="tag">必須</div>
                            <div class="title">年齢</div>
                        </div>

                        <div class="common-text fc-main-text">40</div>

                        <span class="common-addjust-line"></span>
                    </div>

                    <div class="common-agreement-box sign-up-form__margin-big">
                        <label>
                            <input type="checkbox" name="agree_policy" required checked>
                            <a href="" >個人情報保護方針</a>に同意する
                        </label>
                    </div>

                    <div class="common-center-button-box sign-up-form__margin">
                        <button id="Button2" class="common-button-pink">
                            登録
                        </button>
                    </div>
                </div>

                <div id="STEPCONT3" class="third-content cont">
                    <div class="common-sub-titlebox">
                        <h3 class="title">登録いただいたメールアドレスに変更内容の通知を送信しました。</h3>
                    </div>
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