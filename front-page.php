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
        <div class="bganim1"></div>
        <div class="hero-textbox inner-content1400">
            <h2 class="main-title">
                <span class="title1">Beyond</span>
                <span class="title2">Your</span>
                <span class="title3">Imagination</span>
            </h2>
            <h3 class="sub-text">
                <img class="subimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/souzou.svg" alt="">
            </h3>
        </div>
        <div class="bganim2"></div>
    </div>

    <div class="hero-text">
        <div class="textbox">
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
    </div>

    <div class="news">
        <div class="max-content">
            <span id="NEWS-DECORATION-TEXT" class="news--decoration-text">
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
                            <div class="imgbox">
                                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/newsitem/item1.png" alt="">
                            </div>
                            <div class="textbox">
                                <div class="text">
                                    <span class="date">2025/03/08</span>
                                    <span class="title">
                                        キャリア採用の説明がスタートしました。テキストはダミーです。テキストはダミーです。
                                    </span>
                                </div>
                                <div class="button-box">
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
                            </div>
                        </div>

                        <div class="news-item">
                            <div class="imgbox">
                                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/newsitem/item1.png" alt="">
                            </div>
                            <div class="textbox">
                                <div class="text">
                                    <span class="date">2025/03/08</span>
                                    <span class="title">
                                        キャリア採用の説明がスタートしました。テキストはダミーです。テキストはダミーです。
                                    </span>
                                </div>
                                <div class="button-box">
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
                            </div>
                        </div>

                        <div class="news-item">
                            <div class="imgbox">
                                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/newsitem/item1.png" alt="">
                            </div>
                            <div class="textbox">
                                <div class="text">
                                    <span class="date">2025/03/08</span>
                                    <span class="title">
                                        キャリア採用の説明がスタートしました。テキストはダミーです。テキストはダミーです。
                                    </span>
                                </div>
                                <div class="button-box">
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
                        <span class="text">
                            COMPANY事業部は統合人事システム<br>
                            「COMPANY(R)︎」の新規導入から運用まで、<br>
                            幅広くサポート。お客さまの事業成長を後押<br>
                            しすることで、社会の基盤をつくり、経済の<br>
                            一端を支えています。
                        </span>
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
                        <span class="text">
                            社員がキャリアビジョンを達成できるよう、<br>
                            実践的な研修プログラムを提供しています。<br>
                            職種も多岐に渡り、一人ひとりの適性に合わ<br>
                            せたキャリアを選択することが可能です。
                        </span>
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
                        <div class="imgbox">
                            <p class="number">(Interview 01)</p>
                            <div class="img">
                                <img src="<?= $wp_path; ?>/assets/img/swiper/image.png" alt="About">
                                <h2 class="title">
                                    <span class="title-text">
                                        タイトルが入ります。タイトルが入ります。
                                        タイトルが入ります。タイトルが入ります。
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
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
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgbox">
                            <p class="number">(Interview 01)</p>
                            <div class="img">
                                <img src="<?= $wp_path; ?>/assets/img/swiper/image2.png" alt="About">
                                <h2 class="title">
                                    <span class="title-text">
                                        タイトルが入ります。タイトルが入ります。
                                        タイトルが入ります。タイトルが入ります。
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
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
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgbox">
                            <p class="number">(Interview 01)</p>
                            <div class="img">
                                <img src="<?= $wp_path; ?>/assets/img/swiper/image3.png" alt="About">
                                <h2 class="title">
                                    <span class="title-text">
                                        タイトルが入ります。タイトルが入ります。
                                        タイトルが入ります。タイトルが入ります。
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
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
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgbox">
                            <p class="number">(Interview 01)</p>
                            <div class="img">
                                <img src="<?= $wp_path; ?>/assets/img/swiper/image.png" alt="About">
                                <h2 class="title">
                                    <span class="title-text">
                                        タイトルが入ります。タイトルが入ります。
                                        タイトルが入ります。タイトルが入ります。
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
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
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgbox">
                            <p class="number">(Interview 01)</p>
                            <div class="img">
                                <img src="<?= $wp_path; ?>/assets/img/swiper/image2.png" alt="About">
                                <h2 class="title">
                                    <span class="title-text">
                                        タイトルが入ります。タイトルが入ります。
                                        タイトルが入ります。タイトルが入ります。
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
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
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgbox">
                            <p class="number">(Interview 01)</p>
                            <div class="img">
                                <img src="<?= $wp_path; ?>/assets/img/swiper/image3.png" alt="About">
                                <h2 class="title">
                                    <span class="title-text">
                                        タイトルが入ります。タイトルが入ります。
                                        タイトルが入ります。タイトルが入ります。
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
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
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgbox">
                            <p class="number">(Interview 01)</p>
                            <div class="img">
                                <img src="<?= $wp_path; ?>/assets/img/swiper/image.png" alt="About">
                                <h2 class="title">
                                    <span class="title-text">
                                        タイトルが入ります。タイトルが入ります。
                                        タイトルが入ります。タイトルが入ります。
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
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
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgbox">
                            <p class="number">(Interview 01)</p>
                            <div class="img">
                                <img src="<?= $wp_path; ?>/assets/img/swiper/image2.png" alt="About">
                                <h2 class="title">
                                    <span class="title-text">
                                        タイトルが入ります。タイトルが入ります。
                                        タイトルが入ります。タイトルが入ります。
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
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
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgbox">
                            <p class="number">(Interview 01)</p>
                            <div class="img">
                                <img src="<?= $wp_path; ?>/assets/img/swiper/image3.png" alt="About">
                                <h2 class="title">
                                    <span class="title-text">
                                        タイトルが入ります。タイトルが入ります。
                                        タイトルが入ります。タイトルが入ります。
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
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
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgbox">
                            <p class="number">(Interview 01)</p>
                            <div class="img">
                                <img src="<?= $wp_path; ?>/assets/img/swiper/image.png" alt="About">
                                <h2 class="title">
                                    <span class="title-text">
                                        タイトルが入ります。タイトルが入ります。
                                        タイトルが入ります。タイトルが入ります。
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
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
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgbox">
                            <p class="number">(Interview 01)</p>
                            <div class="img">
                                <img src="<?= $wp_path; ?>/assets/img/swiper/image2.png" alt="About">
                                <h2 class="title">
                                    <span class="title-text">
                                        タイトルが入ります。タイトルが入ります。
                                        タイトルが入ります。タイトルが入ります。
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
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
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                            </span>
                        </button>
                    </div>
                    <div class="swiper-slide">
                        <div class="imgbox">
                            <p class="number">(Interview 01)</p>
                            <div class="img">
                                <img src="<?= $wp_path; ?>/assets/img/swiper/image3.png" alt="About">
                                <h2 class="title">
                                    <span class="title-text">
                                        タイトルが入ります。タイトルが入ります。
                                        タイトルが入ります。タイトルが入ります。
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="textcont">
                            <p class="name">
                                Masanori.U
                                <span class="job">
                                    エンジニア/2018年入社
                                </span>
                            </p>
                        </div>
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
                                <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                                <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
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
            <img class="bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/interview/bg.png" alt="">
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

            <div class="Entry--cardbox inner-content">
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
            </div>
        </div>
    </div>

    <div class="PBusiness">
        <div class="content">
            <div class="titlebox">
                <span class="sub-title">Job</span>
                <h2 class="title">職種紹介</h2>
            </div>
            <div class="typebox">
                <h2 class="title">エンジニア職</h2>
                <div class="imgbox">
                    <img class="img" src="" alt="">
                </div>
                <div class="introductionbox">
                    <span class="job-num">(01)</span>
                    <span class="job-title">COMPANYエンジニア</span>
                    <p class="text">
                        お客様が抱えている課題や要望などを踏まえた要件定義に基づいて、COMPANY(R)のシステム<br>
                        を構築します。担当する領域は人事・給与・勤怠に別れており、導入支援や機能追加などのプロジェ<br>
                        クトに参画します。IT業界未経験からスタートしたエンジニアも多く、社員研修や日々の業務など<br>
                        を通してスキルアップに努めています。<br>
                    </p>
                    <span class="line"></span>
                    <span class="job-num">(02)</span>
                    <span class="job-title">IF / インターフェースエンジニア</span>
                    <p class="text">
                        COMPANY(R)の新規導入・運用保守で必要な外部連携業務を担当しま<br>
                        す。既存システムからCOMPANY(R)へのデータ投入や、他システムへの<br>
                        データ連携など、要件定義んから実際の連携までを行います。また、お<br>
                        客様と直接やり取りするポジションでもあるので、コミュニケーション<br>
                        力や提案力などを生かす場面が多くあります。<br>
                    </p>
                    <span class="line"></span>
                    <span class="job-num">(03)</span>
                    <span class="job-title">RP / ロボティックプロセスオートメーションエンジニア</span>
                    <p class="text">
                        RPA(Robotc Process Automation)とは、パソコン上で行っているルーチンワークを自動化す<br>
                        る技術です。セラクのRPAエンジニアは人事領域において,COMPANY(R)とRPAの技術を掛け合わ<br>
                        せ、お客様の業務効率化をサポートします。プロジェクトによっては、業務コンサルティングや<br>
                        手順書の作成や運用・保守などに携わります。 <br>
                    </p>
                </div>
            </div>
            <div class="sub-titlebox">
                <h2 class="sub-title">ビジネス職</h2>
                <div class="imgbox">
                    <img class="img" src="" alt="">
                </div>
                <div class="introductionbox">
                    <span class="job-num">(01)</span>
                    <span class="job-title">管理</span>
                    <p class="text">
                        自社の目標達成に向けた組織運営に携わります。管轄する領域は幅広く、一般課員の監督や人材の<br>
                        採用・評価、予算管理など、組織の中核をなす人材です。技術的なスキルはもちろんのこと、物ごと<br>
                        の本質を見抜くコンセプチュアルスキル、他者と良好な関係を築くためのヒューマンスキルなど<br>
                        が求められます。 <br>
                    </p>
                    <span class="line"></span>
                    <span class="job-num">(02)</span>
                    <span class="job-title">採用</span>
                    <p class="text">
                        自社の目標達成に向けた組織運営に携わります。管轄する領域は幅広く、一般課員の監督や人材の<br>
                        採用・評価、予算管理など、組織の中核をなす人材です。技術的なスキルはもちろんのこと、物ごと<br>
                        の本質を見抜くコンセプチュアルスキル、他者と良好な関係を築くためのヒューマンスキルなど<br>
                        が求められます。 <br>
                    </p>
                    <span class="line"></span>
                    <span class="job-num">(03)</span>
                    <span class="job-title">教育</span>
                    <p class="text">
                        自社の目標達成に向けた組織運営に携わります。管轄する領域は幅広く、一般課員の監督や人材の<br>
                        採用・評価、予算管理など、組織の中核をなす人材です。技術的なスキルはもちろんのこと、物ごと<br>
                        の本質を見抜くコンセプチュアルスキル、他者と良好な関係を築くためのヒューマンスキルなど<br>
                        が求められます。 test_2<br>
                    </p>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
get_template_part('./template/footer');
?>
