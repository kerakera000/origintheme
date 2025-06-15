<?php
/**
 * テストページ
 * 
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

<main class="max-content contact-page">
    <?php
    // コンテンツヘッダーの読み込み
    get_template_part('./template/content-header');
    ?>

    <div class="common-container contact-page-content">
        <div class="common-left-content test-page-content__left">
            <!-- お役立ちコラム(テスト) -->

            <div class="common-sub-titlebox useful-title">
                <h3 class="title">お役立ちコラム</h3> 
            </div>

            <div class="useful-columm">
                <div class="common-text useful-text">
                    おすすめ情報
                </div>
                <div class="big-flexbox-list">
                    <div class="swiper-wrapper wrapper-flex no-swiper">
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">資金調達について</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">出展サポートについて</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="useful-columm">
                <div class="common-text useful-text">
                    注目のフランチャイズ
                </div>
                <div class="common-flexbox-list fr-flexbox-list">
                    <div class="swiper-wrapper wrapper-flex">
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">フランチャイズとは？</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">フランチャイズに加盟するメリット/デメリット</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">[サービス名]の活用方法</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="useful-columm">
                <div class="common-text useful-text">
                    フランチャイズ関連情報
                </div>
                <div class="common-flexbox-list fr-flexbox-list">
                    <div class="swiper-wrapper wrapper-flex">
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common-center-button-box">
                    <button class="common-button-pink more-button">
                        もっと見る
                    </button>
                </div>
            </div>

            <div class="useful-columm">
                <div class="common-text useful-text">
                    FC本部の声
                </div>
                <div class="common-flexbox-list fr-flexbox-list">
                    <div class="swiper-wrapper wrapper-flex">
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common-center-button-box">
                    <button class="common-button-pink more-button">
                        もっと見る
                    </button>
                </div>
            </div>

            <div class="useful-columm">
                <div class="common-text useful-text">
                    先輩オーナーの声
                </div>
                <div class="common-flexbox-list fr-flexbox-list">
                    <div class="swiper-wrapper wrapper-flex">
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="common-card">
                                <div class="common-card__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                                </div>
                                <div class="common-card__content">
                                    <h3 class="common-card__title">タイトルが入ります</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="common-center-button-box">
                    <button class="common-button-pink more-button">
                        もっと見る
                    </button>
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