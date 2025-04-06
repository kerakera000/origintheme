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
        <video src="<?php echo get_template_directory_uri(); ?>/assets/video/bg.mp4" autoplay muted loop playsinline></video>
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
            <div class="p-interview-archive__list">
                <a class="item inner-content1200" href="/masanori-u">
                    <div class="item__content">
                        <p class="number">(Interview 01)</p>
                        <h2 class="item-title">Masanori.U</h2>
                        <p class="join">エンジニア / 2018年入社（中途）</p>
                        <p class="explanation">
                            <span class="text">
                            「課題解決」という、
                            </span>
                            <span class="text">
                            真っ直ぐな思いに突き動かされて
                            </span>
                        </p>

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
                        <span class="number">
                            (Interview 01)
                        </span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interview/interview1.png" alt="" />
                        <p class="explanation">
                            <span class="text">
                            「課題解決」という、
                            </span>
                            <span class="text">
                            真っ直ぐな思いに突き動かされて
                            </span>
                        </p>
                    </div>
                </a>

                <a class="item inner-content1200" href="/yuki-s">
                    <div class="item__content">
                        <p class="number">(Interview 02)</p>
                        <h2 class="item-title">Yuki.S</h2>
                        <p class="join">エンジニア / 2022年入社（中途）</p>
                        <p class="explanation">
                            <span class="text">
                            事業部のために、自身が
                            </span>
                            <span class="text">
                            「為すべきこと」を突き詰める
                            </span>
                        </p>

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
                        <span class="number">
                            (Interview 02)
                        </span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interview/interview2.png" alt="" />
                        <p class="explanation">
                            <span class="text">
                            事業部のために、自身が
                            </span>
                            <span class="text">
                            「為すべきこと」を突き詰める
                            </span>
                        </p>
                    </div>
                </a>

                <a class="item inner-content1200" href="/risa-t">
                    <div class="item__content">
                        <p class="number">(Interview 03)</p>
                        <h2 class="item-title">Risa.T</h2>
                        <p class="join">エンジニア / 2022年入社（中途）</p>
                        <p class="explanation">
                            <span class="text">
                            事業部ならではの
                            </span>
                            <span class="text">
                            「人のよさ」が個人の成長を促す
                            </span>
                        </p>

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
                        <span class="number">
                            (Interview 03)
                        </span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interview/interview3.png" alt="" />
                        <p class="explanation">
                            <span class="text">
                            事業部ならではの
                            </span>
                            <span class="text">
                            「人のよさ」が個人の成長を促す
                            </span>
                        </p>
                    </div>
                </a>
            </div>
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
                            <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/entry/entry.svg" alt="">
                            <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/entry/entry.svg" alt="">
                        </div>
                    </div>
                </button>
                <button class="Entry-card type2">
                    <div class="card-title">
                        <h2 class="title">Mid Career</h2>
                        <span class="sub-title">中途採用</span>
                    </div>
                    <div class="card-imgbox">
                        <div class="card-img">
                            <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/entry/entry.svg" alt="">
                            <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/entry/entry.svg" alt="">
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

