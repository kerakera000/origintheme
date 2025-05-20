<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main id="pageTop" class="main-layout">
    <div class="videobg">
        <video src="<?php echo get_template_directory_uri(); ?>/assets/video/bg.mp4" autoplay muted loop playsinline></video>
    </div>
    <div class="Phero">
        <div class="Phero--cont inner-content1200">
            <div class="Phero--textbox">
                <div class="common-titlebox">
                    <p id="Ctitle" class="title page-title">
                        <span id="Ctitle-text" class="text">Career</span>
                    </p>
                    <p id="Csubtitle" class="sub-title">
                        <span id="Csubtitle-text" class="text">キャリア・研修について</span>
                    </p>
                </div>
                <div class="Phero--textbox--list">
                    <p class="index">Index</p>
                    <ul class="list">
                        <li class="list--item">
                            <a class="link" href="#MISSION">
                                <span class="link--number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pabout/Polygon.svg" alt="">
                                </span>
                                <span class="link--text">職種紹介</span>
                            </a>
                        </li>
                        <li class="list--item">
                            <a class="link" href="#CAREERPATH">
                                <span class="link--number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pabout/Polygon.svg" alt="">
                                </span>
                                <span class="link--text">キャリアパス</span>
                            </a>
                        </li>
                        <li class="list--item">
                            <a class="link" href="#TRAINING">
                                <span class="link--number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pabout/Polygon.svg" alt="">
                                </span>
                                <span class="link--text">研修プログラム</span>
                            </a>
                        </li>
                        <li class="list--item">
                            <a class="link" href="#SKILLUP">
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
                <p class="breadcrumbs">Top - <span class="text">Career</span></p>
                <img id="HeroImg" class="hero-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/career.png" alt="">
            </div>
        </div>
    </div>
    <div class="PheroText">
        <p class="text inner-content1200">
            <span class="text--content">
            お客さまの課題を解消し、事業成長に貢献するために、COMPANY事業部は職種の垣根を超えて連携しています。職種はエンジニア職とビジネス職に大別され、キャリア形成も多種多様です。その人材の厚みが事業部の推進力につながっています。それぞれの社員はさまざまなバックグラウンドをもっており、業務一つひとつに真摯に向き合っています。
            </span>
        </p>
    </div>
    <div id="MISSION" class="PCbusiness">
        <div class="PCbusiness--content inner-content1200">
            <div class="common-titlebox left">
                <span class="sub-title">Job</span>
                <h2 class="title">職種紹介</h2>
            </div>
            <div class="PCbusiness--type-box">
                <div id="categorybox1" class="category-box">
                    <h2 class="category-box--title">
                        カスタマーサクセス/<br>
                        エンジニア職
                    </h2>
                    <img class="category-box--img" src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/job1.png" alt="">
                    <img class="category-box--imgsp" src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/jobsp2.png" alt="">
                </div>

                <div id="typeboX1" class="introduction-box">
                    <div class="job-box">
                        <div class="job-box--content">
                            <div class="num-box">
                                <span class="job-box-num">(01)</span>
                                <div class="textbox">
                                    <span class="textbox--jobtitle">COMPANYエンジニア</span>
                                    <p class="textbox--text">お客さまが抱えている課題や要望などを踏まえた要件定義に基づいて、COMPANY(R)︎のシステムを構築します。担当する領域は人事・給与・勤怠・WEBに分かれており、導入支援や機能追加などのプロジェクトに参画します。IT業界未経験からスタートしたエンジニアも多く、技術研修や日々の業務などを通してスキルアップに努めています。</p>
                                </div>
                            </div>
                            <hr class="hr1">
                        </div>
                        <div class="job-box--content">
                            <div class="num-box">
                                <span class="job-box-num">(02)</span>
                                <div class="textbox">
                                    <span class="textbox--jobtitle">IF / インターフェースエンジニア</span>
                                    <p class="textbox--text">COMPANY(R)の新規導入・運用/保守において、人事基幹システムとして他システムとの外部連携、要件定義からデータ連携（IN/OUT）業務を担当します。お客さまと直接やりとりする機会も多く、コミュニケーション力や提案力を活かすことができますし、さらにIF領域でのコードを使用した開発に携わることでより専門的なスキルを身につけることが可能です。</p>
                                </div>
                            </div>
                            <hr class="hr1 last">
                        </div>
                    </div>
                </div>

                <div class="contsp accordion">
                    <div class="faq first">
                        <input type="checkbox" id="faq01" class="toggle" />
                        <label class="question" htmlFor="faq01">
                            <span>(01)</span> COMPANYエンジニア
                        </label>
                        <div class="anser">
                            <div class="text">
                            お客さまが抱えている課題や要望などを踏まえた要件定義に基づいて、COMPANY(R)︎のシステムを構築します。担当する領域は人事・給与・勤怠・WEBに分かれており、導入支援や機能追加などのプロジェクトに参画します。IT業界未経験からスタートしたエンジニアも多く、技術研修や日々の業務などを通してスキルアップに努めています。
                            </div>
                        </div>
                    </div>

                    <div class="faq">
                        <input type="checkbox" id="faq01" class="toggle" />
                        <label class="question" htmlFor="faq01">
                            <span>(02)</span> IF / インターフェース<br>エンジニア
                        </label>
                        <div class="anser">
                            <div class="text">
                            COMPANY(R)の新規導入・運用/保守において、人事基幹システムとして他システムとの外部連携、要件定義からデータ連携（IN/OUT）業務を担当します。お客さまと直接やりとりする機会も多く、コミュニケーション力や提案力を活かすことができますし、さらにIF領域でのコードを使用した開発に携わることでより専門的なスキルを身につけることが可能です。
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="PCbusiness--type-box last">
                <div id="categorybox2" class="category-box">
                    <h2 class="category-box--title">ビジネス職</h2>
                    <img class="category-box--img" src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/job2.png" alt="">
                    <img class="category-box--imgsp" src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/jobsp1.png" alt="">
                </div>
                <div id="typeboX2" class="introduction-box">
                    <div class="job-box">
                        <div class="job-box--content">
                            <div class="num-box">
                                <span class="job-box-num">(01)</span>
                                <div class="textbox">
                                    <span class="textbox--jobtitle">管理</span>
                                    <p class="textbox--text">自社の目標達成に向けた組織運営に携わります。管轄する領域は幅広く、一般課員の監督や人材の採用・評価、予算管理など、組織の中核をなす人材です。技術的なスキルはもちろんのこと、物ごとの本質を見抜くコンセプチュアルスキル、他者と良好な関係を築くためのヒューマンスキルなどが求められます。</p>
                                </div>
                            </div>
                            <hr class="hr1">
                        </div>
                        <div class="job-box--content">
                            <div class="num-box">
                                <span class="job-box-num">(02)</span>
                                <div class="textbox">
                                    <span class="textbox--jobtitle">採用</span>
                                    <p class="textbox--text">優秀な人材を獲得するための採用戦略立案や、人材紹介会社との折衝など、主に人事採用にまつわる業務にあたります。また、新入社員を受け入れたあとの入社手続きも大切な業務のひとつです。採用面接の面接官を担当することもあり、自社とマッチする人材を見極める力が磨かれます。</p>
                                </div>
                            </div>
                            <hr class="hr1">
                        </div>
                        <div class="job-box--content">
                            <div class="num-box">
                                <span class="job-box-num">(03)</span>
                                <div class="textbox">
                                    <span class="textbox--jobtitle">教育</span>
                                    <p class="textbox--text">セラクは充実した教育制度を設けており、IT業界未経験でもエンジニアとして必要なスキルを習得できます。こうした育成環境を整備するのが教育部門の担当者です。新入社員の基礎教育やさらなる成長を望む社員の継続教育など、各プログラムは業界の動向に合わせて、日々アップデートしていきます。</p>
                                </div>
                            </div>
                            <hr class="hr1 last">
                        </div>
                    </div>
                </div>

                <div class="contsp accordion">
                    <div class="faq first">
                        <input type="checkbox" id="faq01" class="toggle" />
                        <label class="question" htmlFor="faq01">
                            <span>(01)</span> 管理
                        </label>
                        <div class="anser">
                            <div class="text">
                            自社の目標達成に向けた組織運営に携わります。管轄する領域は幅広く、一般課員の監督や人材の採用・評価、予算管理など、組織の中核をなす人材です。技術的なスキルはもちろんのこと、物ごとの本質を見抜くコンセプチュアルスキル、他者と良好な関係を築くためのヒューマンスキルなどが求められます。
                            </div>
                        </div>
                    </div>

                    <div class="faq">
                        <input type="checkbox" id="faq01" class="toggle" />
                        <label class="question" htmlFor="faq01">
                            <span>(02)</span>採用
                        </label>
                        <div class="anser">
                            <div class="text">
                            優秀な人材を獲得するための採用戦略立案や、人材紹介会社との折衝など、主に人事採用にまつわる業務にあたります。また、新入社員を受け入れたあとの入社手続きも大切な業務のひとつです。採用面接の面接官を担当することもあり、自社とマッチする人材を見極める力が磨かれます。
                            </div>
                        </div>
                    </div>

                    <div class="faq last">
                        <input type="checkbox" id="faq01" class="toggle" />
                        <label class="question" htmlFor="faq01">
                            <span>(03)</span> 教育
                        </label>
                        <div class="anser">
                            <div class="text">
                            セラクは充実した教育制度を設けており、IT業界未経験でもエンジニアとして必要なスキルを習得できます。こうした育成環境を整備するのが教育部門の担当者です。新入社員の基礎教育やさらなる成長を望む社員の継続教育など、各プログラムは業界の動向に合わせて、日々アップデートしていきます。
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="CAREERPATH" class="PCcareer-path">
        <div class="PCcareer-path--content inner-content1200">
            <div class="common-titlebox left">
                <span class="sub-title">Career Path</span>
                <h2 class="title">キャリアパス</h2>
            </div>
            <div class="text">
                COMPANY事業部のキャリアパスは大きく分けて3つあります。マネジメント・スペシャリスト・組織運営と、社員一人ひとりがそれぞれの特性を活かし、能力を発揮できるキャリアを進んでいくことができます。
            </div>
        </div>
            
        <div class="PCcareer-path--imgbox inner-content1200">
            <img class="imgpc" src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/CP chart.svg" alt="">
            <img class="imgsp" src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/careerpass.svg" alt="">
        </div>
        <div class="PCcareer-path--cardbox inner-content1200">
            <div class="card">
                <div class="card--content">
                    <h2 class="title">PG</h2>
                    <p class="subtext">プログラマ</p>
                </div>
                <p class="text">事業部独自の研修プログラムのなかで、技術職なスキルを身につける</p>
            </div>

            <div class="card">
                <div class="card--content">
                    <h2 class="title">SE</h2>
                    <p class="subtext">システムエンジニア</p>
                </div>
                <p class="text">システムにおける総合的・応用的な業務を担当</p>
            </div>

            <div class="card">
                <div class="card--content">
                    <h2 class="title">PL</h2>
                    <p class="subtext">プロジェクトリーダー</p>
                </div>
                <p class="text">プロジェクトの実務責任者</p>
            </div>

            <div class="card">
                <div class="card--content">
                    <h2 class="title">PM</h2>
                    <p class="subtext">プロジェクトマネージャー</p>
                </div>
                <p class="text">プロジェクトの QCT（品質、コスト、納期）責任者</p>
            </div>

            <div class="card">
                <div class="card--content">
                    <h2 class="title"><span>上流</span>SE</h2>
                    <p class="subtext">上流システムエンジニア</p>
                </div>
                <p class="text">高い専門性を持つSEのエキスパート</p>
            </div>
        </div>
    </div>

    <div id="TRAINING" class="PCtraining">
        <div class="PCtraining--content inner-content1200">
            <div class="common-titlebox left">
                <span class="sub-title">Training Program</span>
                <h2 class="title">研修プログラム</h2>
            </div>
            <div class="PCtraining--explain">
                <p class="explain-text">
                COMPANY事業部の新入社員は、新卒採用の場合は約3ヶ月、中途採用の場合は約2ヶ月に渡り研修に参加します。<br>ビジネス研修や技術研修などのさまざまなカリキュラムを経て、最終的にCOMPANY(R)︎の基礎習得を目指します。
                </p>
                <div class="explain-flow">
                    <div class="flow-col">
                        <img class="imgpc" src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/PCflow.svg" alt="">
                        <img class="imgsp" src="<?php echo get_template_directory_uri(); ?>/assets/img/Pcareer/program.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="contsp accordion">
                <div class="faq first">
                    <input type="checkbox" id="faq01" class="toggle" />
                    <label class="question" htmlFor="faq01">
                        <span>(01)</span> ビジネス基礎研修
                    </label>
                    <div class="anser">
                        <div class="text">
                            <p class="cont1">ビジネスライティングやビジネスマナー、ISMS（情報セキュリティマネジメントシステム）など、このステップでは業務を進めるうえで必要とされるビジネススキルを学びます。ある程度の基礎を習得している中途採用者の方も研修に参加してもらい、セラクが重視している理念や価値観を理解していただきます。</p>
                            <div class="cont2">
                                <p class="cont2--title">カリキュラム</p>
                                <ul class="cont2--list">
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">ビジネスライティング研修</p>
                                    </li>
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">ビジネスマナー研修</p>
                                    </li>
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">ISMS研修</p>
                                    </li>
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">モラルコンプライアンス研修</p>
                                    </li>
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">ビジネスコミュニケーション研修</p>
                                    </li>
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">ビジネスマインド研修</p>
                                    </li>
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">ビジネス力UP研修</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq">
                    <input type="checkbox" id="faq01" class="toggle" />
                    <label class="question" htmlFor="faq01">
                        <span>(02)</span> 労務知識基礎研修
                    </label>
                    <div class="anser">
                        <div class="text">
                            <p class="cont1">
                                統合人事システム「COMPANY(R)︎」を理解するためには、人事労務の基礎知識を習得する必要があります。このステップでは、人事労務の関連書籍を読み、レポートを作成します。また、講義動画を用いた座学も実施。これらのカリキュラムによって、将来のクライアントとなる他社人事部との共通言語が養われます。
                            </p>
                            <div class="cont2">
                                <p class="cont2--title">カリキュラム</p>
                                <ul class="cont2--list">
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">レポート作成</p>
                                    </li>
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">講義動画の視聴</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq">
                    <input type="checkbox" id="faq01" class="toggle" />
                    <label class="question" htmlFor="faq01">
                        <span>(03)</span> COMPANY(R)︎研修
                    </label>
                    <div class="anser">
                        <div class="text">
                            <p class="cont1">COMPANY(R)︎の実機を使い、実務に則したスキルを学びます。操作方法の習得から課題の実施まで、カリキュラムは多彩です。そのほか、提案力・折衝力の習得を目的とした顧客対応のロールプレイングも実施。研修を終えた社員は、COMPANY(R)︎の設定・検証業務からキャリアをスタートさせます。</p>
                            <div class="cont2">
                                <p class="cont2--title">カリキュラム</p>
                                <ul class="cont2--list">
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">マニュアルの読み込み</p>
                                    </li>
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">講義動画の視聴</p>
                                    </li>
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">エビデンス作成研修</p>
                                    </li>
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">スキルシート作成</p>
                                    </li>
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">過去問題実施</p>
                                    </li>
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">COMPANY(R)の実機研修</p>
                                    </li>
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">セキュリティ研修</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq">
                    <input type="checkbox" id="faq01" class="toggle" />
                    <label class="question" htmlFor="faq01">
                        <span>(04)</span> SQL研修
                    </label>
                    <div class="anser">
                        <div class="text">
                            <p class="cont1">SQLは世界で最も普及しているデータベース言語で、データの処理や検索などをする際に必須となる技術です。COMPANY(R)︎もデータベースと接続されており、万が一トラブルが発生した場合はSQLを駆使して原因究明にあたります。COMPANY(R)︎に限らずSQLを使用する機会は多く、習得しておけばITスキルの底上げにもつながります。</p>
                            <div class="cont2">
                                <p class="cont2--title">カリキュラム</p>
                                <ul class="cont2--list">
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">講義動画の視聴</p>
                                    </li>
                                    <li class="cont2--list--item">
                                        <span class="dot">・</span>
                                        <p class="listtext">COMPANY(R)︎を用いた実践課題</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="SKILLUP" class="PCskillup">
        <div class="PCskillup--content inner-content1200">
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
                        <h4 class="column--title">セラク情熱大学</h4>
                        <p class="column--text">セラクで働く社員が講師となり、現場で培った技術や専門知識について講義し、社員同士でナレッジを深め合う取り組みです。</p>
                    </div>
                </div>
                <span class="partition-line"></span>
                <div class="card">
                    <div class=column>
                        <h4 class="column--title">資格取得推奨制度</h4>
                        <p class="column--text">セラクが推奨している資格を取得した場合、最大で20万円の報奨金が支給される制度です。現在、約300種の資格が推奨資格となっています。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Pcareers">
        <a href="/interview" class="Pcareers--cont inner-content1200">
            <div class="common-titlebox flex">
                <span class="next">(Next)</span>
                <h2 class="title">Interview</h2>
                <span class="sub-title">社員インタビュー</span>
            </div>

            <button class="more-button">
                <p class="text">
                    <span class="normal">
                    View Next
                    </span>
                    <span class="hover">
                    View Next
                    </span>
                </p>
                <span class="arrow-right">
                    <img class="normal-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/newsitem/arrownews.svg" alt="">
                    <img class="hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/newsitem/arrownews.svg" alt="">
                </span>
            </button>
        </a>
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