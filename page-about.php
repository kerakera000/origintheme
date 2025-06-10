<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="main-layout">
    <div class="aboutkv">
        <div class="aboutkv__background">
            <div class="titlebox">
                <span class="aboutkvRB"></span>
                <div class="title-cont">
                    <h2 class="title-cont__title">ABOUT US</h2>
                    <p class="title-cont__text">
                    アールビー・アート・アセット株式会社について
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="philosophy">
        <h2 class="philosophy-common-title">PHILOSOPHY</h2>
        <p class="philosophy-common-subtitle">理念</p>
        <div class="philosophy-common-line"></div>
        <div class="philosophy-common-content">
            <h3 class="philosophy-common-main-text">美術品に<br>もっと自由な選択を</h3>
            <p class="philosophy-common-description">
                「美術品が価値として、そして個として確立する社会をつくる。」<br>
                美術品が眠ることなく、次の持ち主や時代へと生きた価値を循環していく仕組みを考えます。
            </p>
        </div>
        <div class="philosophy__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/img.png" alt="Philosophy Image">
        </div>
    </div>

    <div class="philosophy">
        <h2 class="philosophy-common-title">philosophy</h2>
        <p class="philosophy-common-subtitle">メッセージ</p>
        <div class="philosophy-common-line"></div>
        <div class="philosophy-common-content">
            <h3 class="philosophy-common-main-text">美術品の資産性を、確かなかたちへ。</h3>
            <p class="philosophy-common-description">
                美術品は、単なる鑑賞の対象ではありません。<br>
                その背景にある歴史・作家性・希少性は、れっきとした価値を持ち、<br>
                時には不動産や証券とは異なる安定資産としても注目されています。<br><br>
            </p>
            <p class="philosophy-common-description">
            私たちは、美術品が正しく評価され、的確に流通し、必要に応じて担保や保険といった<br>
            金融の仕組みによって活用される、そんな新たな資産のかたちを支えたいと考えています。<br><br>
            </p>
            <p class="philosophy-common-description">
            日本ではまだ、美術品の流動性や資産活用の道は十分に整っていません。<br>
            だからこそ私たちは、金融と美術の両面に精通した専門チームによる査定・買取・融資・保険・販売委託などを<br>
            ワンストップで提供し、美術品を保有される<br>
            投資家の皆様に新たな可能性と安心をお届けします。<br><br>
            </p>
            <p class="philosophy-common-description">
            美術品の価値が、きちんと認識され、活用され、未来へと引き継がれていく社会へ。<br>
            私たちはその「橋渡し役」でありたいと願っています。
            </p>
        </div>
    </div>

    <div class="page-about-company">
        <div class="page-about-company__cont max-1080">
            <div class="about-common-title">
                <h2 class="title">COMPANY</h2>
                <p class="subtitle">会社概要</p>
            </div>
            <table class="company-table">
                <tbody>
                    <tr><th>社名</th><td>アールビー・アート・アセット株式会社</td></tr>
                    <tr><th>英字商号</th><td>RB・ART・ASSET CO., LTD</td></tr>
                    <tr><th>所在地</th><td>〒104-0061<br>東京都中央区銀座1-15-6 銀座東洋ビル2F</td></tr>
                    <tr><th>TEL</th><td>03-3528-6363</td></tr>
                    <tr><th>FAX</th><td>03-3528-6364</td></tr>
                    <tr><th>設立年月日</th><td>2013年10月17日</td></tr>
                    <tr><th>資本金</th><td>9千万円</td></tr>
                    <tr><th>代表者</th><td>代表取締役　秋元 之浩</td></tr>
                    <tr><th>決算期</th><td>1月</td></tr>
                    <tr><th>主な事業内容</th><td>美術品に関するファイナンスサービス（融資・保険）<br>美術品に対する査定、買取、委託販売<br>アートコンサルティング・アドバイザリーサービス</td></tr>
                    <tr>
                        <th>登録等</th>
                        <td>
                            <div class="items">
                                <span class="items__title">貸金業</span>
                                <span class="items__colon">:</span>
                                <div class="items__flexbox">
                                    <h2 class="items__text">
                                        <span class="title">貸金業者登録番号</span>
                                        <span class="number">第31511号</span>
                                    </h2>
                                    <h2 class="items__text">
                                        <span class="title">日本貸金業協会会員</span>
                                        <span class="number">第005821号</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="items">
                                <span class="items__title">質屋営業</span>
                                <span class="items__colon">:</span>
                                <h2 class="items__text">東京都公安委員会許可　第301061406003号</h2>
                            </div>
                            <div class="items">
                                <span class="items__title">古物商</span>
                                <span class="items__colon">:</span>
                                <h2 class="items__text">東京都公安委員会許可　第301061309240号</h2>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="page-about-access">
        <div class="page-about-access__cont max-1080">
            <div class="about-common-title">
                <h2 class="title">ACCESS</h2>
                <p class="subtitle">アクセス</p>
            </div>
            <div class="page-about-access__map">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/map.png" alt="アクセスマップ">
            </div>
            <div class="page-about-access__info">
                <p class="cont">〒104-0061 東京都中央区銀座1-15-6 銀座東洋ビル2F<br>
                TEL：03-3528-6363<br>
                FAX：03-3528-6364</p>
                <div class="cont">
                    <p>都営浅草線 宝町<br>
                    A3出口から徒歩4分</p>
                    <p>東京メトロ有楽町線・銀座一丁目駅<br>
                    10番出口から 徒歩4分</p>
                    <p>東京メトロ銀座線・京橋駅<br>
                    2番出口から　徒歩5分</p>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('template/Contact'); ?>
</main>

<?php
get_template_part('./template/footer');
?>
