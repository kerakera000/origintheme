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
                <div class="common-titlebox">
                    <p id="Ctitle" class="title">
                        <span id="Ctitle-text" class="text">About Us</span>
                    </p>
                    <p id="Csubtitle" class="sub-title">
                        <span id="Csubtitle-text" class="text">COMPANY事業部について</span>
                    </p>
                </div>
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
                <img id="HeroImg" class="hero-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/aboutimg.png" alt="">
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

    <div class="PAmission">
        <div class="inner-content1400">
            <div class="common-titlebox left">
                <span class="sub-title">Mission</span>
                <h2 class="title">ミッション</h2>
            </div>
        </div>
        <p class="text inner-content1400">
            <span class="text--title">
                顧客とともに伴走し、事業成長に貢献する
            </span>
            <span class="text--content">
                セラクのCOMPANY事業部では、総合人事システムCOMPANY(R)の新規導入から運用に至るまで、幅広いサポートを提供しています。属人化の撤廃や工数削減、業務効率化など、お客さまが抱える人事業務の課題を解決し、事業成長を力強く後押しします。私たちは数々の大手企業から信頼をいただき、社会の基盤を支えるパートナーとしての役割を果たしています。
            </span>
        </p>

        <div class="PAmission-content">
            <div class="PAmission-images">
                <!-- Swiper -->
                <div class="swiper PAmissionSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?= $wp_path; ?>/assets/img/mission/mission1.svg" alt="About">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= $wp_path; ?>/assets/img/mission/mission2.svg" alt="About">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= $wp_path; ?>/assets/img/mission/mission3.svg" alt="About">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= $wp_path; ?>/assets/img/mission/mission1.svg" alt="About">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= $wp_path; ?>/assets/img/mission/mission2.svg" alt="About">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?= $wp_path; ?>/assets/img/mission/mission3.svg" alt="About">
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="PAstrength">
        <div class="PAstrength--titlebox inner-content1400">
            <div class="common-titlebox left">
                <span class="sub-title">PAstrength</span>
                <h2 class="title">私たちの強み</h2>
            </div>
            <div class="textbox">
                <p class="text">
                    人事部門は部門とだけに限定し、そもう、お客さまの業務だけ理解ができないという方も当事では
                    ありません。COMPANY事業部では各界トップクラスのメンバーは数の中から、実務を安心入
                    れたプロフェッショナルが事前にちあかった上で仕様分析からシステム構築まで行い、お客さ
                    まとの信頼関係を築きあっています。
                </p>
            </div>
        </div>

        <div class="PAstrength--cont inner-content1400">
            <div class="PAstrength--cont--cardbox">
                <div class="card">
                    <span class="card--number">(PAstrength 01)</span>
                    <h3 class="card--title">
                        お客さまの信頼関係を築きあっています。
                    </h3>
                    <p class="card--text">
                        人事部門は部門とだけに限定し、そもう、お客さまの業務だけ理解ができないという方も当事ではありません。COMPANY事業部では各界トップクラスのメンバーは数の中から、実務を安心入れたプロフェッショナルが事前にちあかった上で仕様分析からシステム構築まで行い、お客さまとの信頼関係を築きあっています。
                    </p>
                </div>
                <div class="card">
                    <span class="card--number">(PAstrength 02)</span>
                    <h3 class="card--title">
                        お客さまの信頼関係を築きあっています。
                    </h3>
                    <p class="card--text">
                    特定の従業員しか内容を把握していない「属人化」はいわば、業務のブラックボックス化といえます。セラクではCOMPANY(R)の導入を通じて、お客さまの長期的な成長の妨げとなる属人化を解消。誰でも使いこなせる仕組みを整え、業務効率の向上・業務品質の均一化を目指しています。
                    </p>
                </div>
            </div>
            <div class="icons-box line">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pabout/line2.svg" alt="">
            </div>
            <div class="icons-box line">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pabout/line.svg" alt="">
            </div>
            <div class="icons-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pabout/iconmission.svg" alt="">
            </div>

            <div class="PAstrength--cont--cardbox">
                <div class="card">
                    <span class="card--number">(PAstrength 03)</span>
                    <h3 class="card--title">
                    COMPANY(R)実機を自社内に保有
                    </h3>
                    <p class="card--text">
                    Works Human Intelligence社とソリューションパートナー契約を提携しているセラクでは、自社内にCOMPANY(R)の実機を保有。これにより、実際のプロジェクトに限りなく近い環境でのシミュレーションが可能となっています。社員研修のカリキュラムにも実機操作が組みこまれ、プロフェッショナル人材の育成にも活用されています。
                    </p>
                </div>
                <div class="card">
                    <span class="card--number">(PAstrength 04)</span>
                    <h3 class="card--title">
                    業界トップクラス150名のメンバー体制
                    </h3>
                    <p class="card--text">
                    セラクにはCOMPANY(R)︎に精通する技術者が約150名在籍。業界トップクラスの規模で、高い技術力とホスピタリティにもとづいたサポート体制を構築しています。各メンバーが活動する領域も幅広く、テクニカルサポートからコンサルサポートまで、お客さまのご要望に柔軟に対応します。
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="PABusiness">
        <div class="inner-content1400">
            <div class="common-titlebox left">
                <span class="sub-title">Business</span>
                <h2 class="title">事業内容</h2>
            </div>

            <div class="PABusiness--explain">
                <p class="explain--text">
                    当事業部では、統合人事システム「COMPANY(R)」における、新規導入・運用/保守・スポット開発対応の支援をおこなっております。
                </p>
            </div>

            <div class="PABusiness--cardbox">
                <div class="card">
                    <span class="card--number">(Business 01)</span>
                    <div class="card--logo-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pbusiness/business1.svg" alt="150x150px-仮.png">
                    </div>
                    <h4 class="card--subtitle">新規導入</h4>
                    <p class="card--text">
                        人事・給与・勤怠・WEB領域における<br>
                        新規導入(一部・全て可能)<br>
                    </p>
                </div>

                <span class="partition-line"></span>
                
                <div class="card">
                    <span class="card--number">(Business 02)</span>
                    <div class="card--logo-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pbusiness/business2.svg" alt="150x150px-仮.png">
                    </div>
                    <h4 class="card--subtitle">運用/保守</h4>
                    <p class="card--text">
                        COMPANY(R)導入済みのお客さまの<br>
                        保守対応・人事業務の一部巻き取り<br>
                    </p>
                </div>

                <span class="partition-line"></span>

                <div class="card">
                    <span class="card--number">(Business 03)</span>
                    <div class="card--logo-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pbusiness/business3.svg" alt="150x150px-仮.png">
                    </div>
                    <h4 class="card--subtitle">スポット開発</h4>
                    <p class="card--text">
                        COMPANY(R)導入済みのお客さまの<br>
                        ご要望に合わせた追加開発<br>
                    </p>
                </div>
            </div>
        </div>      
    </div>

    <div class="PAnumbers">
        <div class="inner-content1400">
            <div class="common-titlebox left">
                <span class="sub-title">PAnumbers</span>
                <h2 class="title">数字で見るCOMPANY事業部</h2>
            </div>
            
            <div class="PAnumbers--cont">
                <table id="PATable" class="table">
                    <tr class="table-row">
                        <td class="table-cell">
                            <h3 class="title">平均年齢</h3>
                            <div class="imgbox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pnumber/num1.svg" alt="">
                            </div>
                        </td>
                        <td class="table-cell">
                            <h3 class="title">男女比率</h3>
                            <div class="imgbox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pnumber/num2.svg" alt="">
                            </div>
                        </td>
                        <td class="table-cell">
                            <h3 class="title">有給休暇取得率</h3>
                            <div class="imgbox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pnumber/num3.svg" alt="">
                            </div>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell">
                            <h3 class="title">入社してからの役職昇格期間</h3>
                            <div class="imgbox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pnumber/num4.svg" alt="">
                            </div>
                        </td>
                        <td class="table-cell noborder">
                            <h3 class="title">未経験者の割合</h3>
                            <div class="imgbox">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pnumber/num5.svg" alt="">
                            </div>
                        </td>
                        <td class="table-cell noborder">
                            <div class="imgbox last">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pnumber/num6.svg" alt="">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
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
