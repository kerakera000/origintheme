(function ($) {
    // 4秒後に.hero-textへスクロール
    setTimeout(function() {
        // hero-text要素の取得
        var target = $('.hero-text');
        // 現在のスクロール位置を取得
        var currentScroll = $(window).scrollTop();
        // ページ上部からの距離を取得した値を変数（position）に代入する
        var position = target.offset().top;
        
        // 現在のスクロール位置がhero-textより下の場合のみ実行
        if (currentScroll < position) {
            // 移動する時の速度（1秒 = 1000）
            var speed = 2000;
            // スムーススクロールの開始
            $("html, body").animate({
                scrollTop: position
            }, speed, "swing");
        }
    }, 3500);
})(jQuery)

document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper(".InterviewSwiper", {
        slidesPerView: 1,
        spaceBetween: 80,
        slideMinWidth: 468,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop: true,
        speed: 4000,
        autoplay: {
            delay: 1000,
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
                slideMinWidth: 468,
            }
        }
    });

    // NEWS-DECORATION-TEXT要素の監視
    const newsDecorationText = document.getElementById('NEWS-DECORATION-TEXT');
    const newsDecorationTextInner = document.createElement('div');
    newsDecorationTextInner.className = 'news-decoration-text-inner';
    // オリジナルのテキストを2回複製して配置
    const originalText = newsDecorationText.textContent;
    newsDecorationTextInner.innerHTML = `<span>${originalText}</span><span>${originalText}</span><span>${originalText}</span><span>${originalText}</span><span>${originalText}</span><span>${originalText}</span><span>${originalText}</span><span>${originalText}</span><span>${originalText}</span><span>${originalText}</span>`;
    newsDecorationText.textContent = '';
    newsDecorationText.appendChild(newsDecorationTextInner);

    // タイトルアニメーション要素の取得
    const title1 = document.querySelector('.title1');
    const title2 = document.querySelector('.title2');
    const title3 = document.querySelector('.title3');
    const subimg = document.querySelector('.subimg');

    // 順番にactiveクラスを追加
    setTimeout(() => {
        if (title1) title1.classList.add('active');
    }, 1400);

    setTimeout(() => {
        if (title2) title2.classList.add('active');
    }, 1600);

    setTimeout(() => {
        if (title3) title3.classList.add('active');
    }, 1800);

    setTimeout(() => {
        if (subimg) subimg.classList.add('active');
    }, 2000);

    // 順番にactiveクラスを追加
    setTimeout(() => {
        if (title1) title1.classList.add('scroll-active');
    }, 3200);

    setTimeout(() => {
        if (title2) title2.classList.add('scroll-active');
    }, 3200);

    setTimeout(() => {
        if (title3) title3.classList.add('scroll-active');
    }, 3200);

    setTimeout(() => {
        if (subimg) subimg.classList.add('scroll-active');
    }, 3200);

    // アニメーション要素の取得
    const bganim1 = document.querySelector('.bganim1');
    const bganim2 = document.querySelector('.bganim2');

    // 1秒後にactiveクラスを追加
    setTimeout(() => {
        if (bganim1) bganim1.classList.add('active');
        if (bganim2) bganim2.classList.add('active');
    }, 500);

    setTimeout(() => {
        if (bganim1) bganim1.classList.add('scroll-active');
        if (bganim2) bganim2.classList.add('scroll-active');
    }, 3200);

});