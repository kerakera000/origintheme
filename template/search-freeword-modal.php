<?php
global $wp_path;
global $site_url;
?>

<div id="Modal-Search-Freeword" class="modal-freewrd-condition">
    <div class="search-mainbox">
        
       
    </div>    
    <div class=modal-content>
    <main class="max-content">
        <div class="common-container">
            <div class="common-left-content search-freeword-page-content__left">
                <!-- 検索条件 -->
                <div class="search-mainbox">
                    <button id="Close-Search-Freeword-Button" class="close-button">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/close-button.svg" alt="">
                    </button>
                    <div class="search-mainbox__search-box">
                        <div class="flexbox-list">                      
                            <div class="common-sub-titlebox">
                                <h3 class="title">検索条件</h3> 
                            </div>

                            <p class="flexbox-list__text">お好みの条件を複数選択し、「検索」できます。</p>
                            <p class="flexbox-list__text2">フリーワードで探す</p>
                            <div class=flexbox-list__list-box>
                                
                                <form class="freeword-search">
                                    <input type="text" placeholder="検索ワード" name="search">
                                    <button type="submit" class="submit">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/search.svg" alt="検索">
                                    </button>
                                </form>

                                <div class="js-accordion-toggle">
                                    <span class="text">業態から探す</span>
                                    <span class="icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-accordion-pink.svg" alt="">
                                    </span>
                                </div>
                                <div class="js-accordion-content" style="display:none;">
                                    <div class="accordion-button-group">
                                        <button class="common-accordion-button">飲食(100件)</button>
                                        <button class="common-accordion-button">サービス業(100件)</button>
                                        <button class="common-accordion-button">代理店業(100件)</button>
                                        <button class="common-accordion-button">小売業(100件)</button>
                                        <button class="common-accordion-button">教育・保育業(100件)</button>
                                        <button class="common-accordion-button">美容・健康(100件)</button>
                                        <button class="common-accordion-button">無店舗(100件)</button>
                                        <button class="common-accordion-button">介護・福祉(100件)</button>
                                        <button class="common-accordion-button">海外(100件)</button>
                                    </div>
                                </div>

                                <span class="addjust-line"></span>

                                <div class="js-accordion-toggle">
                                    <span class="text">開業資金から探す</span>
                                    <span class="icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-accordion-pink.svg" alt="">
                                    </span>
                                </div>
                                <div class="js-accordion-content" style="display:none;">
                                    <div class="accordion-button-group">
                                        <button class="common-accordion-button">1円〜100万円(100件)</button>
                                        <button class="common-accordion-button">101万円〜300万円(100件)</button>
                                        <button class="common-accordion-button">301万円〜500万円(100件)</button>
                                        <button class="common-accordion-button">501万円〜1000万円(100件)</button>
                                        <button class="common-accordion-button">1001万円以上(100件)</button>
                                    </div>
                                </div>

                                <span class="addjust-line"></span>

                                <div class="js-accordion-toggle">
                                    <span class="text">エリアから探す</span>
                                    <span class="icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-accordion-pink.svg" alt="">
                                    </span>
                                </div>
                                <div class="js-accordion-content" style="display:none;">
                                    <div class="accordion-button-group">
                                        <button class="common-accordion-button">北海道・東北</button>
                                        <button class="common-accordion-button">関東</button>
                                        <button class="common-accordion-button">中部</button>
                                        <button class="common-accordion-button">近畿</button>
                                        <button class="common-accordion-button">中国・四国</button>
                                        <button class="common-accordion-button">九州・沖縄</button>
                                    </div>
                                </div>

                                <span class="addjust-line"></span>

                                <div class="js-accordion-toggle">
                                    <span class="text">特徴から探す</span>
                                    <span class="icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common-icon/arrow-accordion-pink.svg" alt="">
                                    </span>
                                </div>
                                <div class="js-accordion-content" style="display:none;">
                                    <div class="accordion-button-group">
                                        <button class="common-accordion-button">副業からスタート</button>
                                        <button class="common-accordion-button">未経験からスタート</button>
                                        <button class="common-accordion-button">無店舗で営業</button>
                                        <button class="common-accordion-button">女性が活躍</button>
                                        <button class="common-accordion-button">設立初期FC本部</button>
                                        <button class="common-accordion-button">好きな時間に働ける仕事</button>
                                        <button class="common-accordion-button">加盟金100万円以下</button>
                                        <button class="common-accordion-button">土地・店舗活用</button>
                                        <button class="common-accordion-button">スピード開業可能</button>
                                        <button class="common-accordion-button">法人新規事業向け</button>
                                        <button class="common-accordion-button">１人で独立開業</button>
                                        <button class="common-accordion-button">今月のおすすめFC</button>
                                    </div>
                                </div>

                                <span class="addjust-line"></span>
                                
                                <div class="flexbox-list__date-search">

                                    <div class="front-attention-box__button common-center-button-box">
                                        <button class="common-button-pink pink-button">
                                            指定した条件で検索
                                        </button>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </main>
</div>
</div>