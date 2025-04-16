(function ($) {
    // HeroImgのアニメーション
    setTimeout(() => {
        $('#HeroImg').addClass('active');
    }, 1000);

    $(window).on('load', function() {
        // Swiperの初期化
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

        const missionSwiper = new Swiper('.PAmissionSwiper', {
            slidesPerView: 2,
            centeredSlides: false,
            initialSlide: 1,
            spaceBetween: 24,
            allowTouchMove: false,
            autoplay: {
                delay: 0,
            },
            loop: true,
            speed: 6000,
            breakpoints: {
                768: {
                    slidesPerView: 3.4,
                    slideMinWidth: 468,
                    spaceBetween: 80,
                    initialSlide: 2,
                },
            },
        });

        // NEWS-DECORATION-TEXT要素の処理
        const $newsDecorationText = $('#NEWS-DECORATION-TEXT');
        const originalText = $newsDecorationText.text();
        const repeatedText = Array(10).fill(`<span>${originalText}</span>`).join('');
        const $newsDecorationTextInner = $('<div>').addClass('news-decoration-text-inner').html(repeatedText);
        $newsDecorationText.empty().append($newsDecorationTextInner);

        // タイトルアニメーション
        setTimeout(() => {
            $('.hero-textbox').addClass('active');
        }, 1400);

        setTimeout(() => {
            $('.title1').addClass('active');
        }, 1400);

        setTimeout(() => {
            $('.title2').addClass('active');
        }, 1600);

        setTimeout(() => {
            $('.title3').addClass('active');
        }, 1800);

        setTimeout(() => {
            $('.subimg').addClass('active');
        }, 2000);

        setTimeout(() => {
            $('#ScrollDown').addClass('active');
        }, 2200);

        // 背景アニメーション
        setTimeout(() => {
            $('.bganim1, .bganim2').addClass('active');
        }, 800);

        // インタビュー詳細タイトル
        setTimeout(() => {
            $('#InterviewDetail').addClass('active');
            setTimeout(() => {
                $('.explanation').addClass('active');
            }, 350);
        }, 300);

        // スクロールアニメーション
        $(window).on('scroll', function() {
            const scrollPosition = $(window).scrollTop();
            
            if (scrollPosition > 40) {
                $('.bganim1, .bganim2, #ScrollDown').addClass('scroll-active');
            } else {
                $('.bganim1, .bganim2, #ScrollDown').removeClass('scroll-active');
            }

            // タイトルとサブ画像のスクロールアニメーション
            if (scrollPosition > 1050) {
                $('.title1, .title2, .title3, .subimg, .hero-textbox').addClass('scroll-active');
            } else {
                $('.title1, .title2, .title3, .subimg, .hero-textbox').removeClass('scroll-active');
            }

            // ヘッダーのスクロールアニメーション
            if (scrollPosition > 50) {
                $('#HEADER').addClass('active');
            } else {
                $('#HEADER').removeClass('active');
            }
        });
    });

    $(document).ready(function() {
        // SPheaderButtonクリック処理
        $('#SPheaderButton').on('click', function() {
            $('#SPHEADER, #SPheaderButton').toggleClass('open');
        });

        // アコーディオンのクリック処理
        $('.question').on('click', function() {
            const $toggle = $(this).prev('.toggle');
            $toggle.prop('checked', !$toggle.prop('checked'));
        });

        // テーブルセルのサイズ調整
        function adjustTableCells() {
            const $table = $('#PATable');
            if (!$table.length) return;

            const tableWidth = $table.width();
            const cellWidth = Math.floor(tableWidth / 3);
            
            $('.table-cell').css({
                width: cellWidth,
                height: cellWidth
            });
        }

        // 初期化時とリサイズ時に実行
        adjustTableCells();
        $(window).on('resize', adjustTableCells);

        // タイトルのアニメーション
        const CLASSNAME = "visible";
        const TIMEOUT = 300;
        setInterval(() => {
            $('#Ctitle, #Csubtitle').addClass(CLASSNAME);
        }, TIMEOUT * 2);
    });

    $(window).on('scroll', function() {
        $('.rightanim').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面内に入ってきた時
            if (scroll > position - windowHeight + 100 && scroll < position + elementHeight) {
                $(this).addClass('active');
            }
            // 要素が画面上部に隠れた時
            else {
                $(this).removeClass('active');
            }
        });
    });

    $(window).on('scroll', function() {
        $('.leftanim').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面内に入ってきた時
            if (scroll > position - windowHeight + 100 && scroll < position + elementHeight) {
                $(this).addClass('active');
            }
            // 要素が画面上部に隠れた時
            else {
                $(this).removeClass('active');
            }
        });
    });

    $(window).on('scroll', function() {
        $('.topanim').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面内に入ってきた時
            if (scroll > position - windowHeight + 100 && scroll < position + elementHeight) {
                $(this).addClass('active');
            }
            // 要素が画面上部に隠れた時
            else {
                $(this).removeClass('active');
            }
        });
    });

    $(window).on('scroll', function() {
        $('.interviewanim').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の真ん中に来た時を判定
            if (scroll + (windowHeight / 2) > position && 
                scroll + (windowHeight / 2) < position + elementHeight) {
                $(this).addClass('active');
                setTimeout(() => {
                    $('.explanation').addClass('active');
                }, 300);
            } else {
                // $(this).removeClass('active');
            }
        });
    });

    $(window).on('scroll', function() {
        $('#PCMAINimg').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の真ん中から100px下に来た時を判定
            if (scroll + (windowHeight / 2 - 200) > position && 
                scroll + (windowHeight / 2 - 200) < position + elementHeight) {
                $(this).addClass('active');
            } else {
            }
        });
    });

    $(window).on('scroll', function() {
        $('#detailCont1').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の真ん中に来た時を判定
            if (scroll + (windowHeight / 2 - 100) > position && 
                scroll + (windowHeight / 2 - 100) < position + elementHeight) {
                $(this).addClass('active');
                $('#PCMAINimg').addClass('activeimg1');
                $('#PCMAINimg').removeClass('activeimg2');
            }
        });

        $('#detailCont2').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の真ん中に来た時を判定
            if (scroll + (windowHeight / 2 - 100) > position && 
                scroll + (windowHeight / 2 - 100) < position + elementHeight) {
                $(this).addClass('active');
                $('#PCMAINimg').addClass('activeimg2');
                $('#PCMAINimg').removeClass('activeimg1');
                $('#PCMAINimg').removeClass('activeimg3');
            }
        });
        $('#detailCont3').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の真ん中に来た時を判定
            if (scroll + (windowHeight / 2 - 100) > position && 
                scroll + (windowHeight / 2 - 100) < position + elementHeight) {
                $('#PCMAINimg').addClass('activeimg3');
                $('#PCMAINimg').removeClass('activeimg2');
                $('#PCMAINimg').removeClass('activeimg4');
            }
        });
        $('#detailCont4').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の真ん中に来た時を判定
            if (scroll + (windowHeight / 2 - 100) > position && 
                scroll + (windowHeight / 2 - 100) < position + elementHeight) {
                $('#PCMAINimg').addClass('activeimg4');
                $('#PCMAINimg').removeClass('activeimg3');
            }
        });

        $('#ClosePCMAINimg').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の真ん中に来た時を判定
            if (scroll + (windowHeight / 2) > position && 
                scroll + (windowHeight / 2) < position + elementHeight) {
                $('#PCMAINimg').removeClass('activeimg1');
                $('#PCMAINimg').removeClass('activeimg2');
                $('#PCMAINimg').removeClass('activeimg3');
                $('#PCMAINimg').removeClass('activeimg4');
            }
        });

        $('#ClosePCMAINOUtimg').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の真ん中に来た時を判定
            if (scroll + (windowHeight / 2) > position && 
                scroll + (windowHeight / 2) < position + elementHeight) {
                $('#PCMAINimg').removeClass('activeimg1');
                $('#PCMAINimg').removeClass('activeimg2');
                $('#PCMAINimg').removeClass('activeimg3');
                $('#PCMAINimg').removeClass('activeimg4');
            }
        });

    });

    // PCbusiness--type-boxの高さ調整関数
    function adjustCategoryBoxHeight() {
        $('.PCbusiness--type-box').each(function() {
            const $typeBox = $(this);
            const $categoryBox = $typeBox.find('.category-box');
            if ($categoryBox.length) {
                // PCbusiness--type-boxの現在の高さを取得
                const typeBoxHeight = $typeBox.outerHeight();
                // category-boxの高さを設定
                $categoryBox.height(typeBoxHeight);
            }
        });
    }

    // DOM読み込み完了時とリサイズ時に高さ調整を実行
    $(window).on('load', function() {
        adjustCategoryBoxHeight();
        $(window).on('resize', adjustCategoryBoxHeight);
    });
    
})(jQuery);


document.addEventListener('DOMContentLoaded', function () {
    const allSteps = document.querySelectorAll('.PCtraining--detail .detailbox');

    allSteps.forEach(step => {
        const box1 = step.querySelector('.box1');
        const box2 = step.querySelector('.box2');
        const cicon = step.querySelector('.Cicon');
        const oicon = step.querySelector('.Oicon');

        if (!box1 || !box2 || !cicon || !oicon) return;

        // 初期化
        box2.style.maxHeight = '0';
        box2.style.overflow = 'hidden';
        box2.style.transition = 'max-height 0.5s ease-out';
        box2.style.display = 'none';
        oicon.style.display = 'none';

        box1.addEventListener('click', function () {
            const isOpen = box2.style.display === 'flex';

            if (isOpen) {
                // 閉じる処理
                box2.style.maxHeight = '0';
                setTimeout(() => {
                    box2.style.display = 'none';
                    cicon.style.display = 'inline';
                    oicon.style.display = 'none';
                }, 500);
            } else {
                // 開く処理
                box2.style.display = 'flex';
                requestAnimationFrame(() => {
                    box2.style.maxHeight = box2.scrollHeight + 'px';
                });
                cicon.style.display = 'none';
                oicon.style.display = 'inline';
            }
        });
    });
});

// document.addEventListener('DOMContentLoaded', function () {
//     // 日本語の約物を含む正規表現パターンを更新
//     const punctuationRegex = /[、。！？〈〉《》「」『』【】〔〕（）：；［］｛｝]/g;
//     const bodyTextNodes = document.querySelectorAll('body *:not(script):not(style):not(noscript)');

//     bodyTextNodes.forEach(node => {
//         node.childNodes.forEach(child => {
//             if (child.nodeType === Node.TEXT_NODE) {
//                 const newHTML = child.textContent.replace(punctuationRegex, match => {
//                     return `<span style="font-family: YakuHanJP, 'Hiragino Sans', 'Hiragino Kaku Gothic ProN', 'Noto Sans JP', Meiryo, sans-serif;">${match}</span>`;
//                 });
//                 if (newHTML !== child.textContent) {
//                     node.innerHTML = newHTML;
//                 }
//             }
//         });
//     });
// });


