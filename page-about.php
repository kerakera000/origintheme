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

    <div class="PAmission">
        <div class="inner-content">
            <div class="common-titlebox center">
                <h2 class="title">Mission</h2>
                <span class="sub-title">ミッション</span>
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
        <div class="inner-content">
            <div class="common-titlebox center">
                <h2 class="title">Strength</h2>
                <span class="sub-title">強み</span>
            </div>
            
            <div>
                <p class="strength--text">
                    人事部門は部門とだけに限定し、そもう、お客さまの業務だけ理解ができないという方も当事では<br>
                    ありません。COMPANY事業部では各界トップクラスのメンバーは数の中から、実務を安心入<br>
                    れたプロフェッショナルが事前にちあかった上で仕様分析からシステム構築まで行い、お客さ<br>
                    まとの信頼関係を築きあっています。
                </p>
            </div>
        </div>
        <div class="strength--cont inner-content">
            <div class="strength--cardbox">
                <div class="card">
                    <span class="card--number">(Strength 01)</span>
                    <h3 class="card--title">
                        お客さまの信頼関係を築きあっています。
                    </h3>
                    <p class="card--text">
                        人事部門は部門とだけに限定し、そもう、お客さまの業務だけ理解ができないという方も当事では<br>
                        ありません。COMPANY事業部では各界トップクラスのメンバーは数の中から、実務を安心入<br>
                        れたプロフェッショナルが事前にちあかった上で仕様分析からシステム構築まで行い、お客さ<br>
                        まとの信頼関係を築きあっています。
                    </p>
                </div>
                <div class="card">
                    <span class="card--number">(Strength 01)</span>
                    <h3 class="card--title">
                        お客さまの信頼関係を築きあっています。
                    </h3>
                    <p class="card--text">
                        人事部門は部門とだけに限定し、そもう、お客さまの業務だけ理解ができないという方も当事では<br>
                        ありません。COMPANY事業部では各界トップクラスのメンバーは数の中から、実務を安心入<br>
                        れたプロフェッショナルが事前にちあかった上で仕様分析からシステム構築まで行い、お客さ<br>
                        まとの信頼関係を築きあっています。
                    </p>
                </div>
            </div>

            <div class="icons-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon-1.svg" alt="">
            </div>

            <div class="strength--cardbox">
                <div class="card">
                    <span class="card--number">(Strength 01)</span>
                    <h3 class="card--title">
                        お客さまの信頼関係を築きあっています。
                    </h3>
                    <p class="card--text">
                        人事部門は部門とだけに限定し、そもう、お客さまの業務だけ理解ができないという方も当事では<br>
                        ありません。COMPANY事業部では各界トップクラスのメンバーは数の中から、実務を安心入<br>
                        れたプロフェッショナルが事前にちあかった上で仕様分析からシステム構築まで行い、お客さ<br>
                        まとの信頼関係を築きあっています。
                    </p>
                </div>
                <div class="card">
                    <span class="card--number">(Strength 01)</span>
                    <h3 class="card--title">
                        お客さまの信頼関係を築きあっています。
                    </h3>
                    <p class="card--text">
                        人事部門は部門とだけに限定し、そもう、お客さまの業務だけ理解ができないという方も当事では<br>
                        ありません。COMPANY事業部では各界トップクラスのメンバーは数の中から、実務を安心入<br>
                        れたプロフェッショナルが事前にちあかった上で仕様分析からシステム構築まで行い、お客さ<br>
                        まとの信頼関係を築きあっています。
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="PABusiness">
        <div class="inner-content">
            <div class="common-titlebox center">
                <h2 class="title">Business</h2>
                <span class="sub-title">事業内容</span>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/square-logo/150x150px-仮.png" alt="150x150px-仮.png">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/square-logo/150x150px-仮.png" alt="150x150px-仮.png">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/square-logo/150x150px-仮.png" alt="150x150px-仮.png">
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
        <div class="inner-content">
            <div class="common-titlebox center">
                <h2 class="title">Numbers</h2>
                <span class="sub-title">ナンバーズ</span>
            </div>
            
            <div class="numbers--cont">
                <table class="numbers--table">
                    <tr class="table-row">
                        <td class="table-cell">
                            <h3>平均年齢</h3>
                            <p class="number">00.0<span>歳</span></p>
                        </td>
                        <td class="table-cell">
                            <h3>男女比率</h3>
                            <div class="gender-ratio">
                                <p><span class="male">男性</span>00.0%</p>
                                <p><span class="female">女性</span>00.0%</p>
                            </div>
                        </td>
                        <td class="table-cell">
                            <h3>有給休暇取得率</h3>
                            <p class="number">00.0<span>%</span></p>
                        </td>
                    </tr>
                    <tr class="table-row">
                        <td class="table-cell">
                            <h3>入社してからの役職昇格期間</h3>
                            <p class="number">最短 00<span>年</span></p>
                        </td>
                        <td class="table-cell">
                            <h3>未経験者の割合</h3>
                            <p class="number">00.0<span>%</span></p>
                        </td>
                        <td class="table-cell">
                            <h3>出身業界</h3>
                            <div class="industry-breakdown">
                                <div class="industry-item">
                                    <span class="industry">サービス</span>
                                    <span class="percentage">00.0%</span>
                                </div>
                                <div class="industry-item">
                                    <span class="industry">メーカー</span>
                                    <span class="percentage">00.0%</span>
                                </div>
                                <div class="industry-item">
                                    <span class="industry">ITソフトウェア</span>
                                    <span class="percentage">00.0%</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="common-linkbox">
        
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
