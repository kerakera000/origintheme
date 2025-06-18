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
            <div class="breadcrumb art-finance-breadcrumb">
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
                    お申し込みに必要な各種書類を提出していただき、弊社で所定の審査を行います。
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
                    審査・お見積もり
                    </p>
                    <p class="text">
                    美術品の評価が出ましたら、所定の範囲内で融資可能金額を算出いたします。
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
                    お客様と弊社の間で金銭消費賃貸借契約及び質権設定契約を締結いたします。保険未加入の場合は、美術品に保険をかけていただきます。
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