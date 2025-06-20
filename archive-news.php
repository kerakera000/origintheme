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
                    <h2 class="title-cont__title">NEWS</h2>
                    <p class="title-cont__text">
                    お知らせ
                    </p>
                </div>
            </div>
        </div>
        <div class="servicekv__breadcrumb">
            <div class="breadcrumb service-breadcrumb">
                <a href="" class="breadcrumb__link">TOP</a>
                <img class="breadcrumb__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/service/breadcamb.svg" alt="arrow">
                <a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>" class="breadcrumb__link">NEWS</a>
            </div>
        </div>
    </div>

    <!-- 記事一覧 -->
    <div class="news-list">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="news-row">
                    <div class="news-date">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </div>
                    <?php
                    // NEWラベルの表示（公開から3日以内などの条件で）
                    $days = 3;
                    $now = date('U');
                    $posted = get_the_time('U');
                    if (($now - $posted) < 60*60*24*$days) : ?>
                        <span class="news-label">NEW</span>
                    <?php endif; ?>
                    <div class="news-main">
                        <a href="<?php the_permalink(); ?>" class="news-title"><?php the_title(); ?></a>
                        <div class="news-excerpt">
                            <?php
                            if (has_excerpt()) {
                                the_excerpt();
                            } else {
                                echo wp_trim_words(get_the_content(), 50, '...');
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="no-posts">
                <h2>記事が見つかりません</h2>
                <p>現在、お知らせはありません。</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_template_part('./template/footer'); ?> 