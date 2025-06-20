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
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <article class="news-article">
                <!-- パンくずリスト -->
                <nav class="breadcrumb">
                    <a href="<?php echo home_url(); ?>">ホーム</a>
                    <span class="separator">></span>
                    <a href="<?php echo get_post_type_archive_link('news'); ?>">お知らせ</a>
                    <span class="separator">></span>
                    <span class="current"><?php the_title(); ?></span>
                </nav>

                <!-- 記事ヘッダー -->
                <header class="article-header">
                    <h1 class="article-title"><?php the_title(); ?></h1>
                    <div class="article-meta">
                        <time class="article-date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                            <i class="fa-regular fa-calendar"></i>
                            <?php echo get_the_date('Y年n月j日'); ?>
                        </time>
                        <?php if (has_category()) : ?>
                            <div class="article-category">
                                <i class="fa-solid fa-folder"></i>
                                <?php the_category(', '); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </header>

                <!-- アイキャッチ画像 -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="article-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <!-- 記事本文 -->
                <div class="article-content">
                    <?php the_content(); ?>
                </div>

                <!-- 記事フッター -->
                <footer class="article-footer">
                    <div class="article-tags">
                        <?php if (has_tag()) : ?>
                            <i class="fa-solid fa-tags"></i>
                            <?php the_tags('', ', '); ?>
                        <?php endif; ?>
                    </div>
                    
                    <!-- SNSシェアボタン -->
                    <div class="social-share">
                        <h3>この記事をシェア</h3>
                        <div class="share-buttons">
                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" class="share-btn share-btn--twitter">
                                <i class="fa-brands fa-twitter"></i>
                                Twitter
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="share-btn share-btn--facebook">
                                <i class="fa-brands fa-facebook"></i>
                                Facebook
                            </a>
                            <a href="https://line.me/R/msg/text/?<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" target="_blank" class="share-btn share-btn--line">
                                <i class="fa-brands fa-line"></i>
                                LINE
                            </a>
                        </div>
                    </div>
                </footer>
            </article>

            <!-- 関連記事 -->
            <section class="related-news">
                <h2 class="section-title">関連記事</h2>
                <div class="related-grid">
                    <?php
                    $related_posts = new WP_Query(array(
                        'post_type' => 'news',
                        'posts_per_page' => 3,
                        'post__not_in' => array(get_the_ID()),
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ));

                    if ($related_posts->have_posts()) :
                        while ($related_posts->have_posts()) : $related_posts->the_post();
                    ?>
                        <article class="related-item">
                            <a href="<?php the_permalink(); ?>" class="related-link">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="related-thumbnail">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="related-content">
                                    <h3 class="related-title"><?php the_title(); ?></h3>
                                    <time class="related-date"><?php echo get_the_date('Y.m.d'); ?></time>
                                </div>
                            </a>
                        </article>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </section>

        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_template_part('./template/footer'); ?> 