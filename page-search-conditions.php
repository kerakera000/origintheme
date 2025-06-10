<?php
/**
 * 検索条件ページのテンプレート
 * 
 * 条件を指定してフランチャイズを検索するフォームを表示するページ
 * 複数の条件（業種、投資額、地域など）による絞り込み検索
 * 検索条件の保存と再利用機能
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
<?php get_template_part('./template/sidebar');?>

<main class="max-content search-conditions-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="common-container search-conditions-page-content">
        <div class="common-left-content search-conditions-page-content__left">
            <!-- 検索条件 -->
            <div class="search-mainbox">

                <div class="common-sub-titlebox search-mainbox__title">
                    <h3 class="title">検索条件</h3> 
                </div>

                <div class="search-mainbox__search-box">
                    <div class="flexbox-list">
                        <div class="js-accordion-toggle">
                            <span class="text">エリアから探す</span>
                            <span class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-accordion-pink.svg" alt="">
                            </span>
                        </div>
                        <div class="js-accordion-content" style="display:none;">
                            <button class="common-button sc-button">北海道・東北</button>
                            <button class="common-button sc-button">関東</button>
                            <button class="common-button sc-button">中部</button>
                            <button class="common-button sc-button">中国・四国</button>
                            <button class="common-button sc-button">九州・沖縄</button>
                        </div>

                        <span class="addjust-line"></span>

                        <div class="js-accordion-toggle">
                            <span class="text">開業資金から探す</span>
                            <span class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-accordion-pink.svg" alt="">
                            </span>
                        </div>
                        <div class="js-accordion-content" style="display:none;">
                            <button class="common-button sc-button">1円〜100万円(100件)</button>
                            <button class="common-button sc-button">101万円〜300万円(100件)</button>
                            <button class="common-button sc-button">301万円〜500万円(100件)</button>
                            <button class="common-button sc-button">501万円〜1000万円(100件)</button>
                            <button class="common-button sc-button">1001万円以上(100件)</button>
                        </div>

                        <span class="addjust-line"></span>

                        <div class="list-title">
                            <span class="text">開催日で探す</span>
                        </div>
                        
                        <div class=flexbox-list__date-search>

                            <div class=options>
                                <div class="common-search-accordion-content">
                                    <!-- ボタン -->
                                    <button class="button s-button">
                                        <span class="text s-button__text">開始</span>
                                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/acordion-under-pink.svg" alt="">
                                    </button>
                                    <!-- アコーディオン -->
                                    <div class="content">
                                        <!-- ここにアコーディオンで表示したい内容を入れる -->
                                        <ul>
                                            <li>１月１日</li>
                                            <li>ー</li>
                                            <li>１２月３１日</li>
                                        </ul>
                                    </div>
                                </div>

                                <span class="bt-line"></span>

                                <div class="common-search-accordion-content">
                                    <!-- ボタン -->
                                    <button class="button s-button">
                                        <span class="text s-button__text">終了</span>
                                        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/acordion-under-pink.svg" alt="">
                                    </button>
                                    <!-- アコーディオン -->
                                    <div class="content">
                                        <!-- ここにアコーディオンで表示したい内容を入れる -->
                                        <ul>
                                            <li>１月１日</li>
                                            <li>ー</li>
                                            <li>１２月３１日</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="front-attention-box__button common-center-button-box">
                                <button class="common-button-pink pink-button">
                                    指定した条件で検索
                                </button>
                            </div>
                        </div>
                      
                    </div>
                </div> 

            </div>
        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 