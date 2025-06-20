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
                    <h2 class="title-cont__title">APPRAISAL / PURCHASE SERVICE</h2>
                    <p class="title-cont__text">
                    美術品鑑定・買取サービス
                    </p>
                </div>
            </div>
        </div>
        <div class="servicekv__breadcrumb max-1080">
            <div class="breadcrumb appraisal-breadcrumb">
                <a href="" class="breadcrumb__link">TOP</a>
                <img class="breadcrumb__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/service/breadcamb.svg" alt="arrow">
                <a href="" class="breadcrumb__link">SERVICE</a>
                <img class="breadcrumb__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/service/breadcamb.svg" alt="arrow">
                <a href="" class="breadcrumb__link">APPRAISAL / PURCHASE SERVICE</a>
            </div>
        </div>
    </div>

    <div class="art-finance-content max-1080">
        <div class="titlebox">
            <h2 class="philosophy-common-title">FEATURES</h2>
            <p class="philosophy-common-subtitle">特徴</p>
        </div>

        <div class="art-finance-stepbox">
            <div class="card">
                <div class="card__number">
                    <span class="num">1</span>
                </div>
                <div class="card__text">
                    <h3 class="title">多角的な査定に対応</h3>
                    <p class="text">
                    アイアート株式会社をはじめとするオークション企業との連携により、適正な市場価格での査定・ご案内が可能です。
                    また、日本アート保存協会とも連携していることから、市場価格での査定が難しい美術品にも価値を割り出すことができます。
                    </p>
                    <div class="appraisal-imgbox">
                        <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/appraisal-purchase-service/img1.svg" alt="">
                        <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/appraisal-purchase-service/img2.svg" alt="">
                    </div>
                </div>
            </div>

        </div>

        <div class="titlebox">
            <h2 class="philosophy-common-title">SUBJECTS</h2>
            <p class="philosophy-common-subtitle">査定・買取対象</p>
        </div>

        <div class="appraisal-subjectbox">
            <ul class="appraisal-subject-list">
                <li><p class="text">絵画（日本画・洋画・現代アート、版画）</p></li>
                <li><p class="text">掛け軸</p></li>
                <li><p class="text">陶磁器</p></li>
                <li><p class="text">中国美術</p></li>
                <li><p class="text">古美術</p></li>
                <li><p class="text">西洋アンティーク</p></li>
                <li><p class="text">その他</p></li>
            </ul>
        </div>

        <div class="titlebox flow-title">
            <h2 class="philosophy-common-title">FLOW</h2>
            <p class="philosophy-common-subtitle">ご融資までの流れ</p>
        </div>

        <div class="flow-explain">
            <p class="text">
            審査・お見積もり開始から最短○日での契約開始が可能です。<br>
            鑑定の専門パートナーとの連携をしておりますので、正確な価値を評価の上、適正な保険金額でのご案内が可能です。<br>
            ※お見積もり、ご契約にあたり、一般的には以下の資料が必要となります。<br>
            〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇
            </p>
        </div>

        <div class="flow-step-content">
            <div class="col">
                <div class="col__number">
                    <p class="num">
                        <span class="num__text">STEP</span>
                        <span class="num__number">1</span>
                    </p>
                </div>
                <div class="col__text">
                    <p class="title">
                    申し込み受付
                    </p>
                    <p class="text">
                    お電話(03-3528-6363)もしくはお問い合わせの登録フォームからご連絡下さい。
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="col__line">
                    <span class="line"></span>
                </div>
            </div>
            <div class="col">
                <div class="col__number">
                    <p class="num">
                        <span class="num__text">STEP</span>
                        <span class="num__number">2</span>
                    </p>
                </div>
                <div class="col__text">
                    <p class="title">
                    概要確認
                    </p>
                    <p class="text">
                    どのような品物なのか、画像となる写真等があればメールなどにてお送りいただきます。
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="col__line">
                    <span class="line"></span>
                </div>
            </div>

            <div class="col">
                <div class="col__number">
                    <p class="num">
                        <span class="num__text">STEP</span>
                        <span class="num__number">3</span>
                    </p>
                </div>
                <div class="col__text">
                    <p class="title">
                    契約手続
                    </p>
                    <p class="text">
                    弊社は銀座1丁目の銀座東洋ビルの2階にございます。<br>
品物を弊社まで直接持参いただくかもしくは弊社からご訪問させていただきます。<br>
 (訪問の場合、場所によっては実費をご負担いただく場合もございます)
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('template/Contact'); ?>
</main>

<?php
get_template_part('./template/footer');
?> 