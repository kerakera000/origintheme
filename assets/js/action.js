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
            speed: 15000,
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

        setTimeout(() => {
            $('.item1').addClass('active');
        }, 800);

        // スクロールアニメーション
        $(window).on('scroll', function() {
            const scrollPosition = $(window).scrollTop();
            
            if (scrollPosition > 40) {
                $('.bganim1, .bganim2, #ScrollDown, #SPherotextbox').addClass('scroll-active');
            } else {
                $('.bganim1, .bganim2, #ScrollDown, #SPherotextbox').removeClass('scroll-active');
            }

            // タイトルとサブ画像のスクロールアニメーション
            if (scrollPosition > 1050) {
                $('.title1, .title2, .title3, .subimg, #HEROTEXT').addClass('scroll-active');
            } else {
                $('.title1, .title2, .title3, .subimg, #HEROTEXT').removeClass('scroll-active');
            }

            // // タイトルとサブ画像のスクロールアニメーション
            // if (scrollPosition > 1100) {
            //     $('.hero-textbox').addClass('scroll-active');
            // } else {
            //     $('.hero-textbox').removeClass('scroll-active');
            // }

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

        if (window.location.pathname === '/') {
            window.scrollTo(0, 0);
            setTimeout(() => {
                $('#pageTop').css('overflow', 'hidden');
                $('html').css('scroll-behavior', 'auto'); // スムーススクロールを無効化
            }, 500);
            setTimeout(() => {
                $('#pageTop').css('overflow', '');  // 3秒後にoverflow hiddenを解除
            }, 2500);
        } else {
            $('html').css('scroll-behavior', 'smooth'); // ルートパス以外ではスムーススクロールを有効化
        }
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
        $('.bottomanim-type1').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 画面幅によって判定位置を変更
            var triggerPosition;
            if (window.innerWidth <= 500) {
                // 500px以下なら「画面中央より下200px」
                triggerPosition = scroll + (windowHeight / 2) + 200;
            } else {
                triggerPosition = scroll +  (windowHeight / 2) + 800;
            }

            // 要素が画面内に入ってきた時
            if (window.innerWidth <= 500){
                if (triggerPosition > position && triggerPosition < position + elementHeight) {
                    $(this).addClass('active');
                }
            }else {
                if (scroll > position - windowHeight + 300 && scroll < position + elementHeight) {
                    $(this).addClass('active');
                }else {
                    $(this).removeClass('active');
                }
            }
        });
    });

    $(window).on('scroll', function() {
        $('.bottomanim-type2').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面内に入ってきた時
            if (scroll > position - windowHeight + 300 && scroll < position + elementHeight) {
                setTimeout(() => {
                    $(this).addClass('active');
                }, 200);
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
                console.log('active');
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
                $('#PCMAINimg').removeClass('stickeyTOP');
            }
        });
        $('#detailCont2').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の真ん中に来た時を判定
            if (scroll + (windowHeight / 2) > position && 
                scroll + (windowHeight / 2) < position + elementHeight) {
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
            if (scroll + (windowHeight / 2) > position && 
                scroll + (windowHeight / 2) < position + elementHeight) {
                if (!$('#PCMAINimg').hasClass('activeimg3')) {
                    $('#PCMAINimg').addClass('activeimg3');
                }
                if ($('#PCMAINimg').hasClass('activeimg2')) {
                    $('#PCMAINimg').removeClass('activeimg2');
                }
                if ($('#PCMAINimg').hasClass('activeimg4')) {
                    $('#PCMAINimg').removeClass('activeimg4');
                }
            }
        });
        $('#detailCont4').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の真ん中に来た時を判定
            if (scroll + (windowHeight / 2 ) > position && 
                scroll + (windowHeight / 2 ) < position + elementHeight) {
                // activeimg4クラスがない場合のみ追加
                if (!$('#PCMAINimg').hasClass('activeimg4')) {
                    $('#PCMAINimg').addClass('activeimg4');
                    $('#PCMAINimg').removeClass('stickeyBOTTOM');
                }
            }
        });

        $('#PDH').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の真ん中に来た時を判定
            if (scroll + (windowHeight / 2) > position && 
                scroll + (windowHeight / 2) < position + elementHeight) {
                $('#PCMAINimg').removeClass('activeimg2');
                $('#PCMAINimg').removeClass('activeimg3');
                $('#PCMAINimg').removeClass('activeimg4');
                $('#PCMAINimg').addClass('stickeyTOP');
            }
        });
        $('#ClosePCMAINOUtimg').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の真ん中から上200pxの位置に来た時を判定
            if (scroll + (windowHeight / 2 - 200) > position && 
                scroll + (windowHeight / 2 - 200) < position + elementHeight) {
                $('#PCMAINimg').removeClass('activeimg2');
                $('#PCMAINimg').removeClass('activeimg3');
                $('#PCMAINimg').removeClass('activeimg4');
                $('#PCMAINimg').addClass('stickeyTOP');
            }
        });
        $('#ClosePCMAINimg').each(function() {
            var position = $(this).offset().top + $(this).height();
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の下部に来た時を判定
            if (scroll + windowHeight > position && 
                scroll + windowHeight < position + elementHeight) {
                if ($('#PCMAINimg').hasClass('activeimg3')) {
                    $('#PCMAINimg').removeClass('activeimg3');
                }
                if (!$('#PCMAINimg').hasClass('stickeyBOTTOM')) {
                    $('#PCMAINimg').addClass('stickeyBOTTOM');
                }
            }
        });
        $('#PDF').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の下部に来た時を判定
            if (scroll + windowHeight > position && 
                scroll + windowHeight < position + elementHeight) {
                if (!$('#PCMAINimg').hasClass('stickeyBOTTOM')) {
                    $('#PCMAINimg').addClass('stickeyBOTTOM');
                }
            }
        });

        $('#adjustANIM').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面の真ん中に来た時を判定
            if (scroll + (windowHeight / 2) > position && 
                scroll + (windowHeight / 2) < position + elementHeight) {
                $('#PCMAINimg').removeClass('stickeyBOTTOM');
            }
        });

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

$(window).on('scroll', function() {
    $('.hero-text').each(function() {
        var position = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        var elementHeight = $(this).height();

        // 要素の下部が画面中央より100px下に来た時を判定
        if (scroll + (windowHeight / 2 + 200) > position + elementHeight) {
            $('.hero-textbox').addClass('scroll-active');
        } else {
            $('.hero-textbox').removeClass('scroll-active');
        }
    });
});


