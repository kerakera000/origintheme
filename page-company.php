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
    <div class="Phero">
        <div class="Phero--cont inner-content1200">
            <div class="Phero--textbox">
                <div class="common-titlebox">
                    <p id="Ctitle" class="title">
                        <span id="Ctitle-text" class="text">Company</span>
                    </p>
                    <p id="Csubtitle" class="sub-title">
                        <span id="Csubtitle-text" class="text">会社情報</span>
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
                                <span class="link--text">会社概要</span>
                            </a>
                        </li>
                        <li class="list--item">
                            <a class="link" href="#">
                                <span class="link--number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pabout/Polygon.svg" alt="">
                                </span>
                                <span class="link--text">認定資格</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="Phero--imgbox">
                <p class="breadcrumbs">Top - About Us</p>
                <img id="HeroImg" class="hero-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company.png" alt="">
            </div>
        </div>
    </div>

    <div class="company-overview">
        <div class="cont inner-content1200">
            <div class="company-overview--cont">
                <div class="common-titlebox left">
                    <span class="sub-title">Overview</span>
                    <h2 class="title">会社概要</h2>
                </div>
            </div>
            <div class="company-info">
                <table class="company-info__table">
                    <tbody>
                    <tr class="company-info__row">
                        <th class="company-info__label">社名</th>
                        <td class="company-info__value">株式会社セラク（英文名　SERAKU Co.,Ltd.）</td>
                    </tr>
                    <tr class="company-info__row">
                        <th class="company-info__label">設立</th>
                        <td class="company-info__value">1987年12月</td>
                    </tr>
                    <tr class="company-info__row">
                        <th class="company-info__label">資本金</th>
                        <td class="company-info__value">3億1,172万5,195円（2024年12月末現在）</td>
                    </tr>
                    <tr class="company-info__row">
                        <th class="company-info__label">従業員数</th>
                        <td class="company-info__value">連結3,387名（2024年8月末現在）</td>
                    </tr>
                    <tr class="company-info__row">
                        <th class="company-info__label">上場証券取引所</th>
                        <td class="company-info__value">東京証券取引所スタンダード市場（証券コード：6199）</td>
                    </tr>
                    <tr class="company-info__row">
                        <th class="company-info__label">サービス</th>
                        <td class="company-info__value">
                        <ul class="company-info__list">
                            <li class="company-info__list-item">DX｜クラウド人事システム支援</li>
                            <li class="company-info__list-item">セキュリティ</li>
                            <li class="company-info__list-item">農業IT</li>
                            <li class="company-info__list-item">IoT</li>
                            <li class="company-info__list-item">データサイエンス</li>
                            <li class="company-info__list-item">RPA</li>
                            <li class="company-info__list-item">Salesforce支援</li>
                            <li class="company-info__list-item">SI｜ITインフラ/クラウド</li>
                            <li class="company-info__list-item">デジタルマーケティング</li>
                            <li class="company-info__list-item">WEBソリューション</li>
                        </ul>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="imgbox inner-content1200">
            <img class="img1" src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company2.png" alt="">
            <img class="img2" src="<?php echo get_template_directory_uri(); ?>/assets/img/company/company3.png" alt="">
        </div>
    </div>

    <div class="company-Approval">
        <div class="inner-content1200">
            <div class="common-titlebox left">
                <p id="Csubtitle" class="sub-title">
                    <span id="Csubtitle-text" class="text">Approval</span>
                </p>
                <p id="Ctitle" class="title">
                    <span id="Ctitle-text" class="text">認定資格</span>
                </p>
            </div>
        </div>

        <div class="company-Approval__list inner-content1200">
            <ul class="list">
                <li class="item">
                    <span>・</span>
                    <p>ISMS （情報セキュリティマネジメントシステム） ISO27001：RB-IS15004</p>
                </li>
                <li class="item">
                    <span>・</span>
                    <p>QMS （品質マネジメントシステム） ISO9001:RB-Q15021</p>
                </li>
                <li class="item">
                    <span>・</span>
                    <p>マイクロソフト認定ゴールドパートナー</p>
                </li>
                <li class="item">
                    <span>・</span>
                    <p>シスコ社認定プレミアパートナー</p>
                </li>
                <li class="item">
                    <span>・</span>
                    <p>ヴイエムウェア株式会社認定VMware Solution Provider(Professional)</p>
                </li>
                <li class="item">
                    <span>・</span>
                    <p>シトリックス・システムズ・ジャパン株式会社認定Citrix Solution Advisor(Silver)</p>
                </li>
                <li class="item">
                    <span>・</span>
                    <p>株式会社セールスフォース・ドットコム インプリメンテーション/OEMパートナー/販売協力店</p>
                </li>
            </ul>

            <div class="company-Approval__imgbox">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/approval.svg" alt="">
            </div>
        </div>

        <div class="line inner-content1200"></div>

        <div class="company-Approval__list inner-content1200">
            <ul class="list">
                <li class="item">
                    <span>・</span>
                    <p>ISO27001登録範囲 <span class="text">東京本社、MSC、大阪支社における情報通信システムの企画、設計、開発、製作、保守・運用業務及び経営管理業務</span></p>
                </li>
                <li class="item">
                    <span>・</span>
                    <p>ISO9001登録範囲<span class="text">東京本社、MSCにおけるITインフラソリューションのサービス、製品の加工、及び販売</span></p>
                </li>
            </ul>

            <div class="company-Approval__imgbox">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/approval2.svg" alt="">
            </div>
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
                        <h2 class="title">Mid Career</h2>
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
