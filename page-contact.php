<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>


<?php get_template_part('./template/header');?>

<main id="pageTop" class="main-layout">
    <div class="servicekv">
        <div class="servicekv__background">
            <div class="titlebox">
                <span class="servicekvRB"></span>
                <div class="title-cont">
                    <h2 class="title-cont__title">CONTACT</h2>
                    <p class="title-cont__text">
                    お問い合わせ
                    </p>
                </div>
            </div>
        </div>
        <div class="servicekv__breadcrumb">
            <div class="breadcrumb service-breadcrumb">
                <a href="" class="breadcrumb__link">TOP</a>
                <img class="breadcrumb__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/service/breadcamb.svg" alt="arrow">
                <a href="/contact" class="breadcrumb__link">CONTACT</a>
            </div>
        </div>
    </div>

    <div class="contact-page-content">
        <form class="contact-form">
            <div class="contact-form__row">
                <label class="contact-form__label">お問い合わせ内容 <span class="contact-form__required">※必須</span></label>
                <div class="contact-form__input">
                    <select name="type" required>
                        <option value="">お問い合わせ内容を選択してください</option>
                        <option value="option1">ご質問</option>
                        <option value="option2">ご相談</option>
                        <option value="option3">その他</option>
                    </select>
                    <span class="contact-form__error">お問い合わせ内容を選択してください</span>
                </div>
            </div>
            <div class="contact-form__row">
                <label class="contact-form__label">お名前 <span class="contact-form__required">※必須</span></label>
                <div class="contact-form__input">
                    <input type="text" name="name" required>
                    <span class="contact-form__error">お名前は必須です</span>
                </div>
            </div>
            <div class="contact-form__row">
                <label class="contact-form__label">お名前(かな) <span class="contact-form__required">※必須</span></label>
                <div class="contact-form__input">
                    <input type="text" name="name_kana" required>
                    <span class="contact-form__error">お名前(かな)は必須です</span>
                </div>
            </div>
            <div class="contact-form__row">
                <label class="contact-form__label">生年月日</label>
                <div class="contact-form__input">
                    <input type="text" name="birthday" placeholder="例：1990/01/01">
                </div>
            </div>
            <div class="contact-form__row">
                <label class="contact-form__label">郵便番号</label>
                <div class="contact-form__input contact-form__input--zip">
                    <input type="text" name="zip1" maxlength="3" style="width:80px;"> -
                    <input type="text" name="zip2" maxlength="4" style="width:100px;">
                </div>
            </div>
            <div class="contact-form__row">
                <label class="contact-form__label">市区町村</label>
                <div class="contact-form__input">
                    <input type="text" name="city">
                </div>
            </div>
            <div class="contact-form__row">
                <label class="contact-form__label">以降の住所</label>
                <div class="contact-form__input">
                    <input type="text" name="address">
                </div>
            </div>
            <div class="contact-form__row">
                <label class="contact-form__label">ご連絡先 <span class="contact-form__required">※必須</span></label>
                <div class="contact-form__input contact-form__input--radio">
                    <label><input type="radio" name="contact_method" value="自宅電話" required> 自宅電話</label>
                    <label><input type="radio" name="contact_method" value="勤務先電話"> 勤務先電話</label>
                    <label><input type="radio" name="contact_method" value="携帯電話"> 携帯電話</label>
                    <div class="contact-form__note">平日の昼間に連絡のつくお電話番号をご記入ください</div>
                </div>
            </div>
            <div class="contact-form__row">
                <label class="contact-form__label">メールアドレス <span class="contact-form__required">※必須</span></label>
                <div class="contact-form__input">
                    <input type="email" name="email" required>
                    <span class="contact-form__error">メールアドレスは必須です</span>
                </div>
            </div>
            <div class="contact-form__row contact-form__row--center">
                <button type="submit" class="contact-form__submit">確認画面へ</button>
            </div>
        </form>
    </div>
    
</main>

<?php get_template_part('./template/footer'); ?> 