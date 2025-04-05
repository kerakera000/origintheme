<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="main-layout">
    <div class="videobg">
        <video src="<?php echo get_template_directory_uri(); ?>/assets/video/bg.mp4" autoplay muted loop></video>
    </div>

    <div class="Phero archive-interview-Phero">
        <div class="Phero--cont inner-content1200">
            <div class="Phero--textbox">
                <h2 class="common-titlebox">
                    <span class="title">Interview</span>
                    <span class="sub-title">インタビュー</span>
                </h2>
            </div>
            <div class="Phero--imgbox">
                <p class="breadcrumbs">Top - Interview</p>
            </div>
        </div>
    </div>

    <div class="p-interview-archive">

        <div class="content">
            <?php if (have_posts()) : ?>
                <div class="p-interview-archive__list">
                    <?php while (have_posts()) : the_post(); ?>
                        <a class="item inner-content1200" href="<?php the_permalink(); ?>">
                            <div class="item__content">
                                <p class="number">(Interview <?php printf('%02d', $wp_query->current_post + 1); ?>)</p>
                                <?php 
                                // タイトル名を取得
                                $title_name = get_field('title_name');
                                if ($title_name) : ?>
                                    <h2 class="item-title"><?php echo esc_html($title_name); ?></h2>
                                <?php endif; ?>

                                <?php 
                                // 入社年を取得
                                $join = get_field('join');
                                if ($join) : ?>
                                    <p class="join"><?php echo esc_html($join); ?></p>
                                <?php endif; ?>

                                <?php 
                                // タイトル説明を取得
                                $title_explane = get_field('title_explane');
                                if ($title_explane) : ?>
                                    <p class="explanation">
                                        <?php 
                                        $lines = explode("\n", esc_html($title_explane));
                                        foreach ($lines as $line) {
                                            echo '<span class="text">' . $line . '</span>';
                                        }
                                        ?>
                                    </p>
                                <?php endif; ?>

                                <button class="more-button">
                                    <p class="text">
                                        <span class="normal">
                                            More
                                        </span>
                                        <span class="hover">
                                            More
                                        </span>
                                    </p>
                                    <span class="arrow-right">
                                        <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/newsitem/arrownews.svg" alt="">
                                        <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/newsitem/arrownews.svg" alt="">
                                    </span>
                                </button>
                            </div>
                            <div class="item__thumbnail">
                                <p class="number">(Interview <?php printf('%02d', $wp_query->current_post + 1); ?>)</p>
                                <?php $image = get_field('main_img'); if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <?php 
                                // タイトル説明を取得
                                $title_explane = get_field('title_explane');
                                if ($title_explane) : ?>
                                    <p class="explanation">
                                        <?php 
                                        $lines = explode("\n", esc_html($title_explane));
                                        foreach ($lines as $line) {
                                            echo '<span class="text">' . $line . '</span>';
                                        }
                                        ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>

            <?php else : ?>
                <p class="p-interview-archive__no-posts">インタビュー記事がありません。</p>
            <?php endif; ?>
        </div>

    </div>

    <div class="Entry entry-interview">
        <div class="inner-content">
            <div class="common-titlebox center">
                <h2 class="title">Entry</h2>
                <span class="sub-title">採用エントリー</span>
            </div>

            <p class="Entry--text">リンク先で募集職種を確認いただけます</p>

            <div class="Entry--cardbox">
                <button class="Entry-card type1">
                    <div class="card-title">
                        <h2 class="title">New Graduate</h2>
                        <span class="sub-title">新卒採用</span>
                    </div>
                    <div class="card-imgbox">
                        <div class="card-img">
                            <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/entry/Line 6.svg" alt="">
                            <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/entry/Line 6.svg" alt="">
                        </div>
                    </div>
                </button>
                <button class="Entry-card type2">
                    <div class="card-title">
                        <h2 class="title">New Career</h2>
                        <span class="sub-title">中途採用</span>
                    </div>
                    <div class="card-imgbox">
                        <div class="card-img">
                            <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/entry/Line 6.svg" alt="">
                            <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/entry/Line 6.svg" alt="">
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
</main>

<?php
get_template_part('./template/footer');
?>

