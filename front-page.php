<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="max-content front-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="front-page-content">
        <div class="front-page-content__left">
            <!-- バナーコンテンツ -->
            <div class="front-bunner-box">
                <a class="common-bunner-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/bnr03.png" alt="">
                </a>
                <a class="common-bunner-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/bnr03.png" alt="">
                </a>
                <a class="common-bunner-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/bnr03.png" alt="">
                </a>
            </div>
            <!-- フランチャイズを探す -->
            <div class="front-search-box">
                <div class="common-titlebox-underline">
                    <h2 class="title">
                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/search-icon.svg" alt="">
                        <span class="text">フランチャイズを探す</span>
                    </h2>

                    <span class="underline"></span>
                </div>

                <p class="common-text front-explane-text">お好みの条件を複数選択し、「検索」出来ます</p>

            </div>

            <!-- 人気のフランチャイズ -->
            <div class="front-popularity-box">
                <div class="common-titlebox-underline">
                    <h2 class="title">
                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/popularity-icon.svg" alt="">
                        <span class="text">人気のフランチャイズ</span>
                    </h2>

                    <span class="underline"></span>
                </div>

                <p class="common-text front-explane-text">今人気のフランチャイズをチェックしよう</p>

                <div class="front-popularity-box__buttons">
                    <a href="" class="common-popularity-button">
                        <span class="text">月間ランキング</span>
                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-pink.svg" alt="">
                    </a>
                    <a href="" class="common-popularity-button half-width">
                        <span class="text">飲食ランキング</span>
                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-pink.svg" alt="">
                    </a>

                    <a href="" class="common-popularity-button half-width">
                        <span class="text">低投資(100万円以下)での開業ランキング</span>
                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-pink.svg" alt="">
                    </a>

                    <a href="" class="common-popularity-button half-width">
                        <span class="text">無店舗で開業ランキング</span>
                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-pink.svg" alt="">
                    </a>

                    <a href="" class="common-popularity-button half-width">
                        <span class="text">未経験OKランキング</span>
                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-pink.svg" alt="">
                    </a>

                    <a href="" class="common-popularity-button half-width">
                        <span class="text">副業からスタートランキング</span>
                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-pink.svg" alt="">
                    </a>

                    <a href="" class="common-popularity-button half-width">
                        <span class="text">法人新規事業向けランキング</span>
                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-pink.svg" alt="">
                    </a>
                </div>
            </div>

            <!-- 新着のフランチャイズ -->
            <div class="front-newitem-box">
                <div class="common-titlebox-underline">
                    <h2 class="title">
                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/newitem-icon.svg" alt="">
                        <span class="text">新着のフランチャイズ</span>
                    </h2>

                    <span class="underline"></span>
                </div>

                <p class="common-text front-explane-text">新規掲載フランチャイズをチェックしよう！</p>

                <div class="front-newitem-box__flexbox-list common-flexbox-list">
                    <div id="SwiperNewItem" class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="common-card">
                                    <div class="common-card__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                    </div>
                                    <div class="common-card__content">
                                        <h3 class="common-card__title">フランチャイズ1</h3>
                                        <p class="common-card__desc">FC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入ります</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="common-card">
                                    <div class="common-card__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                    </div>
                                    <div class="common-card__content">
                                        <h3 class="common-card__title">フランチャイズ1</h3>
                                        <p class="common-card__desc">FC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入ります</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="common-card">
                                    <div class="common-card__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                    </div>
                                    <div class="common-card__content">
                                        <h3 class="common-card__title">フランチャイズ1</h3>
                                        <p class="common-card__desc">FC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入ります</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="common-card">
                                    <div class="common-card__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                    </div>
                                    <div class="common-card__content">
                                        <h3 class="common-card__title">フランチャイズ1</h3>
                                        <p class="common-card__desc">FC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入ります</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="common-card">
                                    <div class="common-card__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                    </div>
                                    <div class="common-card__content">
                                        <h3 class="common-card__title">フランチャイズ1</h3>
                                        <p class="common-card__desc">FC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入ります</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="common-card">
                                    <div class="common-card__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                    </div>
                                    <div class="common-card__content">
                                        <h3 class="common-card__title">フランチャイズ1</h3>
                                        <p class="common-card__desc">FC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入ります</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ナビゲーションボタン -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <!-- 注目のフランチャイズ -->
            <div class="front-attention-box">
                <div class="common-titlebox-label">
                    <h2 class="title">
                    注目のフランチャイズ情報
                    </h2>
                </div>

                <p class="common-text front-explane-text-label">編集部オススメのフランチャイズ情報をチェックしよう</p>

                <div class="front-attention-box__flexbox-list common-flexbox-list">
                    <div id="SwiperNewItem" class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="common-card">
                                    <div class="common-card__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                    </div>
                                    <div class="common-card__content">
                                        <h3 class="common-card__title">フランチャイズ1</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="common-card">
                                    <div class="common-card__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                    </div>
                                    <div class="common-card__content">
                                        <h3 class="common-card__title">フランチャイズ1</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="common-card">
                                    <div class="common-card__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                    </div>
                                    <div class="common-card__content">
                                        <h3 class="common-card__title">フランチャイズ1</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="common-card">
                                    <div class="common-card__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                    </div>
                                    <div class="common-card__content">
                                        <h3 class="common-card__title">フランチャイズ1</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ナビゲーションボタン -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <div class="front-attention-box__button common-center-button-box">
                    <button class="common-button">
                        検索する
                    </button>
                </div>
            </div>

            <!-- 今週のFC本部 -->
            <div class="front-thisweek-headquarters-box">
                <div class="common-titlebox-label">
                    <h2 class="title">
                    今週のFC本部
                    </h2>
                </div>

                <p class="common-text front-explane-text-label">今週イチオシのFC本部をご紹介</p>

                <div class="common-flexbox-list">
                    <div class="swiper-wrapper no-swiper">
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">フランチャイズ1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">フランチャイズ1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">フランチャイズ1</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 先輩オーナーの声 -->
            <div class="front-senior-owner-voice-box">
                <div class="common-titlebox-label">
                    <h2 class="title">
                    先輩オーナーの声
                    </h2>
                </div>

                <p class="common-text front-explane-text-label">FC本部の本音を知ろう！</p>

                <div class="common-flexbox-list">
                    <div class="swiper-wrapper no-swiper">
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">フランチャイズ1</h3>
                                    <p class="common-card__desc">FC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入ります</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">フランチャイズ1</h3>
                                    <p class="common-card__desc">FC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入ります</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">フランチャイズ1</h3>
                                    <p class="common-card__desc">FC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入りますFC本部の説明が入ります</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="front-senior-owner-voice-box__button common-center-button-box">
                    <button class="common-button">
                        検索する
                    </button>
                </div>
            </div>

            <!-- フランチャイズを知る -->
            <div class="front-learn-about-franchising-box">
                <div class="common-titlebox-label">
                    <h2 class="title">
                    フランチャイズを知る
                    </h2>
                </div>

                <p class="common-text front-explane-text-label">フランチャイズについての知識を深めよう</p>

                <div class="common-flexbox-list">
                    <div class="swiper-wrapper wrapper-flex no-swiper">
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title center">フランチャイズ1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title center">フランチャイズ1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title center">フランチャイズ1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title center">フランチャイズ1</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="front-learn-about-franchising-box__button common-center-button-box">
                    <button class="common-button">
                        検索する
                    </button>
                </div>
            </div>

            <!-- FC本部の声 -->
            <div class="front-Message-from-FC-Headquarters-box">
                <div class="common-titlebox-label">
                    <h2 class="title">
                    FC本部の声
                    </h2>
                </div>

                <p class="common-text front-explane-text-label">FC本部の本音を知ろう！</p>

                <div class="common-flexbox-list">
                    <div class="swiper-wrapper no-swiper">
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">フランチャイズ1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">フランチャイズ1</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">フランチャイズ1</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- メディア掲載実績 -->
            <div class="front-media-achievement-box">
                <div class="common-titlebox-label">
                    <h2 class="title">
                    メディア掲載実績
                    </h2>
                </div>

                <p class="common-text front-explane-text-label">(サービス名)多数のメディアでご紹介いただいております</p>

                <div class="front-media-achievement-box__flexbox-list common-flexbox-list">
                    <div id="SwiperNewItem" class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="common-card">
                                    <div class="common-card__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                    </div>
                                    <div class="common-card__content">
                                        <h3 class="common-card__title">フランチャイズ1</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="common-card">
                                    <div class="common-card__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                    </div>
                                    <div class="common-card__content">
                                        <h3 class="common-card__title">フランチャイズ1</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="common-card">
                                    <div class="common-card__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                    </div>
                                    <div class="common-card__content">
                                        <h3 class="common-card__title">フランチャイズ1</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="common-card">
                                    <div class="common-card__image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="フランチャイズ1">
                                    </div>
                                    <div class="common-card__content">
                                        <h3 class="common-card__title">フランチャイズ1</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ナビゲーションボタン -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?>
