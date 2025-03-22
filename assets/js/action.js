(function ($) {
    
})(jQuery)

window.onload = function() {

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
            425: {
                enabled:false,
                slidesPerView: 1,
                slideMinWidth: 468,
            },
            768: {
                enabled: true,
                slidesPerView: 2,
                slideMinWidth: 468,
            },
            1000: {
                enabled: true,
                slidesPerView: 3,
                slideMinWidth: 468,
            }
        },
        enabled: false
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
    const scrollDown = document.getElementById('ScrollDown');

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

    setTimeout(() => {
        if (scrollDown) scrollDown.classList.add('active');
    }, 2200);

    // アニメーション要素の取得
    const bganim1 = document.querySelector('.bganim1');
    const bganim2 = document.querySelector('.bganim2');

    // 1秒後にactiveクラスを追加
    setTimeout(() => {
        if (bganim1) bganim1.classList.add('active');
        if (bganim2) bganim2.classList.add('active');
    }, 800);

    // スクロールアニメーション用の関数
    function handleScroll() {
        const scrollPosition = window.scrollY;
        
        // スクロール位置に基づいてアニメーションを適用
        if (scrollPosition > 40) { // この値は必要に応じて調整してください
            bganim1.classList.add('scroll-active');
            bganim2.classList.add('scroll-active');
            title1.classList.add('scroll-active');
            title2.classList.add('scroll-active');
            title3.classList.add('scroll-active');
            subimg.classList.add('scroll-active');
            scrollDown.classList.add('scroll-active');
        } else {
            bganim1.classList.remove('scroll-active');
            bganim2.classList.remove('scroll-active');
            title1.classList.remove('scroll-active');
            title2.classList.remove('scroll-active');
            title3.classList.remove('scroll-active');
            subimg.classList.remove('scroll-active');
            scrollDown.classList.remove('scroll-active');
        }
    }

    // スクロールイベントリスナーを追加
    window.addEventListener('scroll', handleScroll);
}

document.addEventListener('DOMContentLoaded', function() {
    // ... 既存のコード ...

    // SPheaderButtonクリック時の処理
    const spHeaderButton = document.getElementById('SPheaderButton');
    const spHeader = document.getElementById('SPHEADER');

    if (spHeaderButton && spHeader) {
        spHeaderButton.addEventListener('click', function() {
            spHeader.classList.toggle('open');
            spHeaderButton.classList.toggle('open'); // SPheaderButtonにもopenクラスを追加
        });
    }
});