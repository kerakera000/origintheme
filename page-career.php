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
                                <span class="link--text">職種紹介</span>
                            </a>
                        </li>
                        <li class="list--item">
                            <a class="link" href="#">
                                <span class="link--number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pabout/Polygon.svg" alt="">
                                </span>
                                <span class="link--text">キャリアパス</span>
                            </a>
                        </li>
                        <li class="list--item">
                            <a class="link" href="#">
                                <span class="link--number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pabout/Polygon.svg" alt="">
                                </span>
                                <span class="link--text">研修プログラム</span>
                            </a>
                        </li>
                        <li class="list--item">
                            <a class="link" href="#">
                                <span class="link--number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pabout/Polygon.svg" alt="">
                                </span>
                                <span class="link--text">スキルアップ支援</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="Phero--imgbox">
                <p class="breadcrumbs">Top - Career</p>
                <img class="hero-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/careerimg2.png" alt="">
            </div>
        </div>
    </div>
    <div class="PheroText">
        <p class="text inner-content1400">
            <span class="text--content">
            お客さまの課題を解消し、事業成長に貢献するために、COMPANY事業部は職<br>
            種の垣根を超えて連携しています。職種はエンジニア職とビジネス職に大別<br>
            され、キャリア形成も多種多様です。その人材の厚みが事業部の推進力につな<br>
            がっています。それぞれの社員はさまざまなバックグラウンドをもっており、<br>
            業務一つひとつに真摯に向き合っています。<br>
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
                <div class="introduction-box">
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
        <div class="PCcareer-path--content inner-content1400">
            <div class="common-titlebox left">
                <span class="sub-title">Career Path</span>
                <h2 class="title">キャリアパス</h2>
            </div>
            <div class="text">
                <p>
                    COMPANY事業部のキャリアパスは大きく分けて3つあります。マネジメント・スペシャリスト・組織運営
                    と、社員一人ひとりがそれぞれの特性を活かし、能力を発揮できるキャリアを進んでいくことができます。
                </p>
            </div>
        </div>
            
        <div class="PCcareer-path--imgbox">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/CP chart.svg" alt="">
        </div>
        <div class="PCcareer-path--cardbox">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/CP Card.svg" alt="">
        </div>
    </div>

    <div class="PCtraining">
        <div class="PCtraining--content inner-content1400">
            <div class="common-titlebox left">
                <span class="sub-title">Training Program</span>
                <h2 class="title">研修プログラム</h2>
            </div>
            <div class="PCtraining--explain">
                <p class="explain-text">
                COMPANY事業部の新入社員は、新卒採用の場合
                は約3ヶ月、中途採用の場合は約2ヶ月に渡り研修
                に参加します。
                ビジネス研修や技術研修などのさまざまなカリ
                キュラムを経て、最終的にCOMPANY(R)︎の基礎習
                得を目指します。
                </p>
                <div class="explain-flow">
                    <div class="flow-col">
                        <div class="flow-col--stepimg">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/PCflow.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <span class="partition-line">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/line1.svg" alt="">
            </span>
            <div class="PCtraining--detail">
                <div class="detailbox">
                    <div class="detailbox--cont close">
                        <div class="Tcontent">
                            <div class="Tcontent--step">
                                (STEP 01)
                            </div>
                            <div class="Tcontent--box">
                                <div class="box1">
                                    <div class="box1--title">
                                        ビジネス基礎研修
                                    </div>
                                    <div Class="box1--icon">
                                        <span class="Cicon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/button1.svg" alt="">
                                        </span>
                                        <span class="Oicon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/button2.svg" alt="">
                                        </span>
                                    </div>
                                </div>
                                <div class=box2>
                                    <p class="box2--text">
                                    ビジネスライティングやビジネスマナー、ISMS（情報セキュリ
                                    ティマネジメントシステム）など、このステップでは業務を進め
                                    るうえで必要とされるビジネススキルを学びます。ある程度の
                                    基礎を習得している中途採用者の方も研修に参加してもらい、
                                    セラクが重視している理念や価値観を理解していただきます。
                                    </p>
                                    <span class="box2--img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/curriculum.svg" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="partition-line">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/line1.svg" alt="">
            </span>
            <div class="PCtraining--detail">
                <div class="detailbox">
                    <div class="detailbox--cont close">
                        <div class="Tcontent">
                            <div class="Tcontent--step">
                                (STEP 02)
                            </div>
                            <div class="Tcontent--box">
                                <div class="box1">
                                    <div class="box1--title">
                                        労働知識基礎研修
                                    </div>
                                    <div Class="box1--icon">
                                        <span class="Cicon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/button1.svg" alt="">
                                        </span>
                                        <span class="Oicon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/button2.svg" alt="">
                                        </span>
                                    </div>
                                </div>
                                <div class=box2>
                                    <p class="box2--text">
                                    ビジネスライティングやビジネスマナー、ISMS（情報セキュリ
                                    ティマネジメントシステム）など、このステップでは業務を進め
                                    るうえで必要とされるビジネススキルを学びます。ある程度の
                                    基礎を習得している中途採用者の方も研修に参加してもらい、
                                    セラクが重視している理念や価値観を理解していただきます。
                                    </p>
                                    <span class="box2--img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/curriculum.svg" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="partition-line">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/line1.svg" alt="">
            </span>
            <div class="PCtraining--detail">
                <div class="detailbox">
                    <div class="detailbox--cont close">
                        <div class="Tcontent">
                            <div class="Tcontent--step">
                                (STEP 03)
                            </div>
                            <div class="Tcontent--box">
                                <div class="box1">
                                    <div class="box1--title">
                                        SQL研修
                                    </div>
                                    <div Class="box1--icon">
                                        <span class="Cicon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/button1.svg" alt="">
                                        </span>
                                        <span class="Oicon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/button2.svg" alt="">
                                        </span>
                                    </div>
                                </div>
                                <div class=box2>
                                    <p class="box2--text">
                                    ビジネスライティングやビジネスマナー、ISMS（情報セキュリ
                                    ティマネジメントシステム）など、このステップでは業務を進め
                                    るうえで必要とされるビジネススキルを学びます。ある程度の
                                    基礎を習得している中途採用者の方も研修に参加してもらい、
                                    セラクが重視している理念や価値観を理解していただきます。
                                    </p>
                                    <span class="box2--img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/curriculum.svg" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="partition-line">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/line1.svg" alt="">
            </span>
            <div class="PCtraining--detail">
                <div class="detailbox">
                    <div class="detailbox--cont close">
                        <div class="Tcontent">
                            <div class="Tcontent--step">
                                (STEP 04)
                            </div>
                            <div class="Tcontent--box">
                                <div class="box1">
                                    <div class="box1--title">
                                        COMPANY(R)研修
                                    </div>
                                    <div Class="box1--icon">
                                        <span class="Cicon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/button1.svg" alt="">
                                        </span>
                                        <span class="Oicon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/button2.svg" alt="">
                                        </span>
                                    </div>
                                </div>
                                <div class=box2>
                                    <p class="box2--text">
                                    ビジネスライティングやビジネスマナー、ISMS（情報セキュリ
                                    ティマネジメントシステム）など、このステップでは業務を進め
                                    るうえで必要とされるビジネススキルを学びます。ある程度の
                                    基礎を習得している中途採用者の方も研修に参加してもらい、
                                    セラクが重視している理念や価値観を理解していただきます。
                                    </p>
                                    <span class="box2--img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/curriculum.svg" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="partition-line">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/line1.svg" alt="">
            </span>
        </div>
    </div>
    <div class="PCskillup">
        <div class="PCskillup--content inner-content1400">
            <div class="common-titlebox left">
                <span class="sub-title">Skill Up</span>
                <h2 class="title">スキルアップ支援</h2>
            </div>
            <div class="PCskillup--explain">
                <p class="explain--text">
                セラクでは、研修修了後もスキルアップを継続できるように当社独自の制度も用意しています。
                </p>
            </div>
            <div class="PCskillup--cardbox">
                <div class="card">
                    <div class=column>
                        <h4 class="column--title">セラク情報大学</h4>
                        <p class="column--text">
                        セラクで働く社員が講師となり、現場で培った技術や専門知識につ<br>
                        いて講義し、社員同士でナレッジを深め合う取り組みです。<br>
                        </p>
                    </div>
                </div>
                <span class="partition-line"></span>
                <div class="card">
                    <div class=column>
                        <h4 class="column--title">資格取得推奨制度</h4>
                        <p class="column--text">
                        セラクが推奨している資格を取得した場合、最大で80万円の報奨金<br>
                        が支給される制度です。現在、約300種の資格が推奨資格となってい<br>
                        ます。<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Pinterview">
        <div class="Pinterview--cont inner-content1400">
            <div class="common-titlebox flex">
                <span class=next>(Next)</span>
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