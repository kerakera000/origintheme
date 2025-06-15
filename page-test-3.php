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

    <div class="common-container test3-page-content">
        <div class="common-left-content test3-page-content__left">
            <div class="list-mainbox">
                <div class="common-sub-titlebox list-mainbox__title">
                    <h3 class="title">フランチャイズ一覧（〇〇ランキング）</h3> 
                </div>

                <div class="list-mainbox__pagenation">
                    <div class="text-box">1〜20件 / 全100件</div>
                    <div class="common-pagination-button-box">
                        <button class="common-pagination-button common-now-button">1</button>
                        <button class="common-pagination-button">2</button>
                        <button class="common-pagination-button">3</button>
                        <button class="common-pagination-button">4</button>
                        <button class="common-pagination-pc-button">5</button>
                        <button class="common-other-button">...</button>
                        <button class="common-pagination-button">＞</button>
                        <button class="common-pagination-button">最後＞＞</button>
                    </div>
                    <div class="text-box">検索条件を変更</div>
                </div>

                <div class="list-mainbox__whiteback-box">

                    <div class="whiteback">
                        <div class="common-card__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                        </div>

                        <div class="common-sub-titlebox whiteback__useful-title">
                            <h3 class="title">FC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトル</h3> 
                        </div>
                        <div class="text whiteback__text">
                            150文字以内 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります
                        </div>

                        <div class="whiteback__sub-titlebox">
                            <h3 class="sub-title">業種</h3> 
                        </div>
                        <div class="text whiteback__text">
                            業種が入ります
                        </div>

                        <div class="whiteback__sub-titlebox">
                            <h3 class="sub-title">開業資金</h3> 
                        </div>
                        <div class="text whiteback__text">
                            業種が入ります
                        </div>

                        <div class="whiteback__sub-titlebox">
                            <h3 class="sub-title">エリア</h3> 
                        </div>
                        <div class="text whiteback__text">
                            全国
                        </div>

                        <div class="whiteback__sub-titlebox">
                            <h3 class="sub-title">営業利益</h3> 
                        </div>
                        <div class="text whiteback__text">
                            営業利益が入ります
                        </div>

                        <div class="whiteback__sub-titlebox">
                            <h3 class="sub-title">売上高</h3> 
                        </div>
                        <div class="text whiteback__text">
                            売上高が入ります
                        </div>

                        <div class="whiteback__sub-titlebox">
                            <h3 class="sub-title">回収期間</h3> 
                        </div>
                        <div class="text whiteback__text">
                            〇ヶ月〜
                        </div>

                        <span class="adjust-line"></span>

                        <div class="common-center-button-box whiteback__button-box">
                            <button class="common-button-pink">
                                詳細を見る
                            </button>
                            <button class="common-button-pink">
                                資料請求
                            </button>
                        </div>
                    </div>

                    <div class="whiteback">
                        <div class="common-card__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/franchise01.jpg" alt="">
                        </div>

                        <div class="common-sub-titlebox whiteback__useful-title">
                            <h3 class="title">FC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトルFC募集タイトル</h3> 
                        </div>
                        <div class="text whiteback__text">
                            150文字以内 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります 説明文が入ります
                        </div>

                        <div class="whiteback__sub-titlebox">
                            <h3 class="sub-title">業種</h3> 
                        </div>
                        <div class="text whiteback__text">
                            業種が入ります
                        </div>

                        <div class="whiteback__sub-titlebox">
                            <h3 class="sub-title">開業資金</h3> 
                        </div>
                        <div class="text whiteback__text">
                            業種が入ります
                        </div>

                        <div class="whiteback__sub-titlebox">
                            <h3 class="sub-title">エリア</h3> 
                        </div>
                        <div class="text whiteback__text">
                            全国
                        </div>

                        <div class="whiteback__sub-titlebox">
                            <h3 class="sub-title">営業利益</h3> 
                        </div>
                        <div class="text whiteback__text">
                            営業利益が入ります
                        </div>

                        <div class="whiteback__sub-titlebox">
                            <h3 class="sub-title">売上高</h3> 
                        </div>
                        <div class="text whiteback__text">
                            売上高が入ります
                        </div>

                        <div class="whiteback__sub-titlebox">
                            <h3 class="sub-title">回収期間</h3> 
                        </div>
                        <div class="text whiteback__text">
                            〇ヶ月〜
                        </div>

                        <span class="adjust-line"></span>

                        <div class="common-center-button-box whiteback__button-box">
                            <button class="common-button-pink">
                                詳細を見る
                            </button>
                            <button class="common-button-pink">
                                資料請求
                            </button>
                        </div>
                    </div>

                </div>

                <div class="list-mainbox__pagenation">
                    <div class="text-box">1〜20件 / 全100件</div>
                    <div class="common-pagination-button-box">
                        <button class="common-pagination-button common-now-button">1</button>
                        <button class="common-pagination-button">2</button>
                        <button class="common-pagination-button">3</button>
                        <button class="common-pagination-button">4</button>
                        <button class="common-pagination-pc-button">5</button>
                        <button class="common-other-button">...</button>
                        <button class="common-pagination-button">＞</button>
                        <button class="common-pagination-button">最後＞＞</button>
                    </div>
                    <div class="text-box">検索条件を変更</div>
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

