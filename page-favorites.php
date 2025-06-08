<?php
/**
 * お気に入りページのテンプレート
 * 
 * ユーザーが保存したフランチャイズ情報の一覧を表示するページ
 * ログインユーザーのみアクセス可能
 * お気に入りの追加・削除機能を提供
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

<main class="max-content favorites-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="common-container favorites-page-content">
        <div class="common-left-content favorites-page-content__left">

            <!-- お気に入り -->
            <div class="favorites-mainbox">
                <div class="common-sub-titlebox favorites-mainbox__title">
                    <h3 class="title">お気に入り</h3> 
                </div>
                <div class="favorites-mainbox__list">
                    <span class="addjust-line"></span>

                    <div class="fc-box">
                        <div class="fc-box__check-box">
                            <input type="checkbox" class="checkbox" name="favorite-select[]" value="fc-id">
                        </div>
                        <div class="fc-box__logo-box">
                            FCロゴ
                        </div>
                        <div class="fc-box__fc-link">
                            <a href="" class="link">
                                <span class="link__text">FC本部名</span>
                                <img class="link__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-pink.svg" alt="">
                            </a>
                        </div>
                        <button class="fc-box__button common-button">
                            お気に入り解除
                        </button>
                    </div>
                    
                    <span class="addjust-line"></span>

                    <div class="fc-box">
                        <div class="fc-box__check-box">
                            <input type="checkbox" class="checkbox" name="favorite-select[]" value="fc-id">
                        </div>
                        <div class="fc-box__logo-box">
                            FCロゴ
                        </div>
                        <div class="fc-box__fc-link">
                            <a href="" class="link">
                                <span class="link__text">FC本部名</span>
                                <img class="link__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-pink.svg" alt="">
                            </a>
                        </div>
                        <button class="fc-box__button common-button">
                            お気に入り解除
                        </button>
                    </div>
                    
                    <span class="addjust-line"></span>

                    <div class="fc-box">
                        <div class="fc-box__check-box">
                            <input type="checkbox" class="checkbox" name="favorite-select[]" value="fc-id">
                        </div>
                        <div class="fc-box__logo-box">
                            FCロゴ
                        </div>
                        <div class="fc-box__fc-link">
                            <a href="" class="link">
                                <span class="link__text">FC本部名</span>
                                <img class="link__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-pink.svg" alt="">
                            </a>
                        </div>
                        <button class="fc-box__button common-button">
                            お気に入り解除
                        </button>
                    </div>
                    
                    <span class="addjust-line"></span>
                </div>
                <div class="favorites-mainbox__button common-center-button-box">
                    <button class="common-button">
                        一括資料請求
                    </button>
                </div>
            </div>
            
        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 