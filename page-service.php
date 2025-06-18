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
                    <h2 class="title-cont__title">SERVICE</h2>
                    <p class="title-cont__text">
                    サービス一覧
                    </p>
                </div>
            </div>
        </div>
        <div class="servicekv__breadcrumb">
            <div class="breadcrumb service-breadcrumb">
                <a href="" class="breadcrumb__link">TOP</a>
                <img class="breadcrumb__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/service/breadcamb.svg" alt="arrow">
                <a href="" class="breadcrumb__link">SERVICE</a>
            </div>
        </div>
    </div>

    <div class="service-content">
        <div class="card">
            <div class="imgbox">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/Service/service1.png" alt="">
            </div>

            <a href="/art-finance" class="card__text Card-Common">
                <h2 class="Card-Common__title">ART FINANCE</h2>
                <p class="Card-Common__text">
                お持ちの美術品を資産として有効活用してみませんか。<br>
                資金調達をご検討中のコレクター・法人・美術品関係業者<br>
                の皆様へ強い味方となります。
                </p>
                <div class="ViewMore-Common">
                    <span class="ViewMore-Common__text">VIEW MORE</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ViewMoreArrowBlack.svg" alt="">
                </div>
            </a>
        </div>

        <div class="card">
            <div class="imgbox">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/Service/service2.png" alt="">
            </div>

            <a href="/insurance" class="card__text Card-Common">
                <h2 class="Card-Common__title">INSURANCE</h2>
                <p class="Card-Common__text">
                お客様の大切な美術品を保険商品を通してお守りいたします。<br>
                アールビー・アート・アセット株式会社は美術品に関する保険を<br>
                中心に、その他の損害保険商品を取り扱う保険代理店です。<br>
                美術品の保険でお困りの方は是非ご相談ください。
                </p>
                <div class="ViewMore-Common">
                    <span class="ViewMore-Common__text">VIEW MORE</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ViewMoreArrowBlack.svg" alt="">
                </div>
            </a>
        </div>

        <div class="card">
            <div class="imgbox">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/Service/service3.png" alt="">
            </div>

            <a href="/appraisal-purchase-service" class="card__text Card-Common">
                <h2 class="Card-Common__title">APPRAISAL/<br>PURCHASE SERVICE</h2>
                <p class="Card-Common__text">
                お持ちの美術品を資産として有効活用してみませんか。<br>
                資金調達をご検討中のコレクター・法人・美術品関係業者<br>
                の皆様へ強い味方となります。
                </p>
                <div class="ViewMore-Common">
                    <span class="ViewMore-Common__text">VIEW MORE</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ViewMoreArrowBlack.svg" alt="">
                </div>
            </a>
        </div>
    </div>

    <?php get_template_part('template/Contact'); ?>
</main>

<?php
get_template_part('./template/footer');
?> 