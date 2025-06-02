<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="main-layout">
    <div class="kv">
        <div class="kv__background">
            <div class="titlebox">
                <span class="kvRB"></span>
                <div class="title-cont">
                    <h1 class="title-cont__title">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kv/kvTitle.svg" alt="">
                    </h1>
                    <p class="title-cont__text">
                    アールビー・アート・アセット株式会社は、美術品に対する<br>
                    ファイナンスサービス (融資・保険)および査定・買取・販売委託サービスを行なっております。
                    </p>
                    <a href="" class="ViewMore-Common">
                        <span class="ViewMore-Common__text">VIEW MORE</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ViewMoreArrowBlack.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="scrolldown"></div>
        </div>
    </div>

    <div class="About">
        <div class="About__cont max-1440">
            <div id="swiper1" class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/AboutSwiper/swiper1.svg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/AboutSwiper/swiper1.svg" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="content">
                <div class="content__card Card-Common">
                    <h2 class="Card-Common__title">ABOUT US</h2>
                    <p class="Card-Common__text">アールビー・アート・アセット株式会社は、<br>これまでほとんど活用されていなかった動産担保(ABL)による融資を推進するとともに、<br>お客様の大切な美術品をお守りするための、美術品を中心とした保険プランをご提供いたします。<br>また美術品・骨董品の査定・買取サービスもしております。美術品に関しての適切な時価評価により、<br>お客様の様々なニーズへの対応とサービスをご提供いたします。
                    </p>
                    <a href="" class="ViewMore-Common">
                        <span class="ViewMore-Common__text">VIEW MORE</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ViewMoreArrowBlack.svg" alt="">
                    </a>
                </div>
            </div>

            <span class="icon"></span>
        </div>
    </div>

    <div class="News">
        <div class="News__cont max-1080">
            <h2 class="News__title">NEWS</h2>
            <div class="article">
                <div class="article__box">
                    <h3 class="title">2025.1.1</h3>
                    <span class="label">NEW</span>
                    <p class="text">コーポレートサイトをリニューアルいたしました。今後ともどうぞよろしくお願いいたします。</p>
                </div>
                <span class="line"></span>
                <div class="article__box">
                    <h3 class="title">2025.1.1</h3>
                    <span class="label">NEW</span>
                    <p class="text">コーポレートサイトをリニューアルいたしました。今後ともどうぞよろしくお願いいたします。</p>
                </div>
            </div>
        </div>
        <div class="arrow max-1080">
            <a href="" class="ViewMore-Common">
                <span class="ViewMore-Common__text">VIEW MORE</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ViewMoreArrowBlack.svg" alt="">
            </a>
        </div>
    </div>

    <div class="Service">
        <div class="Service__cont max-1080">
            <div class="imgbox">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/Service/ServiceImg.svg" alt="">
            </div>

            <div class="textbox Card-Common">
                <h2 class="Card-Common__title">SERVICE</h2>
                <p class="Card-Common__text">弊社が提供する事業、主要サービスのご紹介をいたします。
                </p>
                <a href="" class="ViewMore-Common">
                    <span class="ViewMore-Common__text">VIEW MORE</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ViewMoreArrowWhite.svg" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="ARTfinance">
        <div class="ARTfinance__cont max-1080">
            <div class="textbox Card-Common">
                <h2 class="Card-Common__title">ART FINANCE</h2>
                <p class="Card-Common__text">お持ちの美術品を資産として有効活用してみませんか。資金調達をご検討中のコレクター・法人・美術品関係業者の皆様へ強い味方となります。
                </p>
                <a href="" class="ViewMore-Common">
                    <span class="ViewMore-Common__text">VIEW MORE</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ViewMoreArrowWhite.png" alt="">
                </a>
            </div>

            <div class="imgbox">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/ARTfinance/loan.png" alt="">
            </div>
        </div>

        <div class="ARTfinance__subcont max-1080">
            <div class="card type1">
                <div class="imgbox">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/ARTfinance/loan.svg" alt="">
                    <p>美術品担保ローン</p>
                </div>
                <div class="Card-Common">
                    <h2 class="Card-Common__title">SERVICE</h2>
                    <p class="Card-Common__text">弊社が提供する事業、主要サービスのご紹介をいたします。
                    </p>
                    <a href="" class="ViewMore-Common">
                        <span class="ViewMore-Common__text">VIEW MORE</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ViewMoreArrowWhite.png" alt="">
                    </a>
                </div>
            </div>

            <div class="card type2">
                <div class="imgbox">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/ARTfinance/loan.svg" alt="">
                    <p>美術品担保ローン</p>
                </div>
                <div class="Card-Common">
                    <h2 class="Card-Common__title">SERVICE</h2>
                    <p class="Card-Common__text">弊社が提供する事業、主要サービスのご紹介をいたします。
                    </p>
                    <a href="" class="ViewMore-Common">
                        <span class="ViewMore-Common__text">VIEW MORE</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ViewMoreArrowWhite.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('template/Contact'); ?>

</main>

<?php
get_template_part('./template/footer');
?>
