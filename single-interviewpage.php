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

    <div class="Phero single-interview">
        <div class="Phero--cont inner-content1200 content">
            <div class="Phero--textbox single-interview-textbox">
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

                <h2 class="title"><?php the_field('title_name'); ?></h2>

                <p class="interview-date"><?php the_field('join'); ?></p>

                <p class="interview-text">
                    <?php the_field('text_explane'); ?>
                </p>
            </div>
            <div class="Phero--imgbox single-interview-imgbox">
                <p class="breadcrumbs">Top - Interview - <?php the_field('title_name'); ?></p>
                <?php $image = get_field('main_img'); if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="single-about">
        <div class="skeltonbg"></div>
        <div class="whitebg"></div>
        <div id="ABOUT" class="inner-content1200 single-about--content">
            <div class="cont">
                <?php 
                    $content1 = get_field('content1');
                    if($content1):
                    ?>
                    <img class="normal-img leftanim" src="<?php echo $content1['img1']; ?>" alt="">
                    <div class="cont--textbox rightanim">
                        <div class="common-titlebox">
                            <h2 class="title">
                                <?php 
                                $lines = explode("\n", esc_html($content1['title1']));
                                foreach ($lines as $line) {
                                    echo $line . '<br>';
                                }
                                ?>
                            </h2>
                        </div>
                        <p class="cont--textbox--text">
                            <span class="text">
                                <?php echo $content1['text1']; ?>
                            </span>
                        </p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="cont">
                <?php 
                    $content2 = get_field('content2');
                    if($content2):
                    ?>
                    <img class="normal-img leftanim" src="<?php echo $content2['img2']; ?>" alt="">
                    <div class="cont--textbox rightanim">
                        <div class="common-titlebox">
                            <h2 class="title">
                                <?php 
                                $lines = explode("\n", esc_html($content2['title2']));
                                foreach ($lines as $line) {
                                    echo $line . '<br>';
                                }
                                ?>
                            </h2>
                        </div>
                        <p class="cont--textbox--text">
                            <span class="text">
                                <?php echo $content2['text2']; ?>
                            </span>
                        </p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="cont">
                <?php 
                    $content3 = get_field('content3');
                    if($content3):
                    ?>
                    <img class="normal-img leftanim" src="<?php echo $content3['img3']; ?>" alt="">
                    <div class="cont--textbox rightanim">
                        <div class="common-titlebox">
                            <h2 class="title">
                                <?php 
                                $lines = explode("\n", esc_html($content3['title3']));
                                foreach ($lines as $line) {
                                    echo $line . '<br>';
                                }
                                ?>
                            </h2>
                        </div>
                        <p class="cont--textbox--text">
                            <span class="text">
                                <?php echo $content3['text3']; ?>
                            </span>
                        </p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="cont">
                <?php 
                    $content4 = get_field('content4');
                    if($content4):
                    ?>
                    <img class="normal-img leftanim" src="<?php echo $content4['img4']; ?>" alt="">
                    <div class="cont--textbox rightanim">
                        <div class="common-titlebox">
                            <h2 class="title">
                                <?php 
                                $lines = explode("\n", esc_html($content4['title4']));
                                foreach ($lines as $line) {
                                    echo $line . '<br>';
                                }
                                ?>
                            </h2>
                        </div>
                        <p class="cont--textbox--text">
                            <span class="text">
                                <?php echo $content4['text4']; ?>
                            </span>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="single-interview-post">
        <div class="inner-content1200">
            <div class="common-titlebox center">
                <h2 class="title">Interview</h2>
                <span class="sub-title">社員インタビュー</span>
            </div>

            <div class="wrapper">
                <?php
                // 現在の投稿を除いて2件のインタビュー記事を取得
                $args = array(
                    'post_type' => 'interviewpage',
                    'posts_per_page' => 2, // 2件に変更
                    'post__not_in' => array(get_the_ID()),
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $interview_query = new WP_Query($args);

                if ($interview_query->have_posts()) :
                    while ($interview_query->have_posts()) : $interview_query->the_post();
                ?>
                    <div class="slide">
                        <div class="imgbox">
                            <p class="number">(Interview <?php printf('%02d', $interview_query->current_post + 1); ?>)</p>
                            <div class="img">
                                <?php $image = get_field('main_img'); if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                                <?php 
                                $title_explane = get_field('title_explane');
                                if ($title_explane) : ?>
                                    <h2 class="title">
                                        <span class="title-text">
                                            <?php echo esc_html($title_explane); ?>
                                        </span>
                                    </h2>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="textcont">
                            <p class="name">
                                <?php 
                                $title_name = get_field('title_name');
                                if ($title_name) : ?>
                                    <?php echo esc_html($title_name); ?>
                                <?php endif; ?>
                                <?php 
                                $join = get_field('join');
                                if ($join) : ?>
                                    <span class="job">
                                        <?php echo esc_html($join); ?>
                                    </span>
                                <?php endif; ?>
                            </p>

                            <button class="more-button nobg">
                                <p class="text">
                                    <span class="normal">More</span>
                                    <span class="hover">More</span>
                                </p>
                                <span class="arrow-right">
                                    <div class="arrow-box">
                                        <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/card/Line.svg" alt="">
                                        <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/card/Line.svg" alt="">
                                    </div>
                                </span>
                            </button>
                        </div>
                    </div>
                <?php 
                    endwhile;
                    wp_reset_postdata();
                else : 
                ?>
                    <p class="p-interview-archive__no-posts">インタビュー記事がありません。</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="Entry single-interview-entry">
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
