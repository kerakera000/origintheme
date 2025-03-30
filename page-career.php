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
    <div class="Phero">
        <div class="Phero--cont inner-content1400">
            <div class="Phero--textbox">
                <h2 class="common-titlebox">
                    <span class="title">About Us</span>
                    <span class="sub-title">COMPANY事業部について</span>
                </h2>
                <div class="Phero--textbox--list">
                    <p class="index">Index</p>
                    <ul class="list">
                        <li class="list--item">
                            <a class="link" href="#">
                                <span class="link--number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pabout/Polygon.svg" alt="">
                                </span>
                                <span class="link--text">ミッション</span>
                            </a>
                        </li>
                        <li class="list--item">
                            <a class="link" href="#">
                                <span class="link--number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pabout/Polygon.svg" alt="">
                                </span>
                                <span class="link--text">ミッション</span>
                            </a>
                        </li>
                        <li class="list--item">
                            <a class="link" href="#">
                                <span class="link--number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pabout/Polygon.svg" alt="">
                                </span>
                                <span class="link--text">ミッション</span>
                            </a>
                        </li>
                        <li class="list--item">
                            <a class="link" href="#">
                                <span class="link--number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pabout/Polygon.svg" alt="">
                                </span>
                                <span class="link--text">ミッション</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="Phero--imgbox">
                <p class="breadcrumbs">Top - About Us</p>
                <img class="hero-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/aboutimg.png" alt="">
            </div>
        </div>
    </div>
    <div class="PheroText">
        <p class="text inner-content1400">
            <span class="text--content">
                セラクのCOMPANY事業部では、総合人事システムCOMPANY(R)の新規導入から運用に至るまで、幅広いサポートを提供しています。属人化の撤廃や工数削減、業務効率化など、お客さまが抱える人事業務の課題を解決し、事業成長を力強く後押しします。私たちは数々の大手企業から信頼をいただき、社会の基盤を支えるパートナーとしての役割を果たしています。
            </span>
        </p>
    </div>

    <div class="Pcareers">
        <div class="Pcareers--cont inner-content1400">
            <div class="common-titlebox flex">
                <h2 class="title">Career</h2>
                <span class="sub-title">キャリア・研修について</span>
            </div>

            <button class="more-button">
                <p class="text">
                    <span class="normal">
                    View More
                    </span>
                    <span class="hover">
                    View More
                    </span>
                </p>
                <span class="arrow-right">
                    <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/newsitem/arrownews.svg" alt="">
                    <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/newsitem/arrownews.svg" alt="">
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
