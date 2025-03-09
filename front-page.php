<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="main-layout max-content">
    <div class="videobg">
        <video src="<?php echo get_template_directory_uri(); ?>/assets/video/bg.mp4" autoplay muted loop></video>
    </div>
    <div class="hero">
        <h2 class="hero-title">
            <span>Beyond</span>
            <span>Your</span>
            <span>Imagination</span>
        </h2>
        <h3>
            想像以上を、始めよう。
        </h3>
    </div>
    <div class="hero-text">
        <p class="text">
            次々と真新しいデジタル技術が登場し、<br>
            すさまじい速度で変化するこの時代。<br>
            私たちは「HRテック」というフィールドから、<br>
            数多くの企業のDX化を推進しています。<br>
            「人事」の悩みを抱えながら、<br>
            前へと向かっていく企業のために。<br>
            セラクCOMPANY事業部には、<br>
            異なる業界、業種から果敢に挑み、<br>
            人事支援のプロとなった仲間がたくさんいます。<br>
            やったことがなくても、とにかくチャレンジしてみる。<br>
            一人でできないことも、チームの力で乗り越えていく。<br>
            想像以上のあなたを、ここから始めてみませんか。
        </p>
    </div>

    <div class="news">
        <div class="max-content">
            <span class="news--decoration-text">
                Beyond Your Imagination
            </span>
        </div>

        <div class="inner-content1400">
            <div class="news--content">
                <div class="news--content--col1">
                    <div class="common-titlebox">
                        <h2 class="title">News</h2>
                        <span class="sub-title">お知らせ</span>
                    </div>
                </div>
                <div class="news--content--col2">
                    <button class="common-button">
                        <div class="text">
                            <p class="normal">View All</p>
                            <p class="hover">View All</p>
                        </div>
                        <span class="arrow-right">
                            <div class="arrow-box">
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                            </div>
                        </span>
                    </button>

                    <div class="news-itembox">
                        <div class="news-item">
                            <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/newsitem/item1.png" alt="">
                            <div class="textbox">
                                <div class="text">
                                    <span class="date">2025/03/08</span>
                                    <span class="title">
                                        キャリア採用の説明がスタートしました。テキストはダミーです。テキストはダミーです。
                                    </span>
                                </div>
                                <div class="button-box">
                                    <button class="more-button">
                                        More
                                        <span class="arrow-right">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="news-item">
                            <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/newsitem/item1.png" alt="">
                            <div class="textbox">
                                <div class="text">
                                    <span class="date">2025/03/08</span>
                                    <span class="title">
                                        キャリア採用の説明がスタートしました。テキストはダミーです。テキストはダミーです。
                                    </span>
                                </div>
                                <div class="button-box">
                                    <button class="more-button">
                                        More
                                        <span class="arrow-right">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="news-item">
                            <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/newsitem/item1.png" alt="">
                            <div class="textbox">
                                <div class="text">
                                    <span class="date">2025/03/08</span>
                                    <span class="title">
                                        キャリア採用の説明がスタートしました。テキストはダミーです。テキストはダミーです。
                                    </span>
                                </div>
                                <div class="button-box">
                                    <button class="more-button">
                                        More
                                        <span class="arrow-right">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="about">
        <div class="skeltonbg"></div>
        <div class="whitebg"></div>
        <div class="inner-content about--content">
            <div class="cont">
                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/aboutimg.png" alt="">
                <div class="cont--textbox">
                    <div class="common-titlebox">
                        <h2 class="title">About Us</h2>
                        <span class="sub-title">COMPANY事業部について</span>
                    </div>
                    <p class="cont--textbox--text">
                    COMPANY事業部は統合人事システム<br>
                    「COMPANY(R)︎」の新規導入から運用まで、<br>
                    幅広くサポート。お客さまの事業成長を後押<br>
                    しすることで、社会の基盤をつくり、経済の<br>
                    一端を支えています。
                    </p>
                    <button class="common-button">
                        <div class="text">
                            <p class="normal">View All</p>
                            <p class="hover">View All</p>
                        </div>
                        <span class="arrow-right">
                            <div class="arrow-box">
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                            </div>
                        </span>
                    </button>
                </div>
            </div>

            <div class="cont">
                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/careerimg.png" alt="">
                <div class="cont--textbox">
                    <div class="common-titlebox">
                        <h2 class="title">Career</h2>
                        <span class="sub-title">キャリア・研修について</span>
                    </div>
                    <p class="cont--textbox--text">
                    社員がキャリアビジョンを達成できるよう、<br>
                    実践的な研修プログラムを提供しています。<br>
                    職種も多岐に渡り、一人ひとりの適性に合わ<br>
                    せたキャリアを選択することが可能です。
                    </p>
                    <button class="common-button">
                        <div class="text">
                            <p class="normal">View All</p>
                            <p class="hover">View All</p>
                        </div>
                        <span class="arrow-right">
                            <div class="arrow-box">
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                            </div>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="Interview">
        <div class="common-titlebox center">
            <h2 class="title">Interview</h2>
            <span class="sub-title">社員インタビュー</span>
        </div>

        <div class="inner-content">
            <p class="Interview--text">
            さまざまなバックグラウンドを持つ、COMPANY事業部の社員たち。どんな仕事や働き方があるのか。<br>
            未来の自分の姿を姿を見つけてください。
            </p>
        </div>

        <div class="max-content">
            <div class="swiper InterviewSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?= $wp_path; ?>/assets/img/neko/1.jpg" alt="About">
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
                        <button class="more-button">
                            More
                            <span class="arrow-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= $wp_path; ?>/assets/img/neko/1.jpg" alt="About">
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
                        <button class="more-button">
                            More
                            <span class="arrow-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= $wp_path; ?>/assets/img/neko/1.jpg" alt="About">
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
                        <button class="more-button">
                            More
                            <span class="arrow-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= $wp_path; ?>/assets/img/neko/1.jpg" alt="About">
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
                        <button class="more-button">
                            More
                            <span class="arrow-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= $wp_path; ?>/assets/img/neko/1.jpg" alt="About">
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
                        <button class="more-button">
                            More
                            <span class="arrow-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?= $wp_path; ?>/assets/img/neko/1.jpg" alt="About">
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
                        <button class="more-button">
                            More
                            <span class="arrow-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <button class="common-button">
            <div class="text">
                <p class="normal">View All</p>
                <p class="hover">View All</p>
            </div>
            <span class="arrow-right">
                <div class="arrow-box">
                    <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                    <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                </div>
            </span>
        </button>

        <div class="Interview--overview">
            <div class="common-titlebox white">
                <h2 class="title">Overview</h2>
                <span class="sub-title">会社概要</span>
            </div>

            <button class="common-button nobg">
                <div class="text">
                    <p class="normal">View More</p>
                    <p class="hover">View More</p>
                </div>
                <span class="arrow-right">
                    <div class="arrow-box">
                        <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                        <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/button/arrow.svg" alt="">
                    </div>
                </span>
            </button>
        </div>
    </div>

    <div class="Entry">
        <div class="inner-content">
            <div class="common-titlebox center">
                <h2 class="title">Entry</h2>
                <span class="sub-title">採用エントリー</span>
            </div>

            <p class="Entry--text">リンク先で募集職種を確認いただけます</p>

            <div class="Entry--cardbox">
                <button class="Entry-card">
                    <div class="card-title">
                        <h2>New Graduate</h2>
                        <span>新卒採用</span>
                    </div>
                    <div class="card-img">
                        <img src="" alt="">
                    </div>
                </button>
            </div>
        </div>
    </div>

</main>

<?php
get_template_part('./template/footer');
?>
