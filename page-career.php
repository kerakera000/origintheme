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
                    <span class="title">Career</span>
                    <span class="sub-title">キャリア・研修について</span>
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
            お客さまの課題を解消し、事業成長に貢献するために、COMPANY事業部は職種の垣根を超えて連携しています。職種はエンジニア職とビジネス職に大別され、キャリア形成も多種多様です。その人材の厚みが事業部の推進力につながっています。それぞれの社員はさまざまなバックグラウンドをもっており、業務一つひとつに真摯に向き合っています。
            </span>
        </p>
    </div>

    <div class="PCbusiness">
        <div class="PCbusiness--content inner-content1400">
            <div class="common-titlebox left">
                <span class="sub-title">Job</span>
                <h2 class="title">職種紹介</h2>
            </div>
            <div class="PCbusiness--type-box">
                <div class="category-box">
                    <h2 class="category-box--title">
                        カスタマーサクセス/<br>
                        エンジニア職
                    </h2>
                    <img class="category-box--img" src="<?php echo get_template_directory_uri(); ?>/assets/img/Pbusiness/Rectangle72.png" alt="">
                </div>
                <div class="introduction-box padding-class">
                    <div class="job-box">
                        <div class="job-box--content">
                            <div class="num-box">
                                <span class="job-box-num">(01)</span>
                                <div class="textbox">
                                    <span class="textbox--jobtitle">COMPANYエンジニア</span>
                                    <p class="textbox--text">
                                        お客さまが抱えている課題や要望などを踏まえた要件定義に基づいて、COMPANY(R)︎のシステム<br>
                                        を構築します。担当する領域は人事・給与・勤怠・WEBに分かれており、導入支援や機能追加などの<br>
                                        プロジェクトに参画します。IT業界未経験からスタートしたエンジニアも多く、技術研修や日々の<br>
                                        業務などを通してスキルアップに努めています。<br>
                                    </p>
                                </div>
                            </div>
                            <hr class="hr1">
                        </div>
                        <div class="job-box--content">
                            <div class="num-box">
                                <span class="job-box-num">(02)</span>
                                <div class="textbox">
                                    <span class="textbox--jobtitle">IF / インターフェースエンジニア</span>
                                    <p class="textbox--text">
                                        COMPANY(R)の新規導入・運用/保守において、人事基幹システムとして他システムとの外部連携、<br>
                                        要件定義からデータ連携（IN/OUT）業務を担当します。お客さまと直接やりとりする機会も多く、<br>
                                        コミュニケーション力や提案力を活かすことができますし、さらにIF領域でのコードを使用した<br>
                                        開発に携わることでより専門的なスキルを身につけることが可能です。<br>
                                    </p>
                                </div>
                            </div>
                            <hr class="hr1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="PCbusiness--type-box">
                <div class="category-box">
                    <h2 class="category-box--title">ビジネス職</h2>
                    <img class="category-box--img" src="<?php echo get_template_directory_uri(); ?>/assets/img/Pbusiness/Rectangle73.png" alt="">
                </div>
                <div class="introduction-box">
                    <div class="job-box">
                        <div class="job-box--content">
                            <div class="num-box">
                                <span class="job-box-num">(01)</span>
                                <div class="textbox">
                                    <span class="textbox--jobtitle">管理</span>
                                    <p class="textbox--text">
                                        自社の目標達成に向けた組織運営に携わります。管轄する領域は幅広く、一般課員の監督や人材の<br>
                                        採用・評価、予算管理など、組織の中核をなす人材です。技術的なスキルはもちろんのこと、物ごと<br>
                                        の本質を見抜くコンセプチュアルスキル、他者と良好な関係を築くためのヒューマンスキルなど<br>
                                        が求められます。<br>
                                    </p>
                                </div>
                            </div>
                            <hr class="hr1">
                        </div>
                        <div class="job-box--content">
                            <div class="num-box">
                                <span class="job-box-num">(02)</span>
                                <div class="textbox">
                                    <span class="textbox--jobtitle">採用</span>
                                    <p class="textbox--text">
                                        優秀な人材を獲得するための採用戦略立案や、人材紹介会社との折衝など、主に人事採用にまつわ<br>
                                        る業務にあたります。また、新入社員を受け入れたあとの入社手続きも大切な業務のひとつです。採<br>
                                        用面接の面接官を担当することもあり、自社とマッチする人材を見極める力が磨かれます。<br>
                                    </p>
                                </div>
                            </div>
                            <hr class="hr1">
                        </div>
                        <div class="job-box--content">
                            <div class="num-box">
                                <span class="job-box-num">(03)</span>
                                <div class="textbox">
                                    <span class="textbox--jobtitle">教育</span>
                                    <p class="textbox--text">
                                        セラクは充実した教育制度を設けており、IT業界未経験でもエンジニアとして必要なスキルを習<br>
                                        得できます。こうした育成環境を整備するのが教育部門の担当者です。新入社員の基礎教育やさら<br>
                                        なる成長を望む社員の継続教育など、各プログラムは業界の動向に合わせて、日々アップデートし<br>
                                        ていきます。<br>
                                    </p>
                                </div>
                            </div>
                            <hr class="hr1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="PCcareer-path">
        <div class="PCcareer-path--content inner-content">
            <div class="common-titlebox left">
                <span class="sub-title">Career Path</span>
                <h2 class="title">キャリアパス</h2>
            </div>
            <p class="PCcareer-path--text">COMPANY事業部のキャリアパスは大きく分けて3つあります。マネジメント・スペシャリスト・組織運営<br>
                と、社員一人ひとりがそれぞれの特性を活かし、能力を発揮できるキャリアを進んでいくことができます。
            </p>
            <div class="PCcareer-path--imgbox">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/Group152.svg" alt="">
            </div>
            <div class="PCcareer-path--cardbox">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/Group155.svg" alt="">
            </div>
        </div>
    </div>


    <div class="PCskillup">
        <div class="PCskillup--content inner-content">
            <div class="common-titlebox left">
                <span class="sub-title">Skill Up</span>
                <h2 class="title">スキルアップ支援</h2>
            </div>

        </div>
    </div>

    <div class="Pinterview">
        <div class="Pinterview--cont inner-content1400">
            <div class="common-titlebox flex">
                <h2 class="title">Interview</h2>
                <span class="sub-title">社員インタビュー</span>
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